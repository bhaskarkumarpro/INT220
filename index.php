<!DOCTYPE html>
<html lang="en">

<head>
<title>INT220</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css\style.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;400&display=swap" rel="stylesheet">
</head>

<body>
<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Personal Portfolio Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</div>

<div>
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/cc1.jpg" alt="Los Angeles" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="images/cc2.jpg" alt="Chicago" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="images/cc3.jpg" alt="New York" width="1100" height="500">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>

<!-- about us -->
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About Us </h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/cc4.jpg" class="img-fluid aboutimage">
            </div>

            <div class="col-lg-6 col-md-6 col-12"> 

                <h2 style="font-family:Monotype Corsiva" ;> I am bhaskar</h2>
                <br>
                <p>
                Hello !, I am making a blog page in Php.
                PHP is a general-purpose scripting language geared toward web development.[7] It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994.[8] The PHP reference implementation is now produced by The PHP Group.[9] PHP originally stood for Personal Home Page,[8] but it now stands for the recursive initialism PHP: Hypertext Preprocessor.[10]
                PHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon or as a Common Gateway Interface (CGI) executable. On a web server, the result of the interpreted and executed PHP code – which may be any type of data, such as generated HTML or binary image data – would form the whole or part of an HTTP response. Various web template systems, web content management systems, and web frameworks exist which can be employed to orchestrate or facilitate the generation of that response. Additionally, PHP can be used for many programming tasks outside the web context, such as standalone graphical applications[11] and robotic drone control.[12] PHP code can also be directly executed from the command line.
                The standard PHP interpreter is free software released under the PHP License. PHP has been widely ported and can be deployed on most web servers on a variety of operating systems and platforms.[13]
                </p>

                <a href="about.php" class="btn btn-success"> check more</a>
        </div>
    </div>

</section>


<!-- GAllery -->
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Serives </h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            
        <div class="col-lg-4 col-md-4 col-12"> 
                <div class="card">
                    <img class="card-img-top" src="images/cc2.jpg" alt="Card image">
                    <div class="card-body">
                    <h4 class="card-title">Beautiful Nature : </h4>
                    <p class="card-text">Some example text.</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>    

        <div class="col-lg-4 col-md-4 col-12"> 
                <div class="card">
                    <img class="card-img-top" src="images/cc2.jpg" alt="Card image">
                    <div class="card-body">
                    <h4 class="card-title">Beautiful Nature : </h4>
                    <p class="card-text">Some example text.</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12"> 
                <div class="card">
                    <img class="card-img-top" src="images/cc2.jpg" alt="Card image">
                    <div class="card-body">
                    <h4 class="card-title">Beautiful Nature : </h4>
                    <p class="card-text">Some example text.</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Gallery -->
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Gallery </h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/cc1.jpg" class="img-fluid pb-3">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/cc1.jpg" class="img-fluid pb-3">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/cc1.jpg" class="img-fluid pb-3">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/cc1.jpg" class="img-fluid pb-3">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/cc1.jpg" class="img-fluid pb-3">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/cc1.jpg" class="img-fluid pb-3">
            </div>
        </div>
    </div>

</section>
<!--contact-->

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact Us </h2>
    </div>

    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="from-group">
                <label >Username</label>
                <input type="text" name="user" autocomplete="off" class="form-control" >
            </div>

            <div class="from-group">
                <label >Email Id</label>
                <input type="text" name="email" autocomplete="off" class="form-control" >
            </div>

            <div class="from-group">
                <label >Mobile</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control" >
            </div>

            <div class="from-group">
                <label >Comments</label>
                <textarea name="comments" autocomplete="off" class="form-control">
                    ...
                </textarea>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>

        </form>
    </div>

</section>
<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>