<?php
$viewdefs ['Leads'] = 
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
          3 => 
          array (
            'customCode' => '{if $bean->aclAccess("edit") && !$DISABLE_CONVERT_ACTION}<input title="{$MOD.LBL_CONVERTLEAD_TITLE}" accessKey="{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}" type="button" class="button" onClick="document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'" name="convert" value="{$MOD.LBL_CONVERTLEAD}">{/if}',
            'sugar_html' => 
            array (
              'type' => 'button',
              'value' => '{$MOD.LBL_CONVERTLEAD}',
              'htmlOptions' => 
              array (
                'title' => '{$MOD.LBL_CONVERTLEAD_TITLE}',
                'accessKey' => '{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}',
                'class' => 'button',
                'onClick' => 'document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'',
                'name' => 'convert',
                'id' => 'convert_lead_button',
              ),
              'template' => '{if $bean->aclAccess("edit") && !$DISABLE_CONVERT_ACTION}[CONTENT]{/if}',
            ),
          ),
          4 => 
          array (
            'customCode' => '<input title="Find Duplicate" accesskey="" class="button"  onclick="window.location.href = \'index.php?module=Leads&record={$fields.id.value}&action=ListDuplicate\'" type="button" name="rls_finde_duplicate" value="Find Duplicate"  id="rls_finde_duplicate" >',
          ),
          6 => 
          array (
            'customCode' => '<input title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" class="button" onclick="this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';" type="submit" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}">',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
              'htmlOptions' => 
              array (
                'title' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                'class' => 'button',
                'id' => 'manage_subscriptions_button',
                'onclick' => 'this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';',
                'name' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
              ),
            ),
          ),
        ),
        'headerTpl' => 'modules/Leads/tpls/DetailViewHeader.tpl',
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
      'LBL_CONTACT_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'product_c',
            'label' => 'LBL_PRODUCT',
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
          0 => 'phone_mobile',
          1 => 'phone_work',
        ),
        2 => 
        array (
          0 => 'email1',
          1 => 
          array (
            'name' => 'phone_home',
            'comment' => 'Home phone number of the contact',
            'label' => 'LBL_HOME_PHONE',
          ),
        ),
        3 => 
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
            'name' => 'campaign_name',
            'label' => 'LBL_CAMPAIGN',
          ),
          1 => 'description',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => 'team_name',
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
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'linked_to_lead_c',
            'studio' => 'visible',
            'label' => 'LBL_LINKED_TO_LEAD',
          ),
          1 => 
          array (
            'name' => 'contact_c',
            'studio' => 'visible',
            'label' => 'LBL_CONTACT',
          ),
        ),
      ),
    ),
  ),
);
?>
