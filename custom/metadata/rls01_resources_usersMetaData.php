<?php
// created: 2014-04-26 06:47:19
$dictionary["rls01_resources_users"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'rls01_resources_users' => 
    array (
      'lhs_module' => 'rls01_Resources',
      'lhs_table' => 'rls01_resources',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rls01_resources_users_c',
      'join_key_lhs' => 'rls01_resources_usersrls01_resources_ida',
      'join_key_rhs' => 'rls01_resources_usersusers_idb',
    ),
  ),
  'table' => 'rls01_resources_users_c',
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
      'name' => 'rls01_resources_usersrls01_resources_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'rls01_resources_usersusers_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'rls01_resources_usersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'rls01_resources_users_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rls01_resources_usersrls01_resources_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'rls01_resources_users_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rls01_resources_usersusers_idb',
      ),
    ),
  ),
);