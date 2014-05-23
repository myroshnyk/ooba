<?php
// created: 2014-04-26 06:47:20
$dictionary["rls01_agencies_rls01_branches"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'rls01_agencies_rls01_branches' => 
    array (
      'lhs_module' => 'rls01_RealEstateAgencies',
      'lhs_table' => 'rls01_realestateagencies',
      'lhs_key' => 'id',
      'rhs_module' => 'rls01_RealEstateBranches',
      'rhs_table' => 'rls01_realestatebranches',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rls01_agencies_rls01_branches_c',
      'join_key_lhs' => 'rls01_agencies_rls01_branchesrls01_realestateagencies_ida',
      'join_key_rhs' => 'rls01_agencies_rls01_branchesrls01_branches_idb',
    ),
  ),
  'table' => 'rls01_agencies_rls01_branches_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'rls01_agencies_rls01_branchesrls01_realestateagencies_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'rls01_agencies_rls01_branchesrls01_branches_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'rls01_agencies_rls01_branchesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'rls01_agencies_rls01_branches_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rls01_agencies_rls01_branchesrls01_realestateagencies_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'rls01_agencies_rls01_branches_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'rls01_agencies_rls01_branchesrls01_branches_idb',
      ),
    ),
  ),
);