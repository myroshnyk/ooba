<?php 
 //WARNING: The contents of this file are auto-generated


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


 // created: 2014-05-06 18:32:38
$dictionary['rls01_RealEstateBranches']['fields']['account_manager_kam1_c']['labelValue']='Account Manager (KAM)';
$dictionary['rls01_RealEstateBranches']['fields']['account_manager_kam1_c']['dependency']='';

 

 // created: 2014-05-01 13:00:30

 

// created: 2014-04-26 06:47:20
$dictionary["rls01_RealEstateBranches"]["fields"]["rls01_branches_activities_calls"] = array (
  'name' => 'rls01_branches_activities_calls',
  'type' => 'link',
  'relationship' => 'rls01_branches_activities_calls',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_RLS01_AGENTS_ACTIVITIES_CALLS_FROM_CALLS_TITLE',
);


// created: 2014-04-26 06:47:20
$dictionary["rls01_RealEstatebranches"]["fields"]["rls01_branches_activities_notes"] = array (
  'name' => 'rls01_branches_activities_notes',
  'type' => 'link',
  'relationship' => 'rls01_branches_activities_notes',
  'source' => 'non-db',
  'module' => 'Notes',
  'bean_name' => 'Note',
  'vname' => 'LBL_RLS01_AGENTS_ACTIVITIES_NOTES_FROM_NOTES_TITLE',
);


 // created: 2014-05-01 00:37:30

 

// created: 2014-04-26 06:47:19
$dictionary["rls01_RealEstateBranches"]["fields"]["rls01_branches_rls01_agents"] = array (
  'name' => 'rls01_branches_rls01_agents',
  'type' => 'link',
  'relationship' => 'rls01_branches_rls01_agents',
  'source' => 'non-db',
  'module' => 'rls01_RealEstateAgents',
  'bean_name' => false,
  'side' => 'right',
  'vname' => 'LBL_RLS01_BRANCHES_RLS01_AGENTS_FROM_RLS01_AGENTS_TITLE',
);


 // created: 2014-05-05 18:21:39

 

// created: 2014-04-26 06:47:20
$dictionary["rls01_RealEstateBranches"]["fields"]["rls01_branches_activities_meetings"] = array (
  'name' => 'rls01_branches_activities_meetings',
  'type' => 'link',
  'relationship' => 'rls01_branches_activities_meetings',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'vname' => 'LBL_RLS01_AGENTS_ACTIVITIES_MEETINGS_FROM_MEETINGS_TITLE',
);


// created: 2014-04-26 06:47:20
$dictionary["rls01_RealEstateBranches"]["fields"]["rls01_branches_activities_tasks"] = array (
  'name' => 'rls01_branches_activities_tasks',
  'type' => 'link',
  'relationship' => 'rls01_branches_activities_tasks',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'vname' => 'LBL_RLS01_AGENTS_ACTIVITIES_TASKS_FROM_TASKS_TITLE',
);


// created: 2014-04-28 01:04:48
$dictionary["rls01_RealEstateBranches"]["fields"]["rls01_realestatebranches_rls01_realestatepartnerships_2"] = array (
  'name' => 'rls01_realestatebranches_rls01_realestatepartnerships_2',
  'type' => 'link',
  'relationship' => 'rls01_realestatebranches_rls01_realestatepartnerships_2',
  'source' => 'non-db',
  'module' => 'rls01_RealEstatePartnerships',
  'bean_name' => 'rls01_RealEstatePartnerships',
  'side' => 'right',
  'vname' => 'LBL_RLS01_REALESTATEBRANCHES_RLS01_REALESTATEPARTNERSHIPS_2_FROM_RLS01_REALESTATEPARTNERSHIPS_TITLE',
);


 // created: 2014-05-01 00:37:50
$dictionary['rls01_RealEstateBranches']['fields']['phone_alternate']['full_text_search']=array (
);

 

 // created: 2014-05-06 18:28:19

 
?>