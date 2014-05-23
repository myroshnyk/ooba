<?php
$viewdefs ['Opportunities'] = 
array (
  'EditView' => 
  array (
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
          ),
        ),
        1 => 
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
        2 => 
        array (
          0 => 'lead_source',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'agency_c',
            'studio' => 'visible',
            'label' => 'LBL_AGENCY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'lead_provider_web_c',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_PROVIDER_WEB_C',
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
            'name' => 'lead_provider_resource_c',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_PROVIDER_RESOURCE_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'lead_provider_c',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_PROVIDER',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'lead_provider_agent_c',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_PROVIDER_AGENT_C',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'communication_prospectprimar_c',
            'studio' => 'visible',
            'label' => 'LBL_COMMUNICATION_PROSPECTPRIMAR',
          ),
          1 => 
          array (
            'name' => 'sales_consultant_c',
            'studio' => 'visible',
            'label' => 'LBL_SALES_CONSULTANT',
          ),
        ),
        10 => 
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
        11 => 
        array (
          0 => 
          array (
            'name' => 'status_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          1 => 'sales_stage',
        ),
        12 => 
        array (
          0 => 'probability',
          1 => 
          array (
            'name' => 'lost_reason_c',
            'studio' => 'visible',
            'label' => 'LBL_LOST_REASON',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'communication_representative_c',
            'studio' => 'visible',
            'label' => 'LBL_COMMUNICATION_REPRESENTATIVE',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'primary_lead_c',
            'studio' => 'visible',
            'label' => 'LBL_PRIMARY_LEAD',
          ),
        ),
        1 => 
        array (
          0 => 'campaign_name',
          1 => 'description',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
      ),
    ),
  ),
);
?>
