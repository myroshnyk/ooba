<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2014-05-13 20:41:39
$dictionary['Lead']['fields']['phone_mobile']['comments']='Mobile phone number of the contact';
$dictionary['Lead']['fields']['phone_mobile']['merge_filter']='disabled';
$dictionary['Lead']['fields']['phone_mobile']['calculated']=false;
$dictionary['Lead']['fields']['phone_mobile']['required']=true;
$dictionary['Lead']['fields']['phone_mobile']['dependency']='equal($phone_type_c,"MOBILE")';

 

 // created: 2014-05-05 13:05:33
$dictionary['Lead']['fields']['ref_number_c']['labelValue']='Ref Number';
$dictionary['Lead']['fields']['ref_number_c']['enforced']='';
$dictionary['Lead']['fields']['ref_number_c']['dependency']='';

 

 // created: 2014-05-02 00:38:39
$dictionary['Lead']['fields']['id_type_c']['labelValue']='ID Type';
$dictionary['Lead']['fields']['id_type_c']['dependency']='';
$dictionary['Lead']['fields']['id_type_c']['visibility_grid']='';

 

 // created: 2014-05-15 01:04:48
$dictionary['Lead']['fields']['email_t_lead_provider_c']['labelValue']='email t  Lead Provider--> Name';
$dictionary['Lead']['fields']['email_t_lead_provider_c']['enforced']='';
$dictionary['Lead']['fields']['email_t_lead_provider_c']['dependency']='';

 

 // created: 2014-05-02 05:04:20

 

 // created: 2014-05-13 20:38:13
$dictionary['Lead']['fields']['phone_type_c']['labelValue']='Phone Type';
$dictionary['Lead']['fields']['phone_type_c']['dependency']='';
$dictionary['Lead']['fields']['phone_type_c']['visibility_grid']='';

 

 // created: 2014-05-06 15:44:50
$dictionary['Lead']['fields']['bond_status_c']['labelValue']='Bond Status';
$dictionary['Lead']['fields']['bond_status_c']['enforced']='';
$dictionary['Lead']['fields']['bond_status_c']['dependency']='';

 

 // created: 2014-04-11 10:17:07

 

 // created: 2014-05-02 03:06:00
$dictionary['Lead']['fields']['lead_provider_agent_c']['labelValue']='Lead Provider (Agent)';
$dictionary['Lead']['fields']['lead_provider_agent_c']['dependency']='equal($lead_source,"REAL_ESTATE")';

 

 // created: 2014-05-02 02:49:54
$dictionary['Lead']['fields']['sales_consultant_c']['labelValue']='Prequalification Expert';
$dictionary['Lead']['fields']['sales_consultant_c']['dependency']='';

 

 // created: 2014-05-01 20:48:54
$dictionary['Lead']['fields']['lead_source']['audited']=false;
$dictionary['Lead']['fields']['lead_source']['options']='lead_source';
$dictionary['Lead']['fields']['lead_source']['merge_filter']='disabled';
$dictionary['Lead']['fields']['lead_source']['calculated']=false;
$dictionary['Lead']['fields']['lead_source']['dependency']=false;
$dictionary['Lead']['fields']['lead_source']['required']=true;
$dictionary['Lead']['fields']['lead_source']['comments']='Lead source (ex: Web, print)';

 

 // created: 2014-05-06 23:09:52
$dictionary['Lead']['fields']['assistant']['comments']='Name of the assistant of the contact';
$dictionary['Lead']['fields']['assistant']['merge_filter']='disabled';
$dictionary['Lead']['fields']['assistant']['calculated']=false;

 

 // created: 2014-05-11 14:55:11
$dictionary['Lead']['fields']['product_text_c']['labelValue']='Product Category';
$dictionary['Lead']['fields']['product_text_c']['enforced']='false';
$dictionary['Lead']['fields']['product_text_c']['dependency']='';

 

 // created: 2014-05-06 15:48:43
