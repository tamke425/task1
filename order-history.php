<?php
include('partials-front/menu.php');

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "<section class='order-history'>
            <div class='container'>
                <p>Please login to view your order history.</p>
            </div>
        </section>";
    include('partials-front/footer.php');
    exit; // Stop execution if the user is not logged in
}

$user_id = $_SESSION['user_id'];

// Query to retrieve the order history from the database
$sql = "SELECT * FROM tbl_order WHERE customer_id = $user_id ORDER BY order_date DESC";
$res = mysqli_query($conn, $sql);

// Check if any orders are found
if (mysqli_num_rows($res) > 0) {
    ?>
    <section class="order-history">
        <div class="container">
            <h2 class="text-center">Order History</h2>

            <?php
            while ($row = mysqli_fetch_assoc($res)) {
                $order_id = $row['id'];
                $product = $row['product'];
                $price = $row['price'];
                $qty = $row['qty'];
                $total = $row['total'];
                $order_date = $row['order_date'];
                $status = $row['status'];
                ?>

                <div class="order">
                    <h4>Order ID: <?php echo $order_id; ?></h4>
                    <p>Product: <?php echo $product; ?></p>
                    <p>Price: <?php echo $price; ?> ETB</p>
                    <p>Quantity: <?php echo $qty; ?></p>
                    <p>Total: <?php echo $total; ?> ETB</p>
                    <p>Date: <?php echo $order_date; ?></p>
                    <p>Status: <?php echo $status; ?></p>
                </div>

            <?php
            }
            ?>

        </div>
    </section>

<?php
} else {
    echo "<section class='order-history'>
            <div class='container'>
                <p>No order history available.</p>
            </div>
        </section>";
}

include('partials-front/footer.php');
?>
