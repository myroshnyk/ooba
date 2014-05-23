<?php
// created: 2014-04-28 00:46:22
$dictionary["rls01_RealEstatePartnerships"]["fields"]["rls01_realestatebranches_rls01_realestatepartnerships_1"] = array (
  'name' => 'rls01_realestatebranches_rls01_realestatepartnerships_1',
  'type' => 'link',
  'relationship' => 'rls01_realestatebranches_rls01_realestatepartnerships_1',
  'source' => 'non-db',
  'module' => 'rls01_RealEstateBranches',
  'bean_name' => 'rls01_RealEstateBranches',
  'vname' => 'LBL_RLS01_REALESTATEBRANCHES_RLS01_REALESTATEPARTNERSHIPS_1_FROM_RLS01_REALESTATEBRANCHES_TITLE',
  'id_name' => 'rls01_real0b62ranches_ida',
);
$dictionary["rls01_RealEstatePartnerships"]["fields"]["rls01_realestatebranches_rls01_realestatepartnerships_1_name"] = array (
  'name' => 'rls01_realestatebranches_rls01_realestatepartnerships_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RLS01_REALESTATEBRANCHES_RLS01_REALESTATEPARTNERSHIPS_1_FROM_RLS01_REALESTATEBRANCHES_TITLE',
  'save' => true,
  'id_name' => 'rls01_real0b62ranches_ida',
  'link' => 'rls01_realestatebranches_rls01_realestatepartnerships_1',
  'table' => 'rls01_realestatebranches',
  'module' => 'rls01_RealEstateBranches',
  'rname' => 'name',
);
$dictionary["rls01_RealEstatePartnerships"]["fields"]["rls01_real0b62ranches_ida"] = array (
  'name' => 'rls01_real0b62ranches_ida',
  'type' => 'link',
  'relationship' => 'rls01_realestatebranches_rls01_realestatepartnerships_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_RLS01_REALESTATEBRANCHES_RLS01_REALESTATEPARTNERSHIPS_1_FROM_RLS01_REALESTATEPARTNERSHIPS_TITLE',
);
