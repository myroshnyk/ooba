<?php
 // created: 2014-05-13 20:42:00
$dictionary['Lead']['fields']['phone_work']['required']=true;
$dictionary['Lead']['fields']['phone_work']['comments']='Work phone number of the contact';
$dictionary['Lead']['fields']['phone_work']['merge_filter']='disabled';
$dictionary['Lead']['fields']['phone_work']['calculated']=false;
$dictionary['Lead']['fields']['phone_work']['dependency']='equal($phone_type_c,"WORK")';

 ?>