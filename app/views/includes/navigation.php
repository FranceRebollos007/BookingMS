<nav class="top-nav">
    <ul>
        <li>
            <?php if($_SESSION['role'] == "Admin" && isset($_SESSION['user_id'])): ?>
                <a href="<?php echo URLROOT; ?>/admins/stylist">Stylist</a>
            <?php elseif($_SESSION['role'] == "Customer" && isset($_SESSION['user_id'])): ?>
                <a href="<?php echo URLROOT; ?>/posts">View Products</a>
            <?php else: ?>

            <?php endif; ?>

        </li>
        <li>
            <?php if($_SESSION['role'] == "Admin" && isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/admins">Booking Status</a>
            <?php elseif($_SESSION['role'] == "Customer" && isset($_SESSION['user_id'])): ?>
                <a href="<?php echo URLROOT; ?>/customers">Booking</a>
            <?php else: ?>
               
            <?php endif; ?>
        </li>
        <li>
            <?php if($_SESSION['role'] == "Admin" && isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/admins">Booking Records</a>
            <?php elseif($_SESSION['role'] == "Customer" && isset($_SESSION['user_id'])): ?>
                <a href="<?php echo URLROOT; ?>/customers">Home Service</a>
            <?php else: ?>
               
            <?php endif; ?>
        </li>
        <li>
            <?php if($_SESSION['role'] == "Admin" && isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/admins">Home Service</a>
            <?php elseif($_SESSION['role'] == "Customer" && isset($_SESSION['user_id'])): ?>
                <a href="<?php echo URLROOT; ?>/customers">Booking Details</a>
            <?php else: ?>
                <a href="<?php echo URLROOT; ?>/contact">Contact</a>
            <?php endif; ?>
        </li>
        <li>
            <?php if($_SESSION['role'] == "Admin" && isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/admins/customers">Customers</a>
            <?php elseif($_SESSION['role'] == "Customer" && isset($_SESSION['user_id'])): ?>
                <a href="<?php echo URLROOT; ?>/customers">Booking History</a>
            <?php else: ?>
                <a href="<?php echo URLROOT; ?>/index">Home</a>
            <?php endif; ?>
        </li>
        <li>
            <?php if($_SESSION['role'] == "Admin" && isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/admins/services">Services</a>
            <?php elseif($_SESSION['role'] == "Customer" && isset($_SESSION['user_id'])): ?>
                <a href="<?php echo URLROOT; ?>/customers">Stylists</a>
            <?php else: ?>
                <a href="<?php echo URLROOT; ?>/about">About</a>
            <?php endif; ?>
        </li>
        <li>
            <?php if($_SESSION['role'] == "Admin" && isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/admins">Feedbacks</a>
            <?php elseif($_SESSION['role'] == "Customer"): ?>
                <a href="<?php echo URLROOT; ?>/customers">Services</a>
            <?php else: ?>
                <a href="<?php echo URLROOT; ?>/projects">Fortfolio</a>
            <?php endif; ?>
        </li>
        <li>
            <?php if($_SESSION['role'] == "Admin" && isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/posts">Add Products</a>
            <?php elseif($_SESSION['role'] == "Customer" && isset($_SESSION['user_id'])): ?>
                <a href="<?php echo URLROOT; ?>/customers">Feedbacks</a>
            <?php else: ?>
                <a href="<?php echo URLROOT; ?>/posts">Products</a>
            <?php endif; ?>
        </li>
        <li class="btn-login">
            <?php if(isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/users/logout">Log out</a>
            <?php else : ?>
                <a href="<?php echo URLROOT; ?>/users/login">Login</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>
