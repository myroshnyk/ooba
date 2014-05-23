 <?php
 if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.edit.php');
 
class rls01_ResourcesViewEdit extends ViewEdit
{
  
  // @see SugarView::preDisplay()
  public function preDisplay()
  {
    parent::preDisplay();
  }

  // @see SugarView::display() 
  function display(){
            
  $javascript= 
<<<EOQ
  <script language='javascript'>

    $(function() {
                
      $.mask.definitions['~'] = "[+-]";
      $("#phone_work").mask("(999) 999-9999");
      $("#phone_mobile").mask("(999) 999-9999");
      $("#phone_other").mask("(999) 999-9999");
      $("#phone_fax").mask("(999) 999-9999");
      $("#phone_home").mask("(999) 999-9999");

      $("input").blur(function() {
        $("#info").html("Unmasked value: " + $(this).mask());
      }).dblclick(function() {
        $(this).unmask();
      });
    });
    
  </script>
EOQ;
            
    parent::display();
    echo $javascript; 
  }

}