<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/


require_once('modules/Leads/views/view.detail.php');

class CustomLeadsViewDetail extends LeadsViewDetail {

   /**
     * @see SugarView::preDisplay()
     */
    public function preDisplay()
    {
        parent::preDisplay();
        $product_category=new ProductCategory();
        $product_category->retrieve($this->bean->product_c);
        $this->bean->product_c=$product_category->name;
        $this->bean->status=strtoupper($this->bean->status);        
            
    } 

  function display(){
  
    echo '<h1>'.htmlentities($this->view_object_map['msg']).'</h1>';
    

    global $mod_strings;
   
    $javascript = 
<<<EOQ

    <script language='javascript'>
      //$(function() {
      
        var elem = $('#contact_id_c');
        if (elem.attr('data-id-value') == '') { 
          elem.parent("td").prev("td").text(''); 
        }
            elem = $('#rls01_resources_id1_c');
        if (elem.attr('data-id-value') == '')  { 
          elem.parent("td").prev("td").text(''); 
        }
            elem = $('#rls01_realestateagents_id_c');
        if (elem.attr('data-id-value') == '')  { 
          elem.parent("td").prev("td").text(''); 
        }
            elem = $('#rls01_webentities_id_c');
        if (elem.attr('data-id-value') == '')  { 
          elem.parent("td").prev("td").text(''); 
        }
   
     // });
     function send_ooba_api(){
        console.log('START API');
        /*$.ajax({
        type :"POST",
        url:"index.php?module=Leads&action=NoDuplicate&record={$this->bean->id}",
        data:"id={$this->bean->id}",
        success:function(prin){
          console.log('END API');
        }
        });*/
        var html = $.ajax({
          url:"index.php?module=Leads&action=NoDuplicate&record={$this->bean->id}",
          async: false
         }).responseText;
          console.log(html);
          console.log('END API');
            }
    </script>
EOQ;
      parent::display();
      echo $javascript; 
   
  } 
  
}
?>
