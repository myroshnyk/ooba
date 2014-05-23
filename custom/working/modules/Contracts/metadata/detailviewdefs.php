<?php
$viewdefs ['Contracts'] = 
array (
  'DetailView' => 
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
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 
          array (
            'customCode' => '<input title="{$MOD.LBL_CREATE_BOND_OPPORTUNITY}" class="button" onclick="this.form.return_module.value=\'Contracts\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'PrequalificationConvertToBondService\'; " type="submit" name="rls_create_bond_opportunity" value="{$MOD.LBL_CREATE_BOND_OPPORTUNITY}" id="rls_create_bond_opportunity">',
          ),
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CONTRACT_INFORMATION' => 
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
      'lbl_contract_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_CONTRACT_NAME',
          ),
        ),
        1 => 
        array (
          0 => 'reference_code',
          1 => 'status',
        ),
        2 => 
        array (
          0 => 'opportunity_name',
          1 => 'description',
        ),
        3 => 
        array (
          0 => 'start_date',
          1 => 'end_date',
        ),
        4 => 
        array (
          0 => '',
          1 => 'expiration_notice',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'currency_id',
            'comment' => 'The currency in use for the contract',
            'label' => 'LBL_CURRENCY',
          ),
          1 => 
          array (
            'name' => 'total_contract_value',
            'label' => '{$MOD.LBL_TOTAL_CONTRACT_VALUE} ({$fields.currency_name.value})',
          ),
        ),
        6 => 
        array (
          0 => 'customer_signed_date',
          1 => 'company_signed_date',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'bond_reference_c',
            'label' => 'LBL_BOND_REFERENCE_C',
          ),
          1 => 
          array (
            'name' => 'bond_stage_c',
            'label' => 'LBL_BOND_STAGE_C',
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
          1 => 'team_name',
        ),
        1 => 
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
