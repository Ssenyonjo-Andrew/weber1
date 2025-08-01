<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("config.php");

echo "<h1>Admin Login Test</h1>";

// Test the password hash
$password = "admin123";
$hashed_password = sha1($password);

echo "<h2>Password Verification:</h2>";
echo "<p>Password: <strong>$password</strong></p>";
echo "<p>SHA-1 Hash: <strong>$hashed_password</strong></p>";

// Check database
$query = "SELECT * FROM admin WHERE auser='admin'";
$result = mysqli_query($con, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    echo "<h2>Database Admin Record:</h2>";
    echo "<p>Username: <strong>" . $row['auser'] . "</strong></p>";
    echo "<p>Email: <strong>" . $row['aemail'] . "</strong></p>";
    echo "<p>Stored Hash: <strong>" . $row['apass'] . "</strong></p>";
    
    if ($hashed_password === $row['apass']) {
        echo "<p style='color: green;'><strong>✅ Password matches!</strong></p>";
    } else {
        echo "<p style='color: red;'><strong>❌ Password does not match!</strong></p>";
    }
} else {
    echo "<p style='color: red;'>No admin record found in database!</p>";
}

echo "<h2>Login Instructions:</h2>";
echo "<p>Go to: <a href='http://localhost/weber1/admin/'>http://localhost/weber1/admin/</a></p>";
echo "<p>Username: <strong>admin</strong></p>";
echo "<p>Password: <strong>admin123</strong></p>";
?> 