$dictionary['Lead']['fields']['linked_to_bond_c']['labelValue']='Linked to Bond';
$dictionary['Lead']['fields']['linked_to_bond_c']['enforced']='';
$dictionary['Lead']['fields']['linked_to_bond_c']['dependency']='';

 

 // created: 2014-05-15 01:06:58
$dictionary['Lead']['fields']['email_t_prequalification_mp_c']['labelValue']='email t Prequalification Expert-->Mobile Phone';
$dictionary['Lead']['fields']['email_t_prequalification_mp_c']['enforced']='';
$dictionary['Lead']['fields']['email_t_prequalification_mp_c']['dependency']='';

 

 // created: 2014-05-02 00:38:39

 

 // created: 2014-05-02 00:38:39
$dictionary['Lead']['fields']['territory_c']['labelValue']='Sales Territory';
$dictionary['Lead']['fields']['territory_c']['dependency']='';
$dictionary['Lead']['fields']['territory_c']['visibility_grid']='';

 

 // created: 2014-05-04 12:55:17
$dictionary['Lead']['fields']['lost_reason_c']['labelValue']='Lost Reason';
$dictionary['Lead']['fields']['lost_reason_c']['visibility_grid']=array (
  'trigger' => 'status',
  'values' => 
  array (
    '' => 
    array (
      0 => '',
    ),
    'NEW' => 
    array (
      0 => '',
    ),
    'ASSIGN' => 
    array (
      0 => '',
    ),
    'QUALIFY' => 
    array (
      0 => '',
    ),
    'LOST' => 
    array (
      0 => 'WRONG_PROSPECT',
      1 => 'NO_CONTACT',
      2 => 'TARGET_PRODUCT_EXISTS',
      3 => 'DUP_LEAD',
      4 => 'NO_PROD_INTEREST',
    ),
    'CONVERTED' => 
    array (
      0 => '',
    ),
  ),
);

 

 // created: 2014-05-06 17:38:48
$dictionary['Lead']['fields']['account_manager_kam_c']['labelValue']='Account Manager (KAM)';
$dictionary['Lead']['fields']['account_manager_kam_c']['dependency']='equal($lead_source,"REAL_ESTATE")';

 

 // created: 2014-05-13 20:42:00
$dictionary['Lead']['fields']['phone_work']['required']=true;
$dictionary['Lead']['fields']['phone_work']['comments']='Work phone number of the contact';
$dictionary['Lead']['fields']['phone_work']['merge_filter']='disabled';
$dictionary['Lead']['fields']['phone_work']['calculated']=false;
$dictionary['Lead']['fields']['phone_work']['dependency']='equal($phone_type_c,"WORK")';

 

 // created: 2014-05-06 23:23:02
$dictionary['Lead']['fields']['enterprise_id']['required']=false;
$dictionary['Lead']['fields']['enterprise_id']['name']='enterprise_id';
$dictionary['Lead']['fields']['enterprise_id']['vname']='LBL_ENTERPRISE_ID';
$dictionary['Lead']['fields']['enterprise_id']['type']='varchar';
$dictionary['Lead']['fields']['enterprise_id']['massupdate']=0;
$dictionary['Lead']['fields']['enterprise_id']['no_default']=false;
$dictionary['Lead']['fields']['enterprise_id']['comments']='';
$dictionary['Lead']['fields']['enterprise_id']['help']='';
$dictionary['Lead']['fields']['enterprise_id']['importable']='true';
$dictionary['Lead']['fields']['enterprise_id']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['enterprise_id']['duplicate_merge_dom_value']='3';
$dictionary['Lead']['fields']['enterprise_id']['audited']=false;
$dictionary['Lead']['fields']['enterprise_id']['reportable']=true;
$dictionary['Lead']['fields']['enterprise_id']['unified_search']=false;
$dictionary['Lead']['fields']['enterprise_id']['merge_filter']='selected';
$dictionary['Lead']['fields']['enterprise_id']['calculated']=false;
$dictionary['Lead']['fields']['enterprise_id']['len']='255';
$dictionary['Lead']['fields']['enterprise_id']['size']='20';

 

 // created: 2014-05-02 00:38:39
