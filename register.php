<?php
    include('header.php');
    /* filter incoming values */
    $username   = (isset($_POST['username'])) ? trim($_POST['username']) : '';
    $password   = (isset($_POST['password'])) ? $_POST['password'] : '';
    $email      = (isset($_POST['email']) ) ? $_POST['password'] : ''; 
    $first_name = (isset($_POST['first_name'])) ? $_POST['first_name'] : '';
    $last_name  = (isset($_POST['last_name'])) ? $_POST['last_name'] : '';
    $city       = (isset($_POST['city'])) ? $_POST['city'] : '';
    $state      = (isset($_POST['state'])) ? $_POST['state'] : '';
    $hobbies    = (isset($_POST['hobbies'])) ? $_POST['hobbies'] : '';
    $error      = null;
    $city       = array('kathmandu', 'damak', 'dharan', 'biratnagar');
    $state      = array('Bagmati', 'Mechi', 'Koshi', 'Sagarmatha', 'Rapti', 'Gandaki', 'Dhaulagiri', 'Karnali', 'Mahakali', 'Janakpur', 'Seti', 'Bheri', 'Narayani', 'Lumbini')
?>


<div class="user-panel">

    <?php if(isset($error)) { ?>
        <div class="alert alert-danger" role="alert"> <?php echo $error; ?></div>
    <?php } ?>

    <form action="" method="post">

        <!-- User name -->
        <div class="form-group">
            <label for="user-label"><strong>Username</strong></label>
            <input type="text" name="username" id="user-label" class="form-control" placeholder="Enter Username" value="<?php echo $username; ?>" />
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password-label"><strong>Password</strong></label>
            <input type="password" name="password" id="password-label" class="form-control" placeholder="Enter Password" value="<?php echo $password;?>" />
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email-label"><strong>Email</strong></label>
            <input type="email" name="email" id="email-label" class="form-control" placeholder="Enter Email" value="<?php echo $email;?>" />
        </div>

        <!-- First name -->
        <div class="form-group">
            <label for="first-name-label"><strong>First name</strong></label>
            <input type="text" name="first_name" id="first-name-label" class="form-control" placeholder="Enter First Name" value="<?php echo $first_name;?>" />
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
                    foreach( $city as $value ){
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
                    foreach( $state as $value){
                        echo '<option value="'.$value.'">'.$value. '</option>';
                    }
                ?>
            </select>
        </div>

        <!-- Hobbies-->
        <div class="form-group">
            <label for="hobbies-label"><strong>Hobbies</strong></label>
            <textarea rows="4" cols="50" class="form-control"></textarea>
        </div>

        <!-- Register button -->
        <button type="submit" class="btn btn-success" name="register" />Register</button>

    </form><!-- /form -->
    
    <!-- If already have an account -->
    <p>If you already have an account <a href="index.php"><strong>Login</strong></a></p>
        
</div><!-- /.user-panel -->

       

<?php include('footer.php'); ?>