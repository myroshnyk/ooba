<?php
function rowsLeads($param) {
    $countrows=0;
    //100%
    $proc="100%";
    $_where="AND leads_cstm.id_number_c='".$param['id_number_c']."' AND leads.first_name='".$param['first_name']."' AND leads.last_name='".$param['last_name']."'"; 
    $countrows+=addRowLeads($_where,$proc,$param);
    //100%
    $proc="100%";
    $_where="AND (leads.phone_home='".$param['phone']."'";
    $_where.=" OR leads.phone_mobile='".$param['phone']."'";
    $_where.=" OR leads.phone_work='".$param['phone']."'";
    $_where.=" AND leads_cstm.id_number_c='".$param['id_number_c']."'"; 
    $countrows+=addRowLeads($_where,$proc,$param);
    //99%
    $proc="99%";
    $_where="AND leads_cstm.id_number_c='".$param['id_number_c']."' AND leads.last_name='".$param['last_name']."'";     
    $countrows+=addRowLeads($_where,$proc,$param);
    //90%
    $proc="90%";
    $_where=" AND leads_cstm.id_number_c='".$param['id_number_c']."'";     
    $countrows+=addRowLeads($_where,$proc,$param);
    //75%
    $proc="75%";
    $_where=" AND (leads.phone_home='".$param['phone']."'";
      $_where.=" OR leads.phone_mobile='".$param['phone']."'";
    $_where.=" OR leads.phone_work='".$param['phone']."'";
    $_where.=" AND leads.first_name='".$param['first_name']."' AND leads.last_name='".$param['last_name']."'";
    $countrows+=addRowLeads($_where,$proc,$param);
    //70%
     $proc="70%";
     $_where=" AND (leads.phone_home='".$param['phone']."'";
     $_where.=" OR leads.phone_mobile='".$param['phone']."'";
     $_where.=" OR leads.phone_work='".$param['phone']."'";
     $_where.=" AND leads.last_name='".$param['last']."'";
     $countrows+=addRowLeads($_where,$proc,$param);
    //40%
     $proc="40%";
     $_where=" AND leads.first_name='".$param['first_name']."' AND leads.last_name='".$param['last_name']."'";
     $countrows+=addRowLeads($_where,$proc,$param);
    return $countrows;
}
//
function addRowLeads($_where,$proc,$param){
    $countrows=0;
    $sql = "SELECT * FROM  leads  LEFT join leads_cstm on leads.id=leads_cstm.id_c WHERE leads.deleted = 0 ".$_where." AND leads.id!='".$param['lead_id']."' GROUP BY leads.id";
    $result = $GLOBALS['db']->query($sql);
    
    while($row = $GLOBALS['db']->fetchByAssoc($result) )
            { 
                echo "<tr  style='text-align: center'>
                      <td style='text-align: left'>".$row['first_name']."</td>
                      <td style='text-align: left'>".$row["last_name"]."</td>
                      <td>".$row['id_number_c']."</td>
                      <td>".$row['phone_home']."</td>
                      <td>".$row['phone_mobile']."</td>
                      <td>".$row['phone_work']."</td>
                      <td>".$row['email1']."</td>
                      <td>".$row['product_text_c']."</td>
                      <td>Lead</td>
                      <td>".$row['opportunity_name']."</td>
                      <td>".$row['status']."</td>
                      <td>".$row['lost_reason_c']."</td>
                      <td>".$proc."</td>
                      <td> <a href='#' class='button31' tabindex='0' onclick=\"btnCheck('".$param['lead_id']."', '".$row['id']."', 'Lead')\"></a> </td>
                    </tr>";
                $countrows++;
            }
    return $countrows;
}
//
function rowsContacts($param) {
    $countrows=0;
    //100%
    $proc="100%";
    $_where=" AND contacts_cstm.id_number_c='".$param['id_number_c']."' AND contacts.first_name='".$param['first_name']."' AND contacts.last_name='".$param['last_name']."'"; 
    $countrows+=addRowContacts($_where,$proc,$param);
    //100%
    $proc="100%";
    $_where=" AND (contacts.phone_home='".$param['phone']."'";
    $_where.=" OR contacts.phone_mobile='".$param['phone']."'";
    $_where.=" OR contacts.phone_work='".$param['phone']."'";
    $_where.=" AND contacts_cstm.id_number_c='".$param['id_number_c']."'"; 
   $countrows+=addRowContacts($_where,$proc,$param);
    //99%
     $proc="99%";
     $_where=" AND contacts_cstm.id_number_c='".$param['id_number_c']."' AND contacts.last_name='".$param['last_name']."'";     
    $countrows+=addRowContacts($_where,$proc,$param);
    //90%
     $proc="90%";
     $_where=" AND contacts_cstm.id_number_c='".$param['id_number_c']."'";     
    $countrows+=addRowContacts($_where,$proc,$param);
    //75%
    $proc="75%";
    $_where=" AND (contacts.phone_home='".$param['phone']."'";
    $_where.=" OR contacts.phone_mobile='".$param['phone']."'";
    $_where.=" OR contacts.phone_work='".$param['phone']."'";
    $_where.=" AND contacts.first_name='".$param['first_name']."' AND contacts.last_name='".$param['last_name']."'"; 
    $countrows+=addRowContacts($_where,$proc,$param);
    //70%
     $proc="70%";
     $_where=" AND (contacts.phone_home='".$param['phone']."'";
     $_where.=" OR contacts.phone_mobile='".$param['phone']."'";
     $_where.=" OR contacts.phone_work='".$param['phone']."'";
     $_where.=" AND contacts.last_name='".$param['last']."'";  
    $countrows+=addRowContacts($_where,$proc,$param);
    //40%
    $proc="40%";
    $_where=" AND contacts.first_name='".$param['first_name']."' AND contacts.last_name='".$param['last_name']."'"; 
    $countrows+=addRowContacts($_where,$proc,$param);
    return $countrows;
}
//
function addRowContacts($_where,$proc,$param){
    $countrows=0;
    $sql = "SELECT * FROM  contacts  LEFT join contacts_cstm on contacts.id=contacts_cstm.id_c WHERE contacts.deleted = 0 ".$_where." GROUP BY contacts.id";
    $result = $GLOBALS['db']->query($sql);
    while($row = $GLOBALS['db']->fetchByAssoc($result) )
            { 
                echo "<tr  style='text-align: center'>
                      <td style='text-align: left'>".$row['first_name']."</td>
                      <td style='text-align: left'>".$row["last_name"]."</td>
                      <td>".$row['id_number_c']."</td>
                      <td>".$row['phone_home']."</td>
                      <td>".$row['phone_mobile']."</td>
                      <td>".$row['phone_work']."</td>
                      <td>".$row['email1']."</td>
                      <td> - </td>
                      <td>Contact</td>
                      <td> - </td>
                      <td> - </td>
                      <td> - </td>
                      <td>".$proc."</td>                     
                      <td> <a href='#' class='button31' tabindex='0'  onclick=\"btnCheck('".$param['lead_id']."', '".$row['id']."', 'ContactNoOpportunity')\"></a></td>
                    </tr>";       
             rowsContactsOpportunities($row["id"],$row["id_number_c"],$row["first_name"],$row["last_name"],$row["phone_home"],$row["phone_mobile"],$row["phone_work"],$row["email1"],$proc);
             $countrows++;
            }
    return $countrows;
}
//
function rowsContactsOpportunities($contactID,$id_number_c,$first_name,$last_name,$phone_home,$phone_mobile,$phone_work,$email1,$proc) {
    $sql = "SELECT opportunities.id opportunities_id, opportunities.name opportunities_name FROM  opportunities  LEFT join opportunities_contacts on opportunities.id=opportunities_contacts.opportunity_id WHERE opportunities.deleted = 0 AND opportunities_contacts.contact_id='".$contactID."' GROUP BY opportunities.id";
    $result = $GLOBALS['db']->query($sql);
    
    while($row = $GLOBALS['db']->fetchByAssoc($result) )
            { 
                echo "<tr  style='text-align: center'>
                      <td style='text-align: left'>".$first_name."</td>
                      <td style='text-align: left'>".$last_name."</td>
                      <td>".$id_number_c."</td>
                      <td>".$phone_home."</td>
                      <td>".$phone_mobile."</td>
                      <td>".$phone_work."</td>
                      <td>".$email1."</td>
                      <td> - </td>
                      <td>Contact</td>
                      <td>".$row['opportunities_name']."</td>
                      <td> - </td>
                      <td> - </td>
                      <td>".$proc."</td>
                      <td> <a href='#' class='button31' tabindex='0'  onclick=\"btnCheck('".$param['lead_id']."', '".$contactID."', 'ContactWithOpportunity','".$row['opportunities_id']."')\"></a> </td>
                    </tr>";       
            }
}

