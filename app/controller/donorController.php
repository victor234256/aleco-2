<?php
// include_once('../inc/conn.php');
include_once('../inc/core.php');
include_once('../model/donorModel.php');
$pointer = $core->treat($_GET['pointer']);
$donor->firstname = $core->treat(@$_POST['firstname']);
$donor->lastname = $core->treat(@$_POST['lastname']);
$donor->email = $core->treat(@$_POST['email']);
$donor->address = $core->treat(@$_POST['address']);
$donor->phone = $core->treat(@$_POST['phone']);
$password = $core->treat(@$_POST['password']);
$con_pass = $core->treat(@$_POST['confirm_password']);
switch($pointer){

   case 'add' :
      if(empty($con_pass) or empty($password) or empty($donor->email) or empty($donor->firstname) or empty($donor->lastname)){
         $output = 0;
      }elseif( $con_pass !== $password){
         $output = 1;
      }elseif(strlen($password) < 8){
         $output = 3;
      }else{
         $donor->password = md5($password);
         if($donor->add()){
            $subject = "Thank You, You have successfully registered as a donor at icare";
            $header = "MIME-Version: 1.0\r\n";
            $header .= "Content-Type: text/html\r\n";
            $header .= "From: info@icare.com\r\n"; 
            $message =<<<MSG

            <div style="padding: 15px; border: solid 1px grey; border-radius: 5px; width: 60%; margin: auto">
                  <div style="text-align: center; max-width:100%;"><img style="text-align: center; max-width:100%;" src="http://4manifestcleans.com/icare/img/icaree.png" alt="icare" /></div><br />
            
            <p>some texts.</p>
            <br>
            <hr />
            <p>
               Regards,<br />
               Rccg Team.
            </p>
            </div>
MSG;
            mail($to,$subject,$message,$header);
            $output = 2;
         }
      }
      echo json_encode($output);
      // Core::verify(,'Registration Successful','failed to Register','../../');
   break;

   case 'donate':
      $to = $core->treat(@$_POST['email']);
      $subject = "Thank You, your donation has been received by icare";
      $header = "MIME-Version: 1.0\r\n";
      $header .= "Content-Type: text/html\r\n";
      $header .= "From: info@icare.com\r\n"; 
      $message =<<<MSG

      <div style="padding: 15px; border: solid 1px grey; border-radius: 5px; width: 60%; margin: auto">
            <div style="text-align: center; max-width:100%;"><img style="text-align: center; max-width:100%;" src="http://4manifestcleans.com/icare/img/icaree.png" alt="icare" /></div><br />
      
       <p>some texts.</p>
      <br>
      <hr />
      <p>
         Regards,<br />
         Rccg Team.
      </p>
      </div>
MSG;
      if(mail($to,$subject,$message,$header)){
         echo json_encode(1);
      }
      
   break;

   //check if email already exists
   case 'confirmEmail':
      
      if($donor->confirmEmail() > 0){
         echo json_encode(1);
      }else{
         echo json_encode(0);
      }
   break;
}
?>