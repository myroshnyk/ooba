<?php
$viewdefs ['Products'] = 
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
      'javascript' => '{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
{sugar_getscript file="modules/Products/EditView.js"}',
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        0 => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        1 => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
            ),
            'customCode' => '<input name="name" id="name" type="text" value="{$fields.name.value}"><input name="product_template_id" id="product_template_id" type="hidden" value="{$fields.product_template_id.value}">&nbsp;<input title="{$APP.LBL_SELECT_BUTTON_TITLE}" type="button" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick=\'return get_popup_product("{$form_name}");\'>&nbsp;<input tabindex="1" title="{$LBL_CLEAR_BUTTON_TITLE}" class="button" onclick="this.form.product_template_id.value = \'\'; this.form.name.value = \'\';" type="button" value="{$APP.LBL_CLEAR_BUTTON_LABEL}">',
          ),
          1 => 
          array (
            'name' => 'enterprise_id',
            'label' => 'LBL_ENTERPRISE_ID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'quote_name',
            'comment' => 'Quote Name',
            'label' => 'LBL_QUOTE_NAME',
          ),
          1 => 'status',
        ),
      ),
      0 => 
      array (
        0 => 
        array (
          0 => 'currency_id',
          1 => '',
        ),
        1 => 
        array (
          0 => 'list_price',
          1 => '',
        ),
      ),
      1 => 
      array (
        0 => 
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
        1 => 
        array (
          0 => 
          array (
            'name' => 'team_name',
            'label' => 'LBL_TEAMS',
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
