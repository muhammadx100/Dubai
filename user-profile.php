<?php
session_start();

if ($_SESSION["user_visit"] != "true") {
    header("Location: http://127.0.0.1/dubai/login-data.php");
}
include 'header.php';
include 'sliding-window.php';
?>

<html>
<head>
    <link href="styles/user-profile.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
        }

        .user_profile {
            max-width: 400px;
            margin: auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            margin-top: 80px;
        }

        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #007bff; /* Accent color */
            margin-bottom: 20px;
        }

        h1 {
            font-size: 1.5rem;
            color: #333;
            margin: 10px 0;
        }

        h2 {
            font-size: 1rem;
            color: #666;
            margin: 5px 0;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 20px;
        }

        button {
            background-color: #007bff; /* Primary button color */
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }

        button a {
            color: white;
            text-decoration: none;
        }

        .logout-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #007bff;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .logout-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="user_profile">
        <img class="profile-img" src="<?php echo $_SESSION['user-data']['profileimg']; ?>" alt="Profile Image">
        <h1><?php echo $_SESSION["user-data"]["fullname"]; ?></h1>
        

        <div class="button-container">
            <button><a href="update-profile.php">Update Profile</a></button>
            <button><a href="client-add-new-property.php">Add Property</a></button>
            <button><a href="list-property.php">View Listed Property</a></button>
        </div>

        <a class="logout-link" href="logout.php">Log out</a>
    </div>
</body>
</html>
