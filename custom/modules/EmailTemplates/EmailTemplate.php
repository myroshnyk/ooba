<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/EmailTemplates/EmailTemplate.php');
class CustomEmailTemplate extends EmailTemplate {
      
    function parse_template($string, &$bean_arr) {
		global $beanFiles, $beanList;

		foreach($bean_arr as $bean_name => $bean_id) {
			require_once($beanFiles[$beanList[$bean_name]]);

			$focus = new $beanList[$bean_name];
			$result = $focus->retrieve($bean_id);

			if($bean_name == 'Leads' || $bean_name == 'Prospects') {
				$bean_name = 'Contacts';
			}

			if(isset($this) && isset($this->module_dir) && $this->module_dir == 'EmailTemplates') {
				$string = $this->parse_template_bean($string, $bean_name, $focus);
			} else {
				$string = EmailTemplate::parse_template_bean($string, $bean_name, $focus);
			}
		}
		return $string;
	}
    
    
    
	/**
	 * Generates the extended field_defs for creating macros
	 * @param object $bean SugarBean
	 * @param string $prefix "contact_", "user_" etc.
	 * @return
	 */
	function generateFieldDefsJS() {

		$contact = new Contact();
		$account = new Account();
		$lead = new Lead();
		$prospect = new Prospect();
                $resource=new rls01_Resources();

		$loopControl = array(
			'Contacts' => array(
			    'Contacts' => $contact,
			    'Leads' => $lead,
				'Prospects' => $prospect,
			),
			'Accounts' => array(
				'Accounts' => $account,
			),
			'Users' => array(
				'Users' => $current_user,
			),
                        'rls01_Resources' => array(
				'rls01_Resources' => $resource,
			),
		);

		$prefixes = array(
			'Contacts' => 'contact_',
			'Accounts' => 'account_',
			'Users'	=> 'contact_user_',
                        'rls01_Resources'=> 'resource_',
		);

		$collection = array();
		foreach($loopControl as $collectionKey => $beans) {
			$collection[$collectionKey] = array();
			foreach($beans as $beankey => $bean) {

				foreach($bean->field_defs as $key => $field_def) {
				    if(	($field_def['type'] == 'relate' && empty($field_def['custom_type'])) ||
						($field_def['type'] == 'assigned_user_name' || $field_def['type'] =='link') ||
						($field_def['type'] == 'bool') ||
						(in_array($field_def['name'], $this->badFields)) ) {
				        continue;
				    }
				    if(!isset($field_def['vname'])) {
				    	//echo $key;
				    }
				    // valid def found, process
				    $optionKey = strtolower("{$prefixes[$collectionKey]}{$key}");
				    $optionLabel = preg_replace('/:$/', "", translate($field_def['vname'], $beankey));
				    $dup=1;
				    foreach ($collection[$collectionKey] as $value){
				    	if($value['name']==$optionKey){
				    		$dup=0;
				    		break;
				    	}
				    }
				    if($dup)
				        $collection[$collectionKey][] = array("name" => $optionKey, "value" => $optionLabel);
				}
			}
		}

		$json = getJSONobj();
		$ret = "var field_defs = ";
		$ret .= $json->encode($collection, false);
		$ret .= ";";
		return $ret;
	}
        
        
        
        
   function parse_template_bean($string, $bean_name, &$focus) {
		global $current_user;
		global $beanFiles, $beanList;
		$repl_arr = array();
                $GLOBALS['log']->test("EMAIP PARSE: OK");
		// cn: bug 9277 - create a replace array with empty strings to blank-out invalid vars
		$acct = new Account();
		$contact = new Contact();
		$lead = new Lead();
		$prospect = new Prospect();
                $resource=new rls01_Resources();
                
		foreach($lead->field_defs as $field_def) {
			if(($field_def['type'] == 'relate' && empty($field_def['custom_type'])) || $field_def['type'] == 'assigned_user_name') {
         		continue;
			}
            $repl_arr = EmailTemplate::add_replacement($repl_arr, $field_def, array(
                'contact_'         . $field_def['name'] => '',
                'contact_account_' . $field_def['name'] => '',
            ));
		}
		foreach($prospect->field_defs as $field_def) {
			if(($field_def['type'] == 'relate' && empty($field_def['custom_type'])) || $field_def['type'] == 'assigned_user_name') {
         		continue;
			}
            $repl_arr = EmailTemplate::add_replacement($repl_arr, $field_def, array(
                'contact_'         . $field_def['name'] => '',
                'contact_account_' . $field_def['name'] => '',
            ));
		}
		foreach($contact->field_defs as $field_def) {
			if(($field_def['type'] == 'relate' && empty($field_def['custom_type'])) || $field_def['type'] == 'assigned_user_name') {
         		continue;
			}
            $repl_arr = EmailTemplate::add_replacement($repl_arr, $field_def, array(
                'contact_'         . $field_def['name'] => '',
                'contact_account_' . $field_def['name'] => '',
            ));
		}
		foreach($acct->field_defs as $field_def) {
			if(($field_def['type'] == 'relate' && empty($field_def['custom_type'])) || $field_def['type'] == 'assigned_user_name') {
         		continue;
			}
            $repl_arr = EmailTemplate::add_replacement($repl_arr, $field_def, array(
                'account_'         . $field_def['name'] => '',
                'account_contact_' . $field_def['name'] => '',
            ));
		}
                
            /*foreach($resource->field_defs as $field_def) {
			if(($field_def['type'] == 'relate' && empty($field_def['custom_type'])) || $field_def['type'] == 'assigned_user_name') {
         		continue;
			}
            $repl_arr = EmailTemplate::add_replacement($repl_arr, $field_def, array(
                'contact_'         . $field_def['name'] => '',
                'contact_account_' . $field_def['name'] => '',
                'resource_'        . $field_def['name'] => '', 
                
            ));
		}*/
		// cn: end bug 9277 fix


		// feel for Parent account, only for Contacts traditionally, but written for future expansion
		if(isset($focus->account_id) && !empty($focus->account_id)) {
			$acct->retrieve($focus->account_id);
		}

		if($bean_name == 'Contacts') {
			// cn: bug 9277 - email templates not loading account/opp info for templates
			if(!empty($acct->id)) {
				foreach($acct->field_defs as $field_def) {
					if(($field_def['type'] == 'relate' && empty($field_def['custom_type'])) || $field_def['type'] == 'assigned_user_name') {
	             		continue;
					}

					if($field_def['type'] == 'enum') {
						$translated = translate($field_def['options'], 'Accounts' ,$acct->$field_def['name']);

						if(isset($translated) && ! is_array($translated)) {
                            $repl_arr = EmailTemplate::add_replacement($repl_arr, $field_def, array(
                                'account_'         . $field_def['name'] => $translated,
                                'contact_account_' . $field_def['name'] => $translated,
                            ));
						} else { // unset enum field, make sure we have a match string to replace with ""
                            $repl_arr = EmailTemplate::add_replacement($repl_arr, $field_def, array(
                                'account_'         . $field_def['name'] => '',
                                'contact_account_' . $field_def['name'] => '',
                            ));
						}
					} else {
                        // bug 47647 - allow for fields to translate before adding to template
                        $translated = self::_convertToType($field_def['type'],$acct->$field_def['name']);
                        $repl_arr = EmailTemplate::add_replacement($repl_arr, $field_def, array(
                            'account_'         . $field_def['name'] => $translated,
                            'contact_account_' . $field_def['name'] => $translated,
                        ));
					}
				}
			}

			if(!empty($focus->assigned_user_id)) {
				$user = new User();
				$user->retrieve($focus->assigned_user_id);
				$repl_arr = EmailTemplate::_parseUserValues($repl_arr, $user);
			}
		} elseif($bean_name == 'Users') {
			/**
			 * This section of code will on do work when a blank Contact, Lead,
			 * etc. is passed in to parse the contact_* vars.  At this point,
			 * $current_user will be used to fill in the blanks.
			 */
			$repl_arr = EmailTemplate::_parseUserValues($repl_arr, $current_user);
		} else {
			// assumed we have an Account in focus
			foreach($contact->field_defs as $field_def) {
				if(($field_def['type'] == 'relate' && empty($field_def['custom_type'])) || $field_def['type'] == 'assigned_user_name' || $field_def['type'] == 'link') {
             		continue;
				}

				if($field_def['type'] == 'enum') {
					$translated = translate($field_def['options'], 'Accounts' ,$contact->$field_def['name']);

					if(isset($translated) && ! is_array($translated)) {
                        $repl_arr = EmailTemplate::add_replacement($repl_arr, $field_def, array(
                            'contact_'         . $field_def['name'] => $translated,
                            'contact_account_' . $field_def['name'] => $translated,
                        ));
					} else { // unset enum field, make sure we have a match string to replace with ""
                        $repl_arr = EmailTemplate::add_replacement($repl_arr, $field_def, array(
                            'contact_'         . $field_def['name'] => '',
                            'contact_account_' . $field_def['name'] => '',
                        ));
					}
				} else {
					if (isset($contact->$field_def['name'])) {
                        // bug 47647 - allow for fields to translate before adding to template
                        $translated = self::_convertToType($field_def['type'],$contact->$field_def['name']);
                        $repl_arr = EmailTemplate::add_replacement($repl_arr, $field_def, array(
                            'contact_'         . $field_def['name'] => $translated,
                            'contact_account_' . $field_def['name'] => $translated,
                        ));
					} // if
				}
			}
		}

		///////////////////////////////////////////////////////////////////////
		////	LOAD FOCUS DATA INTO REPL_ARR
		foreach($focus->field_defs as $field_def) {
			if(isset($focus->$field_def['name'])) {
				if(($field_def['type'] == 'relate' && empty($field_def['custom_type'])) || $field_def['type'] == 'assigned_user_name') {
             		continue;
				}

				if($field_def['type'] == 'enum' && isset($field_def['options'])) {
					$translated = translate($field_def['options'],$bean_name,$focus->$field_def['name']);

					if(isset($translated) && ! is_array($translated)) {
                        $repl_arr = EmailTemplate::add_replacement($repl_arr, $field_def, array(
                            strtolower($beanList[$bean_name])."_".$field_def['name'] => $translated,
                        ));
					} else { // unset enum field, make sure we have a match string to replace with ""
                        $repl_arr = EmailTemplate::add_replacement($repl_arr, $field_def, array(
                            strtolower($beanList[$bean_name])."_".$field_def['name'] => '',
                        ));
					}
				} else {
                    // bug 47647 - translate currencies to appropriate values
                    $repl_arr = EmailTemplate::add_replacement($repl_arr, $field_def, array(
                        strtolower($beanList[$bean_name])."_".$field_def['name'] => self::_convertToType($field_def['type'],$focus->$field_def['name']),
                    ));
				}
			} else {
				if($field_def['name'] == 'full_name') {
                    $repl_arr = EmailTemplate::add_replacement($repl_arr, $field_def, array(
                        strtolower($beanList[$bean_name]).'_full_name' => $focus->get_summary_text(),
                    ));
				} else {
                    $repl_arr = EmailTemplate::add_replacement($repl_arr, $field_def, array(
                        strtolower($beanList[$bean_name])."_".$field_def['name'] => '',
                    ));
				}
			}
		} // end foreach()

		krsort($repl_arr);
		reset($repl_arr);
		//20595 add nl2br() to respect the multi-lines formatting
		if(isset($repl_arr['contact_primary_address_street'])){
		    $repl_arr['contact_primary_address_street'] = nl2br($repl_arr['contact_primary_address_street']);
		}
		if(isset($repl_arr['contact_alt_address_street'])){
		    $repl_arr['contact_alt_address_street'] = nl2br($repl_arr['contact_alt_address_street']);
		}

		foreach ($repl_arr as $name=>$value) {
			if($value != '' && is_string($value)) {
				$string = str_replace("\$$name", $value, $string);
			} else {
				$string = str_replace("\$$name", ' ', $string);
			}
		}

		return $string;
	}
}