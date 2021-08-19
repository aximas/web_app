<?php   include 'path.php';
        include 'app/controllers/topics.php';

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

<!--carousel block start -->
<div class="container">
    <div class="row">
        <h2 class="slider-title">
            Top record
        </h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/jarritos-mexican-soda-ap2SuhOb3K8-unsplash.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        <a href="">
                            First slide label
                        </a>
                    </h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/kevin-bhagat-zNRITe8NPqY-unsplash.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        <a href="">
                            Second slide label
                        </a>
                    </h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/jonathan-chan-cyYpC8-LuRU-unsplash.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        <a href="">
                            Third slide label
                        </a>
                    </h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>

<!--carousel block end -->

<!--main block start-->
<div class="container my-5">
    <div class="content row">
        <div class="main-content col-md-9">
            <h2>Last posts</h2>

            <!--  post start -->
            <div class="post row mt-3">
                <div class="img col-12 col-md-4">
                    <img src="assets/img/jonathan-chan-cyYpC8-LuRU-unsplash.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Post title</a>
                    </h3>
                    <i class="far fa-user">Author name</i>
                    <i class="far-fa-calendar">Mar 11, 2019</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam beatae commodi debitis ea
                        magnam magni minus natus nisi optio, qui quia repellat, reprehenderit, sequi tempora unde
                        voluptas voluptatum. Eveniet?
                    </p>
                </div>
            </div>
            <!--  post end -->

            <!--  post start -->
            <div class="post row mt-3">
                <div class="img col-12 col-md-4">
                    <img src="assets/img/jonathan-chan-cyYpC8-LuRU-unsplash.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Post title</a>
                    </h3>
                    <i class="far fa-user">Author name</i>
                    <i class="far-fa-calendar">Mar 11, 2019</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam beatae commodi debitis ea
                        magnam magni minus natus nisi optio, qui quia repellat, reprehenderit, sequi tempora unde
                        voluptas voluptatum. Eveniet?
                    </p>
                </div>
            </div>
            <!--  post end -->

            <!--  post start -->
            <div class="post row mt-3">
                <div class="img col-12 col-md-4">
                    <img src="assets/img/jonathan-chan-cyYpC8-LuRU-unsplash.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Post title</a>
                    </h3>
                    <i class="far fa-user">Author name</i>
                    <i class="far-fa-calendar">Mar 11, 2019</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam beatae commodi debitis ea
                        magnam magni minus natus nisi optio, qui quia repellat, reprehenderit, sequi tempora unde
                        voluptas voluptatum. Eveniet?
                    </p>
                </div>
            </div>
            <!--  post end -->

            <!--  post start -->
            <div class="post row mt-3">
                <div class="img col-12 col-md-4">
                    <img src="assets/img/jonathan-chan-cyYpC8-LuRU-unsplash.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Post title</a>
                    </h3>
                    <i class="far fa-user">Author name</i>
                    <i class="far-fa-calendar">Mar 11, 2019</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam beatae commodi debitis ea
                        magnam magni minus natus nisi optio, qui quia repellat, reprehenderit, sequi tempora unde
                        voluptas voluptatum. Eveniet?
                    </p>
                </div>
            </div>
            <!--  post end -->


            <!--  post start -->
            <div class="post row mt-3">
                <div class="img col-12 col-md-4">
                    <img src="assets/img/jonathan-chan-cyYpC8-LuRU-unsplash.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Post title</a>
                    </h3>
                    <i class="far fa-user">Author name</i>
                    <i class="far-fa-calendar">Mar 11, 2019</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam beatae commodi debitis ea
                        magnam magni minus natus nisi optio, qui quia repellat, reprehenderit, sequi tempora unde
                        voluptas voluptatum. Eveniet?
                    </p>
                </div>
            </div>
            <!--  post end -->


            <!--  post start -->
            <div class="post row mt-3">
                <div class="img col-12 col-md-4">
                    <img src="assets/img/jonathan-chan-cyYpC8-LuRU-unsplash.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Post title</a>
                    </h3>
                    <i class="far fa-user">Author name</i>
                    <i class="far-fa-calendar">Mar 11, 2019</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam beatae commodi debitis ea
                        magnam magni minus natus nisi optio, qui quia repellat, reprehenderit, sequi tempora unde
                        voluptas voluptatum. Eveniet?
                    </p>
                </div>
            </div>
            <!--  post end -->

            <!--  post start -->
            <div class="post row mt-3">
                <div class="img col-12 col-md-4">
                    <img src="assets/img/jonathan-chan-cyYpC8-LuRU-unsplash.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Post title</a>
                    </h3>
                    <i class="far fa-user">Author name</i>
                    <i class="far-fa-calendar">Mar 11, 2019</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam beatae commodi debitis ea
                        magnam magni minus natus nisi optio, qui quia repellat, reprehenderit, sequi tempora unde
                        voluptas voluptatum. Eveniet?
                    </p>
                </div>
            </div>
            <!--  post end -->

            <!--  post start -->
            <div class="post row mt-3">
                <div class="img col-12 col-md-4">
                    <img src="assets/img/jonathan-chan-cyYpC8-LuRU-unsplash.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Post title</a>
                    </h3>
                    <i class="far fa-user">Author name</i>
                    <i class="far-fa-calendar">Mar 11, 2019</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam beatae commodi debitis ea
                        magnam magni minus natus nisi optio, qui quia repellat, reprehenderit, sequi tempora unde
                        voluptas voluptatum. Eveniet?
                    </p>
                </div>
            </div>
            <!--  post end -->
        </div>

        <div class="sidebar col-md-3 col-12">
            <div class="section search">
                <h3>Search</h3>
                <form action="/" method="post">
                    <input type="text" menu="search-item" class="text-input" placeholder="Search...">
                </form>
            </div>

            <div class="section topics">
                <h3>Categories</h3>
                <ul>
                    <?php foreach ($topics as $key => $topic) : ?>
                        <li>
                            <a href="">
                            <?=$topic['name']; ?>
                             </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>

    </div>
</div>

<!--main block end-->

<?php include('app/include/footer.php'); ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>