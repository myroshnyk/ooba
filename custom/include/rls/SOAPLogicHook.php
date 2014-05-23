<?php
require_once 'custom/include/rls/WSSoapClient.php';
class SOAPLogicHook extends SugarBean
{
  function SugarCRMEventService(SugarBean $bean, $event, $arguments)
  {
    $soapURL = $GLOBALS['sugar_config']['soap_settings']['sugar_srm_event_service'];
    $soapLogin = $GLOBALS['sugar_config']['soap_settings']['soap_login'];
    $soapPasword = $GLOBALS['sugar_config']['soap_settings']['soap_pasword'];

    $soapParameters=array('soap_version'=> SOAP_1_1,
                          'style'=> SOAP_DOCUMENT,
                          'use'=> SOAP_LITERAL,
                          'exceptions'=> 1,
                          'trace'=> 1);
    $soapFunction = "execute" ;
    $soapFunctionParameters = array("Id"=>$bean->id,"ModuleName"=>$bean->module_name) ;
    try {
        $soapClient = new WSSoapClient($soapURL,$soapParameters);
        $soapClient->__setUsernameToken($soapLogin, $soapPasword, 'PasswordText');
        $soapResult=$soapClient->__soapCall($soapFunction,array("parameters"=>$soapFunctionParameters));
        $GLOBALS['log']->test("SOAP_REQUEST: " .$soapClient->__getLastRequest() . "\n");
        $indicator='';
        if($soapResult->Result->SuccessIndicator){$indicator='true';}
        else{$indicator='false';}
        $GLOBALS['log']->test("SOAP_RESULT: " .$indicator . "\n");
        //$soapRequest=$soapClient->__getLastRequest();
        //$soapResponse=$soapResult->Result->SuccessIndicator;
        //echo "REQUEST:\n" . htmlentities($soapClient->__getLastRequest()) . "\n";
        //echo "RESULT:\n" . $soapResult->Result->SuccessIndicator . "\n";
    }
    catch (Exception $ex) {
        //echo $ex->getMessage();
        $GLOBALS['log']->test("SOAP_EX: " .$ex->getMessage() . "\n");
        //echo "REQUEST:\n" . htmlentities($soapClient->__getLastRequest()) . "\n";
        //$soapRequest=$soapClient->__getLastRequest();
    }
     
  }
  
}