<?php
include("./partials/header.php");
include("./admin/connection.php");

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    // Query to retrieve details of the selected product
    $query = "SELECT * FROM products WHERE id = $product_id";
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
                $product_description = $row['p_description'];
            ?>
                <div class="col-2" id="des_img">
                    <img src='./uploads/<?php echo $product_image; ?>' class="flashing-image">
                </div>
                <div class="col-2">
                    <p>Home / <?php echo "$product_category"; ?></p>
                    <h1><?php echo "$product_name"; ?></h1>
                    <h4><?php echo "$product_price"; ?></h4>
                    <select>
                        <option>Select Size</option>
                        <option>XXL</option>
                        <option>XL</option>
                        <option>L</option>
                        <option>M</option>
                        <option>S</option>
                    </select>
                    <input type="number" value="1">
                    <a href="#" id="btn">Add to Cart</a>
                    <h3>Product Details</h3>
                    <br>
                    <p><?php echo "$product_description" ?></p>
                </div>
            </div>
        <?php
            }
        } else {
            // Product ID not provided in the URL
            echo "Product ID not specified.";
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
    <?php
    include("./partials/footer.php");
    ?>
