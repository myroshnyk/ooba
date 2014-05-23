<?php
 // created: 2014-05-14 09:19:57
$dictionary['Opportunity']['fields']['lead_provider_c']['labelValue']='Lead Provider';
$dictionary['Opportunity']['fields']['lead_provider_c']['dependency']='or(or(equal($lead_source,"TELEPHONE"),equal($lead_source,"EMAIL")),or(equal($lead_source,"WEB_FORM"),equal($lead_source,"WALK_IN")))';

 ?>