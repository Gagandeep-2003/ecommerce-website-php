<?php
include("./partials/header.php");
?>
   
    <!-- related produced -->
    <div class="small-container">
        <div class="row row-2"></div>
        <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Related Products</h2>
    </div>


    <!-- cart items details -->
    <div class="small-container cart-page">
        <table>
            <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="./images/brand1.png" alt="img">
                    <div>
                        <p>Puma</p>
                        <small>Price: $50.00</small>
                        <a href="#">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>50.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="./images/brand3.png" alt="img">
                    <div>
                        <p>Puma</p>
                        <small>Price: $50.00</small>
                        <a href="#">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>50.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="./images/brand2.png" alt="img">
                    <div>
                        <p>Puma</p>
                        <small>Price: $50.00</small>
                        <a href="#">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>50.00</td>
        </tr>
        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td>Total</td>
                    <td>$200.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$200.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$200.00</td>
                </tr>
            </table>
        </div>
    </div>

<?php
include("./partials/footer.php");
?>