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
        $user->login( $_POST  ); 
    }
