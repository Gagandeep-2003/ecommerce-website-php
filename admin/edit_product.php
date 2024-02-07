<?php
include_once("connection.php");

$pid = $_GET['pid'];
$product_name = $_GET['pname'];
$product_price = $_GET['pprice'];
$product_category = $_GET['category'];
$product_description = $_GET['description'];
$p_img = $_GET['img'];
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link rel="shortcut icon" type="x-icon" href="./images/weblogo.png">
        <link rel="stylesheet" href="../css/style.css">

        <title>ittakeShopping | ONLINE SHOPPING</title>
        <style>
        .container {
            margin-top: 100px;
        }

        .container h2 {
            font-size: 4em;
            -webkit-text-stroke: 3px darkgrey;
            -webkit-text-fill-color: white;
            -webkit-animation: fill 0.5s infinite alternate;
        }

        @-webkit-keyframes fill {
            from { -webkit-text-fill-color: #00eb8f; }
            to { -webkit-text-fill-color: slategrey; }
        }

        .form-label {
            font-weight: bold;
        }

        /* Additional styling */
        .container, .mb-3 {
            margin-bottom: 20px;
        }
        .form-control {
            padding: 10px;
        }
        .btn-primary {
            background-color: #00eb8f;
            border-color: #00eb8f;
            color: white; /* Text color */
            font-weight: bold; /* Make the text bold */
        }
        .btn-primary:hover {
            background-color: #00c67d;
            border-color: #00c67d;
        }

        /* Style the "Sign Up" link */
        span {
            display: block; /* Place the "Sign Up" link on a new line */
            text-align: center;
            margin-top: 10px;
            font-weight: bold; /* Make the text bold */
        }

        span a {
            text-decoration: none; /* Remove the underline from the link */
            color: #00eb8f; /* Link color */
        }

        span a:hover {
            color: #00c67d; /* Link color on hover */
        }
    </style>
    </head>
    <body>

    <div id="main">
            <div id="nav">
                <div id="part1">
                    <h1><a href="#">ittakeShopping</a></h1>
                </div>
                <div id="part2">
                    <a href="../shopping webiste.php">Home</a>
                    <a href="Products.php">Products</a>
                    <a href="../about.php">About</a>
                </div>  
                   
            </div>
    </div>


</head>
<body>
    <!-- ... (your navigation and other content) ... -->
   
    <div class="container">
    <h2 class="text-center mb-5">Edit Form</h2>
    <form action="edit_product.php" method="get" enctype="multipart/form-data">
        <!-- Add your form elements here with values from PHP variables -->
        <input type="hidden" class="form-control" id="pid" name="pid" value="<?php echo $pid; ?>">
        <div class="mb-3">
            <label for="pname" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="pname" name="pname" placeholder="Enter product name" value="<?php echo $product_name; ?>">
        </div>
        <div class="mb-3">
            <label for="pprice" class="form-label">Product Price</label>
            <input type="text" class="form-control" id="pprice" name="pprice" placeholder="Enter product price" value="<?php echo $product_price; ?>">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-control" id="category" name="category">
                <option value="Shoes">--Select option--</option>
                <option value="Shoes" <?php if ($product_category === 'Shoes') echo 'selected'; ?>>Shoes</option>
                <option value="T-Shirt" <?php if ($product_category === 'T-Shirt') echo 'selected'; ?>>T-Shirt</option>
                <option value="Jeans" <?php if ($product_category === 'Jeans') echo 'selected'; ?>>Jeans</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Product Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter product description"><?php echo $product_description; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="pimage" class="form-label">Product Image</label>
            <input type="file" class="form-control" id="pimage" name="pimage" value="<?php echo $product_img; ?>">
        </div>
        <!-- Add other form elements as needed -->
        <button type="submit" class="btn btn-primary mb-5" name="submit">Submit</button>
    </form>
</div>




<?php

if(isset($_GET['submit'])) {
    $pid = $_GET['pid'];
    $product_name = $_GET['pname'];
    $product_price = $_GET['pprice'];
    $product_category = $_GET['category'];
    $product_description = $_GET['description'];
    $p_img = $_GET['img'];

    $query = "UPDATE products SET p_name='$product_name', p_price='$product_price', p_category='$product_category', p_description='$product_description', p_image='$p_img' WHERE id = '$pid'";


    $data = mysqli_query($conn, $query);

    if($data){
        echo "<script>alert('Record Updated')
        window.location.href = 'all_products.php';
        </script>";
        
    } else {
        echo "<script>alert('Record not Updated')</script>";
        echo "Error: " . mysqli_error($conn);
    }
}
?>