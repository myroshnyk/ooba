<?php
class hookAfterSave extends SugarBean
{
  function setRelationQuoteContact(SugarBean $bean, $event, $arguments)
  {
     
      if(!empty($bean->opportunity_name)){
                $sql_delete = "DELETE FROM contacts_quotes_1_c WHERE deleted=0 AND contacts_quotes_1quotes_idb='".$bean->id."'";
                $result_delete = $GLOBALS['db']->query($sql_delete);
                $sql = "SELECT contact_id FROM opportunities_contacts WHERE deleted=0 AND opportunity_id='".$bean->opportunity_id."'";
                $result = $GLOBALS['db']->query($sql);
                $sql_insert = "INSERT INTO contacts_quotes_1_c (id,date_modified,deleted,contacts_quotes_1contacts_ida,contacts_quotes_1quotes_idb) VALUES";
                while($row = $GLOBALS['db']->fetchByAssoc($result) )
                { 
                    $sql_insert=$sql_insert. "(UUID(),CURDATE(),'0','".$row['contact_id']."','".$bean->id."'),";
                }
                $sql_insert=substr($sql_insert,0,-1);
                $result_insert = $GLOBALS['db']->query($sql_insert);
            }
  }
}
