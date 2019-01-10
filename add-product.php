<!doctype html>
<html>

<head>

    <title>Add Product - Rentify</title>

    <!--Header-->
    <?php include 'includes/header.php'?>

    <!-- STYLESHEETS-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/app.css" rel="stylesheet" type="text/css">


</head>

<body>

<!--Nav Bar-->
<?php include 'includes/nav.php'?>


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
<?php include '../includes/footer.php'?>
<!-- Footer -->



<!--==================== JavaScript ==============================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="js/app.js"></script>
<script src="js/add-product.js"></script>
</body>

</html>
