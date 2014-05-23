<?php
class SetValueEmailTLogicHook extends SugarBean
{
  function setvalueFields(SugarBean $bean, $event, $arguments)
  {
      
      $leadProviderName='';
//      //Lead Provider (Resource)
//      if(!empty($bean->rls01_resources_id1_c)){         
//          $leadProvider_с=new rls01_Resources();
//          $leadProvider_с->retrieve($bean->rls01_resources_id1_c);
//          $leadProviderName=$leadProvider_с->first_name.' '.$leadProvider_с->last_name;
//      }
//      //Lead Provider (Agent)
//      if(!empty($bean->rls01_realestateagents_id_c)){
//          $leadProvider_с=new rls01_RealEstateAgents();
//          $leadProvider_с->retrieve($bean->rls01_realestateagents_id_c);
//          $leadProviderName=$leadProvider_с->first_name.' '.$leadProvider_с->last_name;
//      }
//     
//      //Lead Provider
//      if(!empty($bean->contact_id_c)){
//          $leadProvider_с=new Contact();
//          $leadProvider_с->retrieve($bean->contact_id_c);
//          $leadProviderName=$leadProvider_с->first_name.' '.$leadProvider_с->last_name;
//      }
//      //Lead Provider (Web Entity)
//      if(!empty($bean->rls01_webentities_id_c)){
//          $leadProvider_с=new rls01_WebEntities();
//          $leadProvider_с->retrieve($bean->rls01_webentities_id_c);
//          $leadProviderName=$leadProvider_с->name;
//      }
//      
//      $representative=new rls01_Resources();
//      $representative->retrieve($bean->rls01_resources_id2_c);
//      
//      $prequalification=new rls01_Resources();
//      $prequalification->retrieve($bean->rls01_resources_id33_c);
//     
//            
//      //ooba Representative--> email
//      $bean->email_t_ooba_representative_c=$representative->email1;
//      //Prequalification Expert-->email
//      $bean->email_t_prequalification_exp_c=$prequalification->email1;
//      //ooba Representative--> First Name
//      $bean->email_t_ooba_representativen_c=$representative->first_name;
//      //Lead Provider--> Name
//      $bean->email_t_lead_provider_c=$leadProviderName;
//      //Prequalification Expert-->First Name Surname
//      $bean->email_t_prequalification_fn_c=$prequalification->first_name.' '.$prequalification->last_name;
//      //Prequalification Expert-->Mobile Phone
//      $bean->email_t_prequalification_mp_c=$prequalification->phone_mobile;
//      //Prequalification Expert-->Work Phone
//      $bean->email_t_prequalification_wp_c=$prequalification->phone_work;
//      //Prequalification Expert-->email
//      //$bean->email_t_prequalification_em2_c=$prequalification->email1;
  }
}