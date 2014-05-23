<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(1, 'Call the event service SugarCRMEventService', 'custom/include/rls/SOAPLogicHook.php','SOAPLogicHook', 'SugarCRMEventService');
?>