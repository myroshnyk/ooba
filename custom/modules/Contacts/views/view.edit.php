<?php  

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/Contacts/views/view.edit.php');


class CustomContactsViewEdit extends ContactsViewEdit
{
  
  //  @see SugarView::preDisplay()  
  public function preDisplay()
  {
    parent::preDisplay();            
  }
  
  
  // @see SugarView::display()   
  function display() {

    global $mod_strings;
         
    $jsscript = <<<EOQ
    <script>      
                                                                 // Setup requirement / unrequirement fields
      $('#marital_status_c').change (function () {            
        if ($('#marital_status_c').val() == '3') {               // 'Married in Community of Property'
          addToValidate ('EditView','spouse_c','varchar',true,'{$mod_strings['LBL_SPOUSE']}');   
          $('#spouse_c_label').html('{$mod_strings['LBL_SPOUSE']}: <span class="required">*</span>'); 
        }
        else {
          removeFromValidate('EditView','spouse_c');           
          $('#spouse_c_label').html('{$mod_strings['LBL_SPOUSE']}: '); 
        }
      });      
          
      $('#sacitizen_c').change (function() {    
        if ($(this).attr("checked")) {  
          addToValidate('EditView','id_number_c','varchar',true,'{$mod_strings['LBL_ID_NUMBER']}');    
          $('#id_number_c_label').html('{$mod_strings['LBL_ID_NUMBER']}: <span class="required">*</span>'); 
        }
        else {
          removeFromValidate('EditView','id_number_c');                        
          $('#id_number_c_label').html('{$mod_strings['LBL_ID_NUMBER']}: '); 
        }
      });
      
                                                                   // Setup phones masks
      $.mask.definitions['~'] = "[+-]";
      $("#phone_work").mask("(999) 999-9999");
      $("#phone_mobile").mask("(999) 999-9999");
      $("#phone_home").mask("(999) 999-9999");
      $("#phone_fax").mask("(999) 999-9999");

      $("input").blur(function() {
        $("#info").html("Unmasked value: " + $(this).mask());
      }).dblclick(function() {
        $(this).unmask();
      });
      
                                                                               
                                                                       // Country, city, province and postal code populate by Suburb
      $('#btn_suburb_post_office_c').removeAttr('onclick');                     
      $('#btn_suburb_post_office_c').on('click',(function() {                 // Address Detail - Primary
        var initialfilter="";
        open_popup ("rls01_Suburbs", 600, 400, initialfilter, true, false, {
          "call_back_function": "set_return",
          "form_name": "EditView",
          "field_to_name_array": {
            "id" : "rls01_suburbs_id_c",
            "name" : "suburb_post_office_c",
            "country" : "primary_address_country",
            "city_town" : "primary_address_city",
            "province" : "primary_address_state",
            "post_postal_code" : "primary_address_postalcode",
           
          },
        }, "single", true);                       
      }));
                        
      function set_return (popup_reply_data) {                             // Native function extended   $('#copy_address_c').change();
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
        $('#copy_address_c').change();
      }
                                                         
      $('#btn_suburb_post_office_2_c').removeAttr('onclick');                 // Address Detail - Other 
      $('#btn_suburb_post_office_2_c').on('click',(function() {           
        var initialfilter="";
        open_popup ("rls01_Suburbs", 600, 400, initialfilter, true, false, {
          "call_back_function": "set_return",
          "form_name": "EditView",
          "field_to_name_array": {
            "id" : "rls01_suburbs_id1_c",
            "name" : "suburb_post_office_2_c",
            "country" : "alt_address_country",
            "city_town" : "alt_address_city",
            "province" : "alt_address_state",
            "post_postal_code" : "alt_address_postalcode",          
          },
        }, "single", true);
      }));
                 
      
     
      $("#copy_address_c").change (function() {                                              // Checkbox "Address Copy" changing reaction:
         if ($(this).attr("checked")) { 
           $("#LBL_EDITVIEW_PANEL2 input:not([type=checkbox])").css('background-color', '#DCDCDC').attr('readonly', 'true');
           $("#btn_suburb_post_office_2_c").hide();
           $("#btn_clr_suburb_post_office_2_c").hide();
           
           $("#building_complex_name_2_c").val ($("#building_complex_name_c").val());        // Primary to Alternative address copy
           $("#floor_2_c").val ($("#floor_c").val());
           $("#street_number_2_c").val ($("#street_number_c").val());
           $("#suburb_post_office_2_c").val ($("#suburb_post_office_c").val());
           $("#rls01_suburbs_id1_c").val ($("#rls01_suburbs_id_c").val());
           $("#alt_address_postalcode").val ($("#primary_address_postalcode").val());
           $("#alt_address_country").val ($("#primary_address_country").val());
           $("#alt_address_state").val ($("#primary_address_state").val());
           $("#alt_address_city").val ($("#primary_address_city").val());
           $("#unit_number_2_c").val ($("#unit_number_c").val());
           $("#street_name_2_c").val ($("#street_name_c").val());
         }
         else {
           $("#LBL_EDITVIEW_PANEL2 input:not([type=checkbox])").css('background-color', '').removeAttr('readonly');
           $("#btn_suburb_post_office_2_c").show();
           $("#btn_clr_suburb_post_office_2_c").show();
         }
      });
      
                                                                                             // Refresh Alternative address
      $("#LBL_EDITVIEW_PANEL1 input").change (function() { $('#copy_address_c').change(); });
      
      
   
      $('#marital_status_c').change();
      $('#sacitizen_c').change();     
      $('#copy_address_c').change();    
        
    </script>
EOQ;
      parent::display();    
      echo $jsscript;   
           
  }

}
