<?php
$dictionary['Opportunity']['fields']['communication_representative_c']=
    array (
      'labelValue' => 'ooba Representative',
      'dependency' => '',
      'required' => false,
      'source' => 'non-db',
      'name' => 'communication_representative_c',
      'vname' => 'LBL_COMMUNICATION_REPRESENTATIVE',
      'type' => 'relate',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => '255',
      'size' => '20',
      'id_name' => 'rls01_resources_id2_c',
      'ext2' => 'rls01_Resources',
      'module' => 'rls01_Resources',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'id' => 'Opportunitiescommunication_representative_c',
      'custom_module' => 'Opportunities',
    );
    $dictionary['Opportunity']['fields']['rls01_resources_id2_c']=    
    array (
      array (
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'rls01_resources_id2_c',
      'vname' => 'LBL_COMMUNICATION_REPRESENTATIVE_RLS01_RESOURCES_ID',
      'type' => 'id',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => '36',
      'size' => '20',
      'id' => 'Opportunitiesrls01_resources_id2_c',
      'custom_module' => 'Opportunities',
          )
    ); 