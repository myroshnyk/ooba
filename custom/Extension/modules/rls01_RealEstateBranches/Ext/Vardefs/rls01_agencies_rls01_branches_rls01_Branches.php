<?php
// created: 2014-04-26 06:47:20
$dictionary["rls01_RealEstateBranches"]["fields"]["rls01_agencies_rls01_branches"] = array (
  'name' => 'rls01_agencies_rls01_branches',
  'type' => 'link',
  'relationship' => 'rls01_agencies_rls01_branches',
  'source' => 'non-db',
  'module' => 'rls01_RealEstateAgencies',
  'bean_name' => false,
  'vname' => 'LBL_RLS01_AGENCIES_RLS01_BRANCHES_FROM_RLS01_REALESTATEAGENCIES_TITLE',
  'id_name' => 'rls01_agencies_rls01_branchesrls01_realestateagencies_ida',
);
$dictionary["rls01_RealEstateBranches"]["fields"]["rls01_agencies_rls01_branches_name"] = array (
  'name' => 'rls01_agencies_rls01_branches_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RLS01_AGENCIES_RLS01_BRANCHES_FROM_RLS01_REALESTATEAGENCIES_TITLE',
  'save' => true,
  'id_name' => 'rls01_agencies_rls01_branchesrls01_realestateagencies_ida',
  'link' => 'rls01_agencies_rls01_branches',
  'table' => 'rls01_realestateagencies',
  'module' => 'rls01_RealEstateAgencies',
  'rname' => 'name',
);
$dictionary["rls01_RealEstateBranches"]["fields"]["rls01_agencies_rls01_branchesrls01_realestateagencies_ida"] = array (
  'name' => 'rls01_agencies_rls01_branchesrls01_realestateagencies_ida',
  'type' => 'link',
  'relationship' => 'rls01_agencies_rls01_branches',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_RLS01_AGENCIES_RLS01_BRANCHES_FROM_RLS01_BRANCHES_TITLE',
);
