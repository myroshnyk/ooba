<?php
 // created: 2014-04-26 06:47:19
$layout_defs["rls01_RealEstateBranches"]["subpanel_setup"]['rls01_branches_rls01_agents'] = array (
  'order' => 100,
  'module' => 'rls01_RealEstateAgents',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_RLS01_BRANCHES_RLS01_AGENTS_FROM_RLS01_AGENTS_TITLE',
  'get_subpanel_data' => 'rls01_branches_rls01_agents',
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
