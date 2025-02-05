<?php
// Include your database connection code here.

// Define the username and password to be checked.
$providedUsername = $_POST['Saura'];
$providedPassword = $_POST['Saura123'];

// Query your database to check if the username and password match.
// Replace 'users' with the actual table name where your user data is stored.
$sql = "SELECT * FROM users WHERE username = '$providedUsername' AND password = '$providedPassword'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Authentication successful
    echo "Authentication successful. Redirecting to GCR...";
    header("Location: /gcr"); // Redirect to the GCR page
} else {
    // Authentication failed
    echo "Authentication failed. Please check your username and password.";
}

// Close the database connection
$conn->close();
?>
