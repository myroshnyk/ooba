<?php
class ProductCategoryNameLogicHook extends SugarBean
{
  function getProductCategoryName(SugarBean $bean, $event, $arguments)
  {
      $product_category=new ProductCategory();
      $product_category->retrieve($bean->product_c);
      $bean->product_text_c=$product_category->name;      
  }
}
