<?php
    include 'modals/user.php';
    $title = 'Login';

    session_start();

    /* filter incoming values */
    $email = (isset($_POST['email'])) ? trim($_POST['email']) : '';
    $password = (isset($_POST['password'])) ? $_POST['password'] : '';
    $redirect = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : 'main.php';

    if( isset($_POST['login']) ){
        
        $result = $user->login( $_POST );
        if( $result ) {
            $_SESSION['logged']   = 1;
            $_SESSION['email'] = $email;
            header('Location: '. '/private/main.php');
        }else {
            $error = 'invalid user and password';
        }
    }    
