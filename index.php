<!DOCTYPE html>

<html>
<head>
<title>Home - aducators.in</title>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="ADITYA JAIN"/>
</head>

<body>

<div class="alert alert-primary mt-5 pt-4 text-center" role="alert">
  This website is under development. Refer current website of <a href="https://sites.google.com/view/aducators/" class="alert-link">aducators.in</a>, Thank You for finding us.
</div>

<?php include "header.html" ?>

<div class="container-fluide mt-5">

<header>
<div class="m-3">
<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
  
    <div class="carousel-inner">
        <div class="carousel-item active">
        <a href="html-5.php">
            <img src="img/Carousel/Slide1.jpg" alt="First slide" width="100%">
        </a>
        </div>
        <div class="carousel-item">
        <a href="python-3-core.php">
            <img src="img/Carousel/Slide2.jpg" alt="Second slide" width="100%">
        </a>
        </div>
        <div class="carousel-item">
        <a href="XI-XII-python-3-CBSE.php">
            <img src="img/Carousel/Slide3.jpg" alt="Third slide" width="100%">
        </a>
        </div>
    </div>

    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div>
</header>

<section>
<div class="container">
<h1 class="text-center pt-3">COURSES</h1>
<hr class="w-25 mx-auto" />

<div class="row text-center">

<div class="col-lg-4 col-md-4 col-12 mb-3">    
<div class="card shadow">

<div class="inner">
<a href="python-3-core-form.php">"
<img class="card-img-top" src="img/Courses/python.jpg" alt="PYTHON 3.x CORE" style="height: 200px; width: 200px" />
</a>
</div>

<div class="card-body">
    <h4 class="card-title">PYTHON 3.x Core</h4>
    <p class="card-text">length: 90 days</p>
    <a href="python-3-core.php" class="btn btn-primary">read more</a>
</div>

</div>
</div>

<div class="col-lg-4 col-md-4 col-12 mb-5">
<div class="card shadow">

<div class="inner">
<a href="XI-XII-python-3-CBSE-form.php">
<img class="card-img-top" src="img/Courses/python.jpg" alt="XI-XII PYTHON CS/IP (CBSE)" style="height: 200px; width: 200px" />
</a>
</div>

<div class="card-body">
    <h4 class="card-title">XI-XII PYTHON CS/IP (CBSE)</h4>
    <p class="card-text">length: academic year (2020-21)</p>
    <a href="XI-XII-python-3-CBSE.php" class="btn btn-primary">read more</a>
</div>

</div>
</div>

<div class="col-lg-4 col-md-4 col-12 mb-3">
<div class="card shadow">

<div class="inner">
<a href="html-5-form.php">
<img class="card-img-top" src="img/Courses/html.png" alt="HTML 5"  style="height: 200px; width: 200px" />
</a>
</div>

<div class="card-body">
    <h4 class="card-title">HTML 5</h4>
    <p class="card-text">length: 30 days</p>
    <a href="html-5.php" class="btn btn-primary">read more</a>
</div>

</div>
</div>

</div>
</div>
</div>
<hr class="w-25 mx-auto" />
</section>

</div>

<?php include "footer.php" ?>

<style>

.inner{
    overflow: hidden;
}

.inner img{
    transition: all 1.5s ease;
}

.inner:hover img{
    transform: scale(1.5);
}

</style>

</body>

</html>