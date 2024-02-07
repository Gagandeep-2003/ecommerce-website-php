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

<br><br>
<div class="small-container">
    <div class="row row-2">
        <h2 class="title">All Products</h2>
        <Select>
            <option>Default Shorting</option>
            <option>Short by Price</option>
            <option>Short by Popularity</option>
            <option>Short by Raiting</option>
            <option>Short by Sale</option>
        </Select>
    </div>

    <div class="row">
        <?php
        // Check if there are any products
        
            while ($row = mysqli_fetch_assoc($result)) {
                // Extract product information
                $product_name = $row['p_name'];
                $product_price = $row['p_price'];
                $product_image = $row['p_image'];
                $product_id = $row['id'];
        ?>
        <div class="col-4">
            <a href="ProductDetails.php">
            <figure id="figure">
                <img src="./uploads/<?php echo $product_image; ?>" alt="<?php echo $product_name; ?>">
            </figure>
            </a>
            <h4><?php echo $product_name; ?></h4>
            <p>$<?php echo $product_price; ?></p>
            <a href="ProductDetails.php?product_id=<?php echo $product_id?>"><p id="btn">Buy</p></a>
        </div>
        <?php
            }
       
        ?>
    </div>
</div>

<div class="page-btn">
    <span>1</span>
    <span>2</span>
    <span>3</span>
    <span>4</span>
    <span>&#8594;</span>
</div>

<?php
include("./partials/footer.php");
?>