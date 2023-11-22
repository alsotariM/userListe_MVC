<?php

$title = "Delete User";
ob_start();
?>
<p>Are You Sure?</p>
    <a href="index.php?action=distroy&id=<?php echo $id;?> " class="btn btn-danger">validate the Delete</a>
    <a href="index.php?action=list" class="btn btn-warning">cansel the Delete</a>

<?php

$content = ob_get_clean();
include_once "Views/layout.php";