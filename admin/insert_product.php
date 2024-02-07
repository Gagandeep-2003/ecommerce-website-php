<?php
include("../partials/header.php");
include("connection.php");

if(isset($_POST["submit"])){
    $p_name = $_POST['pname'];
    $p_price = $_POST['pprice'];
    $p_catg = $_POST['category'];
    $p_desc = $_POST['description'];
    $p_img_name = $_FILES['pimage']['name'];
    $temp_name = $_FILES['pimage']['tmp_name'];
    $destination = "../uploads/".$p_img_name;

    // Check if the uploaded file has a valid image extension
    $allowedExtensions = array("jpg", "jpeg", "png", "gif"); // Add more if needed
    $fileExtension = strtolower(pathinfo($p_img_name, PATHINFO_EXTENSION));
    if (!in_array($fileExtension, $allowedExtensions)) {
        echo "<script>alert('Only image files (jpg, jpeg, png, gif) are allowed.')</script>";
        // You can redirect back to the upload form or do something else here.
    } else {
        // If the file has a valid extension, move it to the destination.
        move_uploaded_file($temp_name, $destination);

        $sql = "INSERT INTO products (p_name, p_price, p_category, p_description, p_image) VALUES ('$p_name', '$p_price', '$p_catg', '$p_desc', '$p_img_name')";

        if(mysqli_query($conn, $sql)){
            echo "<script>alert('Product inserted Successfully')</script>";
            header("Location:../products.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);

include("../partials/footer.php");
?>
