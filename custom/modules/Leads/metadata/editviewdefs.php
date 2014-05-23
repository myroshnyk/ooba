<?php
$viewdefs ['Leads'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="prospect_id" value="{if isset($smarty.request.prospect_id)}{$smarty.request.prospect_id}{else}{$bean->prospect_id}{/if}">',
          1 => '<input type="hidden" name="account_id" value="{if isset($smarty.request.account_id)}{$smarty.request.account_id}{else}{$bean->account_id}{/if}">',
          2 => '<input type="hidden" name="contact_id" value="{if isset($smarty.request.contact_id)}{$smarty.request.contact_id}{else}{$bean->contact_id}{/if}">',
          3 => '<input type="hidden" name="opportunity_id" value="{if isset($smarty.request.opportunity_id)}{$smarty.request.opportunity_id}{else}{$bean->opportunity_id}{/if}">',
        ),
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
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
          'file' => 'custom/include/rls/jquery/jquery.maskedinput.js',
        ),
      ),
      'javascript' => '<script type="text/javascript" language="Javascript">function copyAddressRight(form)  {ldelim} form.alt_address_street.value = form.primary_address_street.value;form.alt_address_city.value = form.primary_address_city.value;form.alt_address_state.value = form.primary_address_state.value;form.alt_address_postalcode.value = form.primary_address_postalcode.value;form.alt_address_country.value = form.primary_address_country.value;return true; {rdelim} function copyAddressLeft(form)  {ldelim} form.primary_address_street.value =form.alt_address_street.value;form.primary_address_city.value = form.alt_address_city.value;form.primary_address_state.value = form.alt_address_state.value;form.primary_address_postalcode.value =form.alt_address_postalcode.value;form.primary_address_country.value = form.alt_address_country.value;return true; {rdelim} </script>',
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
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'LBL_CONTACT_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'product_c',
            'studio' => 'visible',
            'label' => 'LBL_PRODUCT',
            'customCode' => '<select id="product_c" name="product_c">{$PRODCAT}</select>',
          ),
          1 => 
          array (
            'name' => 'ref_number_c',
            'label' => 'LBL_REF_NUMBER',
          ),
        ),
        1 => 
        array (
          0 => 'lead_source',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'agency_c',
            'studio' => 'visible',
            'label' => 'LBL_AGENCY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'lead_provider_web_c',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_PROVIDER_WEB ',
          ),
        ),
        4 => 
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
            'label' => 'LBL_ACCOUNT_MANAGER_KAM',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'lead_provider_resource_c',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_PROVIDER_RESOURCE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'lead_provider_c',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_PROVIDER',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'lead_provider_agent_c',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_PROVIDER_AGENT',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'communication_representative_c',
            'studio' => 'visible',
            'label' => 'LBL_COMMUNICATION_REPRESENTATIVE',
          ),
          1 => 
          array (
            'name' => 'sales_consultant_c',
            'studio' => 'visible',
            'label' => 'LBL_SALES_CONSULTANT',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'territory_c',
            'studio' => 'visible',
            'label' => 'LBL_TERRITORY',
          ),
          1 => 
          array (
            'name' => 'desired_amount_c',
            'label' => 'LBL_DESIRED_AMOUNT',
          ),
        ),
        10 => 
        array (
          0 => 'status',
          1 => 
          array (
            'name' => 'lost_reason_c',
            'studio' => 'visible',
            'label' => 'LBL_LOST_REASON_C',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
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
          0 => 
          array (
            'name' => 'phone_type_c',
            'studio' => 'visible',
            'label' => 'LBL_PHONE_TYPE',
          ),
        ),
        2 => 
        array (
          0 => 'phone_mobile',
        ),
        3 => 
        array (
          0 => 'phone_work',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'phone_home',
            'comment' => 'Home phone number of the contact',
            'label' => 'LBL_HOME_PHONE',
          ),
        ),
        5 => 
        array (
          0 => 'email1',
        ),
        6 => 
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
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        1 => 
        array (
          0 => 'campaign_name',
          1 => 'description',
        ),
      ),
    ),
  ),
);
?>
