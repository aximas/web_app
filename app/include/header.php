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
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About us</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <?php if(isset($_SESSION['id'])) : ?>
                            <a href="#">  <i class="fas fa-user"></i> <?php echo $_SESSION['login'] ?></a>
                            <ul>
                                <?php if($_SESSION['admin']) : ?>
                                <li>
                                    <a href="<?php echo BASE_URL . '/admin/posts/'?>">Admin panel</a>
                                </li>
                                <?php endif; ?>
                                <li>
                                    <a href="<?php echo BASE_URL . '/logout.php'?>">Logout</a>
                                </li>
                            </ul>
                        <?php else: ?>
                            <a href="<?php echo BASE_URL . '/log.php'?>">  <i class="fas fa-user"></i>Login </a>
                            <ul>
                                <li>
                                    <a href="<?php echo BASE_URL . '/reg.php'?>">Register</a>
                                </li>
                            </ul>
                        <?php endif; ?>

                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>