<?php 
    include('modals/user.php');

    $email= $_SESSION['email']; 
    
    if( $user->getdata($email) ){
        $data = $user->getdata($email);
    }else{
        echo "error";
        $error ="Error on fetching data";
    }

?>