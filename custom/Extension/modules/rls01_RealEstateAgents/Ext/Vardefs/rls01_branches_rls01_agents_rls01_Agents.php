<?php
// created: 2014-04-26 06:47:19
$dictionary["rls01_RealEstateAgents"]["fields"]["rls01_branches_rls01_agents"] = array (
  'name' => 'rls01_branches_rls01_agents',
  'type' => 'link',
  'relationship' => 'rls01_branches_rls01_agents',
  'source' => 'non-db',
  'module' => 'rls01_RealEstateBranches',
  'bean_name' => false,
  'vname' => 'LBL_RLS01_BRANCHES_RLS01_AGENTS_FROM_RLS01_REALESTATEBRANCHES_TITLE',
  'id_name' => 'rls01_branches_rls01_agentsrls01_realestatebranches_ida',
);

$dictionary["rls01_RealEstateAgents"]["fields"]["rls01_branches_rls01_agents_name"] = array (
  'name' => 'rls01_branches_rls01_agents_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RLS01_BRANCHES_RLS01_AGENTS_FROM_RLS01_REALESTATEBRANCHES_TITLE',
  'save' => true,
  'id_name' => 'rls01_branches_rls01_agentsrls01_realestatebranches_ida',
  'link' => 'rls01_branches_rls01_agents',
  'table' => 'rls01_realestatebranches',
  'module' => 'rls01_RealEstateBranches',
  'rname' => 'name',
);

$dictionary["rls01_RealEstateAgents"]["fields"]["rls01_branches_rls01_agentsrls01_realestatebranches_ida"] = array (
  'name' => 'rls01_branches_rls01_agentsrls01_realestatebranches_ida',
  'type' => 'link',
  'relationship' => 'rls01_branches_rls01_agents',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_RLS01_BRANCHES_RLS01_AGENTS_FROM_RLS01_AGENTS_TITLE',
);
