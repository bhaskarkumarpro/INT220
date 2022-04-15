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


    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Contact Us </h2>
        </div>

        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="from-group">
                    <label>Username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div>

                <div class="from-group">
                    <label>Email Id</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">
                </div>

                <div class="from-group">
                    <label>Mobile</label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control">
                </div>

                <div class="from-group">
                    <label>Comments</label>
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