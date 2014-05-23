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


require_once('modules/Contacts/views/view.detail.php');

class CustomContactsViewDetail extends ContactsViewDetail {


  function display() {
  //echo '<h1>'.htmlentities($this->view_object_map['msg']).'</h1>';
  echo '<h1>'.htmlentities($_REQUEST['msg']).'</h1>';

    $address = $this->bean->building_complex_name_c . '</br>' .
      ($this->bean->unit_number_c ? 'Unit ' : '') .
      $this->bean->unit_number_c .
      (($this->bean->unit_number_c && $this->bean->floor_c) ? ', ' : '') .
      ($this->bean->floor_c ? 'Floor ' : '') .
      $this->bean->floor_c . '</br>' .
      $this->bean->street_number_c . ' ' .
      $this->bean->street_name_c . '</br>' .
      $this->bean->suburb_post_office_c . '</br>' .      
      $this->bean->primary_address_city . ' ' . 
      $this->bean->primary_address_state . ' ' .
      $this->bean->primary_address_postalcode . '</br>' .
      $this->bean->primary_address_country;
   
    $this->ss->assign('PRIMARY_ADDRESS', $address);
      
      
    $address = $this->bean->building_complex_name_2_c . '</br>' .
      ($this->bean->unit_number_2_c ? 'Unit ' : '') .
      $this->bean->unit_number_2_c .
      (($this->bean->unit_number_2_c && $this->bean->floor_2_c) ? ', ' : '') .
      ($this->bean->floor_2_c ? 'Floor ' : '') .
      $this->bean->floor_2_c . '</br>' .
      $this->bean->street_number_2_c . ' ' .
      $this->bean->street_name_2_c . '</br>' .
      $this->bean->suburb_post_office_2_c . '</br>' . 
      $this->bean->alt_address_city . ' ' . 
      $this->bean->alt_address_state . ' ' .
      $this->bean->alt_address_postalcode . '</br>' .
      $this->bean->alt_address_country;
   
    $this->ss->assign('ALTERNATE_ADDRESS', $address);
      
      
    parent::display();  
  }  
}
?>