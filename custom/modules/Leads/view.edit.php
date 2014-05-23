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

require_once('modules/Leads/views/view.edit.php');
class CustomLeadsViewEdit extends LeadsViewEdit
{
  
  /**
  * @see SugarView::display()
  */
  
  function display() {
    global $mod_strings;
  
    $javascript = <<<EOQ
      <script language='javascript'>
      
    checkFIO();  
    
       
    $("#first_name").keyup(function() {checkFIO(); });
    $("#last_name").keyup(function() {checkFIO(); });
    
     function checkFIO(){
            var first_name = trim($('#first_name').val());
            var last_name = trim($('#last_name').val());
            if((first_name!='')||(first_name!=null)||(last_name!='')||(last_name!=null)){
            $('#last_name_label').html('{$mod_strings['LBL_LAST_NAME']} ');
            removeFromValidate('EditView', 'last_name');
            
            $('#first_name_label').html('{$mod_strings['LBL_FIRST_NAME']} ');
            removeFromValidate('EditView', 'first_name');
        }
        if(((first_name=='')||(first_name==null))&&((last_name=='')||(last_name==null))){
            $('#first_name_label').html ('{$mod_strings['LBL_FIRST_NAME']} <span class="required">*</span>');      
            addToValidate ('EditView', 'first_name', 'varchar', true, '{$mod_strings['LBL_FIRST_NAME']}');
    
            $('#last_name_label').html ('{$mod_strings['LBL_LAST_NAME']} <span class="required">*</span>');      
            addToValidate ('EditView', 'last_name', 'varchar', true, '{$mod_strings['LBL_LAST_NAME']}');
        }
    }
      //$(function() {
                  
        $.mask.definitions['~'] = "[+-]";                          // Setup masked phone number input
        $("#phone_work").mask("(999) 999-9999");

        $("input").blur(function() {
          $("#info").html("Unmasked value: " + $(this).mask());
        }).dblclick(function() {
          $(this).unmask();
        });
                                                            
    //});
   
    $('#btn_ea_branch_c').removeAttr('onclick');               // EA Branch filtered by Agency
        $('#btn_ea_branch_c').on('click',(function() {            
          var agency = $('#agency_c').val();
          var initialfilter="&rls01_agencies_rls01_branches_name_advanced=" + agency;
        
          open_popup ("rls01_RealEstateBranches", 600, 400, initialfilter, true, false, {
            "call_back_function": "set_return",
            "form_name": "EditView",
            "field_to_name_array": {
              "id": "rls01_realestatebranches_id_c",
              "name": "ea_branch_c",
              "rls01_agencies_rls01_branchesrls01_realestateagencies_ida": "rls01_realestateagencies_id_c",
              "rls01_agencies_rls01_branches_name": "agency_c",              
              "rls01_resources_id":"rls01_resources_id4_c",
              //"account_manager_kam_c":"account_manager_kam_c",
             
            }
          }, "single", true);
        }));
       $('#account_manager_kam_c').attr('readonly', true);
       $('#btn_account_manager_kam_c').attr('disabled', 'disabled');
       $('#btn_clr_account_manager_kam_c').attr('disabled', 'disabled');
                     
       
       
    </script>
EOQ;

      //parent::display();
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
     echo $javascript; 
  }
}
