<?php
$viewdefs ['Contacts'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
          4 => 
          array (
            'customCode' => '<input type="submit" class="button" title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" onclick="this.form.return_module.value=\'Contacts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Contacts\';" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}"/>',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
              'htmlOptions' => 
              array (
                'class' => 'button',
                'id' => 'manage_subscriptions_button',
                'title' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                'onclick' => 'this.form.return_module.value=\'Contacts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Contacts\';',
                'name' => 'Manage Subscriptions',
              ),
            ),
          ),
            
          //btn 'Verify Credit Docs'
          array (           
              'customCode' => '<input title="Verify Credit Docs" class="button" onclick="this.form.return_module.value=\'Contacts\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'\'; " type="submit" name="rls_verify_credit_docs" value="Verify Credit Docs" id="rls_verify_credit_docs">',
          ),
         //btn 'Verify Financial Docs'
          array (           
              'customCode' => '<input title="Verify Financial Docs" class="button" onclick="this.form.return_module.value=\'Contacts\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'\'; " type="submit" name="rls_verify_financial_docs" value="Verify Financial Docs" id="rls_verify_financial_docs">',
          ),  
        ),
      ),
      'maxColumns' => '2',
      'useTabs' => false,
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Leads/Lead.js',
        ),
      ),
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'comment' => 'First name of the contact',
            'label' => 'LBL_FIRST_NAME',
          ),
          1 => 
          array (
            'name' => 'last_name',
            'comment' => 'Last name of the contact',
            'label' => 'LBL_LAST_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'phone_home',
            'comment' => 'Home phone number of the contact',
            'label' => 'LBL_HOME_PHONE',
          ),
          1 => 
          array (
            'name' => 'phone_work',
            'label' => 'LBL_OFFICE_PHONE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile',
            'label' => 'LBL_MOBILE_PHONE',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX_PHONE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'do_not_call',
            'comment' => 'An indicator of whether contact can be called',
            'label' => 'LBL_DO_NOT_CALL',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'label' => 'LBL_PRIMARY_ADDRESS',
            'customCode' => '{$PRIMARY_ADDRESS}',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
            ),
          ),
          1 => 
          array (
            'name' => 'alt_address_street',
            'label' => 'LBL_ALTERNATE_ADDRESS',
            'customCode' => '{$ALTERNATE_ADDRESS}',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'alt',
            ),
          ),
        ),
        5 => 
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
        6 => 
        array (
          0 => 
          array (
            'name' => 'birthdate',
            'comment' => 'The birthdate of the contact',
            'label' => 'LBL_BIRTHDATE',
          ),
          1 => 
          array (
            'name' => 'gender_c',
            'studio' => 'visible',
            'label' => 'LBL_GENDER',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'sacitizen_c',
            'label' => 'LBL_SACITIZEN',
          ),
          1 => 
          array (
            'name' => 'occupation_status_c',
            'studio' => 'visible',
            'label' => 'LBL_OCCUPATION_STATUS',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'marital_status_c',
            'studio' => 'visible',
            'label' => 'LBL_MARITAL_STATUS',
          ),
          1 => 
          array (
            'name' => 'spouse_c',
            'studio' => 'visible',
            'label' => 'LBL_SPOUSE',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'length_of_employment_y_c',
            'label' => 'LBL_LENGTH_OF_EMPLOYMENT_Y',
          ),
          1 => 
          array (
            'name' => 'length_of_employment_m_c',
            'label' => 'LBL_LENGTH_OF_EMPLOYMENT_M',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'gross_income_c',
            'label' => 'LBL_GROSS_INCOME',
          ),
          1 => 
          array (
            'name' => 'monthly_surety_commitment_c',
            'label' => 'LBL_MONTHLY_SURETY_COMMITMENT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'expenses_c',
            'label' => 'LBL_EXPENSES',
          ),
          1 => 
          array (
            'name' => 'nett_income_c',
            'label' => 'LBL_NETT_INCOME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'amount_to_be_replaced_c',
            'label' => 'LBL_AMOUNT_TO_BE_REPLACED',
          ),
          1 => 
          array (
            'name' => 'nett_surplus_income_c',
            'label' => 'LBL_NETT_SURPLUS_INCOME',
          ),
        ),
        3 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'last_credit_check_performed_c',
            'label' => 'LBL_LAST_CREDIT_CHECK_PERFORMED',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => 'team_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        2 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'enterprise_id',
            'label' => 'LBL_ENTERPRISE_ID',
          ),
        ),
      ),
    ),
  ),
);
?>
