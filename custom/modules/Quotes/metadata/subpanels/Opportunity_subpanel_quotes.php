<?php
// created: 2014-05-08 21:12:51


$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_QUOTE_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '40%',
    'default' => true,
  ),
  'interest_rate_c' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'vname' => 'LBL_INTEREST_RATE_C',
    'width' => '10%',
  ),
  'loan_term_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_LOAN_TERM_C',
    'width' => '10%',
  ),
  'total_gross_income_c' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_TOTAL_GROSS_INCOME_C',
    'currency_format' => true,
    'width' => '10%',
  ),
  'total_nett_disposable_inco_c' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_TOTAL_NETT_DISPOSABLE_INCO_C',
    'currency_format' => true,
    'width' => '10%',
  ),
  'date_quote_expected_closed' => 
  array (
    'name' => 'date_quote_expected_closed',
    'vname' => 'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Quotes',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Leads',
    'width' => '4%',
    'default' => true,
  ),
  'currency_id' => 
  array (
    'usage' => 'query_only',
  ),
);