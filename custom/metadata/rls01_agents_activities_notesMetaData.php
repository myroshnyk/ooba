<?php
// created: 2014-04-26 06:47:20
$dictionary["rls01_agents_activities_notes"] = array (
  'relationships' => 
  array (
    'rls01_agents_activities_notes' => 
    array (
      'lhs_module' => 'rls01_RealEstateAgents',
      'lhs_table' => 'rls01_realestateagents',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'rls01_RealEstateAgents',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);