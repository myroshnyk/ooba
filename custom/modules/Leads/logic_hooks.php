<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'Leads push feed', 'modules/Leads/SugarFeeds/LeadFeed.php','LeadFeed', 'pushFeed');
$hook_array['before_save'][] = Array(1, 'workflow', 'include/workflow/WorkFlowHandler.php','WorkFlowHandler', 'WorkFlowHandler'); 
$hook_array['before_save'][] = Array(10, 'Lead Source value correction', 'custom/modules/Leads/leadSourceCorrect.php','myCustomLogicHook', 'leadSourceCorrect'); 
$hook_array['before_save'][] = Array(20, 'ProductCategoryName', 'custom/include/rls/ProductCategoryNameLogicHook.php','ProductCategoryNameLogicHook', 'getProductCategoryName');
$hook_array['before_save'][] = Array(30, 'set value are fields for email template', 'custom/include/rls/Leads/SetValueEmailTLogicHook.php','SetValueEmailTLogicHook', 'setvalueFields');
$hook_array['before_save'][] = Array(40, 'set value aref_number_c', 'custom/include/rls/Leads/GenereticRefNumber.php','GenereticRefNumber', 'setvalueRefNumber'); 

$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(1, 'Call the event service SugarCRMEventService', 'custom/include/rls/SOAPLogicHook.php','SOAPLogicHook', 'SugarCRMEventService'); 
$hook_array['after_ui_frame'] = Array(); 



?>