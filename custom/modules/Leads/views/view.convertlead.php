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

require_once("modules/Leads/views/view.convertlead.php");

class CustomViewConvertLead extends ViewConvertLead
{

    public function display()
    {
        if (!empty($_REQUEST['handle']) && $_REQUEST['handle'] == 'save')
        {
        	return $this->handleSave();
        }

    	global $beanList;

    	// get the EditView defs to check if opportunity_name exists, for a check below for populating data
    	$opportunityNameInLayout = false;
    	$editviewFile = 'modules/Leads/metadata/editviewdefs.php';
        $this->medataDataFile = $editviewFile;
        if (file_exists("custom/{$editviewFile}"))
        {
            $this->medataDataFile = "custom/{$editviewFile}";
        }
    	include($this->medataDataFile);
    	foreach($viewdefs['Leads']['EditView']['panels'] as $panel_index => $section){
    	    foreach($section as $row_array){
    	        foreach($row_array as $cell){
        	        if(isset($cell['name']) && $cell['name'] == 'opportunity_name'){
        	            $opportunityNameInLayout = true;
        	        }
    	        }
    	    }
    	}

        $this->medataDataFile = $this->fileName;
        if (file_exists("custom/$this->fileName"))
        {
            $this->medataDataFile = "custom/$this->fileName";
        }
    	$this->loadDefs();
        $this->getRecord();
        $this->checkForDuplicates($this->focus);
        $smarty = new Sugar_Smarty();
        $ev = new EditView();
        $ev->ss = $smarty;
        $ev->view = "ConvertLead";
        
        //add show product_categories
        $category = new ProductCategory();
        $opt= get_select_options_with_id($category->get_product_categories(true), $this->bean->product_c);
        $smarty->assign('PRODCAT', $opt);
             
        
        echo $this->getModuleTitle();

        require_once("include/QuickSearchDefaults.php");
        $qsd = QuickSearchDefaults::getQuickSearchDefaults();
        $qsd->setFormName("ConvertLead");

        $this->contact = new Contact();
        
        /*
         * Setup filter for Account/Contact popup picker
         */ 
        $filter = '';
        // Check if Lead has an account set
        if (!empty($this->focus->account_name))
        {
            $filter .= '&name_advanced=' . urlencode($this->focus->account_name);
        }
        // Check if Lead First name is available
        if (!empty($this->focus->first_name))
        {
            $filter .= '&first_name_advanced=' . urlencode($this->focus->first_name);
        }
        // Lead Last Name is always available
        $filter .= '&last_name_advanced=' . urlencode($this->focus->last_name);
        
        $smarty->assign('initialFilter', $filter);
        $smarty->assign('displayParams', array('initial_filter' => '{$initialFilter}'));
        
        $relatedFields = $this->contact->get_related_fields();
        $selectFields = array();
        foreach ($this->defs as $moduleName => $mDefs)
        {   
            if (!empty($mDefs[$ev->view]['select']) && !empty($relatedFields[$mDefs[$ev->view]['select']]))
            {
                $selectFields[$moduleName] = $mDefs[$ev->view]['select'];
                continue;
            }
            foreach ($relatedFields as $fDef)
            {
                if (!empty($fDef['link']) && !empty($fDef['module']) && $fDef['module'] == $moduleName)
                {
                    $selectFields[$moduleName] = $fDef['name'];
                    break;
                }
            }
        }
        
        $smarty->assign('selectFields', $selectFields);

        $smarty->assign("contact_def", $this->contact->field_defs);
        $smarty->assign("form_name", "ConvertLead");
        $smarty->assign("form_id", "ConvertLead");
        $smarty->assign("module", "Leads");
        $smarty->assign("view", "convertlead");
        $smarty->assign("bean", $this->focus);
		$smarty->assign("record_id", $this->focus->id);
        global $mod_strings;
        $smarty->assign('MOD', $mod_strings);
        $smarty->display("modules/Leads/tpls/ConvertLeadHeader.tpl");

        echo "<div class='edit view' style='width:auto;'>";

        global $sugar_config, $app_list_strings, $app_strings;
        $smarty->assign('lead_conv_activity_opt', $sugar_config['lead_conv_activity_opt']);
        
        //Switch up list depending on copy or move
        if($sugar_config['lead_conv_activity_opt'] == 'move')
        {
        	$smarty->assign('convertModuleListOptions', get_select_options_with_id(array('None'=>$app_strings['LBL_NONE'], 'Contacts' => $app_list_strings["moduleListSingular"]['Contacts']), ''));	
        }
        else if($sugar_config['lead_conv_activity_opt'] == 'copy')
        {
        	$smarty->assign('convertModuleListOptions', get_select_options_with_id(array('Contacts' => $app_list_strings["moduleListSingular"]['Contacts']), ''));
        }
        
        

        foreach($this->defs as $module => $vdef)
        {
            if(!isset($beanList[$module]))
            {
                continue;
            }


            $bean = $beanList[$module];
            $focus = new $bean();

            // skip if we aren't allowed to save this bean
            if (!$focus->ACLAccess('save'))
            {
                continue;
            }

            $focus->fill_in_additional_detail_fields();
            foreach($focus->field_defs as $field => $def)
            {
            	if(isset($vdef[$ev->view]['copyData']) && $vdef[$ev->view]['copyData'])
                {
	                if ($module == "Accounts" && $field == 'name')
	                {
	                    $focus->name = $this->focus->account_name;
	                }
	                else if ($module == "Opportunities" && $field == 'amount')
	                {
	                    $focus->amount = unformat_number($this->focus->opportunity_amount);
	                } 
                 	else if ($module == "Opportunities" && $field == 'name') {
                 		if ($opportunityNameInLayout && !empty($this->focus->opportunity_name)){
                           $focus->name = $this->focus->opportunity_name;
                 		}
                   	}
	                else if ($field == "id")
                    {
						//If it is not a contact, don't copy the ID from the lead
                    	if ($module == "Contacts") {
                    	   $focus->$field = $this->focus->$field;
                        }
                    } else if (is_a($focus, "Company") && $field == 'phone_office')
	                {
	                	//Special case where company and person have the same field with a different name
	                	$focus->phone_office = $this->focus->phone_work;
	                }
					else if (strpos($field, "billing_address") !== false && $focus->field_defs[$field]["type"] == "varchar") /* Bug 42219 fix */         
					{
						$tmp_field = str_replace("billing_", "primary_", $field);
						$focus->field_defs[$field]["type"] = "text";
                        if (isset($this->focus->$tmp_field)) {
						    $focus->$field = $this->focus->$tmp_field;
                        }
					 }

					else if (strpos($field, "shipping_address") !== false && $focus->field_defs[$field]["type"] == "varchar") /* Bug 42219 fix */
					{
						$tmp_field = str_replace("shipping_", "primary_", $field);
						if (isset($this->focus->$tmp_field)) {
                            $focus->$field = $this->focus->$tmp_field;
                        }
						$focus->field_defs[$field]["type"] = "text";
					}    					
                    else if (isset($this->focus->$field))
                    {
                        $focus->$field = $this->focus->$field;
                    }
                }
            }

            //Copy over email data
            $ev->setup($module, $focus, $this->medataDataFile, "modules/Leads/tpls/ConvertLead.tpl", false);
            $ev->process();
            echo($ev->display(false));
            echo($this->getValidationJS($module, $focus, $vdef[$ev->view]));
        }
        echo "</div>";
        echo ($qsd->getQSScriptsJSONAlreadyDefined());
        // need to re-assign bean as it gets overridden by $ev->display
        $smarty->assign("bean", $this->focus);
        $smarty->display("modules/Leads/tpls/ConvertLeadFooter.tpl");
    }
}
