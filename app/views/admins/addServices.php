<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>
</div>

<div class="container center">
    <h1>
        Add Services
    </h1>
    <form action="<?php echo URLROOT; ?>/admins/addServices" method="POST">
        <div class="form-item">
            <input type="text" name="service" placeholder="Service...">
            <span class="invalidFeedback">
                <?php echo $data['serviceError']; ?>
            </span>
        </div>

        <div class="form-item">
            <input type="number" name="price" placeholder="Price...">
            <span class="invalidFeedback">
                <?php echo $data['priceError']; ?>
            </span>
        </div>

        <button class="btn green" name="submit" type="submit">Submit</button>
    </form>
</div>
