<?php 
require_once 'custom/modules/Leads/functions/CreateRow.php';
require_once 'custom/include/rls/WSSoapClient.php';
$soapURL = $GLOBALS['sugar_config']['soap_settings']['product_search_service'];
    $soapLogin = $GLOBALS['sugar_config']['soap_settings']['soap_login'];
    $soapPasword = $GLOBALS['sugar_config']['soap_settings']['soap_pasword'];

    $soapParameters=array('soap_version'=> SOAP_1_1,
                          'style'=> SOAP_DOCUMENT,
                          'use'=> SOAP_LITERAL,
                          'exceptions'=> 1,
                          'trace'=> 1);
    $soapFunction = "process" ;
    $soapFunctionParameters = array("Id"=>$this->record,"ModuleName"=>$this->module) ;
    try {
        $soapClient = new WSSoapClient($soapURL, $soapParameters);
        $soapClient->__setUsernameToken($soapLogin, $soapPasword, 'PasswordText');
        $soapResult=$soapClient->__soapCall($soapFunction,array("parameters"=>$soapFunctionParameters));    
    }
    catch (Exception $ex) {
        $GLOBALS['log']->test("SOAP_EX_LEAD: " .$ex->getMessage() . "\n");
    }
    $GLOBALS['log']->test("SOAP_REQUEST_LEAD: " .$soapClient->__getLastRequest() . "\n");
    $GLOBALS['log']->test("SOAP_RESULT_LEAD: " .$soapResult->StatusCode . "\n");
    //$this->view = 'detail';
    $this->view_object_map['request'] = "REQUEST:\n".$soapClient->__getLastRequest(). "\n";
    $this->view_object_map['result'] = "RESULT:\n" . $soapResult->StatusCode . "\n";
    $this->view_object_map['msg'] = "Duplicate check performed. No Duplicates Found.\n";
 //$focus = new Lead();
 //$focus->retrieve($_REQUEST['record']);  
// if($this->bean->description!='is duplicate'){ 
//  
//  $this->bean->is_duplicate_c=0;
//   $this->bean->save();
//    $subject ='Call Qualifying Lead';
//   SugarApplication::redirect("index.php?module=Calls&action=EditView&parent_type='Leads'&parent_name='".$this->bean->name."'&parent_id='".$this->bean->id."'&subject='".$subject."'"); 
//    }
    
     
// ?>
<link rel="stylesheet" type="text/css" href="custom/modules/Leads/css/duplicate.css">
<div style="margin-left: 20px;">
<button id="back_btn" class="rls_btn_right" onclick="window.location.href = 'index.php?module=Leads&record=<?php echo $_REQUEST['record']; ?>&action=DetailView'"><?php echo $mod_strings['LBL_FINDE_CANCEL'];?></button>
<button id="no_duplicate_btn" class="rls_btn_right" onclick="window.location.href = 'index.php?module=Leads&record=<?php echo $_REQUEST['record']; ?>&action=NoDuplicate'">No Duplicates in list below</button>
</div>
<table id="listduplicate_tlb" class="simple-little-table" cellspacing='0'>
  <tr>
    <th>First Name</th>
   <th>Last Name</th>
   <th>ID Number</th>
   <th>Phone Home</th>
   <th>Phone Mobile</th>
   <th>Phone Work</th>
   <th>E-Mail</th>
   <th>Product Category</th>
   <th>Lead/Contact</th>
   <th>Opportunity</th>
   <th>Status</th>
   <th>Lost Reason</th>
   <th>%</th>
   <th>Select</th>
 </tr>
 
 <?php getRows($_REQUEST['record']); ?>
 
</table>
<script type="text/javascript">
    function btnCheck(id,idRecord,modules,idOpportunity){
        if(confirm('Are you sure?')){
            switch(modules){
                case 'Lead':
                    window.location.replace("index.php?module=Leads&action=LeadTicked&record="+id+"&idRecord="+idRecord);
                   /* $.ajax({
                    type :"POST",
                    url:"index.php?module=Leads&action=LeadTicked",
                    data:({record:id,idRecord:idRecord}),
                    success:function(prin){
                    //$("#files_of_module").html(prin);
                        alert('OK');
                    }
                    });*/
                    break;
                case 'ContactNoOpportunity':
                    window.location.replace("index.php?module=Leads&action=ContactWithOutOpportunityTicked&record="+id+"&idRecord="+idRecord);
                    break;
                case 'ContactWithOpportunity':
                    window.location.replace("index.php?module=Leads&action=ContactWithOpportunityTicked&record="+id+"&idRecord="+idRecord+"&idOpportunity="+idOpportunity);
                    break;
            }
        }
    }
</script>
