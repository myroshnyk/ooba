<?php
// created: 2014-04-26 06:47:19
$dictionary["rls01_branches_rls01_agents"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'rls01_branches_rls01_agents' => 
    array (
      'lhs_module' => 'rls01_RealEstateBranches',
      'lhs_table' => 'rls01_realestatebranches',
      'lhs_key' => 'id',
      'rhs_module' => 'rls01_RealEstateAgents',
      'rhs_table' => 'rls01_realestateagents',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rls01_branches_rls01_agents_c',
      'join_key_lhs' => 'rls01_branches_rls01_agentsrls01_realestatebranches_ida',
      'join_key_rhs' => 'rls01_branches_rls01_agentsrls01_agents_idb',
    ),
  ),
  'table' => 'rls01_branches_rls01_agents_c',
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
      'name' => 'rls01_branches_rls01_agentsrls01_realestatebranches_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'rls01_branches_rls01_agentsrls01_agents_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'rls01_branches_rls01_agentsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'rls01_branches_rls01_agents_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rls01_branches_rls01_agentsrls01_realestatebranches_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'rls01_branches_rls01_agents_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'rls01_branches_rls01_agentsrls01_agents_idb',
      ),
    ),
  ),
);