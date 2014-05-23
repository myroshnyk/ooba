<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2014-04-21 21:38:00
$dictionary['Quote']['fields']['description']['comments']='Full text of the note';
$dictionary['Quote']['fields']['description']['merge_filter']='disabled';
$dictionary['Quote']['fields']['description']['calculated']=false;

 

 // created: 2014-05-02 04:40:22
$dictionary['Quote']['fields']['interest_rate_c']['labelValue']='Interest Rate';
$dictionary['Quote']['fields']['interest_rate_c']['enforced']='';
$dictionary['Quote']['fields']['interest_rate_c']['dependency']='';

 

 // created: 2014-05-02 00:38:40

 

 // created: 2014-05-11 16:45:54
$dictionary['Quote']['fields']['num_quotes_c']['labelValue']='num quotes';
$dictionary['Quote']['fields']['num_quotes_c']['enforced']='';
$dictionary['Quote']['fields']['num_quotes_c']['dependency']='';

 

// created: 2014-04-28 17:29:09
$dictionary["Quote"]["fields"]["contacts_quotes_1"] = array (
  'name' => 'contacts_quotes_1',
  'type' => 'link',
  'relationship' => 'contacts_quotes_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_QUOTES_1_FROM_CONTACTS_TITLE',
);


 // created: 2014-05-09 00:29:26
$dictionary['Quote']['fields']['quote_stage']['default']='Negotiation';
$dictionary['Quote']['fields']['quote_stage']['merge_filter']='disabled';
$dictionary['Quote']['fields']['quote_stage']['calculated']=false;
$dictionary['Quote']['fields']['quote_stage']['dependency']=false;

 

 // created: 2014-05-21 15:58:46
$dictionary['Quote']['fields']['enterprise_id']['required']=false;
$dictionary['Quote']['fields']['enterprise_id']['name']='enterprise_id';
$dictionary['Quote']['fields']['enterprise_id']['vname']='LBL_ENTERPRISE_ID';
$dictionary['Quote']['fields']['enterprise_id']['type']='varchar';
$dictionary['Quote']['fields']['enterprise_id']['massupdate']=0;
$dictionary['Quote']['fields']['enterprise_id']['no_default']=false;
$dictionary['Quote']['fields']['enterprise_id']['comments']='';
$dictionary['Quote']['fields']['enterprise_id']['help']='';
$dictionary['Quote']['fields']['enterprise_id']['importable']='true';
$dictionary['Quote']['fields']['enterprise_id']['duplicate_merge']='disabled';
$dictionary['Quote']['fields']['enterprise_id']['duplicate_merge_dom_value']='0';
$dictionary['Quote']['fields']['enterprise_id']['audited']=false;
$dictionary['Quote']['fields']['enterprise_id']['reportable']=true;
$dictionary['Quote']['fields']['enterprise_id']['unified_search']=false;
$dictionary['Quote']['fields']['enterprise_id']['merge_filter']='disabled';
$dictionary['Quote']['fields']['enterprise_id']['calculated']=false;
$dictionary['Quote']['fields']['enterprise_id']['len']='255';
$dictionary['Quote']['fields']['enterprise_id']['size']='20';

 

 // created: 2014-05-02 04:40:47
$dictionary['Quote']['fields']['loan_term_c']['labelValue']='Loan Term';
$dictionary['Quote']['fields']['loan_term_c']['dependency']='';
$dictionary['Quote']['fields']['loan_term_c']['visibility_grid']='';

 

 // created: 2014-05-02 05:52:29
$dictionary['Quote']['fields']['product_c']['duplicate_merge_dom_value']=0;
$dictionary['Quote']['fields']['product_c']['labelValue']='Product Category';
$dictionary['Quote']['fields']['product_c']['calculated']='true';
$dictionary['Quote']['fields']['product_c']['formula']='ifElse(true,related($opportunities,"product_c"),"0")';
$dictionary['Quote']['fields']['product_c']['enforced']='true';
$dictionary['Quote']['fields']['product_c']['dependency']='';

 

 // created: 2014-05-21 15:59:34
