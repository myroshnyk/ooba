<?php
class GenereticRefNumber extends SugarBean
{
  function setvalueRefNumber(SugarBean $bean, $event, $arguments)
  {
       if(empty($bean->fetched_row['id'])){
            
            //$sql = "SELECT MAX(CONVERT(ref_number_c,SIGNED)) FROM leads LEFT join leads_cstm on leads.id=leads_cstm.id_c WHERE deleted = 0";
            $sql = "SELECT MAX(CONVERT(ref_number,SIGNED)) FROM  rls01_leads_ref_number";
            $ref_number = (int)$GLOBALS['db']->getOne($sql);
            if($ref_number<1000000){ $ref_number=1000000;}
            else{$ref_number++;}
            
            $sql_insert = "INSERT INTO rls01_leads_ref_number (id,date_entered,ref_number) VALUES";
            $sql_insert=$sql_insert. "(UUID(),CURDATE(),'".$ref_number."')";
            $result_insert = $GLOBALS['db']->query($sql_insert);
             
            $bean->ref_number_c=$ref_number;
        }
      
  }
}