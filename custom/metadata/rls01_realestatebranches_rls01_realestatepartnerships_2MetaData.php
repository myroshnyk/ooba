<?php
// created: 2014-04-28 01:04:48
$dictionary["rls01_realestatebranches_rls01_realestatepartnerships_2"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'rls01_realestatebranches_rls01_realestatepartnerships_2' => 
    array (
      'lhs_module' => 'rls01_RealEstateBranches',
      'lhs_table' => 'rls01_realestatebranches',
      'lhs_key' => 'id',
      'rhs_module' => 'rls01_RealEstatePartnerships',
      'rhs_table' => 'rls01_realestatepartnerships',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rls01_realestatebranches_rls01_realestatepartnerships_2_c',
      'join_key_lhs' => 'rls01_real1fc3ranches_ida',
      'join_key_rhs' => 'rls01_real782cerships_idb',
    ),
  ),
  'table' => 'rls01_realestatebranches_rls01_realestatepartnerships_2_c',
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
      'name' => 'rls01_real1fc3ranches_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'rls01_real782cerships_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'rls01_realestatebranches_rls01_realestatepartnerships_2spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'rls01_realestatebranches_rls01_realestatepartnerships_2_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rls01_real1fc3ranches_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'rls01_realestatebranches_rls01_realestatepartnerships_2_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'rls01_real782cerships_idb',
      ),
    ),
  ),
);