<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

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


require_once('modules/Accounts/views/view.detail.php');

class CustomAccountsViewDetail extends AccountsViewDetail {


  function display(){
  
      $address = $this->bean->building_complex_name_c . '</br>Unit ' .
        $this->bean->unit_number_c . ', Floor ' . 
        $this->bean->floor_c . '</br>' . 
        $this->bean->street_number_c . ' ' .
        $this->bean->street_name_c . '</br>' .
        $this->bean->billing_address_city . ' ' . 
        $this->bean->billing_address_state . ' ' .
        $this->bean->billing_address_postalcode . '</br>' .
        $this->bean->billing_address_country;
   
      $this->ss->assign('BILLING_ADDRESS', $address);
      
      parent::display();  
  } 
  
}
?>