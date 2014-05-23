<?php
// created: 2014-04-28 00:44:49
$dictionary["rls01_realestateagents_rls01_realestatepartnerships_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'rls01_realestateagents_rls01_realestatepartnerships_1' => 
    array (
      'lhs_module' => 'rls01_RealEstateAgents',
      'lhs_table' => 'rls01_realestateagents',
      'lhs_key' => 'id',
      'rhs_module' => 'rls01_RealEstatePartnerships',
      'rhs_table' => 'rls01_realestatepartnerships',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rls01_realestateagents_rls01_realestatepartnerships_1_c',
      'join_key_lhs' => 'rls01_real78a5eagents_ida',
      'join_key_rhs' => 'rls01_realcd8aerships_idb',
    ),
  ),
  'table' => 'rls01_realestateagents_rls01_realestatepartnerships_1_c',
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
      'name' => 'rls01_real78a5eagents_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'rls01_realcd8aerships_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'rls01_realestateagents_rls01_realestatepartnerships_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'rls01_realestateagents_rls01_realestatepartnerships_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'rls01_real78a5eagents_ida',
        1 => 'rls01_realcd8aerships_idb',
      ),
    ),
  ),
);