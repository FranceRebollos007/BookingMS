<?php
   require APPROOT . '/views/includes/head.php';
?>
<div class="navbar dark">
    <?php
        require APPROOT . '/views/includes/navigation.php';
    ?>
</div>
<div class="container">
        <center><h2>Customers Information</h2></center> 
    <?php foreach($data['admins'] as $admin): ?>
        <div class="container-customer">
            <?php echo 'ID : ' . $admin->id; ?>
            <br>
            <?php echo 'USERNAME : ' . $admin->username; ?>
            <br>
            <h3 style="font-weight: 200">
                <?php echo 'EMAIL : ' . $admin->email; ?>
                <br>
                <?php echo 'PASSWORD : ' . $admin->password; ?>
            </h3>
        </div>
    <?php endforeach; ?>
</div>