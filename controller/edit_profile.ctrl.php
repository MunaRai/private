<?php 
    include('modals/user.php');

    //setting form value 
    session_start();
    $email=$_SESSION['email'];
   if($user->getdata($email)){
       $data=$user->getdata($email);
       var_dump($data);
   }else{
       $error="Error on fetching data.";
   }

   //updating user info
   if(isset($_POST['update']) ){
       $response = $user->update($_POST);
   }
?>