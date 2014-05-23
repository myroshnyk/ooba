<?php
$listViewDefs ['Quotes'] = 
array (
  'NAME' => 
  array (
    'width' => '25%',
    'label' => 'LBL_LIST_QUOTE_NAME',
    'link' => true,
    'default' => true,
  ),
  'STATUS_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'DESIRED_AMOUNT_C' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_DESIRED_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'SALES_TERRITORY_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SALES_TERRITORY',
    'width' => '10%',
  ),
  'TOTAL_USDOLLAR' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
    'link' => false,
    'default' => false,
    'currency_format' => true,
    'align' => 'right',
  ),
  'BILLING_ACCOUNT_NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'id' => 'ACCOUNT_ID',
    'module' => 'Accounts',
    'link' => true,
    'default' => false,
  ),
  'QUOTE_NUM' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_QUOTE_NUM',
    'link' => false,
    'default' => false,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_TEAM',
    'link' => false,
    'default' => false,
    'related_fields' => 
    array (
      0 => 'team_id',
    ),
  ),
  'DATE_QUOTE_EXPECTED_CLOSED' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED',
    'link' => false,
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
  ),
  'QUOTE_STAGE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_QUOTE_STAGE',
    'link' => false,
    'default' => false,
  ),
);
?>
