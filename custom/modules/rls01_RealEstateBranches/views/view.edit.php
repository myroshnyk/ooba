<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.edit.php');

 
class rls01_RealEstateBranchesViewEdit extends ViewEdit
{
  
  // @see SugarView::preDisplay()
  public function preDisplay()
  {
    parent::preDisplay();
  }


   // @see SugarView::display()	
  function display(){
   
    $javascript= 
<<<EOQ
    <script language='javascript'>
      $(function() {
          
        $.mask.definitions['~'] = "[+-]";                          // Setup masked phone number input
        $("#phone_office").mask("(999) 999-9999");
        $("#phone_alternate").mask("(999) 999-9999");
        $("#phone_fax").mask("(999) 999-9999");

        $("input").blur(function() {
          $("#info").html("Unmasked value: " + $(this).mask());
        }).dblclick(function() {
          $(this).unmask();
        });
              
        
     //************ Address *******************************
     //****************************************************
     // Address Detail 
     $('#btn_suburb_post_office').removeAttr('onclick');          
      $('#btn_suburb_post_office').on('click',(function() {             
        var initialfilter="";
        open_popup ("rls01_Suburbs", 600, 400, initialfilter, true, false, {
          "call_back_function": "set_return",
          "form_name": "EditView",
          "field_to_name_array": {
            "id" : "rls01_suburbs_id_c",
            "name" : "suburb_post_office",
            "country" : "billing_address_country", 
            "city_town":"billing_address_city",
            "province":"billing_address_state",
            //"street_postal_code":"street_name",
            "post_postal_code":"billing_address_postalcode",
          
          },
        }, "single", true);
      }));
    
     //****************************************************
     //****************************************************
        
               
      });
    </script>
EOQ;
            
    parent::display();
    echo $javascript; 
  }

}