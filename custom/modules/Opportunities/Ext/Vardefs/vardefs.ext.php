<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2014-04-21 13:33:34
$dictionary['Opportunity']['fields']['description']['comments']='Full text of the note';
$dictionary['Opportunity']['fields']['description']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['description']['calculated']=false;

 

 // created: 2014-05-02 00:38:40

 

 // created: 2014-05-11 20:28:22
$dictionary['Opportunity']['fields']['doc_req_email_sent_c']['labelValue']='doc req email sent';
$dictionary['Opportunity']['fields']['doc_req_email_sent_c']['enforced']='';
$dictionary['Opportunity']['fields']['doc_req_email_sent_c']['dependency']='';

 

 // created: 2014-05-06 15:49:14
$dictionary['Opportunity']['fields']['ref_number_c']['labelValue']='Ref Number';
$dictionary['Opportunity']['fields']['ref_number_c']['enforced']='';
$dictionary['Opportunity']['fields']['ref_number_c']['dependency']='';

 

 // created: 2014-05-02 04:26:29
$dictionary['Opportunity']['fields']['amount']['required']=false;
$dictionary['Opportunity']['fields']['amount']['comments']='Unconverted amount of the opportunity';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['amount']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['amount']['calculated']=false;

 

 // created: 2014-05-14 09:02:04

 

 // created: 2014-05-14 09:43:46
$dictionary['Opportunity']['fields']['lead_provider_agent_c']['labelValue']='Lead Provider (Agent)';
$dictionary['Opportunity']['fields']['lead_provider_agent_c']['dependency']='equal($lead_source,"REAL_ESTATE")';

 

 // created: 2014-05-06 16:01:10
$dictionary['Opportunity']['fields']['sales_consultant_c']['labelValue']='Prequalification Expert';
$dictionary['Opportunity']['fields']['sales_consultant_c']['dependency']='';

 

 // created: 2014-04-21 13:58:46
$dictionary['Opportunity']['fields']['date_closed']['required']=false;
$dictionary['Opportunity']['fields']['date_closed']['comments']='Expected or actual date the oppportunity will close';
$dictionary['Opportunity']['fields']['date_closed']['importable']='true';
$dictionary['Opportunity']['fields']['date_closed']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['date_closed']['calculated']=false;

 

 // created: 2014-05-01 21:06:06
$dictionary['Opportunity']['fields']['lead_source']['len']=100;
$dictionary['Opportunity']['fields']['lead_source']['options']='lead_source';
$dictionary['Opportunity']['fields']['lead_source']['comments']='Source of the opportunity';
$dictionary['Opportunity']['fields']['lead_source']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['lead_source']['calculated']=false;
$dictionary['Opportunity']['fields']['lead_source']['dependency']=false;

 

 // created: 2014-05-06 16:01:46
$dictionary['Opportunity']['fields']['territory_c']['labelValue']='Sales Territory';
$dictionary['Opportunity']['fields']['territory_c']['dependency']='';
$dictionary['Opportunity']['fields']['territory_c']['visibility_grid']='';

 

 // created: 2014-05-14 08:44:00
$dictionary['Opportunity']['fields']['lost_reason_c']['labelValue']='Lost Reason';
$dictionary['Opportunity']['fields']['lost_reason_c']['visibility_grid']=array (
  'trigger' => 'status_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'NEW' => 
    array (
    ),
    'QUALIFYING' => 
    array (
    ),
    'LOST' => 
    array (
      0 => 'NO_CONTACT',
      1 => 'DUP_LEAD',
      2 => 'NO_PROD_INTEREST',
      3 => 'TARGET_PRODUCT_EXISTS',
      4 => 'WRONG_PROSPECT',
    ),
    'WON' => 
    array (
    ),
  ),
);

 

 // created: 2014-04-21 13:57:34
$dictionary['Opportunity']['fields']['amount_usdollar']['comments']='Formatted amount of the opportunity';
$dictionary['Opportunity']['fields']['amount_usdollar']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['amount_usdollar']['duplicate_merge_dom_value']='0';
$dictionary['Opportunity']['fields']['amount_usdollar']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['amount_usdollar']['calculated']=false;
$dictionary['Opportunity']['fields']['amount_usdollar']['enable_range_search']=false;

 

 // created: 2014-05-02 09:32:07
$dictionary['Opportunity']['fields']['account_manager_kam_c']['labelValue']='Account Manager (KAM)';
$dictionary['Opportunity']['fields']['account_manager_kam_c']['dependency']='equal($lead_source,"REAL_ESTATE")';

 

 // created: 2014-05-06 15:54:27
