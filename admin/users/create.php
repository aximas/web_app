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
    <?php include '../../app/include/sidebar-admin.php';?>

    <div class="posts col-9">
            <div class="button row">
                <a href="<?php echo BASE_URL . '/admin/users/create.php'?>" class="btn btn-success col-2">Add users</a>
                <a href="<?php echo BASE_URL . '/admin/users/'?>" class="btn btn-warning col-2">Manage users</a>
            </div>
            <div class="row title-table">
                <h2>Add users</h2>

            </div>
            <div class="row add-post">
                <div class="col error-message">
                    <!-- Вывод массива с ошибками -->
                    <?php include "../../app/helps/errorInfo.php"; ?>
                </div>
                <form action="create.php" method="post">
                    <div class="mb-3 col">
                        <label for="formGroupExampleInput" class="form-label">Your login</label>
                        <input name="login" value="<?php echo $login?>" type="text" class="form-control" id="formGroupExampleInput"
                               placeholder="enter your login .... ">
                    </div>
                    <div class="mb-3 col">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name="email" value="<?php echo $email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3 col">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password-first" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 col">
                        <label for="exampleInputPassword2" class="form-label">Reply Password</label>
                        <input name="password-second" type="password" class="form-control" id="exampleInputPassword2">
                    </div>
                    <div class="form-check mt-3">
                        <input name="admin" class="form-check-input mt-0" type="checkbox" id="status-checkbox" value="1"
                               aria-label="Checkbox toggle status of post">
                        <label for="status-checkbox" class="mx-2">Admin</label>
                    </div>
                    <div class="col-12 mt-3">
                        <button name="create-user" class="btn btn-primary" type="submit">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('../../app/include/footer.php'); ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>