<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2014-04-28 17:29:09
$layout_defs["Contacts"]["subpanel_setup"]['contacts_quotes_1'] = array (
  'order' => 100,
  'module' => 'Quotes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_QUOTES_1_FROM_QUOTES_TITLE',
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
unset($layout_defs['Contacts']['subpanel_setup']['quotes']);
unset($layout_defs['Contacts']['subpanel_setup']['products']);
unset($layout_defs['Contacts']['subpanel_setup']['campaigns']);
unset($layout_defs['Contacts']['subpanel_setup']['contracts']);
unset($layout_defs['Contacts']['subpanel_setup']['contacts']);

// order subpanel
$layout_defs['Contacts']['subpanel_setup']['documents']['order'] = 10;
$layout_defs['Contacts']['subpanel_setup']['opportunities']['order'] = 20;
$layout_defs['Contacts']['subpanel_setup']['contacts_quotes_1']['order'] = 30;
$layout_defs['Contacts']['subpanel_setup']['leads']['order'] = 40;
$layout_defs['Contacts']['subpanel_setup']['activities']['order'] = 50;
$layout_defs['Contacts']['subpanel_setup']['history']['order'] = 60;

//auto-generated file DO NOT EDIT
$layout_defs['Contacts']['subpanel_setup']['contacts_quotes_1']['override_subpanel_name'] = 'Contact_subpanel_contacts_quotes_1';


//auto-generated file DO NOT EDIT
$layout_defs['Contacts']['subpanel_setup']['documents']['override_subpanel_name'] = 'Contact_subpanel_documents';

?>