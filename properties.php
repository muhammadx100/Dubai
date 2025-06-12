<?php
   include 'header.php';
   include 'sliding-window.php';
?>

<html>
<head>
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

        #property-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            padding: 30px;
            margin: 80px;
        }

        .property-item {
            position: relative;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 15px;
            border-radius: var(--border-radius);
            box-shadow: 0 2px 6px var(--color-shadow);
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            transition: box-shadow 0.3s ease;
        }

        .property-item:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .property-item h3,
        .property-item h4 {
            margin-top: 10px;
            margin-bottom: 10px;
            width: 100%;
        }

        .property-item h3 {
            color: orangered;
            font-size: 20px;
            line-height: 1.2;
        }

        .property-item h4 {
            color: var(--color-accent);
            font-size: 20px;
            line-height: 1.2;
        }

        .property-item p {
            margin: 5px 0;
            color: var(--color-text);
            font-size: 14px;
            line-height: 1.4;
            flex-grow: 1;
        }

        .property-item img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-top: 15px;
            object-fit: cover;
            transition: transform 0.15s;
        }

        .property-item:hover img {
            transform: scale(1.05);
        }

        /* Editable form inside card */
        .edit-form {
            display: none;
            flex-direction: column;
            gap: 10px;
            margin-top: 10px;
        }

        .edit-form input[type="text"],
        .edit-form input[type="number"] {
            width: 100%;
            padding: 8px 10px;
            font-size: 1rem;
            border-radius: var(--border-radius);
            border: 1.5px solid var(--color-border);
            transition: border-color var(--transition-duration);
            font-family: var(--font-family);
        }
        .edit-form input[type="text"]:focus,
        .edit-form input[type="number"]:focus {
            border-color: var(--color-accent);
            outline: none;
            box-shadow: 0 0 5px rgba(38, 38, 124, 0.3);
        }
        
        .edit-form .button-group {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
        }
        .edit-form button {
            padding: 8px 16px;
            font-size: 1rem;
            border-radius: var(--border-radius);
            border: none;
            cursor: pointer;
            transition: background-color var(--transition-duration);
            font-weight: 600;
            user-select: none;
        }
        .edit-form .save-btn {
            background-color: var(--color-accent);
            color: white;
        }
        .edit-form .save-btn:hover,
        .edit-form .save-btn:focus {
            background-color: rgb(28, 28, 96);
            outline: none;
        }
        .edit-form .cancel-btn {
            background-color: #e2e8f0;
            color: var(--color-text);
        }
        .edit-form .cancel-btn:hover,
        .edit-form .cancel-btn:focus {
            background-color: #cbd5e1;
            outline: none;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            #property-list {
                grid-template-columns: repeat(1, 1fr);
                padding: 10px;
                margin: 20px;
            }
        }
    </style>
</head>

<body>

<div id="property-list">
    <?php
    include 'C:/xampp1/htdocs/dubai/database.php';
    
    function fetchAllProperties($connection) {
        $properties = [];
        $sql = "SELECT * FROM propertydetail"; 
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $properties[] = $row;
            }
        }
        return $properties;
    }

    function getImageUrl($imagePath) {
        return $imagePath;
    }

    $properties = fetchAllProperties($connection);
    
    if (!empty($properties)) {
        foreach ($properties as $property) {
            $id = htmlspecialchars($property["id"]);
            $imgUrl = !empty($property["image"]) ? htmlspecialchars(getImageUrl($property["image"])) : "";
            $price = htmlspecialchars($property["price"]);
            $title = htmlspecialchars($property["title"]);
            $address = htmlspecialchars($property["address"]);
            $bedroom = htmlspecialchars($property["bedroom"]);
            $bathroom = htmlspecialchars($property["bathroom"]);
            $parking = htmlspecialchars($property["parking"]);
            $area = htmlspecialchars($property["area"]);

            echo "<div class='property-item' data-id='$id'>";
            // Image
            if ($imgUrl) {
                echo "<img src='$imgUrl' alt='Property Image'>";
            } else {
                echo "<p>No image available.</p>";
            }

            // Display mode content container
            echo "<div class='view-mode'>";
            echo "<h3>Price: $$price</h3>";
            echo "<h4>$title</h4>";
            echo "<p>Address: $address</p>";
            echo "<p>Bedrooms: $bedroom</p>";
            echo "<p>Bathrooms: $bathroom</p>";
            echo "<p>Parking Spots: $parking</p>";
            echo "<p>Area (sq ft): $area</p>";
            echo "</div>";

            // Removed update button and edit form

            echo "</div>"; // property-item end
        }
    } else {
        echo "<p>No properties found.</p>";
    }
    ?>
</div>

</body>
</html>


<?php
   include 'rating.php';
   include 'footer.php';
?>