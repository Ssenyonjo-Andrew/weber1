<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>PHP Test Page</h1>";
echo "<p>PHP is working!</p>";

// Test database connection
echo "<h2>Database Connection Test</h2>";
$con = mysqli_connect("localhost","root","","realestatephp");
if (mysqli_connect_errno()) {
    echo "<p style='color: red;'>Database connection failed: " . mysqli_connect_error() . "</p>";
} else {
    echo "<p style='color: green;'>Database connection successful!</p>";
    
    // Test if tables exist
    $result = mysqli_query($con, "SHOW TABLES");
    if ($result) {
        echo "<p>Tables in database:</p><ul>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<li>" . $row[0] . "</li>";
        }
        echo "</ul>";
    }
}

// Test session
echo "<h2>Session Test</h2>";
session_start();
echo "<p>Session started successfully</p>";

// Test file permissions
echo "<h2>File Permission Test</h2>";
$upload_dir = "admin/upload/";
if (is_writable($upload_dir)) {
    echo "<p style='color: green;'>Upload directory is writable</p>";
} else {
    echo "<p style='color: red;'>Upload directory is not writable</p>";
}

echo "<h2>XAMPP Status</h2>";
echo "<p>If you can see this page, Apache is working!</p>";
?> 