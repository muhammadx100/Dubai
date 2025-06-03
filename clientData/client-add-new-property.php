<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Listing Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .property-form {
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
        input, select {
            display: block;
            width: 100%;
            padding: 8px;
            margin: 5px 0;
        }
        .image-preview {
            max-width: 100%;
            display: none;
            margin-top: 10px;
        }
        button {
            padding: 10px;
            background-color: green;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h2>Enter Property Details</h2>
    <form class="property-form" action="client-listed-properties.php" method="POST" enctype="multipart/form-data">
        <label>Title:</label>
        <input type="text" name="title" placeholder="Property Title" required>

        <label>Price ($):</label>
        <input type="number" name="price" min="0" placeholder="Enter Price" required>

        <label>Address:</label>
        <input type="text" name="address" placeholder="Property Address" required>

        <label>Bedrooms:</label>
        <input type="number" name="bed" min="1" placeholder="Number of Bedrooms" required>

        <label>Bathrooms:</label>
        <input type="number" name="bath"  min="1" placeholder="Number of Bathrooms" required>

        <label>Parking Spots:</label>
        <input type="number" name="parking" min="0" placeholder="Number of Parking Spots" required>

        <label>Area (sq ft):</label>
        <input type="number" name="area"  min="1" placeholder="Property Size" required>

        <label>Upload Images:</label>
        <input type="file" name="image">
        

        <button type="submit">Submit Property</button>
    </form>


</body>
</html>