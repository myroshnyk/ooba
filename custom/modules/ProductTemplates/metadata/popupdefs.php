<?php
$popupMeta = array (
    'moduleMain' => 'ProductTemplates',
    'varName' => 'ProductTemplate',
    'orderBy' => 'product_templates.name',
    'whereClauses' => array (
  'name' => 'product_templates.name',
  'category_name' => 'product_templates.category_name',
),
    'searchInputs' => array (
  0 => 'name',
  1 => 'category_name',
),
    'searchdefs' => array (
  0 => 'name',
  1 => 'category_name',
),
    'listviewdefs' => array (
  'CATEGORY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_CATEGORY',
    'sortable' => true,
    'default' => true,
    'name' => 'category_name',
  ),
  'NAME' => 
  array (
    'width' => '30%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_STATUS',
    'default' => true,
    'name' => 'status',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'ENTERPRISE_ID_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ENTERPRISE_ID',
    'width' => '10%',
  ),
),
);
