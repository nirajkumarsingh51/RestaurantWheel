<?php
// Sendinblue API URL and API key
$api_url = 'https://api.sendinblue.com/v3/smtp/email';
$api_key = 'Use your Api key '; // Replace with your actual Sendinblue API key

// Get the user's email from the form submission
$resetEmail = $_POST['resetEmail'];

// Database connection (replace with your actual database details)
$servername = "sql109.infinityfree.com";
$username = "if0_37484826";
$passwordDB = "dY6nsyy3ap";
$dbname = "if0_37484826_login";

$conn = new mysqli($servername, $username, $passwordDB, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Verify that the email exists in the database and get the current password
$emailCheckSql = "SELECT email, password FROM users WHERE email=?";
$stmt = $conn->prepare($emailCheckSql);
$stmt->bind_param("s", $resetEmail);
$stmt->execute();
$emailCheckResult = $stmt->get_result();

if ($emailCheckResult->num_rows > 0) {
    // Fetch the user's current password
    $user = $emailCheckResult->fetch_assoc();
    $currentPassword = $user['password'];

    // Prepare the email content
    $subject = 'Your Recover Password';
    $body = "
        <p>Your current password is: <strong>$currentPassword</strong></p>
        <p>Please keep it secure and change it immediately if needed.</p>
        <p>Thank you for connecting with Restaurant-Wheel! 😊 - Tech Team </p>
    ";

    // Data for Sendinblue API request
    $data = array(
        'sender' => array('name' => 'Restaurant-Wheel', 'email' => 'nirajsingh9570460932@gmail.com'),
        'to' => array(array('email' => $resetEmail, 'name' => 'User')),
        'subject' => $subject,
        'htmlContent' => $body,
    );

    // Use cURL to send the email via Sendinblue API
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'api-key: ' . $api_key,
    ));
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Check for successful email sending
    if ($httpCode == 201) {
        echo "<p>Current password sent to your email.</p>";
    } else {
        echo "<p>Failed to send email. Error: " . $response . "</p>";
    }
} else {
    echo "<p>Email address not found in the database.</p>";
}

// Close the database connection and prepared statement
$stmt->close();
$conn->close();
?>

<!-- HTML for Redirect Button -->
<div style="margin-top: 20px;">
    <button id="backToSignIn" onclick="window.location.href='index.php'" style="padding: 10px 15px; font-size: 16px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
        Back to Sign In
    </button>
</div>
