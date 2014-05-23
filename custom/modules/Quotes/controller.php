<?php
require_once 'include/TimeDate.php';
require_once 'custom/include/rls/WSSoapClient.php';
class CustomQuotesController extends SugarController{
	function CustomQuotesController(){
		parent::SugarController();
	}
	
	function action_PrequalificationCertificateService(){
            $soapURL = $GLOBALS['sugar_config']['soap_settings']['prequalification_certificate_service'];
            $soapLogin = $GLOBALS['sugar_config']['soap_settings']['soap_login'];
            $soapPasword = $GLOBALS['sugar_config']['soap_settings']['soap_pasword'];
            
            $soapParameters=array('soap_version'=> SOAP_1_1,
                                  'style'=> SOAP_DOCUMENT,
                                  'use'=> SOAP_LITERAL,
                                  'exceptions'=> 1,
                                  'trace'=> 1);
            $soapFunction = "execute" ;
            $soapFunctionParameters = array("Id"=>$this->record,"ModuleName"=>$this->module) ;
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
            
             $this->view_object_map['request'] = "REQUEST:\n".$soapClient->__getLastRequest(). "\n";
             $this->view_object_map['result'] = "RESULT:\n" . $indicator . "\n";            
             if($indicator=='false'){
                 //$this->view = 'detail';
                  //$this->view_object_map['msg'] = "The quote could not be converted to an Installed Product.\n Please try again. If the problem persist, please contact your System Administrator.\n";
                 $queryParams = array(
                'module' => 'Quotes',
                'action' => 'DetailView',
                'record' => $this->bean->id,
                'msg' => 'The quote could not be converted to an Installed Product.\n Please try again. If the problem persist, please contact your System Administrator.',
            ); 
            SugarApplication::redirect('index.php?' . http_build_query($queryParams));  
             }
             else {
                  //
                  $focus = new Opportunity();
                  $focus->retrieve($this->bean->opportunity_id);
                  if($focus->status_c!='WON')
                  {
                      //
                      $this->setStatusQuote();
                      //
                      $contractID=$this->createContract();
                      //
                      $this->setRelationQuoteContract($contractID);
                      //
                      $this->setRelationOpportunityContract($contractID);
                       //
                      $this->setRelationContactsContract($contractID);
                       //
                      $this->setRelationDocumentsContract($contractID);
                      //
                      $this->setTargetList();
                      
                      $focus->status_c='WON';
                      $focus->save(); 
                  }
                  SugarApplication::redirect("index.php?module=Opportunities&action=DetailView&record=".$this->bean->opportunity_id);  
             }
             
	           
	}
        
