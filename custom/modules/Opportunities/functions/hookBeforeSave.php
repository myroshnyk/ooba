<?php
class hookBeforeSave extends SugarBean
{
  function getInfoRelatedField(SugarBean $bean, $event, $arguments)
  {
     $bean->sales_consultant_name_c=$bean->sales_consultant_c;    
  }
}