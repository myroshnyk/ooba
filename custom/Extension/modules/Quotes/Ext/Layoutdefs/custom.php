<?php
// hiden subpanel
unset($layout_defs['Quotes']['subpanel_setup']['activities']);
unset($layout_defs['Quotes']['subpanel_setup']['history']);
unset($layout_defs['Quotes']['subpanel_setup']['documents']);
// order subpanel
$layout_defs['Quotes']['subpanel_setup']['contacts_quotes_1']['order'] = 10;
$layout_defs['Quotes']['subpanel_setup']['contracts']['order'] = 20;