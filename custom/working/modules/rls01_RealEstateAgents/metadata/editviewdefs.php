<?php
$module_name = 'rls01_RealEstateAgents';
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
            'file' => 'custom/include/rls/jquery/jquery.maskedinput.js'
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
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_ADDRESS_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
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
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 'last_name',
        ),
        1 => 
        array (
          0 => 'phone_work',
          1 => 'phone_mobile',
        ),
        2 => 
        array (
          0 => 'phone_fax',
          1 => '',
        ),
        3 => 
        array (
          0 => 'email1',
          1 => 
          array (
            'name' => 'enterprise_id',
            'label' => 'LBL_ENTERPRISE_ID',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'estate_agency',
            'studio' => 'visible',
            'label' => 'LBL_ESTATE_AGENCY',
          ),
          1 => 
          array (
            'name' => 'rls01_branches_rls01_agents_name',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'start_date',
            'label' => 'LBL_START_DATE',
          ),
          1 => 
          array (
            'name' => 'end_date',
            'label' => 'LBL_END_DATE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'active',
            'label' => 'LBL_ACTIVE',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'building_complex_name',
            'label' => 'LBL_BUILDING_COMPLEX_NAME',
          ),
          1 => 
          array (
            'name' => 'unit_number',
            'label' => 'LBL_UNIT_NUMBER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'floor',
            'label' => 'LBL_FLOOR',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'street_number',
            'label' => 'LBL_STREET_NUMBER',
          ),
          1 => 
          array (
            'name' => 'street_name',
            'label' => 'LBL_STREET_NAME',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'suburb_post_office',
            'studio' => 'visible',
            'label' => 'LBL_SUBURB_POST_OFFICE',
          ),
          1 => 
          array (
            'name' => 'primary_address_city',
            'comment' => 'City for primary address',
            'label' => 'LBL_PRIMARY_ADDRESS_CITY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_postalcode',
            'comment' => 'Postal code for primary address',
            'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
          ),
          1 => 
          array (
            'name' => 'primary_address_state',
            'comment' => 'State for primary address',
            'label' => 'LBL_PRIMARY_ADDRESS_STATE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_country',
            'comment' => 'Country for primary address',
            'label' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'building_complex_name_2',
            'label' => 'LBL_BUILDING_COMPLEX_NAME_2',
          ),
          1 => 
          array (
            'name' => 'unit_number_2',
            'label' => 'LBL_UNIT_NUMBER_2',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'floor_2',
            'label' => 'LBL_FLOOR_2',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'street_number_2',
            'label' => 'LBL_STREET_NUMBER_2',
          ),
          1 => 
          array (
            'name' => 'street_name_2',
            'label' => 'LBL_STREET_NAME_2',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'suburb_post_office_2',
            'studio' => 'visible',
            'label' => 'LBL_SUBURB_POST_OFFICE_2',
          ),
          1 => 
          array (
            'name' => 'alt_address_city',
            'comment' => 'City for alternate address',
            'label' => 'LBL_ALT_ADDRESS_CITY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'alt_address_postalcode',
            'comment' => 'Postal code for alternate address',
            'label' => 'LBL_ALT_ADDRESS_POSTALCODE',
          ),
          1 => 
          array (
            'name' => 'alt_address_state',
            'comment' => 'State for alternate address',
            'label' => 'LBL_ALT_ADDRESS_STATE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'alt_address_country',
            'comment' => 'Country for alternate address',
            'label' => 'LBL_ALT_ADDRESS_COUNTRY',
          ),
          1 => 
          array (
            'name' => 'copy_address',
            'label' => 'LBL_COPY_ADDRESS',
          ),
        ),
      ),
      'lbl_address_information' => 
      array (
        0 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
