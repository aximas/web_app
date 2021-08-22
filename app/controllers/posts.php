<?php

include SITE_ROOT . "/app/database/db.php";
if (!$_SESSION) {
    header('location: ' . BASE_URL . '/log.php');
}
$errMsg = '';
$id = '';
$title = '';
$content = '';
$post_img = '';
$topic = '';

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


        if(strpos($imgType, 'image') === false) {
            die('Можно загружать только изображения');
        }
        elseif ($imgSize > 1048576) {
            die('Размер изображения не должен превышать 1 Мегабайт');
        }

        else {
            $result = move_uploaded_file($imgTemp, $destination);
        }

        if($result) {
            $_POST['post_img'] = $imgName;
        } else {
            $errMsg = 'Картинку не удалось загрузить на сервер';
        }
    } else {
        $errMsg = 'Картинку не удалось получить';
    }

    $post_title = trim($_POST['post_title']);
    $post_content = trim($_POST['post_content']);
    $post_topic = trim($_POST['post_topic']);
    $post_img = trim($_POST['post_img']);
    $post_status = isset($_POST['publish']) ? 1 : 0;

    if ($post_title === '' || $post_content === '' || $topics === '') {
        $errMsg = 'Не все поля заполнены!';
    } elseif (mb_strlen($post_title, 'UTF8') <= 6) {
        $errMsg = 'Название поста должно быть более 6 символов';
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
    $title = '';
    $content = '';
}

//
//// edit categories
//if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
//    $id = $_GET['id'];
//    $topic = selectOne('topics', ['id' => $id]);
//    $id = $topic['id'];
//    $name = $topic['name'];
//    $description = $topic['description'];
//}
//
//if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-edit'])) {
//
//    $name = trim($_POST['name']);
//    $description = trim($_POST['description']);
//
//
//    if ($name === '' || $description === '') {
//        $errMsg = 'Не все поля заполнены!';
//    } elseif (mb_strlen($name, 'UTF8') <= 2) {
//        $errMsg = 'Название категории должен быть более 2 символов';
//    } else {
//        $existence_topic = selectOne('topics', ['name ' => $name]);
//        if ($existence_topic['name'] === $name) {
//            $errMsg = 'Такая категория уже существует';
//        } else {
//            $topic = [
//                'name' => $name,
//                'description' => $description,
//            ];
//
//            $id = $_POST['id'];
//            $topic_id = update('topics', $id, $topic);
//            header('location: ' . BASE_URL . '/admin/topics/');
//        }
//
//    }
//}
//
//// delete categories
//if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])) {
//    $id = $_GET['del_id'];
//    delete('topics', $id);
//    header('location: ' . BASE_URL . '/admin/topics/');
//}
