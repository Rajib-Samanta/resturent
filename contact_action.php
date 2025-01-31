<?php
// Database configuration
$host = 'localhost';  // Database host (usually localhost)
$dbname = 'resturent';  // Name of your database
$username = 'root';  // Your database username
$password = '';  // Your database password (empty for local development)

// Create a PDO connection to the database
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $number = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['sub']);
    $message = htmlspecialchars($_POST['message']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit();
    }

    // Prepare SQL query to insert data into the database
    $sql = "INSERT INTO contact(name, email, number, subject, message) VALUES (:name, :email, :number, :subject, :message)";

    // Prepare the statement
    $stmt = $pdo->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':number', $number);
    $stmt->bindParam(':subject', $subject);
    $stmt->bindParam(':message', $message);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Thank you! Your message has been sent.";

        // Send an email to the site admin (or any recipient)
        $to = 'rajibsamanta203@gmail.com';  // Change this to the recipient's email address
        $email_subject = "New Contact Form Submission: $subject";
        $email_body = "You have received a new message from your website contact form.\n\n".
                      "Name: $name\n".
                      "Email: $email\n".
                      "Phone: $number\n".
                      "Subject: $subject\n".
                      "Message:\n$message";
        
        // Set headers for the email
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Send the email
        if (mail($to, $email_subject, $email_body, $headers)) {
            echo " Email sent successfully.";
        } else {
            echo " Failed to send email.";
        }
    } else {
        echo "There was an error saving your message. Please try again.";
    }
}
?>
