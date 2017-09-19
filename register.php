<?php
    include('header.php');
    require "controller/register.ctrl.php";
?>


<div class="user-panel">

    <?php if(isset($error)) { ?>
        <div class="alert alert-danger" role="alert"> <?php echo $error; ?></div>
    <?php } ?>
    
    <?php

        if(isset($response) && $response['type'] == 'success'){
            echo '<div class="alert alert-success" role="alert">'.$response['message'].' <a href="index.php">Login</a></div>';
            
            /* Reset form */
            foreach($_POST as $key => $val ) {
                $$key = '';
            }
        }
        if(isset($response) && $response['type'] == 'error'){
            echo '<div class="alert alert-danger" role="alert">'.$response['message'].'</div>';
        }
    ?>

    <form action="" method="post" id="signup-form" >

        <!-- User name -->
        <div class="form-group">
            <label for="user-label"><strong>Username</strong></label>
            <input type="text" name="user_name" id="user-label" class="form-control" placeholder="Enter Username" value="<?php echo $user_name; ?>" required/>
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password-label"><strong>Password</strong></label>
            <input type="password" name="password" id="password-label" class="form-control" placeholder="Enter Password" value="<?php echo $password;?>" required/>
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email-label"><strong>Email</strong></label>
            <input type="email" name="email" id="email-label" class="form-control" placeholder="Enter Email" value="<?php echo $email;?>" required />
        </div>

        <!-- First name -->
        <div class="form-group">
            <label for="first-name-label"><strong>First name</strong></label>
            <input type="text" name="first_name" id="first-name-label" class="form-control" placeholder="Enter First Name" value="<?php echo $first_name;?>" required/>
        </div>

        <!-- Last name -->
        <div class="form-group">
            <label for="last-name-label"><strong>Last name</strong></label>
            <input type="text" name="last_name" id="last-name-label" class="form-control" placeholder="Enter Last Name" value="<?php echo $last_name;?>"  />  
        </div>

        <!-- City -->
        <div class="form-group">
            <label for="city"><strong>City</strong></label>
            <select name="city" class="form-control" >
                <?php 
                    foreach( $city_list as $value ){
                        echo '<option value="'.$value.'">'.$value.'</option>';
                    }
                ?>
            </select>
        </div>
        
         <!-- States -->
         <div class="form-group">
            <label for="state"><strong>State</strong></label>
            <select name="state" class="form-control">
                <?php 
                    foreach( $state_list as $value){
                        echo '<option value="'.$value.'">'.$value. '</option>';
                    }
                ?>
            </select>
        </div>

        <!-- Hobbies-->
        <div class="form-group">
            <label for="hobbies-label"><strong>Hobbies</strong></label>
            <textarea rows="4" cols="50" class="form-control" name="hobbies"></textarea>
        </div>

        <!-- Register button -->
        <button type="submit" class="btn btn-success" name="register" />Register</button>

    </form><!-- /form -->
    
    <!-- If already have an account -->
    <p><center>If you already have an account <a href="index.php"><strong>Login</strong></a></center></p>
        
</div><!-- /.user-panel -->

       

<?php include('footer.php'); ?>