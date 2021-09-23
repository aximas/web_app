<?php

include SITE_ROOT . "/app/database/db.php";

$errMsg = [];

function userAuth($arr_name)
{

    $_SESSION['id'] = $arr_name['id'];
    $_SESSION['login'] = $arr_name['user_name'];
    $_SESSION['admin'] = $arr_name['admin'];

    if ($_SESSION['admin']) {
        header('location: ' . BASE_URL . '/admin/posts/index.php');

    } else {
        header('location: ' . BASE_URL);
    }

}

$users = selectAll('users');

/***********
 * USERS REGISTRATION *
 ***********/
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])) {

    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $passF = trim($_POST['password-first']);
    $passS = trim($_POST['password-second']);
    $admin = 0;

    if ($login === '' || $email === '' || $passF === '') {
        array_push($errMsg, 'Не все поля заполнены!');
    } elseif (mb_strlen($login, 'UTF8') <= 2) {
        array_push($errMsg, 'Логин должен быть более 2 символов');
    } elseif ($passF !== $passS) {
        array_push($errMsg, 'Пароли должны совпадать');
    } else {
        $existence_mail = selectOne('users', ['email' => $email]);
        $existence_user_name = selectOne('users', ['user_name' => $login]);
        if ($existence_mail['email'] === $email) {
            array_push($errMsg, 'Пользователь с таким email уже зарегистрирован');
        } elseif ($existence_user_name['user_name'] === $login) {
            array_push($errMsg, 'Пользователь с таким логином уже зарегистрирован');
        } else {
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'user_name' => $login,
                'email' => $email,
                'password' => $pass,
            ];

            $id = insert('users', $post);

            $user = selectOne('users', ['id' => $id]);

            userAuth($user);
        }
    }
} else {
    $login = '';
    $email = '';
}

/***********
 * USERS LOGIN *
 ***********/
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])) {


    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if ($email === '' || $password === '') {

        array_push($errMsg, 'Не все поля заполнены');
    } else {
        $existence = selectOne('users', ['email' => $email]);
        $pass = password_hash($password, PASSWORD_DEFAULT);

        if ($existence && password_verify($password, $existence['password'])) {
            userAuth($existence);
        } else {
            array_push($errMsg, 'Почта или пароль не были введены неправильно');
        }
    }

}
/***********
 * ADD USERS FROM ADMIN PANEL *
 ***********/
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create-user'])) {

    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $passF = trim($_POST['password-first']);
    $passS = trim($_POST['password-second']);
    $admin = 0;


    if ($login === '' || $email === '' || $passF === '') {
        array_push($errMsg, 'Не все поля заполнены!');
    } elseif (mb_strlen($login, 'UTF8') <= 2) {
        array_push($errMsg, 'Логин должен быть более 2 символов');
    } elseif ($passF !== $passS) {
        array_push($errMsg, 'Пароли должны совпадать');
    } else {
        $existence_mail = selectOne('users', ['email' => $email]);
        $existence_user_name = selectOne('users', ['user_name' => $login]);
        if ($existence_mail['email'] === $email) {
            array_push($errMsg, ' Пользователь с таким email уже зарегистрирован');
        } elseif ($existence_user_name['user_name'] === $login) {
            array_push($errMsg, 'Пользователь с таким логином уже зарегистрирован');
        } else {
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            if (isset($_POST['admin'])) $admin = 1;
            $user = [
                'admin' => $admin,
                'user_name' => $login,
                'email' => $email,
                'password' => $pass,
            ];

            $id = insert('users', $user);

            $user = selectOne('users', ['id' => $id]);
        }
    }
} else {
    $login = '';
    $email = '';
}

/***********
 * DELETE USERS FROM ADMIN PANEL *
 ***********/
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_user'])) {
    delete('users', $_GET['del_user']);
    header('location: ' . BASE_URL . '/admin/users/');
}

/***********
 * EDIT USERS FROM ADMIN PANEL *
 ***********/
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['edit_id'])) {
    $user = selectOne('users', ['id' => $_GET['edit_id']]);

    $id = $user['id'];
    $name = $user['user_name'];
    $admin = $user['admin'];
    $mail = $user['email'];

}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update-user'])) {

    $id = $_POST['id'];
    $name = trim($_POST['login']);
    $passF = trim($_POST['password-first']);
    $passS = trim($_POST['password-second']);
    $admin = (isset($_POST['admin']) ? 1 : 0);


    if ($name === '') {
        array_push($errMsg, 'Не все поля заполнены!');
    } elseif (mb_strlen($name, 'UTF8') <= 2) {
        array_push($errMsg, 'Название поста должно быть более 6 символов');
    } elseif ($passF !== $passS) {
        array_push($errMsg, 'Пароли не совпадают');
    } else {
        if (mb_strlen($pass, 'UTF8') > 0) {
            $pass = password_hash($passS, PASSWORD_DEFAULT);
            $user = [
                'admin' => $admin,
                'user_name' => $name,
                'password' => $pass,
            ];
        } else {
            $user = [
                'admin' => $admin,
                'user_name' => $name,
            ];
        }



        $user = update('users', $id, $user);
        header('location: ' . BASE_URL . '/admin/users/');
    }

} else {
    $login = '';
    $email = '';
}