$dictionary['Quote']['fields']['lead_provider_c']['labelValue']='Lead Provider';
$dictionary['Quote']['fields']['lead_provider_c']['dependency']='';

 

 // created: 2014-05-21 15:55:50
$dictionary['Quote']['fields']['ea_branch_c']['labelValue']='EA branch';
$dictionary['Quote']['fields']['ea_branch_c']['dependency']='';

 

 // created: 2014-05-02 00:38:40

 

 // created: 2014-05-21 16:02:36
$dictionary['Quote']['fields']['total_gross_income_c']['labelValue']='Total Gross Income';
$dictionary['Quote']['fields']['total_gross_income_c']['enforced']='';
$dictionary['Quote']['fields']['total_gross_income_c']['dependency']='';

 

 // created: 2014-05-13 17:45:35
$dictionary['Quote']['fields']['status_c']['labelValue']='Status';
$dictionary['Quote']['fields']['status_c']['dependency']='';
$dictionary['Quote']['fields']['status_c']['visibility_grid']='';

 

 // created: 2014-05-21 16:03:22
$dictionary['Quote']['fields']['total_nett_disposable_inco_c']['labelValue']='Total Nett Disposable Income';
$dictionary['Quote']['fields']['total_nett_disposable_inco_c']['enforced']='';
$dictionary['Quote']['fields']['total_nett_disposable_inco_c']['dependency']='';

 

 // created: 2014-05-21 16:01:07
$dictionary['Quote']['fields']['refferer_c']['labelValue']='Refferer';
$dictionary['Quote']['fields']['refferer_c']['dependency']='';

 

 // created: 2014-04-25 18:08:53

 

 // created: 2014-05-02 00:38:40

 

 // created: 2014-05-11 16:32:43
$dictionary['Quote']['fields']['name']['merge_filter']='disabled';
$dictionary['Quote']['fields']['name']['unified_search']=false;
$dictionary['Quote']['fields']['name']['calculated']=false;
$dictionary['Quote']['fields']['name']['importable']='false';
$dictionary['Quote']['fields']['name']['required']=false;
$dictionary['Quote']['fields']['name']['full_text_search']=array (
);

 

 // created: 2014-05-02 05:49:00
$dictionary['Quote']['fields']['desired_amount_c']['duplicate_merge_dom_value']=0;
$dictionary['Quote']['fields']['desired_amount_c']['labelValue']='Desired Amount';
$dictionary['Quote']['fields']['desired_amount_c']['calculated']='true';
$dictionary['Quote']['fields']['desired_amount_c']['formula']='ifElse(true,related($opportunities,"desired_amount_c"),"0")';
$dictionary['Quote']['fields']['desired_amount_c']['enforced']='true';
$dictionary['Quote']['fields']['desired_amount_c']['dependency']='';

 

 // created: 2014-05-21 14:41:13
$dictionary['Quote']['fields']['agency_c']['labelValue']='Agency';
$dictionary['Quote']['fields']['agency_c']['dependency']='';

 

 // created: 2014-05-02 00:38:40
$dictionary['Quote']['fields']['campaign_c']['labelValue']='Campaign';
$dictionary['Quote']['fields']['campaign_c']['dependency']='';

 

 // created: 2014-05-21 16:01:45
$dictionary['Quote']['fields']['sales_territory_c']['labelValue']='Sales Territory';
$dictionary['Quote']['fields']['sales_territory_c']['dependency']='';
$dictionary['Quote']['fields']['sales_territory_c']['visibility_grid']='';

 

 // created: 2014-05-02 00:38:40

 

 // created: 2014-05-21 16:00:27
$dictionary['Quote']['fields']['prequalification_expert_c']['labelValue']='Prequalification Expert';
$dictionary['Quote']['fields']['prequalification_expert_c']['dependency']='';

 

 // created: 2014-05-02 00:38:40

 

 // created: 2014-05-02 00:38:40
$dictionary['Quote']['fields']['lead_source_c']['labelValue']='Lead Source';
$dictionary['Quote']['fields']['lead_source_c']['dependency']='';
$dictionary['Quote']['fields']['lead_source_c']['visibility_grid']='';

 

 // created: 2014-04-25 18:08:53

 

 // created: 2014-05-02 00:38:40

 
?>