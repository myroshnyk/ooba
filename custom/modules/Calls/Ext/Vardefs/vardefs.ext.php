<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2014-04-23 10:20:56
$dictionary["Call"]["fields"]["rls01_agencies_activities_calls"] = array (
  'name' => 'rls01_agencies_activities_calls',
  'type' => 'link',
  'relationship' => 'rls01_agencies_activities_calls',
  'source' => 'non-db',
  'module' => 'rls01_Agencies',
  'bean_name' => false,
  'vname' => 'LBL_RLS01_AGENCIES_ACTIVITIES_CALLS_FROM_RLS01_AGENCIES_TITLE',
);


// created: 2014-04-25 15:05:06
$dictionary["Call"]["fields"]["rls01_partnerships_activities_calls"] = array (
  'name' => 'rls01_partnerships_activities_calls',
  'type' => 'link',
  'relationship' => 'rls01_partnerships_activities_calls',
  'source' => 'non-db',
  'module' => 'rls01_Partnerships',
  'bean_name' => false,
  'vname' => 'LBL_RLS01_PARTNERSHIPS_ACTIVITIES_CALLS_FROM_RLS01_PARTNERSHIPS_TITLE',
);


 // created: 2014-05-09 10:36:05
$dictionary['Call']['fields']['direction']['default']='Outbound';
$dictionary['Call']['fields']['direction']['comments']='Indicates whether call is inbound or outbound';
$dictionary['Call']['fields']['direction']['merge_filter']='disabled';
$dictionary['Call']['fields']['direction']['calculated']=false;
$dictionary['Call']['fields']['direction']['dependency']=false;

 

// created: 2014-04-26 06:47:20
$dictionary["Call"]["fields"]["rls01_branches_activities_calls"] = array (
  'name' => 'rls01_branches_activities_calls',
  'type' => 'link',
  'relationship' => 'rls01_branches_activities_calls',
  'source' => 'non-db',
  'module' => 'rls01_RealEstateBranches',
  'bean_name' => false,
  'vname' => 'LBL_RLS01_AGENCIES_ACTIVITIES_CALLS_FROM_RLS01_REALESTATEAGENCIES_TITLE',
);


// created: 2014-04-25 15:05:05
$dictionary["Call"]["fields"]["rls01_agents_activities_calls"] = array (
  'name' => 'rls01_agents_activities_calls',
  'type' => 'link',
  'relationship' => 'rls01_agents_activities_calls',
  'source' => 'non-db',
  'module' => 'rls01_Agents',
  'bean_name' => false,
  'vname' => 'LBL_RLS01_AGENTS_ACTIVITIES_CALLS_FROM_RLS01_AGENTS_TITLE',
);

?>