<?php

$title="Edit Users";
ob_start();
?>


<form action="index.php?action=update" method="POST" >

    <div class="form-group">
        <input type="hidden" name="id" class="form-control" placeholder="ID" value="<?php echo $user1->id; ?>"><br>
    </div>

    <div class="form-group">
        <input type="text" name="firstName" class="form-control" placeholder="First Name" value="<?= $user1->firstName; ?>"  ><br>
    </div>

    <div class="form-group">
        <input type="text" name="lastName" class="form-control" placeholder="Last Name" value="<?= $user1->lastName; ?>" ><br>
    </div>

    <div class="form-group">
        <input type="number" name="age" class="form-control" placeholder="Age" value="<?= $user1->age; ?>" ><br>
    </div>

    <div class="form-group">
        <input type="text" name="login" class="form-control" placeholder="User Name" value="<?= $user1->login; ?>" ><br>
    </div>

    <div class="form-group">
        <input type="password" name="Password" class="form-control" placeholder="Password" value="<?= $user1->Password; ?>" ><br><br>
    </div>

    <div class="form-group">
        <center><input type="submit" name="Modify" class="btn btn-primary my-2"></center>
    </div>
</form>

<?php $content = ob_get_clean() ?>

<?php  include_once "Views/layout.php" ?>

