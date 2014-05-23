<?php
require_once 'custom/include/rls/WSSoapClient.php';
class CustomOpportunitiesController extends SugarController{
	function CustomOpportunitiesController(){
		parent::SugarController();
	}
	
	function action_CreditCheck(){
            $soapURL = $GLOBALS['sugar_config']['soap_settings']['credit_check_service'];
            $soapLogin = $GLOBALS['sugar_config']['soap_settings']['soap_login'];
            $soapPasword = $GLOBALS['sugar_config']['soap_settings']['soap_pasword'];

            $soapParameters=array('soap_version'=> SOAP_1_1,
                                  'style'=> SOAP_DOCUMENT,
                                  'use'=> SOAP_LITERAL,
                                  'exceptions'=> 1,
                                  'trace'=> 1);
            $soapFunction = "execute" ;
            $sql = "SELECT contact_id FROM opportunities_contacts WHERE deleted = 0 AND opportunity_id='".$this->bean->id."'";
            $result = $GLOBALS['db']->query($sql);

            while($row = $GLOBALS['db']->fetchByAssoc($result) )
            {
                $contact_id = $row['contact_id'];
                $soapFunctionParameters = array("ContactId"=>$contact_id,"SubmittingUser"=>array("ResourceId"=>$this->bean->enterprise_id,"Username"=>$this->bean->assigned_user_name)) ;
                try {
                    $soapClient = new WSSoapClient($soapURL,$soapParameters);
                    $soapClient->__setUsernameToken($soapLogin, $soapPasword, 'PasswordText');
                    $soapResult=$soapClient->__soapCall($soapFunction,array("parameters"=>$soapFunctionParameters));
                }
                catch (Exception $ex) {
                    $GLOBALS['log']->test("SOAP_EX: " .$ex->getMessage() . "\n");                            
                }
                 $indicator='';
                 if($soapResult->Result->SuccessIndicator){$indicator='true';}
                 else{$indicator='false';}
                 $GLOBALS['log']->test("SOAP_REQUEST: " .$soapClient->__getLastRequest() . "\n");
                 $GLOBALS['log']->test("SOAP_RESULT: " .$indicator . "\n");
                 //$this->view = 'detail';
                 $this->view_object_map['request'] = "REQUEST:\n".$soapClient->__getLastRequest(). "\n";
                 $this->view_object_map['result'] = "RESULT:\n" . $indicator . "\n";
                 $queryParams = array(
                'module' => 'Opportunities',
                'action' => 'DetailView',
                'record' => $this->bean->id,
                'msg' => 'Credit Check Successful.',
            );
 
            SugarApplication::redirect('index.php?' . http_build_query($queryParams));  
	    }
        }
        //
        function action_RenewPrequalificationCertificate(){
            $focus = new Opportunity();
            $focus->product_c=$this->bean->product_c;
            $focus->lead_source=$this->bean->lead_source;           
            $focus->rls01_realestateagents_id_c=$this->bean->rls01_realestateagents_id_c;
            $focus->rls01_webentities_id_c=$this->bean->rls01_webentities_id_c;
            $focus->contact_id_c=$this->bean->contact_id_c;
            $focus->rls01_resources_id4_c=$this->bean->rls01_resources_id4_c;
            $focus->rls01_realestateagencies_id_c=$this->bean->rls01_realestateagencies_id_c;
            $focus->rls01_realestatebranches_id_c=$this->bean->rls01_realestatebranches_id_c;
            $focus->rls01_resources_id3_c=$this->bean->rls01_resources_id3_c;
            $focus->rls01_resources_id2_c=$this->bean->rls01_resources_id2_c;
            $focus->rls01_resources_id33_c=$this->bean->rls01_resources_id33_c;
            $focus->territory_c=$this->bean->territory_c;
            $focus->contact_id1_c=$this->bean->contact_id1_c;
            $focus->desired_amount_c=$this->bean->desired_amount_c;
            $focus->opportunity_type='REISSUE';
            //renew_number_c
            //$sql = "SELECT MAX(CONVERT(renew_number_c,SIGNED)) FROM  opportunities_cstm WHERE  id_c='".$this->bean->id."'";
            $sql = "SELECT MAX(CONVERT(opportunities_cstm.renew_number_c,SIGNED)) FROM  opportunities_cstm  LEFT join opportunities on opportunities.id=opportunities_cstm.id_c WHERE opportunities.deleted = 0 AND opportunities.name=".$this->bean->name;
            $renew_number = (int)$GLOBALS['db']->getOne($sql);
            
            if(!empty($renew_number)){ $renew_number++; }
            else{$renew_number=1;}
            $focus->renew_number_c=$renew_number;
            $focus->ref_number_c=$this->bean->ref_number_c.'-R'.$renew_number;
            $focus->save(); 
            //
            $this->setRelationContactsOpportunity($focus->id);
            //
            $this->setRelationOpportunityOpportunity($focus->id);
            
            $queryParams = array(
            'module' => 'Opportunities',
            'action' => 'DetailView',
            'record' => $focus->id,
            );
            SugarApplication::redirect('index.php?' . http_build_query($queryParams));
        }
        
        ///
        function setRelationContactsOpportunity($opportunity_id) {
            $sql = "SELECT contact_id FROM opportunities_contacts WHERE deleted=0 AND opportunity_id='".$this->bean->id."'";
            $result = $GLOBALS['db']->query($sql);
            $sql_insert = "INSERT INTO opportunities_contacts (id,contact_id,opportunity_id,date_modified,deleted) VALUES";
            while($row = $GLOBALS['db']->fetchByAssoc($result) )
            { 
               $sql_insert=$sql_insert. "(UUID(),'".$row['contact_id']."','".$opportunity_id."',CURDATE(),'0'),";
            }
            $sql_insert=substr($sql_insert,0,-1);
            $result_insert = $GLOBALS['db']->query($sql_insert);             
        }
         ///
        function setRelationOpportunityOpportunity($opportunity_id) {
            $sql_insert = "INSERT INTO opportunities_opportunities_1_c (id,opportunities_opportunities_1opportunities_idb,opportunities_opportunities_1opportunities_ida,date_modified,deleted) VALUES";
            $sql_insert=$sql_insert. "(UUID(),'".$this->bean->id."','".$opportunity_id."',CURDATE(),'0')";
            $result_insert = $GLOBALS['db']->query($sql_insert);
            $sql_insert = "INSERT INTO opportunities_opportunities_1_c (id,opportunities_opportunities_1opportunities_ida,opportunities_opportunities_1opportunities_idb,date_modified,deleted) VALUES";
            $sql_insert=$sql_insert. "(UUID(),'".$this->bean->id."','".$opportunity_id."',CURDATE(),'0')";
            $result_insert = $GLOBALS['db']->query($sql_insert); 
        }
}
?>