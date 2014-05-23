<?php
class hookBeforeSave extends SugarBean
{
  function setRelate(SugarBean $bean, $event, $arguments)
  {
     $return_module=$_REQUEST['return_module'];
     if($return_module=='Opportunities'){
         $opportunity = new Opportunity();       
         $opportunity->retrieve($_REQUEST['return_id']);
         $bean->contact_id_c=$opportunity->contact_id1_c;      
     }
     if(!empty($bean->contact_id_c)){
        $sql_insert = "INSERT INTO documents_contacts(id,date_modified,deleted,document_id,contact_id) VALUES";
        $sql_insert=$sql_insert. "(UUID(),CURDATE(),'0','".$bean->id."','".$bean->contact_id_c."')";
        $result_insert = $GLOBALS['db']->query($sql_insert);
     }
     
  }
}