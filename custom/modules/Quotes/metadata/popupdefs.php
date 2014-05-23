<?php
$popupMeta = array (
    'moduleMain' => 'Quote',
    'varName' => 'QUOTE',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'quotes.name',
  'account_name' => 'accounts.name',
  'date_quote_expected_closed' => 'quotes.date_quote_expected_closed',
),
    'searchInputs' => array (
  0 => 'name',
  1 => 'account_name',
),
    'searchdefs' => array (
  0 => 'quote_num',
  1 => 'name',
  2 => 
  array (
    'name' => 'billing_account_name',
    'displayParams' => 
    array (
      'hideButtons' => 'true',
      'size' => 30,
      'class' => 'sqsEnabled sqsNoAutofill',
    ),
  ),
  3 => 'quote_stage',
  4 => 'purchase_order_num',
  5 => 
  array (
    'name' => 'assigned_user_id',
    'type' => 'enum',
    'label' => 'LBL_ASSIGNED_TO',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
  ),
),
    'listviewdefs' => array (
  'QUOTE_NUM' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_QUOTE_NUM',
    'link' => false,
    'default' => true,
    'name' => 'quote_num',
  ),
  'NAME' => 
  array (
    'width' => '25%',
    'label' => 'LBL_LIST_QUOTE_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'QUOTE_STAGE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_QUOTE_STAGE',
    'link' => false,
    'default' => true,
    'name' => 'quote_stage',
  ),
  'SHOW_LINE_NUMS' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_SHOW_LINE_NUMS',
    'width' => '10%',
    'name' => 'show_line_nums',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'link' => false,
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
