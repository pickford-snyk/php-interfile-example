<?php
// Include the manipulateEmail function
require_once 'manipulate_email.php';

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Manipulate the email using manipulateEmail function
    $processed_email = manipulateEmail($email);

    // Database connection parameters
    $servername = "localhost";  // Change as necessary
    $username = "username";     // Your MySQL username
    $password = "password";     // Your MySQL password
    $dbname = "mydatabase";     // Your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL query
    $sql = "INSERT INTO users (name, email) VALUES (?, ?)";
    $stmt = mysqli_query($conn, $query);

    // Bind parameters and execute query
    $stmt->bind_param("ss", $name, $processed_email);
    if ($stmt->execute()) {
        echo "<p>Record added successfully!</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>
