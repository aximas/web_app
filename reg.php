<?php
include 'path.php';
include 'app/controllers/users.php';
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

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include('app/include/header.php'); ?>

<div class="container reg_form">
    <form method="post" action="reg.php" class="row justify-content-center my-3">
        <h3>Registration form</h3>
        <div class="mb-3 col-12 col-md-6 error-message">
            <p><?php echo $errMsg; ?></p>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-6">
            <label for="formGroupExampleInput" class="form-label">Your login</label>
            <input name="login" value="<?php echo $login?>" type="text" class="form-control" id="formGroupExampleInput"
                   placeholder="enter your login .... ">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-6">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" value="<?php echo $email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-6">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password-first" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-6">
            <label for="exampleInputPassword2" class="form-label">Reply Password</label>
            <input name="password-second" type="password" class="form-control" id="exampleInputPassword2">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-6">
            <button name="button-reg" type="submit" class="btn btn-secondary">Register</button>
            <a href="aut.html">Authorization</a>
        </div>
    </form>
</div>

<?php include('app/include/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>