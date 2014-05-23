<?php

class myCustomLogicHook extends SugarBean
{
  function leadSourceCorrect (SugarBean $bean, $event, $arguments)
  {   
   /*          
    if ($bean->lead_source != 'REAL_ESTATE') {       // Not Real Estate                    
      $bean->ea_branch_c = '';                 $bean->rls01_realestatebranches_id_c = '';  
      $bean->agency_c = '';                    $bean->rls01_realestateagencies_id_c = ''; 
    }
    
    switch ($bean->lead_source) {
      case 'REAL_ESTATE':                            // Real Estate
        //$bean->lead_provider_c = '';          $bean->contact_id_c = ''; 
        $bean->lead_provider_resource_c = '';  $bean->rls01_resources_id1_c = '';  
        $bean->lead_provider_web_c = '';       $bean->rls01_webentities_id_c = '';  
      break;
    
      case 'STAFF':                            // Staff
        //$bean->lead_provider_c = '';           $bean->contact_id_c = '';  
        $bean->lead_provider_web_c = '';       $bean->rls01_webentities_id_c = ''; 
        $bean->lead_provider_agent_c = '';     $bean->rls01_realestateagents_id_c = ''; 
      break;
      
      case 'WEB_SITE':                            // Web site
        //$bean->lead_provider_c = '';          $bean->contact_id_c = ''; 
        $bean->lead_provider_resource_c = '';  $bean->rls01_resources_id1_c = '';  
        $bean->lead_provider_agent_c = '';     $bean->rls01_realestateagents_id_c = ''; 
      break;
      
      default:                             // Other
        $bean->lead_provider_resource_c = '';  $bean->rls01_resources_id1_c = '';  
        $bean->lead_provider_web_c = '';       $bean->rls01_webentities_id_c = ''; 
        $bean->lead_provider_agent_c = '';     $bean->rls01_realestateagents_id_c = ''; 
      break;    
    }
  */
  }
}
?>
