<?php
 // created: 2014-04-26 06:47:20
$layout_defs["rls01_RealEstateAgencies"]["subpanel_setup"]['rls01_agencies_rls01_branches'] = array (
  'order' => 100,
  'module' => 'rls01_RealEstateBranches',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_RLS01_AGENCIES_RLS01_BRANCHES_FROM_RLS01_BRANCHES_TITLE',
  'get_subpanel_data' => 'rls01_agencies_rls01_branches',
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