$dictionary['Opportunity']['fields']['enterprise_id']['required']=false;
$dictionary['Opportunity']['fields']['enterprise_id']['name']='enterprise_id';
$dictionary['Opportunity']['fields']['enterprise_id']['vname']='LBL_ENTERPRISE_ID';
$dictionary['Opportunity']['fields']['enterprise_id']['type']='varchar';
$dictionary['Opportunity']['fields']['enterprise_id']['massupdate']=0;
$dictionary['Opportunity']['fields']['enterprise_id']['no_default']=false;
$dictionary['Opportunity']['fields']['enterprise_id']['comments']='';
$dictionary['Opportunity']['fields']['enterprise_id']['help']='';
$dictionary['Opportunity']['fields']['enterprise_id']['importable']='true';
$dictionary['Opportunity']['fields']['enterprise_id']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['enterprise_id']['duplicate_merge_dom_value']='0';
$dictionary['Opportunity']['fields']['enterprise_id']['audited']=false;
$dictionary['Opportunity']['fields']['enterprise_id']['reportable']=true;
$dictionary['Opportunity']['fields']['enterprise_id']['unified_search']=false;
$dictionary['Opportunity']['fields']['enterprise_id']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['enterprise_id']['calculated']=false;
$dictionary['Opportunity']['fields']['enterprise_id']['len']='255';
$dictionary['Opportunity']['fields']['enterprise_id']['size']='20';

 

 // created: 2014-05-15 18:34:33
$dictionary['Opportunity']['fields']['email_t_url_doc_preq_certif_c']['labelValue']='email_t URL for Doc "Prequalification Certificate"';
$dictionary['Opportunity']['fields']['email_t_url_doc_preq_certif_c']['enforced']='';
$dictionary['Opportunity']['fields']['email_t_url_doc_preq_certif_c']['dependency']='';

 

 // created: 2014-05-02 00:38:40
$dictionary['Opportunity']['fields']['product_c']['labelValue']='Product Category';
$dictionary['Opportunity']['fields']['product_c']['enforced']='';
$dictionary['Opportunity']['fields']['product_c']['dependency']='';

 

 // created: 2014-05-14 09:43:08
$dictionary['Opportunity']['fields']['lead_provider_web_c']['labelValue']='Lead Provider (Web Entity)';
$dictionary['Opportunity']['fields']['lead_provider_web_c']['dependency']='equal($lead_source,"WEB_SITE")';

 

 // created: 2014-05-16 16:42:39
$dictionary['Opportunity']['fields']['communication_representative_c']['labelValue']='ooba Representative';
$dictionary['Opportunity']['fields']['communication_representative_c']['dependency']='';

 

 // created: 2014-05-14 09:19:57
$dictionary['Opportunity']['fields']['lead_provider_c']['labelValue']='Lead Provider';
$dictionary['Opportunity']['fields']['lead_provider_c']['dependency']='or(or(equal($lead_source,"TELEPHONE"),equal($lead_source,"EMAIL")),or(equal($lead_source,"WEB_FORM"),equal($lead_source,"WALK_IN")))';

 

 // created: 2014-05-21 15:18:18
$dictionary['Opportunity']['fields']['ea_branch_c']['labelValue']='Agency Branch';
$dictionary['Opportunity']['fields']['ea_branch_c']['dependency']='equal($lead_source,"REAL_ESTATE")';

 

 // created: 2014-05-02 00:38:40

 

 // created: 2014-05-02 00:38:39

 

 // created: 2014-04-25 18:08:47

 

 // created: 2014-05-13 18:39:15
