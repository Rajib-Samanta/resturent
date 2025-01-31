<?php
// Database configuration
$host = 'localhost'; // Database host
$username = 'root'; // Database username
$password = ''; // Database password
$database = 'resturent'; // Replace with your database name

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require 'plugin/PHPMailer/src/Exception.php';
require 'plugin/PHPMailer/src/PHPMailer.php';
require 'plugin/PHPMailer/src/SMTP.php';

// Retrieve form data and sanitize it
$first_name = isset($_POST['first_name']) ? trim($_POST['first_name']) : null;
$last_name = isset($_POST['last_name']) ? trim($_POST['last_name']) : null;
$number = isset($_POST['number']) ? trim($_POST['number']) : null;
$email = isset($_POST['email']) ? trim($_POST['email']) : null;
$date = isset($_POST['date']) ? trim($_POST['date']) : null;
$time = isset($_POST['time']) ? trim($_POST['time']) : null;
$menu = isset($_POST['menu']) ? trim($_POST['menu']) : null;
$payment_method = isset($_POST['payment_method']) ? trim($_POST['payment_method']) : null;
$online_payment_method = isset($_POST['online_payment_method']) ? trim($_POST['online_payment_method']) : null;

// Validate required fields
if (empty($first_name) || empty($last_name) || empty($number) || empty($email) || empty($date) || empty($time) || empty($menu) || empty($payment_method)) {
    echo "All fields are required!";
    exit;
}

// If the payment method is 'online', the online payment method should also be filled
if ($payment_method == 'online' && empty($payment_method)) {
    echo "Please select an online payment method.";
    exit;
}

// Prepare an SQL statement to insert data into the database
$stmt = $conn->prepare("INSERT INTO booking (first_name, last_name, number, email, date, time, menu, payment_method) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
if (!$stmt) {
    die("SQL Error: " . $conn->error);
}

// Bind parameters (note: using 's' for strings and 'i' for integers)
$stmt->bind_param("ssssssss", $first_name, $last_name, $number, $email, $date, $time, $menu, $payment_method, );

// Execute the statement
if ($stmt->execute()) {
    echo "Booking successful!";

    // Sending email confirmation
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->Username = 'rajibsamanta203@gmail.com'; // Your Gmail email address
        $mail->Password = 'aiwq zqmi znpw lpvd'; // Your Gmail app password (not your normal Gmail password)

        // Sender and recipient details
        $mail->setFrom('rajibsamanta203@gmail.com', 'Table Booking');
        $mail->addAddress($email, $first_name . ' ' . $last_name); // Send email to the user who booked

        // Email content
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'Booking Confirmation';
        $mail->Body = "
            <h1>Booking Confirmation</h1>
            <p>Dear $first_name $last_name,</p>
            <p>Thank you for your booking. Here are your booking details:</p>
            <ul>
                <li><strong>First Name:</strong> $first_name</li>
                <li><strong>Last Name:</strong> $last_name</li>
                <li><strong>Phone Number:</strong> $number</li>
                <li><strong>Email:</strong> $email</li>
                <li><strong>Booking Date:</strong> $date</li>
                <li><strong>Time:</strong> $time</li>
                <li><strong>Menu:</strong> $menu</li>
                <li><strong>Payment Method:</strong> $payment_method</li>
                " . ($payment_method == 'online' ? "<li><strong>Online Payment Method:</strong> $online_payment_method</li>" : "") . "
            </ul>
            <p>We look forward to serving you!</p>
        ";

        // Send the email
        $mail->send();
        echo "<script>
        
        window.location.href='booking_success.php'; </script>";
    } catch (Exception $e) {
        echo "Error: Could not send email. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>
