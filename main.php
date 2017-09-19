<?php 
    include('header.php');
    include('inc/auth.inc.php');
?>

    <br/>
    <br/>
    <h1 class="text-center"> Welcome <?php echo $_SESSION['email']; ?> to the home page.</h1>
    <div class="user-panel">
        <br/>
        <br/>
        <a class="btn btn-success" href="view_profile.php">View your profile <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>&nbsp;
        <a href="logout.php" class="btn btn-primary" >Log out <span class="glyphicon glyphicon-off" aria-hidden="true"></span> </a> 
    </div>   
<?php
    include('footer.php');
?>