$dictionary['Opportunity']['fields']['reporting_amount_group_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['reporting_amount_group_c']['labelValue']='Reporting Amount Group';
$dictionary['Opportunity']['fields']['reporting_amount_group_c']['calculated']='1';
$dictionary['Opportunity']['fields']['reporting_amount_group_c']['formula']='greaterThan($desired_amount_c,0)';
$dictionary['Opportunity']['fields']['reporting_amount_group_c']['enforced']='1';
$dictionary['Opportunity']['fields']['reporting_amount_group_c']['dependency']='';

 

 // created: 2014-05-14 09:03:49

 

 // created: 2014-05-02 05:13:47

 

 // created: 2014-05-14 09:07:52

 

 // created: 2014-05-14 12:33:25
$dictionary['Opportunity']['fields']['renew_number_c']['labelValue']='Renew Number';
$dictionary['Opportunity']['fields']['renew_number_c']['enforced']='';
$dictionary['Opportunity']['fields']['renew_number_c']['dependency']='';

 

 // created: 2014-05-06 15:58:56
$dictionary['Opportunity']['fields']['primary_lead_c']['labelValue']='Primary Lead';
$dictionary['Opportunity']['fields']['primary_lead_c']['dependency']='';

 

 // created: 2014-05-04 13:15:03
$dictionary['Opportunity']['fields']['status_c']['labelValue']='Status';
$dictionary['Opportunity']['fields']['status_c']['dependency']='';
$dictionary['Opportunity']['fields']['status_c']['visibility_grid']='';

 

 // created: 2014-05-06 15:59:24
$dictionary['Opportunity']['fields']['refferer_c']['labelValue']='Refferer';
$dictionary['Opportunity']['fields']['refferer_c']['dependency']='';

 

 // created: 2014-05-02 00:38:40

 

 // created: 2014-04-25 18:08:48

 

 // created: 2014-05-15 18:26:21
$dictionary['Opportunity']['fields']['email_t_preq_exp_phone_mob_c']['labelValue']='email_t Prequalification Expert - Mobile Phone';
$dictionary['Opportunity']['fields']['email_t_preq_exp_phone_mob_c']['enforced']='';
$dictionary['Opportunity']['fields']['email_t_preq_exp_phone_mob_c']['dependency']='';

 

$dictionary['Opportunity']['fields']['communication_representative_c']=
    array (
      'labelValue' => 'ooba Representative',
      'dependency' => '',
      'required' => false,
      'source' => 'non-db',
      'name' => 'communication_representative_c',
      'vname' => 'LBL_COMMUNICATION_REPRESENTATIVE',
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
      'id_name' => 'rls01_resources_id2_c',
      'ext2' => 'rls01_Resources',
      'module' => 'rls01_Resources',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'id' => 'Opportunitiescommunication_representative_c',
      'custom_module' => 'Opportunities',
    );
    $dictionary['Opportunity']['fields']['rls01_resources_id2_c']=    
    array (
      array (
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'rls01_resources_id2_c',
      'vname' => 'LBL_COMMUNICATION_REPRESENTATIVE_RLS01_RESOURCES_ID',
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
      'id' => 'Opportunitiesrls01_resources_id2_c',
      'custom_module' => 'Opportunities',
          )
    ); 

 // created: 2014-05-15 18:31:32
$dictionary['Opportunity']['fields']['email_t_ooba_represent_email_c']['labelValue']='email_t ooba Representative - Email';
$dictionary['Opportunity']['fields']['email_t_ooba_represent_email_c']['enforced']='';
$dictionary['Opportunity']['fields']['email_t_ooba_represent_email_c']['dependency']='';

 

 // created: 2014-05-15 18:27:09
$dictionary['Opportunity']['fields']['email_t_preq_exp_phone_work_c']['labelValue']='email_t Prequalification Expert - Work Phone';
$dictionary['Opportunity']['fields']['email_t_preq_exp_phone_work_c']['enforced']='';
$dictionary['Opportunity']['fields']['email_t_preq_exp_phone_work_c']['dependency']='';

 

 // created: 2014-05-02 00:38:39

 

// created: 2014-05-14 12:15:23
$dictionary["Opportunity"]["fields"]["opportunities_opportunities_1"] = array (
  'name' => 'opportunities_opportunities_1',
  'type' => 'link',
  'relationship' => 'opportunities_opportunities_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_OPPORTUNITIES_1_FROM_OPPORTUNITIES_L_TITLE',
);
$dictionary["Opportunity"]["fields"]["opportunities_opportunities_1"] = array (
  'name' => 'opportunities_opportunities_1',
  'type' => 'link',
  'relationship' => 'opportunities_opportunities_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_OPPORTUNITIES_1_FROM_OPPORTUNITIES_R_TITLE',
);


 // created: 2014-05-11 21:17:22
$dictionary['Opportunity']['fields']['name']['comments']='Name of the opportunity';
$dictionary['Opportunity']['fields']['name']['importable']='false';
$dictionary['Opportunity']['fields']['name']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['name']['calculated']='1';
$dictionary['Opportunity']['fields']['name']['reportable']=true;
$dictionary['Opportunity']['fields']['name']['required']=true;
$dictionary['Opportunity']['fields']['name']['formula']='ifElse(true,$ref_number_c,"0")';
$dictionary['Opportunity']['fields']['name']['enforced']=true;
$dictionary['Opportunity']['fields']['name']['full_text_search']=array (
);

 

 // created: 2014-05-01 21:05:17
$dictionary['Opportunity']['fields']['opportunity_type']['len']=100;
$dictionary['Opportunity']['fields']['opportunity_type']['options']='opportunity_type';
$dictionary['Opportunity']['fields']['opportunity_type']['comments']='Type of opportunity (ex: Existing, New)';
$dictionary['Opportunity']['fields']['opportunity_type']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['opportunity_type']['calculated']=false;
$dictionary['Opportunity']['fields']['opportunity_type']['dependency']=false;

 

 // created: 2014-05-15 18:22:58
$dictionary['Opportunity']['fields']['email_t_preq_exp_email_c']['labelValue']='email_t Prequalification Expert - Email';
$dictionary['Opportunity']['fields']['email_t_preq_exp_email_c']['enforced']='';
$dictionary['Opportunity']['fields']['email_t_preq_exp_email_c']['dependency']='';

 

 // created: 2014-05-15 18:24:22
$dictionary['Opportunity']['fields']['email_t_preq_exp_name_c']['labelValue']='email_t Prequalification Expert - Name';
$dictionary['Opportunity']['fields']['email_t_preq_exp_name_c']['enforced']='';
$dictionary['Opportunity']['fields']['email_t_preq_exp_name_c']['dependency']='';

 


$dictionary['Opportunity']['fields']['sales_consultant_c']=
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
      'id' => 'Opportunitiessales_consultant_c',
      'custom_module' => 'Opportunities',
    );

