<?php
// hiden subpanel
unset($layout_defs['Contracts']['subpanel_setup']['contract_documents']);
unset($layout_defs['Contracts']['subpanel_setup']['history']);
unset($layout_defs['Contracts']['subpanel_setup']['contacts']);
unset($layout_defs['Contracts']['subpanel_setup']['products']);

// order subpanel
$layout_defs['Contracts']['subpanel_setup']['activities']['order'] = 10;
$layout_defs['Contracts']['subpanel_setup']['contracts_documents_1']['order'] = 20;
$layout_defs['Contracts']['subpanel_setup']['quotes']['order'] = 30;
$layout_defs['Contracts']['subpanel_setup']['contracts_campaigns_1']['order'] = 40;
