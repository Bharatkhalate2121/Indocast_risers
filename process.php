<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contact_form";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the form fields and remove whitespace
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $mno = trim($_POST["mno"]);
    $message = trim($_POST["message"]);

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO msg (Name, Email, Subject, Mobile_no, Messages) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $subject, $mno, $message);

    // Execute the statement
    if ($stmt->execute()) {
        // Set a 200 (okay) response code
        http_response_code(200);
        echo "Your message has been sent and stored in the database. Thank you!";
    } else {
        // Set a 500 (internal server error) response code
        http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your message.";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    // Not a POST request, set a 403 (forbidden) response code
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
?>
