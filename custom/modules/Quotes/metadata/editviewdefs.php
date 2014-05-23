<?php
$viewdefs ['Quotes'] = 
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
      'form' => 
      array (
        'footerTpl' => 'custom/modules/Quotes/tpls/EditViewFooter.tpl',
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_QUOTE_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'lbl_quote_information' => 
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
          1 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'desired_amount_c',
            'label' => 'LBL_DESIRED_AMOUNT',
          ),
          1 => 'opportunity_name',
        ),
      ),
    ),
  ),
);
?>
