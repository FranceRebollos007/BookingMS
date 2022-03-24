<?php
   require APPROOT . '/views/includes/head.php';
?>
<?php if(isset($_SESSION['user_id']) && $_SESSION['role'] == "Admin") : ?>
    <div id="section-landing">
        <?php require APPROOT . '/views/includes/navigation.php'; ?>
        <div class="wrapper-landing">
            <h1>Jay Tayers Admins Page</h1>
            <h2>Booking Management System</h2>
        </div>
    </div>
<?php elseif(isset($_SESSION['user_id']) && $_SESSION['role'] == "Customer"):?>
    <div id="section-landing">
        <?php require APPROOT . '/views/includes/navigation.php'; ?>
    <div class="wrapper-landing">
        <h1>Jay Tayers Customers Page</h1>
        <h2>Booking Management System</h2>
</div>
<?php else :?>
    <div id="section-landing">
        <?php require APPROOT . '/views/includes/navigation.php'; ?>
    <div class="wrapper-landing">
        <h1>Jay Tayers</h1>
        <h2>Booking Management System</h2>
    </div>
<?php endif ;?> 