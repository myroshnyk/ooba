<?php
require_once 'modules/Contacts/controller.php';
require_once 'custom/include/rls/WSSoapClient.php';
class CustomContactsController extends ContactsController{
	
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
            $soapFunctionParameters = array("ContactId"=>$this->bean->id,"SubmittingUser"=>array("ResourceId"=>$this->bean->enterprise_id,"Username"=>$this->bean->assigned_user_name)) ;
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
             //$this->view_object_map['msg'] = "Credit Check Successful.\n";
             $queryParams = array(
                'module' => 'Contacts',
                'action' => 'DetailView',
                'record' => $this->bean->id,
                'msg' => 'Credit Check Successful.',
            );
 
            SugarApplication::redirect('index.php?' . http_build_query($queryParams));              
	     //$this->view = 'detail';
        }
        
}
?>