$dictionary['Lead']['fields']['stage_c']['labelValue']='Stage';
$dictionary['Lead']['fields']['stage_c']['dependency']='';
$dictionary['Lead']['fields']['stage_c']['visibility_grid']='';

 

 // created: 2014-05-11 14:56:01
$dictionary['Lead']['fields']['product_c']['labelValue']='Product Category';
$dictionary['Lead']['fields']['product_c']['enforced']='';
$dictionary['Lead']['fields']['product_c']['dependency']='';

 

 // created: 2014-05-02 05:04:20
$dictionary['Lead']['fields']['lead_provider_web_c']['labelValue']='Lead Provider (Web Entity)';
$dictionary['Lead']['fields']['lead_provider_web_c']['dependency']='equal($lead_source,"WEB_SITE")';

 

 // created: 2014-05-02 02:49:04
$dictionary['Lead']['fields']['communication_representative_c']['labelValue']='ooba Representative';
$dictionary['Lead']['fields']['communication_representative_c']['dependency']='';
  
   
 

 // created: 2014-05-02 07:06:30
$dictionary['Lead']['fields']['lead_provider_c']['labelValue']='Lead Provider';
$dictionary['Lead']['fields']['lead_provider_c']['dependency']='or(or(equal($lead_source,"TELEPHONE"),equal($lead_source,"EMAIL")),or(equal($lead_source,"WEB_FORM"),equal($lead_source,"WALK_IN")))';

 

 // created: 2014-05-21 13:27:38
$dictionary['Lead']['fields']['ea_branch_c']['labelValue']='Agency Branch';
$dictionary['Lead']['fields']['ea_branch_c']['dependency']='equal($lead_source,"REAL_ESTATE")';

 

 // created: 2014-05-02 00:38:39

 

 // created: 2014-05-02 00:38:39

 

 // created: 2014-04-25 18:08:43

 

 // created: 2014-05-02 00:38:39

 

 // created: 2014-05-02 02:49:54

 

 // created: 2014-05-06 17:35:51

 

 // created: 2014-05-15 01:05:37
$dictionary['Lead']['fields']['email_t_ooba_representativen_c']['labelValue']='email t ooba Representative--> First Name';
$dictionary['Lead']['fields']['email_t_ooba_representativen_c']['enforced']='';
$dictionary['Lead']['fields']['email_t_ooba_representativen_c']['dependency']='';

 

// created: 2014-05-21 12:43:23
$dictionary["Lead"]["fields"]["leads_leads_1"] = array (
  'name' => 'leads_leads_1',
  'type' => 'link',
  'relationship' => 'leads_leads_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_LEADS_1_FROM_LEADS_L_TITLE',
);
$dictionary["Lead"]["fields"]["leads_leads_1"] = array (
  'name' => 'leads_leads_1',
  'type' => 'link',
  'relationship' => 'leads_leads_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_LEADS_1_FROM_LEADS_R_TITLE',
);


 // created: 2014-05-15 01:06:27
$dictionary['Lead']['fields']['email_t_prequalification_fn_c']['labelValue']='email t Prequalification Expert-->First Name Surname';
$dictionary['Lead']['fields']['email_t_prequalification_fn_c']['enforced']='';
$dictionary['Lead']['fields']['email_t_prequalification_fn_c']['dependency']='';

 

 // created: 2014-05-21 13:05:31
$dictionary['Lead']['fields']['linked_to_lead_c']['labelValue']='Linked to Lead';
$dictionary['Lead']['fields']['linked_to_lead_c']['dependency']='';

 

 // created: 2014-04-25 18:08:44

 

 // created: 2014-05-21 13:07:50
$dictionary['Lead']['fields']['refferer_c']['labelValue']='Refferer';
$dictionary['Lead']['fields']['refferer_c']['dependency']='';

 

 // created: 2014-05-02 00:38:39

 

 // created: 2014-04-25 18:08:44

 

