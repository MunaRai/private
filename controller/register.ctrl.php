<?php

    require '/modals/user.php';

    global $title;
    $title = 'Register';

    
    /* filter incoming values */
    $user_name  = (isset($_POST['user_name'])) ? trim($_POST['user_name']) : '';
    $password   = (isset($_POST['password'])) ? $_POST['password'] : '';
    $email      = (isset($_POST['email']) ) ? $_POST['email'] : ''; 
    $first_name = (isset($_POST['first_name'])) ? $_POST['first_name'] : '';
    $last_name  = (isset($_POST['last_name'])) ? $_POST['last_name'] : '';
    $city       = (isset($_POST['city'])) ? $_POST['city'] : '';
    $state      = (isset($_POST['state'])) ? $_POST['state'] : '';
    $hobbies    = (isset($_POST['hobbies'])) ? $_POST['hobbies'] : '';
    $error      = null;
    $city_list       = array('kathmandu', 'damak', 'dharan', 'biratnagar');
    $state_list      = array('Bagmati', 'Mechi', 'Koshi', 'Sagarmatha', 'Rapti', 'Gandaki', 'Dhaulagiri', 'Karnali', 'Mahakali', 'Janakpur', 'Seti', 'Bheri', 'Narayani', 'Lumbini');

    /* if Registration form submitted */
    if( isset($_POST['register']) ){
        $response = $user->insert( $_POST );
        // var_dump($response);
    }else{

    }