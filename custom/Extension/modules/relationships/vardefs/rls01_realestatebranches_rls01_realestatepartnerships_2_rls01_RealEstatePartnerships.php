<?php
// created: 2014-04-28 01:04:48
$dictionary["rls01_RealEstatePartnerships"]["fields"]["rls01_realestatebranches_rls01_realestatepartnerships_2"] = array (
  'name' => 'rls01_realestatebranches_rls01_realestatepartnerships_2',
  'type' => 'link',
  'relationship' => 'rls01_realestatebranches_rls01_realestatepartnerships_2',
  'source' => 'non-db',
  'module' => 'rls01_RealEstateBranches',
  'bean_name' => 'rls01_RealEstateBranches',
  'vname' => 'LBL_RLS01_REALESTATEBRANCHES_RLS01_REALESTATEPARTNERSHIPS_2_FROM_RLS01_REALESTATEBRANCHES_TITLE',
  'id_name' => 'rls01_real1fc3ranches_ida',
);
$dictionary["rls01_RealEstatePartnerships"]["fields"]["rls01_realestatebranches_rls01_realestatepartnerships_2_name"] = array (
  'name' => 'rls01_realestatebranches_rls01_realestatepartnerships_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RLS01_REALESTATEBRANCHES_RLS01_REALESTATEPARTNERSHIPS_2_FROM_RLS01_REALESTATEBRANCHES_TITLE',
  'save' => true,
  'id_name' => 'rls01_real1fc3ranches_ida',
  'link' => 'rls01_realestatebranches_rls01_realestatepartnerships_2',
  'table' => 'rls01_realestatebranches',
  'module' => 'rls01_RealEstateBranches',
  'rname' => 'name',
);
$dictionary["rls01_RealEstatePartnerships"]["fields"]["rls01_real1fc3ranches_ida"] = array (
  'name' => 'rls01_real1fc3ranches_ida',
  'type' => 'link',
  'relationship' => 'rls01_realestatebranches_rls01_realestatepartnerships_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_RLS01_REALESTATEBRANCHES_RLS01_REALESTATEPARTNERSHIPS_2_FROM_RLS01_REALESTATEPARTNERSHIPS_TITLE',
);
