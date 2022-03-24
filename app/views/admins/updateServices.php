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
        Update Services
    </h1>
    <?php
                echo $data;
            ?>
    <form action="<?php echo URLROOT; ?>/admins/updateServices/<?php echo $data['admins']->id ?>" method="POST">
        <div class="form-item">
            <input type="text" name="service" value="<?php echo $data['admins']->service ?>">
            
            <span class="invalidFeedback">
                <?php echo $data['serviceError']; ?>
                
            </span>
        </div>

        <div class="form-item">
            <input type="number" name="price" value="<?php echo $data['admins']->price ?>">
            <span class="invalidFeedback">
                <?php echo $data['priceError']; ?>
            </span>
        </div>

        <button class="btn green" name="submit" type="submit">Submit</button>
    </form>
</div>
