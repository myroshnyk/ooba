<?php
 // created: 2014-05-02 05:52:29
$dictionary['Quote']['fields']['product_c']['duplicate_merge_dom_value']=0;
$dictionary['Quote']['fields']['product_c']['labelValue']='Product Category';
$dictionary['Quote']['fields']['product_c']['calculated']='true';
$dictionary['Quote']['fields']['product_c']['formula']='ifElse(true,related($opportunities,"product_c"),"0")';
$dictionary['Quote']['fields']['product_c']['enforced']='true';
$dictionary['Quote']['fields']['product_c']['dependency']='';

 ?>