<?php
// created: 2014-04-26 06:47:19
$dictionary["rls01_Resources"]["fields"]["rls01_resources_users"] = array (
  'name' => 'rls01_resources_users',
  'type' => 'link',
  'relationship' => 'rls01_resources_users',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_RLS01_RESOURCES_USERS_FROM_USERS_TITLE',
  'id_name' => 'rls01_resources_usersusers_idb',
);
$dictionary["rls01_Resources"]["fields"]["rls01_resources_users_name"] = array (
  'name' => 'rls01_resources_users_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RLS01_RESOURCES_USERS_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'rls01_resources_usersusers_idb',
  'link' => 'rls01_resources_users',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["rls01_Resources"]["fields"]["rls01_resources_usersusers_idb"] = array (
  'name' => 'rls01_resources_usersusers_idb',
  'type' => 'link',
  'relationship' => 'rls01_resources_users',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_RLS01_RESOURCES_USERS_FROM_USERS_TITLE',
);
