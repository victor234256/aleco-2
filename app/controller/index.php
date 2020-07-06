<?php

include_once('../inc/core.php');
$pointer = $core->treat($_GET['pointer']);
$donor = $core->treat($_POST['donor']);
$terms = $core->treat($_POST['terms']);
switch($pointer){

   case 'getstarted' :

      if(!empty($donor)){
         if(!empty($terms)){
            if($donor == 1){
               Core::redirect('../../donorsignup');
            }elseif($donor == 2){
               Core::redirect('../../receiversignup');
            }
         }else{
            $_SESSION['error'] = "Kindly confirm our terms and condition";
            Core::redirect('../../category');
         }
         // echo $donor; exit;
      }else{
         $_SESSION['error'] = "Kindly indicate if you are donating or a beneficiary below";
         Core::redirect('../../category');
      }
      
   break;
}
?>