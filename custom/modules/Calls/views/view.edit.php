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


require_once('include/json_config.php');

class CallsViewEdit extends ViewEdit
{
 	/**
 	 * @see SugarView::preDisplay()
 	 */
 	public function preDisplay()
 	{
 		if($_REQUEST['module'] != 'Calls' && isset($_REQUEST['status']) && empty($_REQUEST['status'])) {
	       $this->bean->status = '';
 		} //if
        if(!empty($_REQUEST['status']) && ($_REQUEST['status'] == 'Held')) {
	       $this->bean->status = 'Held';
 		}
        
          
 		parent::preDisplay();
                
 	}

 	/**
 	 * @see SugarView::display()
 	 */
 	public function display()
 	{
 		global $json;
        $json = getJSONobj();
        $json_config = new json_config();
		if (isset($this->bean->json_id) && !empty ($this->bean->json_id)) {
			$javascript = $json_config->get_static_json_server(false, true, 'Calls', $this->bean->json_id);

		} else {
			$this->bean->json_id = $this->bean->id;
			$javascript = $json_config->get_static_json_server(false, true, 'Calls', $this->bean->id);

		}
 		$this->ss->assign('JSON_CONFIG_JAVASCRIPT', $javascript);

 		if($this->ev->isDuplicate){
	        $this->bean->status = $this->bean->getDefaultStatus();
 		} //if
 		parent::display();
                $parent_type=str_replace('&#039;','',$_REQUEST['parent_type']);
                  $parent_name=str_replace('&#039;','',$_REQUEST['parent_name']);
                  $parent_id=str_replace('&#039;','',$_REQUEST['parent_id']);
                  $subject=str_replace('&#039;','',$_REQUEST['subject']);
                  $direction=str_replace('&#039;','',$_REQUEST['direction']);
                  $status=str_replace('&#039;','',$_REQUEST['status']);
                  $duration=str_replace('&#039;','',$_REQUEST['duration']);
                  
                 $javascript = 
             <<<EOQ
                        <script language='javascript'>
                         $('#parent_type').val('{$parent_type}');
                         $('#parent_name').val('{$parent_name}');
                         $('#parent_id').val('{$parent_id}');
                         $('#name').val('{$subject}');
                         $('#duration_minutes').val('{$duration}');
                         $('#direction').val('{$direction}');
                         $('#status').val('{$status}');
                         
                        </script>
EOQ;
                 echo $javascript; 
                
                
//                  $this->bean->parent_type=$parent_type; 
//                  $this->bean->parent_name=$parent_name; 
//                  $this->bean->parent_id=$parent_id; 
                
                
 	}
}
