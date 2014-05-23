<?php 
 //WARNING: The contents of this file are auto-generated


//$layout_defs['Opportunities']['subpanel_setup']['quotes']['top_buttons'][] = array('widget_class' => 'SubPanelTopCreateButton');
 $layout_defs["Opportunities"]["subpanel_setup"]["quotes"]["top_buttons"] = array(
        array(
            //'widget_class' => 'SubPanelTopButtonQuickCreate',
             'widget_class' => 'SubPanelTopButtonCustom',
        ),
    );

// order subpanel
$layout_defs['Opportunities']['subpanel_setup']['contacts']['order'] = 10;
$layout_defs['Opportunities']['subpanel_setup']['activities']['order'] = 20;
$layout_defs['Opportunities']['subpanel_setup']['quotes']['order'] = 30;
$layout_defs['Opportunities']['subpanel_setup']['contracts']['order'] = 40;
$layout_defs['Opportunities']['subpanel_setup']['documents']['order'] = 50;
$layout_defs['Opportunities']['subpanel_setup']['leads']['order'] = 60;
$layout_defs['Opportunities']['subpanel_setup']['history']['order'] = 70;
 

 // created: 2014-05-14 12:15:23
$layout_defs["Opportunities"]["subpanel_setup"]['opportunities_opportunities_1'] = array (
  'order' => 100,
  'module' => 'Opportunities',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPPORTUNITIES_OPPORTUNITIES_1_FROM_OPPORTUNITIES_R_TITLE',
  'get_subpanel_data' => 'opportunities_opportunities_1',
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
unset($layout_defs['Opportunities']['subpanel_setup']['opportunities_opportunities_1']);

//auto-generated file DO NOT EDIT
$layout_defs['Opportunities']['subpanel_setup']['quotes']['override_subpanel_name'] = 'Opportunity_subpanel_quotes';


//auto-generated file DO NOT EDIT
$layout_defs['Opportunities']['subpanel_setup']['documents']['override_subpanel_name'] = 'Opportunity_subpanel_documents';


//auto-generated file DO NOT EDIT
$layout_defs['Opportunities']['subpanel_setup']['leads']['override_subpanel_name'] = 'Opportunity_subpanel_leads';


//auto-generated file DO NOT EDIT
$layout_defs['Opportunities']['subpanel_setup']['contracts']['override_subpanel_name'] = 'Opportunity_subpanel_contracts';


//auto-generated file DO NOT EDIT
$layout_defs['Opportunities']['subpanel_setup']['contacts']['override_subpanel_name'] = 'Opportunity_subpanel_contacts';


//auto-generated file DO NOT EDIT
$layout_defs['Opportunities']['subpanel_setup']['contracts']['override_subpanel_name'] = 'Opportunity_subpanel_Contracts';

?>