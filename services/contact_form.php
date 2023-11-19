<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  // You can add more validation and processing here

  // Example: Send an email
  $to = "your_email@example.com";
  $subject = "New Contact Form Submission";
  $headers = "From: $email\r\n";

  // Send the email
  mail($to, $subject, $message, $headers);

  // Redirect or display a thank you message
  header("Location: thank_you_page.html");
  exit();
}
?>
