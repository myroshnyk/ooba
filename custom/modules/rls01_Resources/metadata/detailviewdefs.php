<?php
$module_name = 'rls01_Resources';
$viewdefs [$module_name] = 
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
          //btn 'Manage Subscriptions'
          array (           
              'customCode' => '<input title="Manage Subscriptions" class="button" onclick="this.form.return_module.value=\'rls01_Resources\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'\'; " type="submit" name="rls_manage_subscriptions" value="Manage Subscriptions" id="rls_manage_subscriptions">',
          ),
         //btn 'Convert to User'
          array (           
              'customCode' => '<input title="Convert to User" class="button" onclick="this.form.return_module.value=\'rls01_Resources\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'\'; " type="submit" name="rls_convert_to_user" value="Convert to User" id="rls_convert_to_user">',
          ),
        ),
      ),
      'useTabs' => false,
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
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'enterprise_id',
            'label' => 'LBL_ENTERPRISE_ID',
          ),
          1 => 
          array (
            'name' => 'picture',
            'comment' => 'Picture file',
            'label' => 'LBL_PICTURE_FILE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'comment' => 'First name of the contact',
            'label' => 'LBL_FIRST_NAME',
          ),
          1 => 
          array (
            'name' => 'resource_type',
            'studio' => 'visible',
            'label' => 'LBL_RESOURCE_TYPE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'last_name',
            'comment' => 'Last name of the contact',
            'label' => 'LBL_LAST_NAME',
          ),
          1 => 
          array (
            'name' => 'resource_status',
            'studio' => 'visible',
            'label' => 'LBL_RESOURCE_STATUS',
          ),
        ),
        3 => 
        array (
          0 => 'department',
          1 => 
          array (
            'name' => 'phone_work',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'job_code',
            'label' => 'LBL_JOB_CODE',
          ),
          1 => 
          array (
            'name' => 'phone_mobile',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'job_name',
            'label' => 'LBL_JOB_NAME',
          ),
          1 => 
          array (
            'name' => 'phone_other',
            'label' => 'LBL_OTHER_PHONE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'im_type',
            'studio' => 'visible',
            'label' => 'LBL_IM_TYPE',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX_PHONE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'im_name',
            'label' => 'LBL_IM_NAME',
          ),
          1 => 
          array (
            'name' => 'phone_home',
            'label' => 'LBL_HOME_PHONE',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 
            array (
              'editview' => true,
              'editField' => true,
              'searchview' => false,
              'popupsearch' => false,
            ),
            'label' => 'LBL_EMAIL_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'reports_to',
            'studio' => 'visible',
            'label' => 'LBL_REPORTS_TO',
          ),
        ),
        9 => 
        array (
          0 => '',
          1 => 'description',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
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
            'name' => 'employee_number',
            'label' => 'LBL_EMPLOYEE_NUMBER',
          ),
        ),
        2 => 
        array (
          0 => 'team_name',
          1 => 
          array (
            'name' => 'user_rel',
            'studio' => 'visible',
            'label' => 'LBL_USER_REL',
          ),
        ),
      ),
    ),
  ),
);
?>
