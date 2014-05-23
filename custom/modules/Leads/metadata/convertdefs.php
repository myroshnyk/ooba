<?php
$viewdefs = array (
  'Contacts' => 
  array (
    'ConvertLead' => 
    array (
      'copyData' => true,
      'select' => false,
      'required' => true,
      'moduleName' => 'Contacts',
      'module' => 'Contacts',
      'default_action' => 'create',
      'templateMeta' => 
      array (
        'form' => 
        array (
          'hidden' => 
          array (
            0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
            1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
            2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
            3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
            4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
          ),
        ),
        'maxColumns' => '2',
        'widths' => 
        array (
          0 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
          1 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
        ),
      ),
      'panels' => 
      array (
        'LNK_NEW_CONTACT' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'first_name',
              'customCode' => '{html_options name="Contactssalutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="Contactsfirst_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
            ),
            1 => 'last_name',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'id_type_c',
              'studio' => 'visible',
              'label' => 'LBL_ID_TYPE',
            ),
            1 => 
            array (
              'name' => 'id_number_c',
              'label' => 'LBL_ID_NUMBER',
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'phone_home',
              'comment' => 'Home phone number of the contact',
              'label' => 'LBL_HOME_PHONE',
            ),
            1 => 
            array (
              'name' => 'phone_mobile',
              'comment' => 'Mobile phone number of the contact',
              'label' => 'LBL_MOBILE_PHONE',
            ),
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'phone_work',
              'comment' => 'Work phone number of the contact',
              'label' => 'LBL_OFFICE_PHONE',
            ),
            1 => 
            array (
              'name' => 'phone_other',
              'comment' => 'Other phone number for the contact',
              'label' => 'LBL_OTHER_PHONE',
            ),
          ),
          4 => 
          array (
            0 => 'email1',
          ),
        ),
      ),
    ),
  ),
  'Opportunities' => 
  array (
    'ConvertLead' => 
    array (
      'copyData' => true,
      'select' => false,
      'required' => true,
      'moduleName' => 'Opportunities',
      'module' => 'Opportunities',
      'panels' => 
      array (
        'LNK_NEW_OPPORTUNITY' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'ref_number_c',
              'label' => 'LBL_REF_NUMBER',
            ),
          ),
          1 => 
          array (
            0 => 'product_catalog_c',
          ),
          2 => 
          array (
            0 => 'lead_source',
          ),
          3 => 
          array (
            0 => 'lead_provider_c',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'agency_c',
              'studio' => 'visible',
              'label' => 'LBL_AGENCY',
            ),
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'ea_branch_c',
              'studio' => 'visible',
              'label' => 'LBL_EA_BRANCH',
            ),
            1 => 
            array (
              'name' => 'account_manager_kam_c',
              'studio' => 'visible',
              'label' => 'LBL_ACCOUNT_MANAGER_KAM_C',
            ),
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'lead_provider_agent_c',
              'studio' => 'visible',
              'label' => 'LBL_LEAD_PROVIDER_AGENT_C',
            ),
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'lead_provider_web_c',
              'studio' => 'visible',
              'label' => 'LBL_LEAD_PROVIDER_WEB_C',
            ),
            1 => 
            array (
              'name' => 'lead_provider_resource_c',
              'studio' => 'visible',
              'label' => 'LBL_LEAD_PROVIDER_RESOURCE_C',
            ),
          ),
          8 => 
          array (
            0 => 'desired_amount_c',
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'territory_c',
              'studio' => 'visible',
              'label' => 'LBL_TERRITORY',
            ),
          ),
          10 => 
          array (
            0 => 
            array (
              'name' => 'sales_consultant_c',
              'studio' => 'visible',
              'label' => 'LBL_SALES_CONSULTANT',
            ),
          ),
          11 => 
          array (
            0 => 
            array (
              'name' => 'communication_representative_c',
              'studio' => 'visible',
              'label' => 'LBL_COMMUNICATION_REPRESENTATIVE',
            ),
          ),
        ),
      ),
      'templateMeta' => 
      array (
        'maxColumns' => '2',
        'widths' => 
        array (
          0 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
          1 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
        ),
        'javascript' => '{$PROBABILITY_SCRIPT}',
        'useTabs' => false,
        'tabDefs' => 
        array (
          'LBL_EDITVIEW_PANEL1' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'LBL_PANEL_ASSIGNMENT' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
        ),
      ),
    ),
  ),
);
?>
