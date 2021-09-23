<?php

include 'path.php';
include 'app/controllers/users.php';

    unset($_SESSION['id']);
    unset($_SESSION['login']);
    unset($_SESSION['admin']);

    header('location: ' . BASE_URL);
