<?php
class CustomLogicHook extends SugarBean
{
  function setDocReqEmailSent(SugarBean $bean, $event, $arguments)
  {
      $Opportunity=new Opportunity();
      $Opportunity->retrieve($bean->parent_id);
      $Opportunity->doc_req_email_sent_c=1;
      $Opportunity->save();
  }
}