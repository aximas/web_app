<?php

include 'app/database/db.php';

$errMsg = '';

function userAuth($arr_name) {

    $_SESSION['id'] = $arr_name['id'];
    $_SESSION['login'] = $arr_name['user_name'];
    $_SESSION['admin'] = $arr_name['admin'];

    if ($_SESSION['admin']) {
        header('location: ' . BASE_URL . '/admin/posts/index.php');

    } else {
        header('location: ' . BASE_URL);
    }

}

// Registration form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])) {

    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $passF = trim($_POST['password-first']);
    $passS = trim($_POST['password-second']);
    $admin = 0;

    if ($login === '' || $email === '' || $passF === '') {
        $errMsg = 'Не все поля заполнены!';
    } elseif (mb_strlen($login, 'UTF8') <= 2) {
        $errMsg = 'Логин должен быть более 2 символов';
    } elseif ($passF !== $passS) {
        $errMsg = 'Пароли должны совпадать';
    } else {
        $existence_mail = selectOne('users', ['email' => $email]);
        $existence_user_name = selectOne('users', ['user_name' => $login]);
        if ($existence_mail['email'] === $email) {
            $errMsg = ' Пользователь с таким email уже зарегистрирован';
        } elseif ($existence_user_name['user_name'] === $login) {
            $errMsg = 'Пользователь с таким логином уже зарегистрирован';
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

//        $errMsg = "<span class='sucessfull-msg'>Пользователь <strong>" . $login . "</strong> успешно зарегистрирован</span>";

        }

    }

    //   $last_row = selectOne('users', ['id' => $id]);
//    echo 'POST';

} else {
//    echo 'GET';
    $login = '';
    $email = '';
}



// Login form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])) {


    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if ($email === '' || $password === '') {

        $errMsg = 'Не все поля заполнены';
    } else {
        $existence = selectOne('users', ['email' => $email]);
        $pass = password_hash($password, PASSWORD_DEFAULT);

        if ($existence && password_verify($password, $existence['password'])) {
            userAuth($existence);
        }
        else {
            $errMsg = 'Почта или пароль не были введены неправильно';
        }
    }



}





