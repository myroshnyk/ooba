<?php
// created: 2014-04-26 06:47:20
$dictionary["rls01_branches_activities_emails"] = array (
  'relationships' => 
  array (
    'rls01_branches_activities_emails' => 
    array (
      'lhs_module' => 'rls01_RealEstateBranches',
      'lhs_table' => 'rls01_realestatebranches',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'rls01_RealEstateBranches',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);