<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
</head>
<body>
<?php
// Establish a connection to the database (same as in search.php)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connection established successfully
echo "Connected to the database!";

// Retrieve the product ID from the URL parameter
$productId = $_GET['id'];

// Perform the database query
$sql = "SELECT * FROM products WHERE id = $productId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display the product details
    $row = $result->fetch_assoc();
    $productName = $row["name"];
    $productImage = $row["image"];
    $productPrice = $row["price"];

    // Output the product details as HTML
    echo "<h1>$productName</h1>";
    echo "<img src='$productImage' alt='$productName'>";
    echo "<p>$productPrice</p>";
} else {
    echo "Product not found.";
}

// Close the database connection (same as in search.php)
$conn->close();
?>
</body>
</html>
