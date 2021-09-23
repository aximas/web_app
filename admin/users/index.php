<?php session_start();
include "../../path.php";
include "../../app/controllers/users.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
          integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <link rel="stylesheet" href="../../assets/css/admin.css">
</head>
<body>

<?php include('../../app/include/header-admin.php'); ?>

<div class="container">
    <?php include '../../app/include/sidebar-admin.php'; ?>

    <div class="posts col-9">
        <div class="button row">
            <a href="create.php" class="btn btn-success col-2">Add user</a>
            <a href="index.php" class="btn btn-warning col-2">Manage users</a>
        </div>
        <div class="row title-table">
            <h2>Users control panel </h2>
            <div class="col-1">ID</div>
            <div class="col-5">Login</div>
            <div class="col-2">Role</div>
            <div class="col-4">Control</div>
        </div>
        <?php foreach ($users as $key => $user) : ?>
            <div class="row post">
                <div class="id col-1"><?= $key + 1; ?></div>
                <div class="title col-5"><?= $user['user_name']; ?></div>
                <div class="auhor col-2"><?= ($user['admin']) ? 'Admin' : 'User'; ?></div>
                <div class="edit col-2 red"><a href="edit.php?edit_id=<?=$user['id']; ?>">edit User</a></div>
                <div class="del col-2"><a href="index.php?del_user=<?=$user['id']; ?>">delete User</a></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>

<?php include('../../app/include/footer.php'); ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>