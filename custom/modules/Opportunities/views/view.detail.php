<?php


require_once('modules/Opportunities/views/view.detail.php');

class CustomOpportunitiesViewDetail extends OpportunitiesViewDetail {
        /**
     * @see SugarView::preDisplay()
     */
    public function preDisplay()
    {
        parent::preDisplay();
        $product_category=new ProductCategory();
        $product_category->retrieve($this->bean->product_c);
        $this->bean->product_c=$product_category->name;        
            
    } 	
     /**
     * @see SugarView::display()
     */
    function display() {
        unset($this->dv->defs['templateMeta']['form']['buttons'][1]);//hide "Duplicate" button
        echo '<h1>'.htmlentities($_REQUEST['msg']).'</h1>';
        echo '<script src="custom/include/javascript/quickCompose.js"></script>';
        //echo '<script src="custom/include/javascript/EmailUICompose.js"></script>';
       $sql = "SELECT id,subject,body_html FROM `email_templates` WHERE name='Required Documents Template' and deleted=0";
       $result = $GLOBALS['db']->query($sql);
        while($row = $GLOBALS['db']->fetchByAssoc($result) )
        {
            $body_html = htmlentities($row['body_html'], ENT_QUOTES, 'UTF-8');
            $subject = htmlentities($row['subject'], ENT_QUOTES, 'UTF-8');
        }
        $body_html = str_replace("\r\n",'',$body_html);
        $body_html = str_replace("\n",'',$body_html);
        $body_html = str_replace("<BR>",'\n',$body_html);
        $body_html = str_replace("<br>",'\n',$body_html);
        $body_html = str_replace("&amp;",'&',$body_html);
        $body_html = str_replace("&lt;",'<',$body_html);
        $body_html = str_replace("&gt;",'>',$body_html);
        $body_html = str_replace("&#039;",'\'',$body_html);
        $body_html = str_replace("&quot;",'',$body_html);
        
        $subject = str_replace("\r\n",'',$subject);
        $subject = str_replace("\n",'',$subject);
        $subject = str_replace("<BR>",'\n',$subject);
        $subject = str_replace("<br>",'\n',$subject);
        $subject = str_replace("&amp;",'&',$subject);
        $subject = str_replace("&lt;",'<',$subject);
        $subject = str_replace("&gt;",'>',$subject);
        $subject = str_replace("&#039;",'\'',$subject);
        $subject = str_replace("&quot;",'',$subject);
        
       $contact=new rls01_Resources();
        $contact->retrieve($this->bean->rls01_resources_id33_c);
         //Button Obtain Required Documents
        $this->dv->defs['templateMeta']['form']['buttons'][101] = array (
             'customCode' => '<input
                             id="emailBTN"
                             class="button"  
                             type="submit"  
                             name="button"  
                             value="Obtain Required Documents" ',
              
             );
        //Button Renew Prequalification Certificate
        $this->dv->defs['templateMeta']['form']['buttons'][102] = array (
             'customCode' => '<input
                             id="renewBTN"
                             class="button"  
                             type="submit"  
                             name="button"  
                             value="Renew Prequalification Certificate" ',
              
             );
       $javascript = <<<EOQ
      <script language='javascript'>
    $( "#emailBTN" ).click(function() {
        
        //var text = decodeURI(encodeURI("{$body_html}"));
        SUGAR.quickCompose.init({"fullComposeUrl":"parent_id={$this->bean->id}, parent_type=Opportunities","composePackage":{"to_email_addrs":"{$contact->email1}","parent_type":"Opportunities","parent_id":"{$this->bean->id}","parent_name":"{$this->bean->name}","subject":"{$subject}","body":"{$body_html}","attachments":[],"email_id":""}});
         
        });
     $( "#renewBTN" ).click(function() {
         if(confirm('Are you sure you want to reissue the Certificate?')){
            //this.form.return_module.value='Opportunities'; this.form.action.value='RenewPrequalificationCertificate'; this.form.return_id.value='{$this->bean->id}';
            var _form = document.getElementById('formDetailView');
            _form.return_module.value='Opportunities'; 
            _form.action.value='RenewPrequalificationCertificate';  
            _form.return_id.value='{$this->bean->id}';
            _form.submit();
        }
        else{
            //alert('NO')
        }
        }); 
    </script>
EOQ;
       
        parent::display();
        echo $javascript; 
    }
}
?>