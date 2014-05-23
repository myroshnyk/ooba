<?php

include_once("include/workflow/alert_utils.php");
include_once("include/workflow/action_utils.php");
include_once("include/workflow/time_utils.php");
include_once("include/workflow/trigger_utils.php");
//BEGIN WFLOW PLUGINS
include_once("include/workflow/custom_utils.php");
//END WFLOW PLUGINS
	class Leads_workflow {
	function process_wflow_triggers(& $focus){
		include("custom/modules/Leads/workflow/triggers_array.php");
		include("custom/modules/Leads/workflow/alerts_array.php");
		include("custom/modules/Leads/workflow/actions_array.php");
		include("custom/modules/Leads/workflow/plugins_array.php");
		if(empty($focus->fetched_row['id']) || (!empty($_SESSION["workflow_cron"]) && $_SESSION["workflow_cron"]=="Yes" && !empty($_SESSION["workflow_id_cron"]) && $_SESSION["workflow_id_cron"]=="21d48fd2-e68a-c62c-ca42-53675ccba92b")){ 
 
 if( ( !($focus->fetched_row['status'] ==  '' )) && 
 (isset($focus->status) && $focus->status ==  '')){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['2d70e2c3_83f4_120a_7cf0_537401af0ace'])){
		$triggeredWorkflows['2d70e2c3_83f4_120a_7cf0_537401af0ace'] = true;
		 process_workflow_actions($focus, $action_meta_array['Leads0_action0']); 
 	$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && is_array($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Leads'] = isset($_SESSION['WORKFLOW_ALERTS']['Leads']) && is_array($_SESSION['WORKFLOW_ALERTS']['Leads']) ? $_SESSION['WORKFLOW_ALERTS']['Leads'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Leads'] = array_merge($_SESSION['WORKFLOW_ALERTS']['Leads'],array ());	}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 

		 //End if new, update, or all record
 		} 

if(isset($focus->fetched_row['id']) && $focus->fetched_row['id']!=""){ 
 
 if( ( !(
 	 ( 
 		$focus->fetched_row['is_duplicate_c'] === false ||
 		$focus->fetched_row['is_duplicate_c'] === 'false' ||
 		$focus->fetched_row['is_duplicate_c'] === 'off' ||
 		$focus->fetched_row['is_duplicate_c'] === 0 ||
 		$focus->fetched_row['is_duplicate_c'] === '0'
 	 )  
 )) && 
 (
 	 ( 
 		isset($focus->is_duplicate_c) && $focus->is_duplicate_c === false ||
 		isset($focus->is_duplicate_c) && $focus->is_duplicate_c === 'false' ||
 		isset($focus->is_duplicate_c) && $focus->is_duplicate_c === 'off' ||
 		isset($focus->is_duplicate_c) && $focus->is_duplicate_c === 0 ||
 		isset($focus->is_duplicate_c) && $focus->is_duplicate_c === '0'
 	 )  
)){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['2e3fe10d_9635_0949_d386_537401d22fa6'])){
		$triggeredWorkflows['2e3fe10d_9635_0949_d386_537401d22fa6'] = true;
		 process_workflow_actions($focus, $action_meta_array['Leads1_action0']); 
 	 process_workflow_actions($focus, $action_meta_array['Leads1_action1']); 
 	$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && is_array($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Leads'] = isset($_SESSION['WORKFLOW_ALERTS']['Leads']) && is_array($_SESSION['WORKFLOW_ALERTS']['Leads']) ? $_SESSION['WORKFLOW_ALERTS']['Leads'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Leads'] = array_merge($_SESSION['WORKFLOW_ALERTS']['Leads'],array ('Leads1_alert0',));	}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 

		 //End if new, update, or all record
 		} 

if(isset($focus->fetched_row['id']) && $focus->fetched_row['id']!=""){ 
 
 if( ( !($focus->fetched_row['status'] ==  'LOST' )) && 
 (isset($focus->status) && $focus->status ==  'LOST')){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['2f0e12de_cc35_c19a_d165_5374016acb2e'])){
		$triggeredWorkflows['2f0e12de_cc35_c19a_d165_5374016acb2e'] = true;
		 $alertshell_array = array(); 

	 $alertshell_array['alert_msg'] = "e7e1412d-f0cb-982d-4967-5373f20c52e6"; 

	 $alertshell_array['source_type'] = "Custom Template"; 

	 $alertshell_array['alert_type'] = "Email"; 

	 process_workflow_alerts($focus, $alert_meta_array['Leads2_alert0'], $alertshell_array, false); 
 	 unset($alertshell_array); 
		 process_workflow_actions($focus, $action_meta_array['Leads2_action0']); 
 	}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 

		 //End if new, update, or all record
 		} 


	//end function process_wflow_triggers
	}

	//end class
	}

?>