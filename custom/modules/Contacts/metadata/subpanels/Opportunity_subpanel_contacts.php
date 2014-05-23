<?php
// created: 2014-05-10 12:25:07
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_LIST_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'module' => 'Contacts',
    'width' => '23%',
    'default' => true,
  ),
  'email1' => 
  array (
    'name' => 'email1',
    'vname' => 'LBL_LIST_EMAIL',
    'widget_class' => 'SubPanelEmailLink',
    'width' => '30%',
    'sortable' => false,
    'default' => true,
  ),
  'phone_mobile' => 
  array (
    'type' => 'phone',
    'vname' => 'LBL_MOBILE_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'phone_home' => 
  array (
    'type' => 'phone',
    'vname' => 'LBL_HOME_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'phone_work' => 
  array (
    'name' => 'phone_work',
    'vname' => 'LBL_LIST_PHONE',
    'width' => '15%',
    'default' => true,
  ),
  'phone_other' => 
  array (
    'type' => 'phone',
    'vname' => 'LBL_OTHER_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'id_number_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ID_NUMBER',
    'width' => '10%',
  ),
  'do_not_call' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_DO_NOT_CALL',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    //'role_id' => 'opportunity_role_id',
    'module' => 'Contacts',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Contacts',
    'width' => '5%',
    'default' => true,
  ),
  'first_name' => 
  array (
    'name' => 'first_name',
    'usage' => 'query_only',
  ),
  'last_name' => 
  array (
    'name' => 'last_name',
    'usage' => 'query_only',
  ),
  'salutation' => 
  array (
    'name' => 'salutation',
    'usage' => 'query_only',
  ),
  'account_id' => 
  array (
    'usage' => 'query_only',
  ),
  'opportunity_role_fields' => 
  array (
    'usage' => 'query_only',
  ),
  'opportunity_role_id' => 
  array (
    'usage' => 'query_only',
  ),
);