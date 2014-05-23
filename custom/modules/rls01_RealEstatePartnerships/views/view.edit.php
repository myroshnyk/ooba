<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.edit.php');
 
class rls01_RealEstatePartnershipsViewEdit extends ViewEdit
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
      
      $('#btn_estate_agency_branch').removeAttr('onclick');             // Branch filtered on Agence
      $('#btn_estate_agency_branch').on('click',(function(){	            
        var agency = $('#estate_agency').val();
        var initialfilter="&rls01_agencies_rls01_branches_name_advanced=" + agency;
        
        open_popup ("rls01_RealEstateBranches", 600, 400, initialfilter, true, false, {
          "call_back_function": "set_return",
          "form_name": "EditView",
          "field_to_name_array": {
          "id": "rls01_branches_id_c",
          "name": "estate_agency_branch",
           //    "account_id": "rls01_realestateagencies_id_c",
           //    "account_name": "estate_agency"
          }
        }, "single", true);
      }));

    </script>
EOQ;
            
    parent::display();
    echo $javascript; 
  }

}
