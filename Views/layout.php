<!-- ستكون هذه الصفحة الرئيسية في هذا المشروع  -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha348-rbsA2VBKQhggwzxH7pPCaAq046MgnOM80zW1RWuH61DGLwZJEdKadq2F9CUG65" crossorigin="anonymous">
    <title><?= $title ?></title>
</head>
<body>

<?php require_once "includes/navbar.php"; ?>

<div class="container mt-2">
    <h2><center><?= $title ?> </center></h2>
    <hr>
    <?= $content ?>



</div>


</body>
</html>