$dictionary['Opportunity']['fields']['rls01_resources_id33_c']=
        
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
      'id' => 'Opportunitiesrls01_resources_id33_c',
      'custom_module' => 'Opportunities',
    );

 // created: 2014-05-02 04:26:58
$dictionary['Opportunity']['fields']['desired_amount_c']['labelValue']='Desired Amount';
$dictionary['Opportunity']['fields']['desired_amount_c']['enforced']='';
$dictionary['Opportunity']['fields']['desired_amount_c']['dependency']='';

 

 // created: 2014-05-02 06:20:59
$dictionary['Opportunity']['fields']['agency_c']['labelValue']='Agency';
$dictionary['Opportunity']['fields']['agency_c']['dependency']='equal($lead_source,"REAL_ESTATE")';

 

 // created: 2014-05-14 09:42:49
$dictionary['Opportunity']['fields']['lead_provider_resource_c']['labelValue']='Lead Provider (Resource)';
$dictionary['Opportunity']['fields']['lead_provider_resource_c']['dependency']='equal($lead_source,"STAFF")';

 

 // created: 2014-05-04 13:14:47
$dictionary['Opportunity']['fields']['sales_stage']['len']=100;
$dictionary['Opportunity']['fields']['sales_stage']['required']=false;
$dictionary['Opportunity']['fields']['sales_stage']['audited']=false;
$dictionary['Opportunity']['fields']['sales_stage']['options']='sales_stage_ooba_list';
$dictionary['Opportunity']['fields']['sales_stage']['comments']='Indication of progression towards closure';
$dictionary['Opportunity']['fields']['sales_stage']['importable']='true';
$dictionary['Opportunity']['fields']['sales_stage']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['sales_stage']['calculated']=false;
$dictionary['Opportunity']['fields']['sales_stage']['dependency']=false;
$dictionary['Opportunity']['fields']['sales_stage']['default']='PITCH';

 

 // created: 2014-05-09 00:49:44
$dictionary['Opportunity']['fields']['sales_consultant_name_c']['labelValue']='Sales Consultant Name';
$dictionary['Opportunity']['fields']['sales_consultant_name_c']['enforced']='';
$dictionary['Opportunity']['fields']['sales_consultant_name_c']['dependency']='';

 

 // created: 2014-05-15 18:20:44
$dictionary['Opportunity']['fields']['email_t_comm_prosp_name_c']['labelValue']='email_t Communication Prospect - Name';
$dictionary['Opportunity']['fields']['email_t_comm_prosp_name_c']['enforced']='';
$dictionary['Opportunity']['fields']['email_t_comm_prosp_name_c']['dependency']='';

 

 // created: 2014-05-02 00:38:39
$dictionary['Opportunity']['fields']['communication_prospectprimar_c']['labelValue']='Communication Prospect';
$dictionary['Opportunity']['fields']['communication_prospectprimar_c']['dependency']='';

 

 // created: 2014-05-02 00:38:40

 

 // created: 2014-05-02 00:38:40

 

 // created: 2014-05-15 18:19:13
$dictionary['Opportunity']['fields']['email_t_comm_prosp_email_c']['labelValue']='email_t Communication Prospect - Email';
$dictionary['Opportunity']['fields']['email_t_comm_prosp_email_c']['enforced']='';
$dictionary['Opportunity']['fields']['email_t_comm_prosp_email_c']['dependency']='';

 

 // created: 2014-04-25 18:08:48

 

 // created: 2014-05-15 18:28:23
$dictionary['Opportunity']['fields']['email_t_lead_provider_name_c']['labelValue']='email_t Lead Provider - Name';
$dictionary['Opportunity']['fields']['email_t_lead_provider_name_c']['enforced']='';
$dictionary['Opportunity']['fields']['email_t_lead_provider_name_c']['dependency']='';

 

 // created: 2014-05-02 00:38:40

 
?>