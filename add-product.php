<!doctype html>
<html>

<head>

    <title>Add Product - Rentify</title>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Twitter Card-->
    <meta name="twitter:title" content="Rentify">
    <meta name="twitter:site" content="" />
    <meta name="twitter:creator" content="" />
    <meta name="twitter:description" content="Rentify is a virtual renting platform that allows you to rent your electronics and book rentals.">
    <meta name="twitter:image" content="img/logo.png">
    <meta name="twitter:card" content="">
    <meta name="description" content="Rentify is a virtual renting platform that allows you to rent your electronics and book rentals.">
    <meta name="keywords" content="Rentify, Rentals, Electronics, Devices, Gadgets, Favcode54" />
    <!-- Facebook card -->
    <meta property="fb:admins" content="" />
    <meta property="fb:page_id" content="" />
    <!--Open Graph-->
    <meta property="og:image" content="img/logo.png">
    <meta property="og:title" content="Rentify" />
    <meta property="og:description" content="" />
    <meta name="author" content="Rentify">
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Rentify" />
    <meta property="og:type" content="Rentify is a virtual renting platform that allows you to rent your electronics and book rentals." />

    <!-- Add to home screen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="Rentify" />
    <link rel="apple-touch-icon" href="img/icons/icon-152x152.png" />
    <!-- Windows -->
    <meta name="msapplication-TileImage" content="/img/icons/icon-144x144.png" />
    <meta name="msapplication-TileColor" content="#007bff" />

    <link rel="manifest" href="/manifest.json" />
    <meta name="theme-color" content="#007bff" />

    <!-- Google Knowledge Graph card -->
    <script type='application/ld+json'>
        {
            "@context": "https://www.schema.org",
            "@type": "",
            "name": "Rentify ()",
            "url": "",
            "logo": "img/logo.png",
            "description": "Rentify is a virtual renting platform that allows you to rent your electronics and book rentals."
        }
    </script>

    <!--FAVICON-->
    <link rel="icon" href="img/logo.png" type="image/png">
    <link rel="shortcut icon" href="" type="img/x-icon">

    <!-- STYLESHEETS-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/app.css" rel="stylesheet" type="text/css">


</head>

<nav class="navbar sticky-top centered navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="/">
        <img src="img/logo.png" width="70" height="auto" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about-us">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="rent-product">Rent Now</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add-product">Submit Product</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    FAQ
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>


<div class="text-center">
    <form class="form-add-product" action="https://murmuring-forest-71544.herokuapp.com/api/electronics" method="POST">
        <div class="container">
            <div class="py-5 text-center">
                <h2>Submit Product</h2>
                <hr />
            </div>

            <label for="productName" class="sr-only">Product Name</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Product name" required autofocus>

            <label for="productName" class="sr-only">Product Description</label>
            <textarea id="description" name="description" class="form-control" rows="4" placeholder="Product description"
                required autofocus></textarea>

            <label for="productName" class="sr-only">Rent Fee</label>
            <input type="text" id="dailyRentalFee" name="dailyRentalFee" class="form-control" placeholder="Rent Fee"
                required>

            <label for="stock" class="sr-only">Number of Stock</label>
            <input type="text" id="numberInStock" name="numberInStock" class="form-control" placeholder="stock"
                required>

            <label for="category" class="sr-only">Category</label>
            <input type="text" id="category" name="category" class="form-control" placeholder="Category" required>


            <label for="keywords" class="sr-only">Keywords</label>
            <input type="text" id="keywords" name="keywords" class="form-control" placeholder="tags" required>

            <label for="serialNumber" class="sr-only">Serial Number</label>
            <input type="text" id-="serialNumber" name="serialNumber" class="form-control" placeholder="Serial number"
                required>

            <label for="productionYear" class="sr-only">Production year</label>
            <input type="text" id="productionYear" name="productionYear" class="form-control" placeholder="productionYear"
                required>

            <div class="custom-file">
                <input type="file" id="image" class="custom-file-input" name="image" aria-describedby="inputGroupFileAddon01"
                    required>
                <label class="custom-file-label" for="inputGroupFile01">Product Image</label>
            </div>
        </div>

        <br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">ADD PRODUCT</button>
    </form>
</div>

<!-- Footer -->
<footer class="font-small blue pt-4 bg-primary">

    <div class="container-fluid text-center text-md-left">
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">

                <!-- Content -->
                <h5 class="text-uppercase">RENTIFY</h5>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam ullam eaque amet sed sapiente
                    maiores, nam quae adipisci officia deserunt sequi labore doloribus tempora ut dolorem aliquid,
                    cumque voluptatibus reprehenderit.</p>
            </div>

            <hr class="clearfix w-100 d-md-none pb-3">

            <div class="col-md-3 col-6">

                <!-- Links -->
                <h5 class="text-uppercase">Rent</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>

            </div>
            <div class="col-md-3 col-6">

                <!-- Links -->
                <h5 class="text-uppercase">Add</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 bg-copy">
        <p id="copy"></p>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->



<!--==================== JavaScript ==============================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="js/app.js"></script>
<script src="js/add-product.js"></script>
</body>

</html>