<?php
 session_start();
include "../../path.php";
include "../../app/controllers/topics.php"
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
                <a href="<?php echo BASE_URL . '/admin/topics/create.php'?>" class="btn btn-success col-2">Add categories</a>
                <a href="<?php echo BASE_URL . '/admin/topics/index.php'?>" class="btn btn-warning col-2">Manage categories</a>
            </div>
            <div class="row title-table">
                <h2>Add category</h2>

            </div>
            <div class="row add-post">
                <div class="col">
                    <?php echo $errMsg; ?>
                </div>
                <form action="edit.php" method="post">
                    <input name="id" type="hidden" class="form-control" value="<?=$id; ?>">

                    <div class="col">
                        <input name="name" type="text" class="form-control" placeholder="Category title" aria-label="Category title" value="<?=$name; ?>">
                    </div>

                    <div class="col mt-3">
                        <label for="content" class="form-label">Category description</label>
                        <textarea name="description" class="form-control" id="category_desc" rows="3" ><?=$description; ?></textarea>
                    </div>

                    <div class="col-12 mt-3">
                        <button name="topic-edit" class="btn btn-primary" type="submit">Change category</button>
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