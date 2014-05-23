<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2014-04-28 17:29:09
$layout_defs["Quotes"]["subpanel_setup"]['contacts_quotes_1'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_QUOTES_1_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'contacts_quotes_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
     'mode' => 'MultiSelect',
    ),
  ),
);


// hiden subpanel
unset($layout_defs['Quotes']['subpanel_setup']['activities']);
unset($layout_defs['Quotes']['subpanel_setup']['history']);
unset($layout_defs['Quotes']['subpanel_setup']['documents']);
// order subpanel
$layout_defs['Quotes']['subpanel_setup']['contacts_quotes_1']['order'] = 10;
$layout_defs['Quotes']['subpanel_setup']['contracts']['order'] = 20;

//auto-generated file DO NOT EDIT
$layout_defs['Quotes']['subpanel_setup']['contacts_quotes_1']['override_subpanel_name'] = 'Quote_subpanel_contacts_quotes_1';

?>