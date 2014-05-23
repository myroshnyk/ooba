<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/Opportunities/views/view.edit.php');
class CustomOpportunitiesViewEdit extends OpportunitiesViewEdit {

 	function display() {
		$category = new ProductCategory();
	   $opt= get_select_options_with_id($category->get_product_categories(true), $this->bean->product_c);
	   $this->ev->process();
           $this->ev->ss->assign('PRODCAT',$opt);
           
          if($this->ev->isDuplicate) { 
           foreach($this->ev->fieldDefs as $name=>$defs) { 
                   if(!empty($defs['auto_increment'])) { 
                      $this->ev->fieldDefs[$name]['value'] = ''; 
                   } 
           } 
        } 
        echo $this->ev->display();  //display rest normally
 	}
}
?>