<?php
$module_name = 'rls01_RealEstateAgencies';
$_object_name = 'rls01_realestateagencies';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
        1 => 
        array (
          'file' => 'custom/include/rls/jquery/jquery.maskedinput.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_ADDRESS_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EMAIL_ADDRESSES' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_DESCRIPTION_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'phone_office',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'trading_name',
            'label' => 'LBL_TRADING_NAME',
          ),
          1 => 'phone_alternate',
        ),
        2 => 
        array (
          0 => 'website',
          1 => 'phone_fax',
        ),
        3 => 
        array (
          0 => 'email1',
          1 => '',
        ),
        4 => 
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
        5 => 
        array (
          0 => 
          array (
            'name' => 'active',
            'label' => 'LBL_ACTIVE',
          ),
          1 => 
          array (
            'name' => 'enterprise_id',
            'label' => 'LBL_ENTERPRISE_ID',
          ),
        ),
      ),
      'lbl_address_information' => 
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
            'name' => 'billing_address_city',
            'comment' => 'The city used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_CITY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_postalcode',
            'comment' => 'The postal code used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
          ),
          1 => 
          array (
            'name' => 'billing_address_state',
            'comment' => 'The state used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_STATE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_country',
            'comment' => 'The country used for the billing address',
            'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
          ),
          1 => '',
        ),
      ),
      'lbl_email_addresses' => 
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
            'name' => 'shipping_address_city',
            'comment' => 'The city used for the shipping address',
            'label' => 'LBL_SHIPPING_ADDRESS_CITY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'shipping_address_postalcode',
            'comment' => 'The zip code used for the shipping address',
            'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
          ),
          1 => 
          array (
            'name' => 'shipping_address_state',
            'comment' => 'The state used for the shipping address',
            'label' => 'LBL_SHIPPING_ADDRESS_STATE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'shipping_address_country',
            'comment' => 'The country used for the shipping address',
            'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
          ),
          1 => 
          array (
            'name' => 'copy_address_from_up',
            'label' => 'LBL_COPY_ADDRESS_FROM_UP',
          ),
        ),
      ),
      'lbl_description_information' => 
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
