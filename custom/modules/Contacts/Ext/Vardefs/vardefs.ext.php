<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2014-05-06 15:45:46
$dictionary['Contact']['fields']['unit_number_c']['labelValue']='Unit Number';
$dictionary['Contact']['fields']['unit_number_c']['enforced']='';
$dictionary['Contact']['fields']['unit_number_c']['dependency']='';

 

 // created: 2014-05-06 16:51:47
$dictionary['Contact']['fields']['length_of_employment_y_c']['labelValue']='Length of employment (Y)';
$dictionary['Contact']['fields']['length_of_employment_y_c']['enforced']='';
$dictionary['Contact']['fields']['length_of_employment_y_c']['dependency']='';

 

 // created: 2014-05-02 04:10:30
$dictionary['Contact']['fields']['id_type_c']['labelValue']='ID Type';
$dictionary['Contact']['fields']['id_type_c']['dependency']='';
$dictionary['Contact']['fields']['id_type_c']['visibility_grid']='';

 

 // created: 2014-05-06 16:52:42
$dictionary['Contact']['fields']['street_name_2_c']['labelValue']='Street Name';
$dictionary['Contact']['fields']['street_name_2_c']['enforced']='';
$dictionary['Contact']['fields']['street_name_2_c']['dependency']='';

 

 // created: 2014-05-06 17:03:21
$dictionary['Contact']['fields']['unit_number_2_c']['labelValue']='Unit Number';
$dictionary['Contact']['fields']['unit_number_2_c']['enforced']='';
$dictionary['Contact']['fields']['unit_number_2_c']['dependency']='';

 

 // created: 2014-05-02 09:03:27
$dictionary['Contact']['fields']['gender_c']['labelValue']='Gender';
$dictionary['Contact']['fields']['gender_c']['dependency']='';
$dictionary['Contact']['fields']['gender_c']['visibility_grid']='';

 

 // created: 2014-05-21 16:08:51
$dictionary['Contact']['fields']['building_complex_name_c']['labelValue']='Building / Complex Name';
$dictionary['Contact']['fields']['building_complex_name_c']['enforced']='';
$dictionary['Contact']['fields']['building_complex_name_c']['dependency']='';

 

 // created: 2014-05-21 16:26:40
$dictionary['Contact']['fields']['street_number2_c']['labelValue']='Street Number';
$dictionary['Contact']['fields']['street_number2_c']['enforced']='';
$dictionary['Contact']['fields']['street_number2_c']['dependency']='';

 

 // created: 2014-05-14 10:05:08
$dictionary['Contact']['fields']['credit_outcome_c']['labelValue']='Credit Outcome';
$dictionary['Contact']['fields']['credit_outcome_c']['dependency']='';
$dictionary['Contact']['fields']['credit_outcome_c']['visibility_grid']='';

 

 // created: 2014-05-21 16:15:31
$dictionary['Contact']['fields']['floor_2_c']['labelValue']='Floor #';
$dictionary['Contact']['fields']['floor_2_c']['enforced']='';
$dictionary['Contact']['fields']['floor_2_c']['dependency']='';

 

 // created: 2014-05-14 08:50:42
$dictionary['Contact']['fields']['amount_to_be_replaced_c']['labelValue']='Amount to be replaced';
$dictionary['Contact']['fields']['amount_to_be_replaced_c']['enforced']='';
$dictionary['Contact']['fields']['amount_to_be_replaced_c']['dependency']='';

 

 // created: 2014-05-02 00:38:38

 

 // created: 2014-05-21 16:23:59
$dictionary['Contact']['fields']['sacitizen_c']['labelValue']='SA Citizen';
$dictionary['Contact']['fields']['sacitizen_c']['enforced']='';
$dictionary['Contact']['fields']['sacitizen_c']['dependency']='';

 

 // created: 2014-05-06 17:04:02
$dictionary['Contact']['fields']['suburb_post_office_c']['labelValue']='Suburb / post office';
$dictionary['Contact']['fields']['suburb_post_office_c']['dependency']='';

 

 // created: 2014-04-25 18:17:59
$dictionary['Contact']['fields']['alt_address_postalcode']['required']=false;
$dictionary['Contact']['fields']['alt_address_postalcode']['comments']='Postal code for alternate address';
$dictionary['Contact']['fields']['alt_address_postalcode']['merge_filter']='disabled';
$dictionary['Contact']['fields']['alt_address_postalcode']['calculated']=false;

 

 // created: 2014-05-01 01:10:46
