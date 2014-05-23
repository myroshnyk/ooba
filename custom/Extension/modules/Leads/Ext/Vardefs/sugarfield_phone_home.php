<?php
 // created: 2014-05-13 20:41:16
$dictionary['Lead']['fields']['phone_home']['required']=true;
$dictionary['Lead']['fields']['phone_home']['comments']='Home phone number of the contact';
$dictionary['Lead']['fields']['phone_home']['merge_filter']='disabled';
$dictionary['Lead']['fields']['phone_home']['calculated']=false;
$dictionary['Lead']['fields']['phone_home']['dependency']='equal($phone_type_c,"HOME")';

 ?>