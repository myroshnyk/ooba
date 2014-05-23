<?php
$module_name = 'rls01_Resources';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
          'file' => 'custom/include/rls/jquery/jquery.maskedinput.js',
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
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
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
          0 => 'last_name',
          1 => 
          array (
            'name' => 'resource_status',
            'studio' => 'visible',
            'label' => 'LBL_RESOURCE_STATUS',
          ),
        ),
        3 => 
        array (
          0 => 'title',
          1 => 'phone_work',
        ),
        4 => 
        array (
          0 => 'department',
          1 => 'phone_mobile',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'job_code',
            'label' => 'LBL_JOB_CODE',
          ),
          1 => 'phone_other',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'job_name',
            'label' => 'LBL_JOB_NAME',
          ),
          1 => 'phone_fax',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'im_type',
            'studio' => 'visible',
            'label' => 'LBL_IM_TYPE',
          ),
          1 => 'phone_home',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'im_name',
            'label' => 'LBL_IM_NAME',
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
          1 => 'description',
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'rls01_resources_users_name',
          ),
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
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
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
          0 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
        ),
      ),
    ),
  ),
);
?>
