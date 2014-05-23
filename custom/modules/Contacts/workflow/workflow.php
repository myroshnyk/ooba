<?php

include_once("include/workflow/alert_utils.php");
include_once("include/workflow/action_utils.php");
include_once("include/workflow/time_utils.php");
include_once("include/workflow/trigger_utils.php");
//BEGIN WFLOW PLUGINS
include_once("include/workflow/custom_utils.php");
//END WFLOW PLUGINS
	class Contacts_workflow {
	function process_wflow_triggers(& $focus){
		include("custom/modules/Contacts/workflow/triggers_array.php");
		include("custom/modules/Contacts/workflow/alerts_array.php");
		include("custom/modules/Contacts/workflow/actions_array.php");
		include("custom/modules/Contacts/workflow/plugins_array.php");
		
 if( ( isset($focus->credit_outcome_c) && ( empty($focus->fetched_row) || array_key_exists('credit_outcome_c', $focus->fetched_row) ) && $focus->fetched_row['credit_outcome_c'] !== $focus->credit_outcome_c) ){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['9ce54765_7d27_a997_aa5d_53734d9cecaa'])){
		$triggeredWorkflows['9ce54765_7d27_a997_aa5d_53734d9cecaa'] = true;
		 process_workflow_actions($focus, $action_meta_array['Contacts0_action0']); 
 	$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && is_array($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Contacts'] = isset($_SESSION['WORKFLOW_ALERTS']['Contacts']) && is_array($_SESSION['WORKFLOW_ALERTS']['Contacts']) ? $_SESSION['WORKFLOW_ALERTS']['Contacts'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Contacts'] = array_merge($_SESSION['WORKFLOW_ALERTS']['Contacts'],array ());	}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 


	//end function process_wflow_triggers
	}

	//end class
	}

?>