        function action_PrequalificationQuoteService(){
            $soapURL = $GLOBALS['sugar_config']['soap_settings']['prequalification_quote_service'];
            $soapLogin = $GLOBALS['sugar_config']['soap_settings']['soap_login'];
            $soapPasword = $GLOBALS['sugar_config']['soap_settings']['soap_pasword'];
            
            $soapParameters=array('soap_version'=> SOAP_1_1,
                                  'style'=> SOAP_DOCUMENT,
                                  'use'=> SOAP_LITERAL,
                                  'exceptions'=> 1,
                                  'trace'=> 1);
            $soapFunction = "execute" ;
            $soapFunctionParameters = array("Id"=>$this->record,"ModuleName"=>$this->module) ;
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
	     //SugarApplication::redirect("index.php?module=Opportunities&action=DetailView&record=".$this->bean->opportunity_id);
             SugarApplication::redirect("index.php?module=Quotes&action=DetailView&record=".$this->bean->id); 
	}
        ///
        function setStatusQuote() {
            $this->bean->status_c='Closed Accepted';            
            $this->bean->save();
            $sql = "SELECT quote_id FROM quotes_opportunities WHERE deleted=0 AND opportunity_id='".$this->bean->opportunity_id."'";
            $result = $GLOBALS['db']->query($sql);
            while($row = $GLOBALS['db']->fetchByAssoc($result) )
            { 
                if($row['quote_id']!=$this->bean->id)
                {
                    $focus = new Quote();
                    $focus->retrieve($row['quote_id']);
                    $focus->status_c='Closed Dead';                   
                    $focus->save(); 
                }
                
            }            
        }
        ///
        function createContract() {
            $focus = new Contract();
            $focus->status='ACTIVE';
            $focus->name=$this->bean->name;
            //$focus->start_date=TimeDate::getNow();
            $focus->save();
            return $focus->id;
        }
         ///
        function setRelationQuoteContract($contract_id) {
            $sql_delete = "DELETE FROM contracts_quotes WHERE deleted=0 AND quote_id='".$this->bean->id."' AND contract_id='".$contract_id."'";
            $result_delete = $GLOBALS['db']->query($sql_delete);

            $sql_insert = "INSERT INTO contracts_quotes (id,quote_id,contract_id,date_modified,deleted) VALUES";
            $sql_insert=$sql_insert. "(UUID(),'".$this->bean->id."','".$contract_id."',CURDATE(),'0')";
            $result_insert = $GLOBALS['db']->query($sql_insert);                
        }            
        ///
        function setRelationOpportunityContract($contract_id) {
            $sql_delete = "DELETE FROM contracts_opportunities WHERE deleted=0 AND opportunity_id='".$this->bean->opportunity_id."' AND contract_id='".$contract_id."'";
            $result_delete = $GLOBALS['db']->query($sql_delete);

            $sql_insert = "INSERT INTO contracts_opportunities (id,opportunity_id,contract_id,date_modified,deleted) VALUES";
            $sql_insert=$sql_insert. "(UUID(),'".$this->bean->opportunity_id."','".$contract_id."',CURDATE(),'0')";
            $result_insert = $GLOBALS['db']->query($sql_insert);                
        }
        ///
        function setRelationContactsContract($contract_id) {
            $sql_delete = "DELETE FROM contracts_contacts WHERE WHERE deleted=0 AND opportunity_id='".$this->bean->opportunity_id."' AND contract_id='".$contract_id."'";
            $result_delete = $GLOBALS['db']->query($sql_delete);
            $sql = "SELECT contacts_quotes_1contacts_ida FROM contacts_quotes_1_c WHERE deleted=0 AND contacts_quotes_1quotes_idb='".$this->bean->id."'";
            $result = $GLOBALS['db']->query($sql);
            $sql_insert = "INSERT INTO contracts_contacts (id,contact_id,contract_id,date_modified,deleted) VALUES";
            while($row = $GLOBALS['db']->fetchByAssoc($result) )
            { 
               $sql_insert=$sql_insert. "(UUID(),'".$row['contacts_quotes_1contacts_ida']."','".$contract_id."',CURDATE(),'0'),";
            }
            $sql_insert=substr($sql_insert,0,-1);
            $result_insert = $GLOBALS['db']->query($sql_insert);             
        }
        ///
        function setRelationDocumentsContract($contract_id) {
            $sql_delete = "DELETE FROM contracts_documents_1_c WHERE WHERE deleted=0 AND contracts_documents_1contracts_ida='".$contract_id."'";
            $result_delete = $GLOBALS['db']->query($sql_delete);
            $sql_o = "SELECT document_id FROM documents_opportunities WHERE deleted=0 AND opportunity_id='".$this->bean->opportunity_id."'";
            $result_o = $GLOBALS['db']->query($sql_o);
            $sql_insert = "INSERT INTO contracts_documents_1_c (id,contracts_documents_1documents_idb,contracts_documents_1contracts_ida,date_modified,deleted) VALUES";
            while($row = $GLOBALS['db']->fetchByAssoc($result_o) )
            { 
               $sql_insert=$sql_insert. "(UUID(),'".$row['document_id']."','".$contract_id."',CURDATE(),'0'),";
            }
            
            $sql_q = "SELECT document_id FROM documents_quotes WHERE deleted=0 AND quote_id='".$this->bean->id."'";
            $result_q = $GLOBALS['db']->query($sql_q);
            while($row = $GLOBALS['db']->fetchByAssoc($result_q) )
            { 
               $sql_insert=$sql_insert. "(UUID(),'".$row['document_id']."','".$contract_id."',CURDATE(),'0'),";
            }
            $sql_insert=substr($sql_insert,0,-1);
            $result_insert = $GLOBALS['db']->query($sql_insert);             
        }
        ///
        function setTargetList() {
            $focus = new Opportunity();
            $focus->retrieve($this->bean->opportunity_id);
            $communication_prospectprimar_id= $focus->contact_id1_c;
            $sql = "SELECT id FROM  prospect_lists WHERE deleted = 0 AND name='Prequalification - Communication Process Subscript'";
            $id_prospect_lists = $GLOBALS['db']->getOne($sql);
            if(empty($communication_prospectprimar_id) || empty($id_prospect_lists)){return;}
            $sql_insert = "INSERT INTO prospect_lists_prospects (id,prospect_list_id,related_id,related_type,date_modified,deleted) VALUES";
            $sql_insert=$sql_insert. "(UUID(),'".$id_prospect_lists."','".$communication_prospectprimar_id."','Contacts',CURDATE(),'0')";
            $result_insert = $GLOBALS['db']->query($sql_insert);
                
        }
	
}
?>
