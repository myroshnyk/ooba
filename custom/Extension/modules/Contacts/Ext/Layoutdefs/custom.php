<?php
// hiden subpanel
unset($layout_defs['Contacts']['subpanel_setup']['quotes']);
unset($layout_defs['Contacts']['subpanel_setup']['products']);
unset($layout_defs['Contacts']['subpanel_setup']['campaigns']);
unset($layout_defs['Contacts']['subpanel_setup']['contracts']);
unset($layout_defs['Contacts']['subpanel_setup']['contacts']);

// order subpanel
$layout_defs['Contacts']['subpanel_setup']['documents']['order'] = 10;
$layout_defs['Contacts']['subpanel_setup']['opportunities']['order'] = 20;
$layout_defs['Contacts']['subpanel_setup']['contacts_quotes_1']['order'] = 30;
$layout_defs['Contacts']['subpanel_setup']['leads']['order'] = 40;
$layout_defs['Contacts']['subpanel_setup']['activities']['order'] = 50;
$layout_defs['Contacts']['subpanel_setup']['history']['order'] = 60;