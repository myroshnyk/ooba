<?php
// created: 2014-04-26 06:47:19
$dictionary["rls01_partnerships_activities_tasks"] = array (
  'relationships' => 
  array (
    'rls01_partnerships_activities_tasks' => 
    array (
      'lhs_module' => 'rls01_RealEstatePartnerships',
      'lhs_table' => 'rls01_realestatepartnerships',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'rls01_RealEstatePartnerships',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);