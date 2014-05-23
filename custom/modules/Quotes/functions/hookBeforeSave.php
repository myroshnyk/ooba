<?php
class CustomLogicHook extends SugarBean
{
  function setRefNumber(SugarBean $bean, $event, $arguments)
  {
     //
           if(empty($bean->fetched_row['id'])){
            
            if(!empty($bean->opportunity_name)){
                
                //num_quotes_c opportunity_id
                $sql = "SELECT MAX(CONVERT(quotes_cstm.num_quotes_c,SIGNED)) FROM  quotes_cstm  LEFT join quotes_opportunities on quotes_opportunities.quote_id=quotes_cstm.id_c WHERE quotes_opportunities.deleted = 0 AND opportunity_id='".$bean->opportunity_id."'";
                $num_quotes = (int)$GLOBALS['db']->getOne($sql);
                if(!empty($num_quotes)){
                    $num_quotes++;
                    $bean->name=$bean->opportunity_name.'-'.$num_quotes;
                    $bean->num_quotes_c=$num_quotes;
                }
                else{
                    $bean->name=$bean->opportunity_name.'-'.'1';
                    $bean->num_quotes_c=1;
                }
                
                
            }
                
            }
            if(empty($bean->name)){$bean->name='000000';}
  }
}