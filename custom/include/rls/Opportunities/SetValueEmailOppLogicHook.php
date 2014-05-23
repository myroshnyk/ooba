<?php
class SetValueEmailOppLogicHook extends SugarBean {

  function setvalueFields(SugarBean $bean, $event, $arguments) {
   
      $leadProviderName='';
      //Lead Provider (Resource)
      if(!empty($bean->rls01_resources_id4_c)){         
          $leadProvider_с=new rls01_Resources();
          $leadProvider_с->retrieve($bean->rls01_resources_id4_c);
          $leadProviderName=$leadProvider_с->first_name.' '.$leadProvider_с->last_name;
      }
      //Lead Provider (Agent)
      if(!empty($bean->rls01_realestateagents_id_c)){
          $leadProvider_с=new rls01_RealEstateAgents();
          $leadProvider_с->retrieve($bean->rls01_realestateagents_id_c);
          $leadProviderName=$leadProvider_с->first_name.' '.$leadProvider_с->last_name;
      }
      //Lead Provider
      if(!empty($bean->contact_id_c)){
          $leadProvider_с=new Contact();
          $leadProvider_с->retrieve($bean->contact_id_c);
          $leadProviderName=$leadProvider_с->first_name.' '.$leadProvider_с->last_name;
      }
      //Lead Provider (Web Entity)
      if(!empty($bean->rls01_webentities_id_c)){
          $leadProvider_с=new rls01_WebEntities();
          $leadProvider_с->retrieve($bean->rls01_webentities_id_c);
          $leadProviderName=$leadProvider_с->name;
      }
            
      $representative=new rls01_Resources();
      $representative->retrieve($bean->rls01_resources_id2_c);
            
      $prequalification=new rls01_Resources();
      $prequalification->retrieve($bean->rls01_resources_id33_c);
                 
      $commProspect = new Contact();       
      $commProspect->retrieve($bean->contact_id1_c);
      
      
      
      // Lead Provider
      $bean->email_t_lead_provider_name_c=$leadProviderName;
      
      // ooba Representative
      //$bean->email_t_ooba_representativen_c=$representative->first_name;                               
      $bean->email_t_ooba_repres_email_c=$representative->email1;      
                      
      // Prequalification Expert
      $bean->email_t_preq_exp_name_c=$prequalification->first_name.' '.$prequalification->last_name;
      $bean->email_t_preq_exp_email_c=$prequalification->email1;  
      $bean->email_t_preq_exp_phone_mob_c=$prequalification->phone_mobile;
      $bean->email_t_preq_exp_phone_work_c=$prequalification->phone_work;
      
      // Communication Prospect - Primary Lead
      $bean->email_t_comm_prosp_name_c = $commProspect->first_name;
      $bean->email_t_comm_prosp_name_c = $commProspect->email1;      
  }
}