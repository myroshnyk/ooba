<?php
$dashletData['QuotesDashlet']['searchFields'] = array (
  'quote_stage' => 
  array (
    'default' => '',
  ),
  'name' => 
  array (
    'default' => '',
  ),
  'date_quote_expected_closed' => 
  array (
    'default' => '',
  ),
  'team_id' => 
  array (
    'default' => '',
    'label' => 'LBL_TEAMS',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'label' => 'LBL_ASSIGNED_TO',
    'default' => 'Leo Tome',
  ),
);
$dashletData['QuotesDashlet']['columns'] = array (
  'quote_num' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_QUOTE_NUM',
    'link' => false,
    'default' => true,
    'name' => 'quote_num',
  ),
  'name' => 
  array (
    'width' => '25%',
    'label' => 'LBL_LIST_QUOTE_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'quote_stage' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_QUOTE_STAGE',
    'link' => false,
    'default' => true,
    'name' => 'quote_stage',
  ),
  'total' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TOTAL',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'date_quote_expected_closed' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED',
    'link' => false,
    'default' => true,
    'name' => 'date_quote_expected_closed',
  ),
  'quote_type' => 
  array (
    'width' => '15%',
    'label' => 'LBL_QUOTE_TYPE',
    'link' => false,
    'name' => 'quote_type',
    'default' => false,
  ),
  'billing_address_street' => 
  array (
    'width' => '20%',
    'label' => 'LBL_BILLING_ADDRESS_STREET',
    'link' => false,
    'name' => 'billing_address_street',
    'default' => false,
  ),
  'billing_address_city' => 
  array (
    'width' => '20%',
    'label' => 'LBL_BILLING_ADDRESS_CITY',
    'link' => false,
    'name' => 'billing_address_city',
    'default' => false,
  ),
  'billing_address_state' => 
  array (
    'width' => '20%',
    'label' => 'LBL_BILLING_ADDRESS_STATE',
    'link' => false,
    'name' => 'billing_address_state',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'billing_address_postalcode' => 
  array (
    'width' => '20%',
    'label' => 'LBL_BILLING_ADDRESS_POSTAL_CODE',
    'link' => false,
    'name' => 'billing_address_postalcode',
    'default' => false,
  ),
  'billing_address_country' => 
  array (
    'width' => '20%',
    'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
    'link' => false,
    'name' => 'billing_address_country',
    'default' => false,
  ),
  'shipping_address_street' => 
  array (
    'width' => '20%',
    'label' => 'LBL_SHIPPING_ADDRESS_STREET',
    'link' => false,
    'name' => 'shipping_address_street',
    'default' => false,
  ),
  'shipping_address_city' => 
  array (
    'width' => '20%',
    'label' => 'LBL_SHIPPING_ADDRESS_CITY',
    'link' => false,
    'name' => 'shipping_address_city',
    'default' => false,
  ),
  'shipping_address_state' => 
  array (
    'width' => '20%',
    'label' => 'LBL_SHIPPING_ADDRESS_STATE',
    'link' => false,
    'name' => 'shipping_address_state',
    'default' => false,
  ),
  'shipping_address_postalcode' => 
  array (
    'width' => '20%',
    'label' => 'LBL_SHIPPING_ADDRESS_POSTAL_CODE',
    'link' => false,
    'name' => 'shipping_address_postalcode',
    'default' => false,
  ),
  'shipping_address_country' => 
  array (
    'width' => '20%',
    'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
    'link' => false,
    'name' => 'shipping_address_country',
    'default' => false,
  ),
);