//
function getRows($leadID){
    $countrows=0;
    $focus = new Lead();
    $focus->retrieve($leadID);
    $id_number_c='---NONE RECORD---';
    $first_name='---NONE RECORD---';
    $last_name='---NONE RECORD---';
    $phone_home='---NONE RECORD---';
    if(!empty($focus->id_number_c)) {$id_number_c=$focus->id_number_c;}
    if(!empty($focus->first_name)) {$first_name=$focus->first_name;}
    if(!empty($focus->last_name)) {$last_name=$focus->last_name;}
    if(!empty($focus->phone_home)) {$phone_home=$focus->phone_home;}
        $param=array(
            'lead_id'=>$leadID,
            'id_number_c'=>$id_number_c,
            'first_name'=>$first_name,
            'last_name'=>$last_name,
            'phone_home'=>$phone_home,
        );

        $countrows+=rowsLeads($param);
        $countrows+=rowsContacts($param);
        if($countrows==0){
         $focus->status='QUALIFY';
         $focus->save();
         $subject = $focus->name.' : Initial Lead Call';
         $direction='Outbound';
         $status = 'Planned';
         $duration = '15';
         SugarApplication::redirect("index.php?module=Calls&action=EditView&parent_type='Leads'&parent_name='".$focus->name."'&parent_id='".$focus->id."'&subject='".$subject."'&status='".$status."'&duration='".$duration."'&direction='".$direction."'"); 
        }
   
   }
   ?>

