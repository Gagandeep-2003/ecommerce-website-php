<?php
include("./partials/header.php");
?>


    <?php
// Include your database connection file if not already included
include("./admin/connection.php");

// Query to retrieve product data
$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
?>

    <!-- single product details -->
    <div class="small-container single-product">
        <div class="row">
        <?php
        // Check if there are any products
        
            while ($row = mysqli_fetch_assoc($result)) {
                // Extract product information
                $product_name = $row['p_name'];
                $product_price = $row['p_price'];
                $product_image = $row['p_image'];
                $product_category = $row['p_category'];
        ?>
            <div class="col-2">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='./uploads/<?php $product_image?>'>
            </div>
            <div class="col-2">
                <p>Home / <?php echo "$product_category";?></p>
                <h1><?php echo "$product_name";?></h1>
                <h4><?php echo "$product_price";?></h4>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>L</option>
                    <option>M</option>
                    <option>S</option>
                </select>
                <input type="number" value="1">
                <a href="" id="btn">Add to Cart</a>
                <h3>Product Details</h3>
                <br>
                <p>They are typically made of cotton textile in a stockinette or jersey knit, which has a distinctively pliable texture compared to shirts made of woven cloth. Some modern versions have a body made from a continuously knitted tube, produced on a circular knitting machine, such that the torso has no side seams.</p>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <!-- related produced -->
    <div class="small-container">
        <div class="row row-2"></div>
        <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Related Products</h2>
    </div>
<div class="small-container">
    <div class="row">
        <div class="col-4">
            <img src="./images/tshirt1.jpg">
            <h4>T-Shirt</h4>
            <p>$50.00</p>
            <a href="ProductDetails.php"><p id="btn">Buy</p></a>
        </div>
        <div class="col-4">
            <img src="./images/t-shirt.jpg">
            <h4>T-Shirt</h4>
            <p>$50.00</p>
            <a href="ProductDetails.php"><p id="btn">Buy</p></a>
        </div>
        <div class="col-4">
            <img src="./images/t-shirt2.jpg">
            <h4>T-Shirt</h4>
            <p>$50.00</p>
            <a href="ProductDetails.php"><p id="btn">Buy</p></a>
        </div>
    </div>
    </div>
</div>
<?php
include("./partials/footer.php");
?>