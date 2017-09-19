<?php
    include 'modals/user.php';
    global $title;
    $title = 'Login';

    session_start();

    /* filter incoming values */
    $username = (isset($_POST['username'])) ? trim($_POST['username']) : '';
    $password = (isset($_POST['password'])) ? $_POST['password'] : '';
    $redirect = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : 'main.php';

    if( isset($_POST['login']) ){
        
        $result = $user->login( $_POST  );
        if( $result ) {
            echo "i am here";
            // redirect to dashboard
            header('Location: '. '/main.php');
            die;
        }  else {
            header('Location: '. '/index.php');
            die;
        }
    }    
