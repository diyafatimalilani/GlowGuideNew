<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "glow_guide";

// Create connection
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Assuming form fields are submitted via POST
$user = $_POST["name"];
$email = $_POST["email"];
$testimonial = $_POST["testimonial"];

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO testimonial (name, email, testimonial) VALUES (?, ?, ?)");

// Check if prepare() succeeded
if ($stmt === false) {
    die("Failed to prepare statement: " . htmlspecialchars($conn->error));
}

// Bind parameters
if (!$stmt->bind_param("sss", $user, $email, $testimonial)) {
    die("Failed to bind parameters: " . htmlspecialchars($stmt->error));
}

// Execute the statement
if (!$stmt->execute()) {
    die("Execute failed: " . htmlspecialchars($stmt->error));
} else {
    echo "Data added successfully!";
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