//$dictionary['Lead']['fields']['communication_representative_c']=
//    array (
//      'labelValue' => 'ooba Representative',
//      'dependency' => '',
//      'required' => false,
//      'source' => 'non-db',
//      'name' => 'communication_representative_c',
//      'vname' => 'LBL_COMMUNICATION_REPRESENTATIVE',
//      'type' => 'relate',
//      'massupdate' => '0',
//      'default' => NULL,
//      'no_default' => false,
//      'comments' => '',
//      'help' => '',
//      'importable' => 'true',
//      'duplicate_merge' => 'disabled',
//      'duplicate_merge_dom_value' => '0',
//      'audited' => false,
//      'reportable' => true,
//      'unified_search' => false,
//      'merge_filter' => 'disabled',
//      'calculated' => false,
//      'len' => '255',
//      'size' => '20',
//      'id_name' => 'rls01_resources_id21_c',
//      'ext2' => 'rls01_Resources',
//      'module' => 'rls01_Resources',
//      'rname' => 'name',
//      'quicksearch' => 'enabled',
//      'studio' => 'visible',
//      'id' => 'Leadscommunication_representative_c',
//      'custom_module' => 'Leads',
//    );
//    $dictionary['Lead']['fields']['rls01_resources_id21_c']=    
//    array (
//      array (
//      'required' => false,
//      'source' => 'custom_fields',
//      'name' => 'rls01_resources_id21_c',
//      'vname' => 'LBL_COMMUNICATION_REPRESENTATIVE_RLS01_RESOURCES_ID',
//      'type' => 'id',
//      'massupdate' => '0',
//      'default' => NULL,
//      'no_default' => false,
//      'comments' => '',
//      'help' => '',
//      'importable' => 'true',
//      'duplicate_merge' => 'disabled',
//      'duplicate_merge_dom_value' => '0',
//      'audited' => false,
//      'reportable' => false,
//      'unified_search' => false,
//      'merge_filter' => 'disabled',
//      'calculated' => false,
//      'len' => '36',
//      'size' => '20',
//      'id' => 'Leadsrls01_resources_id21_c',
//      'custom_module' => 'Leads',
//          )
//    ); 

 // created: 2014-05-06 23:25:11
$dictionary['Lead']['fields']['first_name']['comments']='First name of the contact';
$dictionary['Lead']['fields']['first_name']['merge_filter']='selected';
$dictionary['Lead']['fields']['first_name']['calculated']=false;
$dictionary['Lead']['fields']['first_name']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['first_name']['duplicate_merge_dom_value']='3';

 

 // created: 2014-05-02 02:49:03

 

 // created: 2014-05-02 00:38:39

 

 // created: 2014-05-14 09:54:08
$dictionary['Lead']['fields']['status']['comments']='Status of the lead';
$dictionary['Lead']['fields']['status']['merge_filter']='disabled';
$dictionary['Lead']['fields']['status']['calculated']=false;
$dictionary['Lead']['fields']['status']['dependency']=false;
$dictionary['Lead']['fields']['status']['options']='lead_status';
$dictionary['Lead']['fields']['status']['default']='NEW';

 

 // created: 2014-05-16 10:56:04
$dictionary['Lead']['fields']['contact_c']['labelValue']='Contact';
$dictionary['Lead']['fields']['contact_c']['dependency']='';

 

 // created: 2014-05-15 01:06:00
$dictionary['Lead']['fields']['email_t_prequalification_exp_c']['labelValue']='email t Prequalification Expert-->email';
$dictionary['Lead']['fields']['email_t_prequalification_exp_c']['enforced']='';
$dictionary['Lead']['fields']['email_t_prequalification_exp_c']['dependency']='';

 