$dictionary['Contact']['fields']['phone_work']['comments']='Work phone number of the contact';
$dictionary['Contact']['fields']['phone_work']['merge_filter']='disabled';
$dictionary['Contact']['fields']['phone_work']['calculated']=false;

 

 // created: 2014-05-21 16:11:12
$dictionary['Contact']['fields']['enterprise_id']['required']=false;
$dictionary['Contact']['fields']['enterprise_id']['name']='enterprise_id';
$dictionary['Contact']['fields']['enterprise_id']['vname']='LBL_ENTERPRISE_ID';
$dictionary['Contact']['fields']['enterprise_id']['type']='varchar';
$dictionary['Contact']['fields']['enterprise_id']['massupdate']=0;
$dictionary['Contact']['fields']['enterprise_id']['no_default']=false;
$dictionary['Contact']['fields']['enterprise_id']['comments']='';
$dictionary['Contact']['fields']['enterprise_id']['help']='';
$dictionary['Contact']['fields']['enterprise_id']['importable']='true';
$dictionary['Contact']['fields']['enterprise_id']['duplicate_merge']='disabled';
$dictionary['Contact']['fields']['enterprise_id']['duplicate_merge_dom_value']='0';
$dictionary['Contact']['fields']['enterprise_id']['audited']=false;
$dictionary['Contact']['fields']['enterprise_id']['reportable']=true;
$dictionary['Contact']['fields']['enterprise_id']['unified_search']=false;
$dictionary['Contact']['fields']['enterprise_id']['merge_filter']='disabled';
$dictionary['Contact']['fields']['enterprise_id']['calculated']=false;
$dictionary['Contact']['fields']['enterprise_id']['len']='255';
$dictionary['Contact']['fields']['enterprise_id']['size']='20';

 

 // created: 2014-04-16 17:54:56
$dictionary['Contact']['fields']['title']['comments']='The title of the contact';
$dictionary['Contact']['fields']['title']['merge_filter']='disabled';
$dictionary['Contact']['fields']['title']['calculated']=false;

 

 // created: 2014-05-21 16:15:09
$dictionary['Contact']['fields']['floor2_c']['labelValue']='Floor #';
$dictionary['Contact']['fields']['floor2_c']['enforced']='';
$dictionary['Contact']['fields']['floor2_c']['dependency']='';

 

 // created: 2014-05-21 16:07:47
$dictionary['Contact']['fields']['building_complex_name2_c']['labelValue']='Building / Complex Name';
$dictionary['Contact']['fields']['building_complex_name2_c']['enforced']='';
$dictionary['Contact']['fields']['building_complex_name2_c']['dependency']='';

 

 // created: 2014-05-21 16:11:54
$dictionary['Contact']['fields']['expenses_c']['labelValue']='Expenses';
$dictionary['Contact']['fields']['expenses_c']['enforced']='';
$dictionary['Contact']['fields']['expenses_c']['dependency']='';

 

// created: 2014-04-28 17:29:09
$dictionary["Contact"]["fields"]["contacts_quotes_1"] = array (
  'name' => 'contacts_quotes_1',
  'type' => 'link',
  'relationship' => 'contacts_quotes_1',
  'source' => 'non-db',
  'module' => 'Quotes',
  'bean_name' => 'Quote',
  'vname' => 'LBL_CONTACTS_QUOTES_1_FROM_QUOTES_TITLE',
);


 // created: 2014-05-21 16:28:33
$dictionary['Contact']['fields']['suburb_post_office_2_c']['labelValue']='Suburb / post office';
$dictionary['Contact']['fields']['suburb_post_office_2_c']['dependency']='';

 

 // created: 2014-05-21 16:08:25
$dictionary['Contact']['fields']['building_complex_name_2_c']['labelValue']='Building / Complex Name';
$dictionary['Contact']['fields']['building_complex_name_2_c']['enforced']='';
$dictionary['Contact']['fields']['building_complex_name_2_c']['dependency']='';

 

 // created: 2014-05-01 01:13:11
$dictionary['Contact']['fields']['alt_address_state']['comments']='State for alternate address';
$dictionary['Contact']['fields']['alt_address_state']['merge_filter']='disabled';
$dictionary['Contact']['fields']['alt_address_state']['calculated']=false;

 

 // created: 2014-05-02 00:38:39

 

 // created: 2014-05-21 16:19:37
