<?php
 // created: 2014-05-02 07:06:30
$dictionary['Lead']['fields']['lead_provider_c']['labelValue']='Lead Provider';
$dictionary['Lead']['fields']['lead_provider_c']['dependency']='or(or(equal($lead_source,"TELEPHONE"),equal($lead_source,"EMAIL")),or(equal($lead_source,"WEB_FORM"),equal($lead_source,"WALK_IN")))';

 ?>