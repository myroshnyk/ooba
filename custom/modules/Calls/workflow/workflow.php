<?php

include_once("include/workflow/alert_utils.php");
include_once("include/workflow/action_utils.php");
include_once("include/workflow/time_utils.php");
include_once("include/workflow/trigger_utils.php");
//BEGIN WFLOW PLUGINS
include_once("include/workflow/custom_utils.php");
//END WFLOW PLUGINS
	class Calls_workflow {
	function process_wflow_triggers(& $focus){
		include("custom/modules/Calls/workflow/triggers_array.php");
		include("custom/modules/Calls/workflow/alerts_array.php");
		include("custom/modules/Calls/workflow/actions_array.php");
		include("custom/modules/Calls/workflow/plugins_array.php");
		
 if(isset($focus->bridge_id) && $focus->bridge_id == 'e8f288fe-30b5-33b1-1509-53742f1e7029' ){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['35bc9c5a_47bf_8107_9381_53743ab86b04'])){
		$triggeredWorkflows['35bc9c5a_47bf_8107_9381_53743ab86b04'] = true;
		 $alertshell_array = array(); 

	 $alertshell_array['alert_msg'] = ""; 

	 $alertshell_array['source_type'] = "System Default"; 

	 $alertshell_array['alert_type'] = "Invite"; 

	 process_workflow_alerts($focus, $alert_meta_array['Calls0_alert0'], $alertshell_array, true); 
 	 unset($alertshell_array); 
		}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 


	//end function process_wflow_triggers
	}

	//end class
	}

?>