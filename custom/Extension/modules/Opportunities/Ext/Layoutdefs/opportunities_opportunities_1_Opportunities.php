<?php
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