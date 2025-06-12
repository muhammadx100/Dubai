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
        /* Root variables for colors and fonts */
        :root {
            --color-bg: #ffffff;
            --color-text: #374151; /* Dark gray for text */
            --color-muted-text: #6b7280; /* Neutral gray */
            --color-accent: rgb(38, 38, 124); /* Dark blue for accents */
            --color-border: #d1d5db; /* Light gray border */
            --color-shadow: rgba(0, 0, 0, 0.1);
            --font-family: 'Arial', sans-serif;
            --transition-duration: 0.3s;
            --border-radius: 0.75rem;
        }

        body {
            font-family: var(--font-family);
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: var(--color-accent);
            margin-bottom: 20px;
        }

        .property-form {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background-color: var(--color-bg);
            border-radius: var(--border-radius);
            box-shadow: 0 2px 10px var(--color-shadow);
        }

        label {
            font-weight: 600;
            color: var(--color-muted-text);
            margin-bottom: 5px;
            display: block;
        }

        input, select {
            display: block;
            width: 95%;
            padding: 10px;
            margin: 5px 0 15px 0;
            border: 1.5px solid var(--color-border);
            border-radius: var(--border-radius);
            font-size: 1rem;
            transition: border-color var(--transition-duration);
        }

        input:focus, select:focus {
            border-color: var(--color-accent);
            outline: none;
            box-shadow: 0 0 5px rgba(38, 38, 124, 0.3);
        }

        .image-preview {
            max-width: 100%;
            display: none;
            margin-top: 10px;
        }

        button {
            padding: 10px;
            background-color: var(--color-accent);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            font-size: 1rem;
            transition: background-color var(--transition-duration);
            width: 100%;
        }

        button:hover {
            background-color: rgb(28, 28, 96); /* Darker shade on hover */
        }
    </style>
</head>
<body>

    <h2>Enter Property Details</h2>
    <form class="property-form" action="properties-received.php" method="POST" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" placeholder="Property Title" required>

        <label for="price">Price ($):</label>
        <input type="number" id="price" name="price" min="0" placeholder="Enter Price" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" placeholder="Property Address" required>

        <label for="bed">Bedrooms:</label>
        <input type="number" id="bed" name="bed" min="1" placeholder="Number of Bedrooms" required>

        <label for="bath">Bathrooms:</label>
        <input type="number" id="bath" name="bath" min="1" placeholder="Number of Bathrooms" required>

        <label for="parking">Parking Spots:</label>
        <input type="number" id="parking" name="parking" min="0" placeholder="Number of Parking Spots" required>

        <label for="area">Area (sq ft):</label>
        <input type="number" id="area" name="area" min="1" placeholder="Property Size" required>

        <label for="image">Upload Images:</label>
        <input type="file" id="image" name="image">

        <button type="submit">Submit Property</button>
    </form>

</body>
</html>
