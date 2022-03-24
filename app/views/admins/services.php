<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>
</div>

<div class="container">
    <?php if($_SESSION['role'] == "Admin" && isset($_SESSION['user_id'])): ?>
        <a class="btn green" href="<?php echo URLROOT; ?>/admins/addServices">
            Create
        </a>
    <?php endif; ?>

    <?php foreach($data['admins'] as $admin): ?>
        <div class="container-item">
            <?php if(isset($_SESSION['user_id']) == $admin->id): ?>
                <a
                    class="btn orange"
                    href="<?php echo URLROOT . "/admins/updateServices/" . $admin->id ?>">
                    Update
                </a>
                <form action="<?php echo URLROOT . "/admins/services/" . $admin->id ?>" method="POST">
                    <input type="submit" name="delete" value="Delete" class="btn red">
                </form>
            <?php endif; ?>
            <h3>
                <?php echo 'ID : ' . $admin->id; ?>
                <br>
                <?php echo 'SERVICE : ' . $admin->service; ?>
                <br>
                <?php echo 'PRICE : ' . $admin->price; ?>
            </h3>
        </div>
    <?php endforeach; ?>
</div>