$dictionary['Contact']['fields']['nett_income_c']['labelValue']='Nett Income';
$dictionary['Contact']['fields']['nett_income_c']['enforced']='';
$dictionary['Contact']['fields']['nett_income_c']['dependency']='';

 

 // created: 2014-05-21 16:10:42
$dictionary['Contact']['fields']['copy_address_c']['labelValue']='Copy address from Primary';
$dictionary['Contact']['fields']['copy_address_c']['enforced']='';
$dictionary['Contact']['fields']['copy_address_c']['dependency']='';

 

 // created: 2014-05-21 16:19:04
$dictionary['Contact']['fields']['marital_status_c']['labelValue']='Marital Status';
$dictionary['Contact']['fields']['marital_status_c']['dependency']='';
$dictionary['Contact']['fields']['marital_status_c']['visibility_grid']='';

 

 // created: 2014-05-21 16:24:38
$dictionary['Contact']['fields']['spouse_c']['labelValue']='Spouse';
$dictionary['Contact']['fields']['spouse_c']['dependency']='';

 

 // created: 2014-04-25 18:18:07
$dictionary['Contact']['fields']['alt_address_country']['required']=false;
$dictionary['Contact']['fields']['alt_address_country']['comments']='Country for alternate address';
$dictionary['Contact']['fields']['alt_address_country']['merge_filter']='disabled';
$dictionary['Contact']['fields']['alt_address_country']['calculated']=false;

 

 // created: 2014-05-21 16:17:27
$dictionary['Contact']['fields']['gross_income_c']['labelValue']='Gross Income';
$dictionary['Contact']['fields']['gross_income_c']['enforced']='';
$dictionary['Contact']['fields']['gross_income_c']['dependency']='';

 

 // created: 2014-05-01 01:12:59
$dictionary['Contact']['fields']['primary_address_state']['comments']='State for primary address';
$dictionary['Contact']['fields']['primary_address_state']['merge_filter']='disabled';
$dictionary['Contact']['fields']['primary_address_state']['calculated']=false;

 

 // created: 2014-05-21 16:25:55
$dictionary['Contact']['fields']['street_name_c']['labelValue']='Street Name';
$dictionary['Contact']['fields']['street_name_c']['enforced']='';
$dictionary['Contact']['fields']['street_name_c']['dependency']='';

 

 // created: 2014-04-25 18:17:38
$dictionary['Contact']['fields']['primary_address_country']['required']=false;
$dictionary['Contact']['fields']['primary_address_country']['comments']='Country for primary address';
$dictionary['Contact']['fields']['primary_address_country']['merge_filter']='disabled';
$dictionary['Contact']['fields']['primary_address_country']['calculated']=false;

 

 // created: 2014-04-25 18:17:30
$dictionary['Contact']['fields']['primary_address_postalcode']['required']=false;
$dictionary['Contact']['fields']['primary_address_postalcode']['comments']='Postal code for primary address';
$dictionary['Contact']['fields']['primary_address_postalcode']['merge_filter']='disabled';
$dictionary['Contact']['fields']['primary_address_postalcode']['calculated']=false;

 

 // created: 2014-05-21 16:22:47
$dictionary['Contact']['fields']['occupation_status_c']['labelValue']='Occupation Status';
$dictionary['Contact']['fields']['occupation_status_c']['dependency']='';
$dictionary['Contact']['fields']['occupation_status_c']['visibility_grid']='';

 

 // created: 2014-04-23 12:36:59
$dictionary['Contact']['fields']['alt_address_city']['comments']='City for alternate address';
$dictionary['Contact']['fields']['alt_address_city']['merge_filter']='disabled';
$dictionary['Contact']['fields']['alt_address_city']['calculated']=false;

 

 // created: 2014-05-14 08:49:24
$dictionary['Contact']['fields']['monthly_surety_commitment_c']['labelValue']='Monthly Surety Commitment';
$dictionary['Contact']['fields']['monthly_surety_commitment_c']['enforced']='';
$dictionary['Contact']['fields']['monthly_surety_commitment_c']['dependency']='';

 

 // created: 2014-05-21 16:21:11
