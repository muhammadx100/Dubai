<?php
include 'C:/xampp1/htdocs/dubai/database.php';
session_start(); // Start the session

// Check if the session variable is set
$user_id = 0;
if (isset($_SESSION["user-data"]["ID"])) {
    $user_id = $_SESSION["user-data"]["ID"];
} else {
    echo "Session variable 'user_id' is not set.";
    exit; // Exit if user_id is not set
}

$property_id = $_SESSION["property_id"];

// Fetch original property details from the database
$query_original = "SELECT title, price, address, bedroom, bathroom, parking, area, image FROM propertydetail WHERE id='$property_id'";
$result_original = $connection->query($query_original);
$original_data = $result_original->fetch_assoc();

// Get the updated values from POST, or use original values if empty
$update_title = !empty($_POST["title"]) ? $_POST["title"] : $original_data['title'];
$update_price = !empty($_POST["price"]) ? $_POST["price"] : $original_data['price'];
$update_address = !empty($_POST["address"]) ? $_POST["address"] : $original_data['address'];
$update_bedroom = !empty($_POST["bedroom"]) ? $_POST["bedroom"] : $original_data['bedroom'];
$update_bathroom = !empty($_POST["bathroom"]) ? $_POST["bathroom"] : $original_data['bathroom'];
$update_parking = !empty($_POST["parking"]) ? $_POST["parking"] : $original_data['parking'];
$update_area = !empty($_POST["area"]) ? $_POST["area"] : $original_data['area'];

// Handle image upload
$file = $_FILES["image"]["name"];
if ($file) {
    $file_extension = pathinfo($file, PATHINFO_EXTENSION); // returns .png or .jpg
    $temporary_path = $_FILES["image"]["tmp_name"]; // returns the temporary path of the file
    $permanent_path = "property_img/dp_" . time() . "." . $file_extension; // dp_12748392311.jpg

    // Move the uploaded file from temporary folder to uploads 
    move_uploaded_file($temporary_path, $permanent_path);
} else {
    $permanent_path = $original_data['image']; // Use the original image if no new image is uploaded
}

// SQL query to update the property details
$query = "UPDATE propertydetail SET 
    title = '$update_title', 
    price = '$update_price', 
    address = '$update_address', 
    bedroom = '$update_bedroom', 
    bathroom = '$update_bathroom', 
    parking = '$update_parking', 
    area = '$update_area', 
    image = '$permanent_path' 
WHERE id='$property_id'";

$update_info = $connection->query($query);

if ($update_info) {
    echo "Property details updated successfully.";
} else {
    echo "Error updating property details: " . $connection->error;
}
?>
