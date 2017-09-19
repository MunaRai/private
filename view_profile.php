<?php 
    include('header.php');
    include('inc/auth.inc.php');
    include('controller/view_profile.ctrl.php');
?>

<div class="user-panel">

    <div class="sec">
        <div class="text-center">
            <a class="btn btn-primary" href="main.php">Main page</a> &nbsp;
            <a class="btn btn-success" href="logout.php">Logout</a>
        </div>

        <br/>
        <br/>
        
        <table class="table table-striped">
            <tbody>
                <?php
                    foreach ($data as $key=>$val){
                ?>
                <tr>
                        <td><?php  echo $key; ?></td>
                        <td><?php echo $val; ?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>

<?php
    include('footer.php');
?>