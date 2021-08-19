<?php include('path.php'); ?>
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
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include('app/include/header.php'); ?>

<!--main block start-->
<div class="container my-5">
    <div class="content row">
        <div class="main-content col-md-9">
            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque fugiat, sapiente. Assumenda beatae deserunt excepturi id pariatur praesentium quaerat quis sit tempore, voluptatem. Harum, necessitatibus, vel. Exercitationem officia quaerat voluptates?</h2>

            <!--  post start -->
            <div class="single_post row mt-3">
                <div class="img col-12">
                    <img src="assets/img/jonathan-chan-cyYpC8-LuRU-unsplash.jpg" alt="" class="img-thumbnail">

                </div>
                <div class="info">
                    <i class="far fa-user">author name</i>
                    <i class="far fa-calendar">Mar 11, 2019</i>
                </div>
                <div class="post_text col-12">
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam, asperiores, assumenda beatae consectetur consequatur delectus distinctio nihil odit omnis optio placeat possimus quae quibusdam recusandae reiciendis temporibus veniam vitae? Accusamus ad atque autem consectetur eaque eligendi, esse exercitationem laborum libero nisi numquam, odio odit officiis placeat possimus repellendus saepe sequi suscipit tenetur voluptatem. Accusantium aliquam aperiam culpa enim explicabo illo impedit iusto, labore libero numquam, odit provident velit? Aliquam beatae cupiditate error facere id iure magnam nam officia quidem, veritatis! Aliquam amet consectetur corporis cum delectus, eaque eligendi, exercitationem ipsum nisi porro recusandae rem similique ullam! Aliquid delectus dignissimos dolorem, dolores, dolorum earum, est eum harum nam odit praesentium quis quisquam quos soluta voluptatibus! Deleniti deserunt dicta ea officiis?

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
                    <li><a href="">
                        Poems
                    </a></li>
                    <li><a href="">
                        Quotes
                    </a></li>
                    <li><a href="">
                        Fiction
                    </a></li>
                    <li><a href="">
                        Biography
                    </a></li>
                    <li><a href="">
                        Motivation
                    </a></li>
                    <li><a href="">
                        Inspirationn
                    </a></li>
                    <li><a href="">
                        Life Lessons
                    </a></li>
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