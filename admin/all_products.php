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
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px 10px;
            margin-left: 25px;
            font-family: 'Poppins', sans-serif;
        }

        th, td {
            border: 1px solid #F8F0E5;
            padding: 8px;
            text-align: left;
            transition: all 1s;
        }

        td:hover {
            border-bottom: 1px solid #0F2C59;
        }

        th {
            background-color: #DAC0A3;
        }
        figure {
	width: 200px;
	height: 200px;
	margin: 0;
	padding: 0;
	background: #fff;
	overflow: hidden;
}
        .database-image {
            
    width: 100%;
    height: 100%;
    object-fit: cover;
    /* transform: scale(1); */
    transition: .3s ease-in-out;
    border: 2px solid #DAC0A3;
    border-radius: 5px;
    /* transform: scale(1.5); */
    
}
figure:hover img{
    transform: scale(1.05);
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
                    <a href="all_products.php">Products</a>
                    <a href="../about.php">About</a>
                </div>  
                   
            </div>
    </div>
    <br><br><br><br><br>
   
    <div class="container m-0 mb-4">
        <form method="post">
       <a href="add_products.php"><button type="button" name="submit" class="btn btn-primary">Add Product</button></a>     
        </form>
    </div>

    <?php
    include_once "connection.php";

    // Delete operation
    if (isset($_POST['delete'])) {
        $product_to_delete = $_POST["delete"];
        $del_query = "DELETE FROM products WHERE id = '$product_to_delete' ";
        if (mysqli_query($conn, $del_query)) {
            echo"<script>
            alert('Product Deleted Successfully!')
            window.location.href='all_products.php';
            </script>
            ";
            
        } else {
            $err = mysqli_error($conn);
            echo "Data not deleted successfully due to this error - $err";
        }
    }
    ?>

    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Description</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM products";
            $exe = mysqli_query($conn, $query);
            while ($res = mysqli_fetch_assoc($exe)) {
            ?>
            <tr>
                <td><figure id="database-image"><img src="../uploads/<?php echo $res["p_image"] ?>" alt="Product Image" class="database-image"></figure></td>
                <td><?php echo $res["p_name"] ?></td>
                <td><?php echo $res["p_price"] ?></td>
                <td><?php echo $res["p_category"] ?></td>
                <td><?php echo $res["p_description"] ?></td>
                <td>
    <form method="post">
        <input type="hidden" name="delete" value="<?php echo $res['id'] ?>">
        <button type="submit" class="btn btn-danger">
            <i class="fa-solid fa-minus"></i> Delete
        </button>
    </form>
</td>
<td>
    <button type="submit" class="btn btn-warning">
        <a href="edit_product.php?pid=<?php echo $res['id'] ?>&pname=<?php echo $res['p_name'] ?>&pprice=<?php echo $res['p_price'] ?>&category=<?php echo $res['p_category'] ?>&description=<?php echo $res['p_description'] ?>&img=<?php echo $res['p_image'] ?>">
            <i class="fa-solid fa-edit"></i> Edit
        </a>
    </button>
</td>

            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <?php
    if (mysqli_query($conn, $query)) {
        
        echo "Data deleted successfully";
    } else {
        $err = mysqli_error($conn);
        echo "Data not deleted successfully due to this error - $err";
    }

    // Close the database connection
    mysqli_close($conn);
    ?>
</body>
</html>
