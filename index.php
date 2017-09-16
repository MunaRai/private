<?php

    /* Including common header file */
    include('header.php');

    session_start();
    /* filter incoming values */
    $username = (isset($_POST['username'])) ? trim($_POST['username']) : '';
    $password = (isset($_POST['password'])) ? $_POST['password'] : '';
    $redirect = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : 'main.php';

    if( isset($_POST['login']) ){

        if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 1){
            if( !empty($_POST['username']) && $_POST['username'] == 'admin' && !empty($_POST['password']) && $_POST['password'] == 'admin' ){
                $_SESSION['username'] = $username;
                $_SESSION['logged'] = 1;
                echo "Login successfully";
                header ('Refresh: 5; URL = ' . $redirect);
                echo'<p> You will be redirected to your original page request.  </p>';
                echo'<p> If your browser doesn\'t redirect you properly' . 'automatically, <a href="' . $redirect . '">click here </a> . </p>';
                die();
            }else{  
                /* set these explicitly just to make sure */
                $_SESSION['username'] = '';
                $_SESSION['logged'] = 0;
                $error = 'Invalid username or password!';
            }
        }else{    
            echo "Login successfully";
            header ('Refresh: 5; URL = ' . $redirect);
            echo'<p> You will be redirected to your original page request.  </p>';
            echo'<p> If your browser doesn\'t redirect you properly' . 'automatically, <a href="' . $redirect . '">click here </a> . </p>';
            die();
        }
    }
?>



<div class="user-panel">

    <!-- For display error message -->
    <?php
        if(isset($error)) { ?>
            <div class="alert alert-danger" role="alert"> <?php echo $error; ?></div>
    <?php } ?>
    
    <form action="" method = "post">
        
        <!-- Username -->
        <div class="form-group">
            <label for="user-label"><strong>Email address</strong></label>
            <input type="text" name="username" id="user-label" class="form-control" placeholder="Email" value="<?php echo $username; ?>"/>
        </div>
        
        <!-- Password -->
        <div class="form-group">
            <label for="password-label"><strong>Password</strong></label>
            <input type="password" name="password" class="form-control" id="password-label" placeholder="Password" value="<?php echo $password; ?>" />
        </div>
        
        <!-- Login button -->
        <button type="submit" class="btn btn-success" name="login" />Login</button>

    </form><!-- /form -->

    <!-- Creating a new account -->
    <p><center>Create a new account <a href="register.php" > <strong>Sign Up </strong></a></center></p>

</div><!-- /.user-panel -->


<?php 
    /* include footer common file */
    include('footer.php');
?>