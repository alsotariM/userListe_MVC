<?php
$title="Add Users";

/* Output Buffering
 * This function will turn output buffering on. While output buffering is active
 no output is sent from the script (other than headers), instead the output is stored in an internal buffer.
 */
ob_start();
?>
<form method="POST" action="index.php?action=store">
    <div class="form-group">
        <input type="text" name="firstName" class="form-control" placeholder="First Name"><br>
    </div>
    <div class="form-group">
        <input type="text" name="lastName" class="form-control" placeholder="Last Name"><br>
    </div>
    <div class="form-group">
        <input type="number" name="age" class="form-control" placeholder="Age"><br>
    </div>
    <div class="form-group">
        <input type="text" name="login" class="form-control" placeholder="User Name"><br>
    </div>
    <div class="form-group">
        <input type="password" name="Password" class="form-control" placeholder="Password"><br><br>
    </div>
    <div class="form-group">
        <center><input type="submit" name="submit" class="btn btn-success my-2"></center>
    </div>
</form>

<?php $content = ob_get_clean(); ?>

<?php  include_once "Views/layout.php"; ?>

