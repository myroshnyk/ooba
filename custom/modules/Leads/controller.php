<?php
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/
require_once 'modules/Leads/controller.php';
require_once 'custom/include/rls/WSSoapClient.php';
class CustomLeadsController extends LeadsController{
    //
    function action_ProductSearchService(){
    $soapURL = $GLOBALS['sugar_config']['soap_settings']['product_search_service'];
    $soapLogin = $GLOBALS['sugar_config']['soap_settings']['soap_login'];
    $soapPasword = $GLOBALS['sugar_config']['soap_settings']['soap_pasword'];

    $soapParameters=array('soap_version'=> SOAP_1_1,
                          'style'=> SOAP_DOCUMENT,
                          'use'=> SOAP_LITERAL,
                          'exceptions'=> 1,
                          'trace'=> 1);
    $soapFunction = "process" ;
    $soapFunctionParameters = array("Id"=>$this->record,"ModuleName"=>$this->module) ;
    try {
        $soapClient = new WSSoapClient($soapURL, $soapParameters);
        $soapClient->__setUsernameToken($soapLogin, $soapPasword, 'PasswordText');
        $soapResult=$soapClient->__soapCall($soapFunction,array("parameters"=>$soapFunctionParameters));    
    }
    catch (Exception $ex) {
        $GLOBALS['log']->test("SOAP_EX: " .$ex->getMessage() . "\n");
    }
    $GLOBALS['log']->test("SOAP_REQUEST: " .$soapClient->__getLastRequest() . "\n");
    $GLOBALS['log']->test("SOAP_RESULT: " .$soapResult->StatusCode . "\n");
    //$this->view = 'detail';
    $this->view_object_map['request'] = "REQUEST:\n".$soapClient->__getLastRequest(). "\n";
    $this->view_object_map['result'] = "RESULT:\n" . $soapResult->StatusCode . "\n";
    $this->view_object_map['msg'] = "Duplicate check performed. No Duplicates Found.\n";

    }
    // Lead is ticked
    function action_LeadTicked(){
        $this->bean->status='LOST';
        $this->bean->lost_reason_c="DUP_LEAD";
        $this->bean->lead_id_c=$_REQUEST['idRecord'];
        $this->bean->is_duplicate_c=1;
        $this->bean->save();
        //
        $sql = "UPDATE calls LEFT JOIN calls_leads ON calls.id=calls_leads.call_id SET calls.status='Cancelled' WHERE calls.deleted = 0 AND calls_leads.lead_id='".$this->bean->id."'";
        $result = $GLOBALS['db']->query($sql);

        $queryParams = array(
                'module' => 'Leads',
                'action' => 'DetailView',
                'record' => $this->bean->id,
                //'msg' => 'Credit Check Successful.',
            );
 
        SugarApplication::redirect('index.php?' . http_build_query($queryParams));   

    }
    // no if Lead or Contact was ticked
    function action_NoDuplicate(){
     $this->bean->status='QUALIFY';
     $this->bean->is_duplicate_c=0;
     $this->bean->save();
     $subject = $this->bean->name.' : Initial Lead Call';
     $direction='Outbound';
     $status = 'Planned';
     $duration = '15';
     SugarApplication::redirect("index.php?module=Calls&action=EditView&parent_type='Leads'&parent_name='".$this->bean->name."'&parent_id='".$this->bean->id."'&subject='".$subject."'&status='".$status."'&duration='".$duration."'&direction='".$direction."'"); 
    }
    // Contact line with no Opportunity is ticked
    function action_ContactWithOutOpportunityTicked(){
     $this->bean->status='QUALIFY';
     $this->bean->is_duplicate_c=0;
     $this->bean->contact_id1_c=$_REQUEST['idRecord'];
     $this->bean->save();
     $queryParams = array(
                'module' => 'Leads',
                'action' => 'DetailView',
                'record' => $this->bean->id,               
            );
 
     SugarApplication::redirect('index.php?' . http_build_query($queryParams));   
    }
    //Contact line with an Opportunity is ticked
    function action_ContactWithOpportunityTicked(){
     $focus = new Opportunity();
     $focus->retrieve($_REQUEST['idOpportunity']);
     //Contact line with an Opportunity (product on Lead = Product on Opportunity)
     if($this->bean->product_c==$focus->product_c){
        $this->bean->status='LOST';
        $this->bean->lost_reason_c="DUP_LEAD";
        $this->bean->lead_id_c=$focus->lead_id_c;
        $this->bean->contact_id1_c=$_REQUEST['idRecord'];
        $this->bean->is_duplicate_c=1;
        $this->bean->save();
        //
        $sql = "UPDATE calls LEFT JOIN calls_leads ON calls.id=calls_leads.call_id SET calls.status='Cancelled' WHERE calls.deleted = 0 AND calls_leads.lead_id='".$this->bean->id."'";
        $result = $GLOBALS['db']->query($sql);
         
     }
     //Contact line with an Opportunity (product on Lead <> Product on Opportunity)
     else{
        $this->bean->status='LOST';
        $this->bean->lost_reason_c="TARGET_PRODUCT_EXISTS";
        $this->bean->lead_id_c=$_REQUEST['idRecord'];
        $this->bean->is_duplicate_c=1;
        $this->bean->save();
        //
        $sql = "UPDATE calls LEFT JOIN calls_leads ON calls.id=calls_leads.call_id SET calls.status='Cancelled' WHERE calls.deleted = 0 AND calls_leads.lead_id='".$this->bean->id."'";
        $result = $GLOBALS['db']->query($sql);
         
     }
     
     $queryParams = array(
                'module' => 'Leads',
                'action' => 'DetailView',
                'record' => $this->bean->id,               
            );
 
     SugarApplication::redirect('index.php?' . http_build_query($queryParams));   
    }
}
?>
