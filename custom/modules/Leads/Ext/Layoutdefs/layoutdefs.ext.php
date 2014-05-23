<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2014-05-21 12:43:23
$layout_defs["Leads"]["subpanel_setup"]['leads_leads_1'] = array (
  'order' => 100,
  'module' => 'Leads',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_LEADS_LEADS_1_FROM_LEADS_R_TITLE',
  'get_subpanel_data' => 'leads_leads_1',
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



 

 // created: 2014-05-21 21:57:13
$layout_defs["Leads"]["subpanel_setup"]['leads_documents_1'] = array (
  'order' => 100,
  'module' => 'Documents',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_LEADS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
  'get_subpanel_data' => 'leads_documents_1',
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


//auto-generated file DO NOT EDIT
$layout_defs['Leads']['subpanel_setup']['leads_leads_1']['override_subpanel_name'] = 'Lead_subpanel_leads_leads_1';


// hiden subpanel
unset($layout_defs['Leads']['subpanel_setup']['campaigns']);
// order subpanel
$layout_defs['Leads']['subpanel_setup']['activities']['order'] = 10;
$layout_defs['Leads']['subpanel_setup']['leads_documents_1']['order'] = 20;
$layout_defs['Leads']['subpanel_setup']['leads_leads_1']['order'] = 30;
$layout_defs['Leads']['subpanel_setup']['history']['order'] = 40;

?>