$dictionary['Lead']['fields']['sales_consultant_c']=
      array (
      'labelValue' => 'Prequalification Expert',
      'dependency' => '',
      'required' => false,
      'source' => 'non-db',
      'name' => 'sales_consultant_c',
      'vname' => 'LBL_SALES_CONSULTANT',
      'type' => 'relate',
      'massupdate' => '0',
      'default' => NULL,
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
      'id_name' => 'rls01_resources_id33_c',
      'ext2' => 'rls01_Resources',
      'module' => 'rls01_Resources',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'id' => 'Leadssales_consultant_c',
      'custom_module' => 'Leads',
    );

$dictionary['Lead']['fields']['rls01_resources_id33_c']=
        
    array (
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'rls01_resources_id33_c',
      'vname' => 'LBL_SALES_CONSULTANT_RLS01_RESOURCES_ID',
      'type' => 'id',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => '36',
      'size' => '20',
      'id' => 'Leadsrls01_resources_id33_c',
      'custom_module' => 'Leads',
    );

 // created: 2014-05-13 20:41:16
$dictionary['Lead']['fields']['phone_home']['required']=true;
$dictionary['Lead']['fields']['phone_home']['comments']='Home phone number of the contact';
$dictionary['Lead']['fields']['phone_home']['merge_filter']='disabled';
$dictionary['Lead']['fields']['phone_home']['calculated']=false;
$dictionary['Lead']['fields']['phone_home']['dependency']='equal($phone_type_c,"HOME")';

 

 // created: 2014-05-14 19:01:52
$dictionary['Lead']['fields']['is_duplicate_c']['labelValue']='is duplicate';
$dictionary['Lead']['fields']['is_duplicate_c']['enforced']='';
$dictionary['Lead']['fields']['is_duplicate_c']['dependency']='';

 

 // created: 2014-05-02 00:38:39
$dictionary['Lead']['fields']['desired_amount_c']['labelValue']='Desired Amount';
$dictionary['Lead']['fields']['desired_amount_c']['enforced']='';
$dictionary['Lead']['fields']['desired_amount_c']['dependency']='';

 

 // created: 2014-05-02 03:35:13
$dictionary['Lead']['fields']['agency_c']['labelValue']='Agency';
$dictionary['Lead']['fields']['agency_c']['dependency']='equal($lead_source,"REAL_ESTATE")';

 

 // created: 2014-05-14 09:07:00
$dictionary['Lead']['fields']['lead_provider_resource_c']['labelValue']='Lead Provider (Resource)';
$dictionary['Lead']['fields']['lead_provider_resource_c']['dependency']='equal($lead_source,"STAFF")';

 

 // created: 2014-05-15 01:05:20
$dictionary['Lead']['fields']['email_t_ooba_representative_c']['labelValue']='email t  ooba Representative--> email';
$dictionary['Lead']['fields']['email_t_ooba_representative_c']['enforced']='';
$dictionary['Lead']['fields']['email_t_ooba_representative_c']['dependency']='';

 

 // created: 2014-05-06 23:08:26
$dictionary['Lead']['fields']['id_number_c']['labelValue']='ID Number';
$dictionary['Lead']['fields']['id_number_c']['enforced']='';
$dictionary['Lead']['fields']['id_number_c']['dependency']='';

 

 // created: 2014-05-15 01:07:27
$dictionary['Lead']['fields']['email_t_prequalification_wp_c']['labelValue']='email t Prequalification Expert-->Work Phone';
$dictionary['Lead']['fields']['email_t_prequalification_wp_c']['enforced']='';
$dictionary['Lead']['fields']['email_t_prequalification_wp_c']['dependency']='';

 

 // created: 2014-05-02 00:38:39

 

 // created: 2014-05-02 00:38:39

 

 // created: 2014-05-06 23:25:20
$dictionary['Lead']['fields']['last_name']['comments']='Last name of the contact';
$dictionary['Lead']['fields']['last_name']['merge_filter']='selected';
$dictionary['Lead']['fields']['last_name']['calculated']=false;
$dictionary['Lead']['fields']['last_name']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['last_name']['duplicate_merge_dom_value']='3';

 

 // created: 2014-04-25 18:08:44

 

 // created: 2014-05-02 00:38:39

 
?>