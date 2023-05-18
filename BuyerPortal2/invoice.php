<?php
// connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

$conn = mysqli_connect("localhost", "root", "", "impulse101");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// get data from database
$buyer_id = $_GET['buyer id']; // get invoice id from URL parameter
$sql = "SELECT * FROM buyer id WHERE buyer id = $ buyer id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// calculate total amount
$quantity = $row['quantity'];
$price_per_unit = $row['price_per_unit'];
$total_amount = $quantity * $price_per_unit;

// output invoice bill
echo "<h1>Invoice Bill</h1>";
echo "<p><b>Invoice ID:</b> " . $row['buyer id'] . "</p>";
echo "<p><b>Date:</b> " . $row['date'] . "</p>";
echo "<p><b>Buyer Name:</b> " . $row['buyer_name'] . "</p>";
echo "<p><b>Buyer Phone:</b> " . $row['buyer_phone'] . "</p>";
echo "<p><b>Buyer Address:</b> " . $row['buyer_address'] . "</p>";
echo "<p><b>Product Name:</b> " . $row['product_name'] . "</p>";
echo "<p><b>Quantity:</b> " . $quantity . "</p>";
echo "<p><b>Price Per Unit:</b> $" . $price_per_unit . "</p>";
echo "<p><b>Total Amount:</b> $" . $total_amount . "</p>";

mysqli_close($conn);
?>
