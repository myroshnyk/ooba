<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(1, 'Call the event service SugarCRMEventService', 'custom/include/rls/SOAPLogicHook.php','SOAPLogicHook', 'SugarCRMEventService');
$hook_array['after_save'][] = Array(10, 'Relationship between Quoted and  Opportunity ', 'custom/modules/Quotes/functions/hookAfterSave.php','hookAfterSave', 'setRelationQuoteContact');
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'Get info from relate field', 'custom/modules/Quotes/functions/hookBeforeSave.php','CustomLogicHook', 'setRefNumber'); 