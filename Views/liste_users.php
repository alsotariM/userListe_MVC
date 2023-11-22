    <?php
    $title="The List of Users";


ob_start();
    ?>
    <a href="index.php?action=create" class="btn btn-primary">Add user</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Login</th>
            <th>Password</th>
            <th>Action</th>
        </tr>

        </thead>

        <?php $users = "";
        foreach ($users as $user) :  ?> <!-- كتبنا بهذه الطريقة حتى نتمكن من إدراج بعض الأوامر التي لا علاقة لها بال php وبعد الإنتهاء نغلق الدائة من الأسفل   -->
            <tr>
                <td><?php echo $user->id ?></td>
                <td><?php echo $user->firstName ?></td>
                <td><?php echo $user->lastName ?></td>
                <td><?php echo $user->age ?></td>
                <td><?php echo $user->login ?></td>
                <td><?php echo $user->Password ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?= $user->id; ?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="index.php?action=delete&id=<?php echo $user->id; ?>" class="btn btn-danger btn-sm">Delete</a>

                </td>

            </tr>
        <?php endforeach?>

    </table>
    <?php $content = ob_get_clean() ?>

    <?php  include_once "Views/layout.php"; ?>

