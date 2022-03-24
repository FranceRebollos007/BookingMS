<nav class="top-nav">
    <ul>
        <li>
            <a href="<?php echo URLROOT; ?>/customers">Booking</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/customers">Home Service</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/customers">Booking Details</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/customers">Booking History</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/customers">Stylists</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/customers">Services</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/customers">Feedbacks</a>
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
