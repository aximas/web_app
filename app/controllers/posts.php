<?php

include SITE_ROOT . "/app/database/db.php";
if (!$_SESSION) {
    header('location: ' . BASE_URL . '/log.php');
}
$errMsg = [];
$id = '';
$post_title = '';
$post_content = '';
$post_img = '';
$post_topic = '';

$topics = selectAll('topics');
$posts = selectAll('posts');
$postsWithAuthors = selectAllPostsWithUsers('posts', 'users');

// for create posts
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['post-create'])) {

//    test(getimagesize($_FILES['post_img']['tmp_name']));
//    exit();
    if (!empty($_FILES['post_img']['name'])) {
        $imgName = rand() . '_' . $_FILES['post_img']['name'];
        $imgType = $_FILES['post_img']['type'];
        $imgTemp = $_FILES['post_img']['tmp_name'];
        $imgSize = $_FILES['post_img']['size'];
        $destination = ROOT_PATH . "\assets\img\posts\\" . $imgName;


        if (strpos($imgType, 'image') === false) {
            array_push($errMsg, 'Можно загружать только изображения');
//            die('Можно загружать только изображения');
        } elseif ($imgSize > 1048576) {
            array_push($errMsg, 'Размер изображения не должен превышать 1 Мегабайт');
        } else {
            $result = move_uploaded_file($imgTemp, $destination);

            if ($result) {
                $_POST['post_img'] = $imgName;
            } else {
                array_push($errMsg, 'Картинку не удалось загрузить на сервер');
            }
        }
    } else {
        array_push($errMsg, 'Картинку не удалось получить');
    }

    $post_title = trim($_POST['post_title']);
    $post_content = trim($_POST['post_content']);
    $post_topic = trim($_POST['post_topic']);
    $post_img = trim($_POST['post_img']);
    $post_status = isset($_POST['publish']) ? 1 : 0;

    if ($post_title === '' || $post_content === '' || $topics === '') {
        array_push($errMsg, 'Не все поля заполнены!');
    } elseif (mb_strlen($post_title, 'UTF8') <= 6) {
        array_push($errMsg, 'Название поста должно быть более 6 символов');
    } else {
        $post = [
            'id_user' => $_SESSION['id'],
            'title' => $post_title,
            'content' => $post_content,
            'img' => $post_img,
            'status' => $post_status,
            'id_topic' => $post_topic
        ];

        $post = insert('posts', $post);
        $post = selectOne('topics', ['id' => $id]);
        header('location: ' . BASE_URL . '/admin/posts/');
    }

} else {
    $id = '';
    $post_title = '';
    $post_content = '';
    $post_status = '';
    $post_topic = '';
}


//// edit categories
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);

    $id = $post['id'];
    $post_title = $post['title'];
    $post_content = $post['content'];
    $post_status = $post['status'];
    $post_topic = $post['id_topic'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_post'])) {
    $id = $_POST['id'];
    $post_title = trim($_POST['post_title']);
    $post_content = trim($_POST['post_content']);
    $post_topic = trim($_POST['post_topic']);
    $post_img = trim($_POST['post_img']);
    $post_status = isset($_POST['publish']) ? 1 : 0;

    if ($post_title === '' || $post_content === '' || $topics === '') {
        array_push($errMsg, 'Не все поля заполнены!');
    } elseif (mb_strlen($post_title, 'UTF8') <= 6) {
        array_push($errMsg, 'Название поста должно быть более 6 символов');
    } else {
        $post = [
            'id_user' => $_SESSION['id'],
            'title' => $post_title,
            'content' => $post_content,
            'img' => $post_img,
            'status' => $post_status,
            'id_topic' => $post_topic
        ];

        $post = update('posts', $id, $post);
        header('location: ' . BASE_URL . '/admin/posts/');
    }

} else {
    $post_title = $post['title'];
    $post_content = $post['content'];
    $post_topic = $post['id_topic'];
    $post_status = ($_POST['publish']) ? 1 : 0;
}

//// delete categories
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])) {
    delete('posts', $_GET['delete_id']);
    header('location: ' . BASE_URL . '/admin/posts/');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['pub_id'])) {
    $id = $_GET['pub_id'];
    $post_status = $_GET['publish'];

    $post = ['status' => $post_status];

    update('posts', $id, $post);
    header('location: ' . BASE_URL . '/admin/posts/');
    exit();
}