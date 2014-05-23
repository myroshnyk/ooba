<?php

include_once("include/workflow/alert_utils.php");
include_once("include/workflow/action_utils.php");
include_once("include/workflow/time_utils.php");
include_once("include/workflow/trigger_utils.php");
//BEGIN WFLOW PLUGINS
include_once("include/workflow/custom_utils.php");
//END WFLOW PLUGINS
	class Opportunities_workflow {
	function process_wflow_triggers(& $focus){
		include("custom/modules/Opportunities/workflow/triggers_array.php");
		include("custom/modules/Opportunities/workflow/alerts_array.php");
		include("custom/modules/Opportunities/workflow/actions_array.php");
		include("custom/modules/Opportunities/workflow/plugins_array.php");
		
 if( (
 	 ( 
 		isset($focus->doc_req_email_sent_c) && $focus->doc_req_email_sent_c === true ||
 		isset($focus->doc_req_email_sent_c) && $focus->doc_req_email_sent_c === 'true' ||
 		isset($focus->doc_req_email_sent_c) && $focus->doc_req_email_sent_c === 'on' ||
 		isset($focus->doc_req_email_sent_c) && $focus->doc_req_email_sent_c === 1 ||
 		isset($focus->doc_req_email_sent_c) && $focus->doc_req_email_sent_c === '1'
 	 )  
)){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['3b873f4d_3aa2_6446_1a9a_5374436c368f'])){
		$triggeredWorkflows['3b873f4d_3aa2_6446_1a9a_5374436c368f'] = true;
		 process_workflow_actions($focus, $action_meta_array['Opportunities0_action0']); 
 	$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && is_array($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = isset($_SESSION['WORKFLOW_ALERTS']['Opportunities']) && is_array($_SESSION['WORKFLOW_ALERTS']['Opportunities']) ? $_SESSION['WORKFLOW_ALERTS']['Opportunities'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = array_merge($_SESSION['WORKFLOW_ALERTS']['Opportunities'],array ());	}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 


	//end function process_wflow_triggers
	}

	//end class
	}

?>