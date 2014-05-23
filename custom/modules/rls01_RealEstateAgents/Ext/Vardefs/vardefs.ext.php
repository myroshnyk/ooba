<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2014-04-26 06:47:20
$dictionary["rls01_RealEstateAgents"]["fields"]["rls01_agents_activities_notes"] = array (
  'name' => 'rls01_agents_activities_notes',
  'type' => 'link',
  'relationship' => 'rls01_agents_activities_notes',
  'source' => 'non-db',
  'module' => 'Notes',
  'bean_name' => 'Note',
  'vname' => 'LBL_RLS01_AGENTS_ACTIVITIES_NOTES_FROM_NOTES_TITLE',
);


 // created: 2014-05-01 00:45:08
$dictionary['rls01_RealEstateAgents']['fields']['phone_mobile']['comments']='Mobile phone number of the contact';
$dictionary['rls01_RealEstateAgents']['fields']['phone_mobile']['merge_filter']='disabled';
$dictionary['rls01_RealEstateAgents']['fields']['phone_mobile']['unified_search']=false;
$dictionary['rls01_RealEstateAgents']['fields']['phone_mobile']['calculated']=false;

 

// created: 2014-04-26 06:47:20
$dictionary["rls01_RealEstateAgents"]["fields"]["rls01_agents_activities_meetings"] = array (
  'name' => 'rls01_agents_activities_meetings',
  'type' => 'link',
  'relationship' => 'rls01_agents_activities_meetings',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'vname' => 'LBL_RLS01_AGENTS_ACTIVITIES_MEETINGS_FROM_MEETINGS_TITLE',
);


// created: 2014-04-28 01:07:03
$dictionary["rls01_RealEstateAgents"]["fields"]["rls01_realestateagents_rls01_realestatepartnerships_2"] = array (
  'name' => 'rls01_realestateagents_rls01_realestatepartnerships_2',
  'type' => 'link',
  'relationship' => 'rls01_realestateagents_rls01_realestatepartnerships_2',
  'source' => 'non-db',
  'module' => 'rls01_RealEstatePartnerships',
  'bean_name' => 'rls01_RealEstatePartnerships',
  'vname' => 'LBL_RLS01_REALESTATEAGENTS_RLS01_REALESTATEPARTNERSHIPS_2_FROM_RLS01_REALESTATEPARTNERSHIPS_TITLE',
);


// created: 2014-04-26 06:47:20
$dictionary["rls01_RealEstateAgents"]["fields"]["rls01_agents_activities_calls"] = array (
  'name' => 'rls01_agents_activities_calls',
  'type' => 'link',
  'relationship' => 'rls01_agents_activities_calls',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_RLS01_AGENTS_ACTIVITIES_CALLS_FROM_CALLS_TITLE',
);


// created: 2014-04-26 06:47:20
$dictionary["rls01_RealEstateAgents"]["fields"]["rls01_agents_activities_emails"] = array (
  'name' => 'rls01_agents_activities_emails',
  'type' => 'link',
  'relationship' => 'rls01_agents_activities_emails',
  'source' => 'non-db',
  'module' => 'Emails',
  'bean_name' => 'Email',
  'vname' => 'LBL_RLS01_AGENTS_ACTIVITIES_EMAILS_FROM_EMAILS_TITLE',
);


 // created: 2014-05-01 00:44:43

 

// created: 2014-04-26 06:47:20
$dictionary["rls01_RealEstateAgents"]["fields"]["rls01_agents_rls01_partnerships"] = array (
  'name' => 'rls01_agents_rls01_partnerships',
  'type' => 'link',
  'relationship' => 'rls01_agents_rls01_partnerships',
  'source' => 'non-db',
  'module' => 'rls01_RealEstatePartnerships',
  'bean_name' => false,
  'vname' => 'LBL_RLS01_AGENTS_RLS01_PARTNERSHIPS_FROM_RLS01_PARTNERSHIPS_TITLE',
);


 // created: 2014-05-01 00:44:27

 

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


// created: 2014-04-26 06:47:20
$dictionary["rls01_RealEstateAgents"]["fields"]["rls01_agents_activities_tasks"] = array (
  'name' => 'rls01_agents_activities_tasks',
  'type' => 'link',
  'relationship' => 'rls01_agents_activities_tasks',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'vname' => 'LBL_RLS01_AGENTS_ACTIVITIES_TASKS_FROM_TASKS_TITLE',
);

?>