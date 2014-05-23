<?php
 // created: 2014-04-26 06:47:20
$layout_defs["rls01_RealEstateAgents"]["subpanel_setup"]['rls01_agents_rls01_partnerships'] = array (
  'order' => 100,
  'module' => 'rls01_RealEstatePartnerships',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_RLS01_AGENTS_RLS01_PARTNERSHIPS_FROM_RLS01_PARTNERSHIPS_TITLE',
  'get_subpanel_data' => 'rls01_agents_rls01_partnerships',
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
