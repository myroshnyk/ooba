<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2014-05-06 15:47:17
$dictionary['Contract']['fields']['bond_reference_c']['labelValue']='Bond Reference';
$dictionary['Contract']['fields']['bond_reference_c']['enforced']='';
$dictionary['Contract']['fields']['bond_reference_c']['dependency']='';

 

 // created: 2014-04-21 21:57:32
$dictionary['Contract']['fields']['enterprise_id']=
 array (
    'required' => false,
    'name' => 'enterprise_id',
    'vname' => 'LBL_ENTERPRISE_ID',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => '255',
    'size' => '20',
  );

// created: 2014-05-13 18:51:33
$dictionary["Contract"]["fields"]["contracts_documents_1"] = array (
  'name' => 'contracts_documents_1',
  'type' => 'link',
  'relationship' => 'contracts_documents_1',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'vname' => 'LBL_CONTRACTS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


// created: 2014-05-21 14:53:05
$dictionary["Contract"]["fields"]["contracts_campaigns_1"] = array (
  'name' => 'contracts_campaigns_1',
  'type' => 'link',
  'relationship' => 'contracts_campaigns_1',
  'source' => 'non-db',
  'module' => 'Campaigns',
  'bean_name' => 'Campaign',
  'side' => 'right',
  'vname' => 'LBL_CONTRACTS_CAMPAIGNS_1_FROM_CAMPAIGNS_TITLE',
);


// created: 2014-05-21 14:51:52
$dictionary["Contract"]["fields"]["contracts_activities_1_tasks"] = array (
  'name' => 'contracts_activities_1_tasks',
  'type' => 'link',
  'relationship' => 'contracts_activities_1_tasks',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'vname' => 'LBL_CONTRACTS_ACTIVITIES_1_TASKS_FROM_TASKS_TITLE',
);


// created: 2014-05-21 14:51:50
$dictionary["Contract"]["fields"]["contracts_activities_1_calls"] = array (
  'name' => 'contracts_activities_1_calls',
  'type' => 'link',
  'relationship' => 'contracts_activities_1_calls',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_CONTRACTS_ACTIVITIES_1_CALLS_FROM_CALLS_TITLE',
);


// created: 2014-05-21 14:51:50
$dictionary["Contract"]["fields"]["contracts_activities_1_meetings"] = array (
  'name' => 'contracts_activities_1_meetings',
  'type' => 'link',
  'relationship' => 'contracts_activities_1_meetings',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'vname' => 'LBL_CONTRACTS_ACTIVITIES_1_MEETINGS_FROM_MEETINGS_TITLE',
);


 // created: 2014-05-13 19:29:15
$dictionary['Contract']['fields']['bond_stage_c']['labelValue']='Bond Stage';
$dictionary['Contract']['fields']['bond_stage_c']['dependency']='';
$dictionary['Contract']['fields']['bond_stage_c']['visibility_grid']='';

 

// created: 2014-05-21 14:51:53
$dictionary["Contract"]["fields"]["contracts_activities_1_emails"] = array (
  'name' => 'contracts_activities_1_emails',
  'type' => 'link',
  'relationship' => 'contracts_activities_1_emails',
  'source' => 'non-db',
  'module' => 'Emails',
  'bean_name' => 'Email',
  'vname' => 'LBL_CONTRACTS_ACTIVITIES_1_EMAILS_FROM_EMAILS_TITLE',
);


 // created: 2014-05-14 13:19:29
$dictionary['Contract']['fields']['start_date']['display_default']='now';
$dictionary['Contract']['fields']['start_date']['comments']='The effective date of the contract';
$dictionary['Contract']['fields']['start_date']['merge_filter']='disabled';
$dictionary['Contract']['fields']['start_date']['calculated']=false;

 

 // created: 2014-05-13 17:30:14
$dictionary['Contract']['fields']['status']['options']='installed_products_status';
$dictionary['Contract']['fields']['status']['comments']='The contract status';
$dictionary['Contract']['fields']['status']['merge_filter']='disabled';
$dictionary['Contract']['fields']['status']['calculated']=false;
$dictionary['Contract']['fields']['status']['dependency']=false;

 

// created: 2014-05-21 14:51:51
$dictionary["Contract"]["fields"]["contracts_activities_1_notes"] = array (
  'name' => 'contracts_activities_1_notes',
  'type' => 'link',
  'relationship' => 'contracts_activities_1_notes',
  'source' => 'non-db',
  'module' => 'Notes',
  'bean_name' => 'Note',
  'vname' => 'LBL_CONTRACTS_ACTIVITIES_1_NOTES_FROM_NOTES_TITLE',
);

?>