<?php
$module_name = 'rls01_Suburbs';
$listViewDefs [$module_name] = 
array (
  'ENTERPRISE_ID' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ENTERPRISE_ID',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CITY_TOWN' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CITY_TOWN',
    'width' => '10%',
    'default' => true,
  ),
  'STREET_POSTAL_CODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_STREET_POSTAL_CODE',
    'width' => '10%',
    'default' => true,
  ),
  'POST_POSTAL_CODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_POST_POSTAL_CODE',
    'width' => '10%',
    'default' => true,
  ),
  'PROVINCE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROVINCE',
    'width' => '10%',
    'default' => true,
  ),
  'COUNTRY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_COUNTRY',
    'width' => '10%',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
  'SUBURB_NO' => 
  array (
    'type' => 'int',
    'label' => 'LBL_SUBURB_NO',
    'width' => '10%',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
?>
