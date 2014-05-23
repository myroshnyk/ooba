<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'Opportunities push feed', 'modules/Opportunities/SugarFeeds/OppFeed.php','OppFeed', 'pushFeed');
$hook_array['before_save'][] = Array(1, 'workflow', 'include/workflow/WorkFlowHandler.php','WorkFlowHandler', 'WorkFlowHandler');

$hook_array['before_save'][] = Array(10, 'Get info from relate field', 'custom/modules/Opportunities/functions/hookBeforeSave.php','hookBeforeSave', 'getInfoRelatedField'); 
$hook_array['before_save'][] = Array(30, 'set value are fields for email template', 'custom/include/rls/Opportunities/SetValueEmailOppLogicHook.php','SetValueEmailOppLogicHook', 'setvalueFields'); 

$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(1, 'Call the event service SugarCRMEventService', 'custom/include/rls/SOAPLogicHook.php','SOAPLogicHook', 'SugarCRMEventService'); 



?>