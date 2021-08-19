<?php
include "../../path.php";
include "../../app/controllers/posts.php"
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
                <a href="<?php echo BASE_URL . '/admin/posts/create.php'?>" class="btn btn-success col-2">Add posts</a>
                <a href="<?php echo BASE_URL . '/admin/posts/index.php'?>" class="btn btn-warning col-2">Manage posts</a>
            </div>
            <div class="row title-table">
                <h2>Add records</h2>

            </div>
            <div class="row add-post">
                <div class="col">
                    <?php echo $errMsg; ?>
                </div>
                <form action="create.php" method="post" enctype="multipart/form-data">
                    <div class="col">
                        <input name="post_title" type="text" class="form-control" placeholder="Title" aria-label="Post title">
                    </div>

                    <div class="col mt-3">
                        <label for="editor" class="form-label">Post content</label>
                        <textarea name="post_content" class="form-control" id="editor" rows="3"></textarea>
                    </div>

                    <div class="input-group mt-3">
                        <input name="post_img" type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>

                    <select name="post_topic" class="form-select mt-3" aria-label="Default select example">
                        <option selected>Категория поста</option>
                        <?php
                          foreach ($topics as $key => $topic) :
                        ?>
                        <option value="<?=$topic['id']; ?>"><?php echo $topic['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="form-check mt-3">
                        <input name="publish" class="form-check-input mt-0" type="checkbox" id="status-checkbox" value="1" aria-label="Checkbox toggle status of post">
                        <label for="status-checkbox" class="mx-2">Publish</label>
                    </div>
                    <div class="col-6 mt-3">
                        <button name="post-create" class="btn btn-primary" type="submit">Save post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('../../app/include/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>

<script src="../../assets/js/script.js"></script>

</body>
</html>