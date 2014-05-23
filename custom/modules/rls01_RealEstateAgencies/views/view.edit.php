 <?php
 if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.edit.php');
 
class rls01_RealEstateAgenciesViewEdit extends ViewEdit
{

  // @see SugarView::preDisplay()
  public function preDisplay()
  {
    parent::preDisplay();
  }

 
   // @see SugarView::display()  
   function display() {
           
     $javascript= <<<EOQ
                
     <script language='javascript'>

     $(function() {
                
       $.mask.definitions['~'] = "[+-]";
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
      // Address Detail - Primary    
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
                
      function set_return (popup_reply_data) {                             // Native function extended   $('#copy_address').change();
        from_popup_return = true;
        var form_name = popup_reply_data.form_name;
        var name_to_value_array = popup_reply_data.name_to_value_array;

        for (var the_key in name_to_value_array) {
          if (the_key == 'toJSON') ;   // just ignore 
          else {
            var displayValue=name_to_value_array[the_key].replace(/&amp;/gi,'&').replace(/&lt;/gi,'<').replace(/&gt;/gi,'>').replace(/&#039;/gi,'\'').replace(/&quot;/gi,'"');;
            if (window.document.forms[form_name] && window.document.forms[form_name].elements[the_key]) {
              window.document.forms[form_name].elements[the_key].value = displayValue;
              SUGAR.util.callOnChangeListers(window.document.forms[form_name].elements[the_key]);
            }
          }
        }
        $('#copy_address_from_up').change();
      }
                
      //Address Detail - Other    
      $('#btn_suburb_post_office_2').removeAttr('onclick');            
      $('#btn_suburb_post_office_2').on('click',(function() {             
        var initialfilter="";
        open_popup ("rls01_Suburbs", 600, 400, initialfilter, true, false, {
          "call_back_function": "set_return",
          "form_name": "EditView",
          "field_to_name_array": {
            "id" : "rls01_suburbs_id1_c",
            "name" : "suburb_post_office_2",
            "country" : "shipping_address_country", 
            "city_town":"shipping_address_city",
            "province":"shipping_address_state",
            //"street_postal_code":"street_name_2",
            "post_postal_code":"shipping_address_postalcode",
           
          },
        }, "single", true);
      }));
      //****************************************************
      //****************************************************
      
      
      $("#copy_address_from_up").change (function() {                                              // Checkbox "Address Copy" changing reaction:
         if ($(this).attr("checked")) { 
           $("#LBL_EMAIL_ADDRESSES input:not([type=checkbox])").css('background-color', '#DCDCDC').attr('readonly', 'true');
           $("#btn_suburb_post_office_2").hide();
           $("#btn_clr_suburb_post_office_2").hide();
           
           $("#building_complex_name_2").val ($("#building_complex_name").val());        // Primary to Alternative address copy
           $("#floor_2").val ($("#floor").val());
           $("#street_number_2").val ($("#street_number").val());
           $("#suburb_post_office_2").val ($("#suburb_post_office").val());
           $("#rls01_suburbs_id1_c").val ($("#rls01_suburbs_id_c").val());
           $("#shipping_address_postalcode").val ($("#billing_address_postalcode").val());
           $("#shipping_address_country").val ($("#billing_address_country").val());
           $("#shipping_address_state").val ($("#billing_address_state").val());
           $("#shipping_address_city").val ($("#billing_address_city").val());
           $("#unit_number_2").val ($("#unit_number").val());
           $("#street_name_2").val ($("#street_name").val());
         }
         else {
           $("#LBL_EMAIL_ADDRESSES input:not([type=checkbox])").css('background-color', '').removeAttr('readonly');
           $("#btn_suburb_post_office_2").show();
           $("#btn_clr_suburb_post_office_2").show();
         }
      });
      
                                                                                             // Refresh Alternative address
      $("#LBL_ADDRESS_INFORMATION input").change (function() { $('#copy_address_from_up').change(); });
                              
     });                
        
     </script>
EOQ;
            
     parent::display();
     echo $javascript;
   }

}