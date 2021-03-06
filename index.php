<?php
    /* Including common header file */
    include('header.php');
    require'controller/login.php';
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
            <input type="text" name="email" id="user-label" class="form-control" placeholder="Email" value="<?php echo $email; ?>"/>
        </div>
        
        <!-- Password -->
        <div class="form-group">
            <label for="password-label"><strong>Password</strong></label>
            <input type="password" name="password" class="form-control" id="password-label" placeholder="Password" value="<?php echo $password; ?>" />
        </div>
        
        <!-- Login button -->
        <button type="submit" class="btn btn-success" name="login" value="1" />Login</button>

    </form><!-- /form -->

    <!-- Creating a new account -->
    <p><center>Create a new account <a href="register.php" > <strong>Sign Up </strong></a></center></p>

</div><!-- /.user-panel -->


<?php 
    /* include footer common file */
    include('footer.php');
?>