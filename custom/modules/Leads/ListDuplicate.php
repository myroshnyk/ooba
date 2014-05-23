<?php require_once 'custom/modules/Leads/functions/CreateRow.php';
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
 <?php
 getRows($_REQUEST['record']); 
 ?>
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
