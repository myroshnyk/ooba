<?php
// created: 2014-04-26 06:47:20
$dictionary["rls01_agencies_activities_calls"] = array (
  'relationships' => 
  array (
    'rls01_agencies_activities_calls' => 
    array (
      'lhs_module' => 'rls01_RealEstateAgencies',
      'lhs_table' => 'rls01_realestateagencies',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'rls01_RealEstateAgencies',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);