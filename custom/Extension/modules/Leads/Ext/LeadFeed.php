<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

require_once('modules/Leads/SugarFeeds/LeadFeed.php');


class CustomLeadFeed extends LeadFeed {
   
    function pushFeed($bean, $event, $arguments){
         parent::pushFeed();
        if (!isset($bean->fetched_row['id']))
            {
                //new record
                global $db;
                //get max value lead_number_c
                $sql= "SELECT CASE WHEN leads_cstm.lead_number_c is NULL THEN 0 ELSE max(leads_cstm.lead_number_c) END lead_number_c FROM  leads INNER JOIN leads_cstm  ON leads.id = leads_cstm.id_c WHERE leads.deleted=0";
                $result = $db->query($sql);
                //$lead_number=0;
                while($lead_num=$db->fetchByAssoc($result)){
                    $lead_number[]=$lead_num;
                }
                $bean->lead_number_c=$lead_number[0]['lead_number_c']+1;
            }
        else
            { 
                //existing record
            }

        
 }
}