<?php 
 //WARNING: The contents of this file are auto-generated


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


// created: 2014-04-28 01:07:03
$dictionary["rls01_RealEstatePartnerships"]["fields"]["rls01_realestateagents_rls01_realestatepartnerships_2"] = array (
  'name' => 'rls01_realestateagents_rls01_realestatepartnerships_2',
  'type' => 'link',
  'relationship' => 'rls01_realestateagents_rls01_realestatepartnerships_2',
  'source' => 'non-db',
  'module' => 'rls01_RealEstateAgents',
  'bean_name' => 'rls01_RealEstateAgents',
  'vname' => 'LBL_RLS01_REALESTATEAGENTS_RLS01_REALESTATEPARTNERSHIPS_2_FROM_RLS01_REALESTATEAGENTS_TITLE',
);


// created: 2014-04-26 06:47:19
$dictionary["rls01_RealEstatePartnerships"]["fields"]["rls01_partnerships_activities_meetings"] = array (
  'name' => 'rls01_partnerships_activities_meetings',
  'type' => 'link',
  'relationship' => 'rls01_partnerships_activities_meetings',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'vname' => 'LBL_RLS01_PARTNERSHIPS_ACTIVITIES_MEETINGS_FROM_MEETINGS_TITLE',
);


// created: 2014-04-26 06:47:19
$dictionary["rls01_RealEstatePartnerships"]["fields"]["rls01_partnerships_activities_calls"] = array (
  'name' => 'rls01_partnerships_activities_calls',
  'type' => 'link',
  'relationship' => 'rls01_partnerships_activities_calls',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_RLS01_PARTNERSHIPS_ACTIVITIES_CALLS_FROM_CALLS_TITLE',
);


// created: 2014-04-26 06:47:19
$dictionary["rls01_RealEstatePartnerships"]["fields"]["rls01_partnerships_activities_tasks"] = array (
  'name' => 'rls01_partnerships_activities_tasks',
  'type' => 'link',
  'relationship' => 'rls01_partnerships_activities_tasks',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'vname' => 'LBL_RLS01_PARTNERSHIPS_ACTIVITIES_TASKS_FROM_TASKS_TITLE',
);


// created: 2014-04-26 06:47:20
$dictionary["rls01_Partnerships"]["fields"]["rls01_agents_rls01_partnerships"] = array (
  'name' => 'rls01_agents_rls01_partnerships',
  'type' => 'link',
  'relationship' => 'rls01_agents_rls01_partnerships',
  'source' => 'non-db',
  'module' => 'rls01_RealEstateAgents',
  'bean_name' => false,
  'vname' => 'LBL_RLS01_AGENTS_RLS01_PARTNERSHIPS_FROM_RLS01_REALESTATEAGENTS_TITLE',
);


// created: 2014-04-26 06:47:19
$dictionary["rls01_RealEstatePartnerships"]["fields"]["rls01_partnerships_activities_notes"] = array (
  'name' => 'rls01_partnerships_activities_notes',
  'type' => 'link',
  'relationship' => 'rls01_partnerships_activities_notes',
  'source' => 'non-db',
  'module' => 'Notes',
  'bean_name' => 'Note',
  'vname' => 'LBL_RLS01_PARTNERSHIPS_ACTIVITIES_NOTES_FROM_NOTES_TITLE',
);


// created: 2014-04-26 06:47:19
$dictionary["rls01_RealEstatePartnerships"]["fields"]["rls01_partnerships_activities_emails"] = array (
  'name' => 'rls01_partnerships_activities_emails',
  'type' => 'link',
  'relationship' => 'rls01_partnerships_activities_emails',
  'source' => 'non-db',
  'module' => 'Emails',
  'bean_name' => 'Email',
  'vname' => 'LBL_RLS01_PARTNERSHIPS_ACTIVITIES_EMAILS_FROM_EMAILS_TITLE',
);

?>