<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4 d-flex justify-content align-items-center">
                <h1>
                    <a href="<?php echo BASE_URL ?>">My blog</a>
                </h1>
            </div>
            <nav class="col-8">
                <ul>
                        <li>
                            <a href="#">
                                <i class="fas fa-user"></i>
                                <?php echo $_SESSION['login'] ?></a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL . '/logout.php' ?>">Logout</a>
                        </li>
                </ul>
            </nav>
        </div>
    </div>
</header>