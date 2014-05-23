<?php
// created: 2014-04-25 15:05:08
$dictionary["User"]["fields"]["rls01_resources_users"] = array (
  'name' => 'rls01_resources_users',
  'type' => 'link',
  'relationship' => 'rls01_resources_users',
  'source' => 'non-db',
  'module' => 'rls01_Resources',
  'bean_name' => false,
  'vname' => 'LBL_RLS01_RESOURCES_USERS_FROM_RLS01_RESOURCES_TITLE',
  'id_name' => 'rls01_resources_usersrls01_resources_ida',
);
$dictionary["User"]["fields"]["rls01_resources_users_name"] = array (
  'name' => 'rls01_resources_users_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RLS01_RESOURCES_USERS_FROM_RLS01_RESOURCES_TITLE',
  'save' => true,
  'id_name' => 'rls01_resources_usersrls01_resources_ida',
  'link' => 'rls01_resources_users',
  'table' => 'rls01_resources',
  'module' => 'rls01_Resources',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["User"]["fields"]["rls01_resources_usersrls01_resources_ida"] = array (
  'name' => 'rls01_resources_usersrls01_resources_ida',
  'type' => 'link',
  'relationship' => 'rls01_resources_users',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_RLS01_RESOURCES_USERS_FROM_RLS01_RESOURCES_TITLE',
);
