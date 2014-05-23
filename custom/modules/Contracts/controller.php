<?php
require_once 'custom/include/rls/WSSoapClient.php';
class CustomContractsController extends SugarController{
	function CustomContractsController(){
		parent::SugarController();
	}
	
	function action_PrequalificationConvertToBondService(){
            $soapURL = $GLOBALS['sugar_config']['soap_settings']['prequalification_convert_to_bond_service'];
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
             $this->view = 'detail';
             $this->view_object_map['request'] = "REQUEST:\n".$soapClient->__getLastRequest(). "\n";
             $this->view_object_map['result'] = "RESULT:\n" . $indicator . "\n";            
	}
}
?>