$dictionary['Contact']['fields']['nett_surplus_income_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['nett_surplus_income_c']['labelValue']='Nett Surplus Income';
$dictionary['Contact']['fields']['nett_surplus_income_c']['calculated']='1';
$dictionary['Contact']['fields']['nett_surplus_income_c']['formula']='subtract(add($nett_income_c,$amount_to_be_replaced_c),add($expenses_c,$monthly_surety_commitment_c))';
$dictionary['Contact']['fields']['nett_surplus_income_c']['enforced']='1';
$dictionary['Contact']['fields']['nett_surplus_income_c']['dependency']='';

 

 // created: 2014-05-02 00:38:39

 

 // created: 2014-05-01 01:09:56
$dictionary['Contact']['fields']['phone_home']['comments']='Home phone number of the contact';
$dictionary['Contact']['fields']['phone_home']['merge_filter']='disabled';
$dictionary['Contact']['fields']['phone_home']['calculated']=false;

 

 // created: 2014-05-06 17:03:36
$dictionary['Contact']['fields']['unit_number2_c']['labelValue']='Unit Number';
$dictionary['Contact']['fields']['unit_number2_c']['enforced']='';
$dictionary['Contact']['fields']['unit_number2_c']['dependency']='';

 

 // created: 2014-05-21 16:27:23
$dictionary['Contact']['fields']['street_number_c']['labelValue']='Street Number';
$dictionary['Contact']['fields']['street_number_c']['enforced']='';
$dictionary['Contact']['fields']['street_number_c']['dependency']='';

 

 // created: 2014-05-14 23:53:26
$dictionary['Contact']['fields']['credit_outcome_date_c']['labelValue']='Credit Outcome Date';
$dictionary['Contact']['fields']['credit_outcome_date_c']['enforced']='';
$dictionary['Contact']['fields']['credit_outcome_date_c']['dependency']='';

 

 // created: 2014-05-21 16:25:27
$dictionary['Contact']['fields']['street_name2_c']['labelValue']='Street Name';
$dictionary['Contact']['fields']['street_name2_c']['enforced']='';
$dictionary['Contact']['fields']['street_name2_c']['dependency']='';

 

 // created: 2014-05-21 16:18:13
$dictionary['Contact']['fields']['length_of_employment_m_c']['labelValue']='Length of employment (M)';
$dictionary['Contact']['fields']['length_of_employment_m_c']['enforced']='';
$dictionary['Contact']['fields']['length_of_employment_m_c']['dependency']='';

 

 // created: 2014-05-21 16:15:49
$dictionary['Contact']['fields']['floor_c']['labelValue']='Floor #';
$dictionary['Contact']['fields']['floor_c']['enforced']='';
$dictionary['Contact']['fields']['floor_c']['dependency']='';

 

 // created: 2014-05-02 09:02:45
$dictionary['Contact']['fields']['id_number_c']['labelValue']='ID Number';
$dictionary['Contact']['fields']['id_number_c']['enforced']='';
$dictionary['Contact']['fields']['id_number_c']['dependency']='';

 

 // created: 2014-05-14 10:08:10
$dictionary['Contact']['fields']['force_credit_check_c']['labelValue']='Force Credit Check';
$dictionary['Contact']['fields']['force_credit_check_c']['enforced']='';
$dictionary['Contact']['fields']['force_credit_check_c']['dependency']='';

 

 // created: 2014-05-21 16:27:03
$dictionary['Contact']['fields']['street_number_2_c']['labelValue']='Street Number';
$dictionary['Contact']['fields']['street_number_2_c']['enforced']='';
$dictionary['Contact']['fields']['street_number_2_c']['dependency']='';

 

 // created: 2014-04-23 12:28:31
$dictionary['Contact']['fields']['primary_address_city']['comments']='City for primary address';
$dictionary['Contact']['fields']['primary_address_city']['merge_filter']='disabled';
$dictionary['Contact']['fields']['primary_address_city']['calculated']=false;

 

 // created: 2014-05-02 00:38:38

 

 // created: 2014-05-21 16:09:59
$dictionary['Contact']['fields']['citizenship_c']['labelValue']='Citizenship';
$dictionary['Contact']['fields']['citizenship_c']['dependency']='';
$dictionary['Contact']['fields']['citizenship_c']['visibility_grid']='';

 

 // created: 2014-05-01 01:11:08
$dictionary['Contact']['fields']['do_not_call']['comments']='An indicator of whether contact can be called';
$dictionary['Contact']['fields']['do_not_call']['merge_filter']='disabled';
$dictionary['Contact']['fields']['do_not_call']['calculated']=false;

 

 // created: 2014-05-01 01:10:21
$dictionary['Contact']['fields']['birthdate']['comments']='The birthdate of the contact';
$dictionary['Contact']['fields']['birthdate']['merge_filter']='disabled';
$dictionary['Contact']['fields']['birthdate']['calculated']=false;
$dictionary['Contact']['fields']['birthdate']['enable_range_search']=false;

 
?>