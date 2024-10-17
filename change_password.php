<?php 
session_start();
include 'connect.php';

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

if (isset($_POST['changePassword'])) {
    $email = $_SESSION['email'];
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    // Check if new password meets the minimum length
    if (strlen($newPassword) < 6) {
        echo "<script>alert('New password must be at least 6 characters long.');</script>";
    } elseif ($newPassword !== $confirmPassword) {
        echo "<script>alert('New password and confirm password do not match.');</script>";
    } else {
        // Verify old password
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$oldPassword'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Update password
            $updateQuery = "UPDATE users SET password='$newPassword' WHERE email='$email'";
            if ($conn->query($updateQuery) === TRUE) {
                echo "<script>alert('Password changed successfully!');</script>";
            } else {
                echo "<script>alert('Error: " . $conn->error . "');</script>";
            }
        } else {
            echo "<script>alert('Old password is incorrect.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <style>
        /* Reset some default styles */
        body, h2, form {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('https://ariabgrestaurant.com/img/intro/restaurants_ARIA_d.jpg') no-repeat center center fixed; 
            background-size: cover; /* Make the background cover the whole area */
        }

        /* Form container */
        .form-container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 90%;
            max-width: 400px;
            text-align: center;
        }

        /* Headings */
        h2 {
            margin-bottom: 20px;
        }

        /* Input styling */
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="password"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Submit button styling */
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Back button styling */
        #backToSignIn {
            padding: 10px 15px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            width: 100%;
        }
        /* Back button styling */
        #backtohomepage {
            padding: 10px 15px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            width: 100%;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            h2 {
                font-size: 1.5em;
            }

            input[type="password"] {
                padding: 8px;
            }

            input[type="submit"], #backToSignIn #backtohomepage {
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Change Password</h2>
        <form method="POST" action="">
            <label for="oldPassword">Old Password:</label>
            <input type="password" name="oldPassword" required><br>
            
            <label for="newPassword">New Password:</label>
            <input type="password" name="newPassword" required><br>
            
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" name="confirmPassword" required><br>
            
            <input type="submit" name="changePassword" value="Change Password">
        </form>
        
        <button id="backToSignIn" onclick="window.location.href='index.php'">
            Back to Sign In
        </button>
        <button id="backtohomepage" onclick="window.location.href='homePage.html'">
            Back to Home Page
        </button>
    </div>
</body>
</html>
