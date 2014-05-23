<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/generic/SugarWidgets/SugarWidgetSubPanelTopButton.php');
class SugarWidgetSubPanelTopButtonCustom extends SugarWidgetSubPanelTopButton
{
    function display($defines, $additionalFormFields = null)
    {
        $button  = '<form action="index.php" method="post" name="form" id="formquotes_opportunities">';
        $button .= '<input type="hidden" name="module" value="Quotes">';
        $button .= '<input type="hidden" name="action" value="EditView">';        
        $button .= '<input type="hidden" name="opportunity_id" value="'.$this->parent_bean->id.'">';
        $button .= '<input type="hidden" name="opportunity_name" value="'.$this->parent_bean->name.'">';        
        $button .= '<input title="Create [Alt+N]" accesskey="" class="button" type="submit" name="Quotes_create_button" id="Quotes_create_button_old" value="Create" style="display: none;">';
        $button .= '</form>';
        return $button;
    }
}