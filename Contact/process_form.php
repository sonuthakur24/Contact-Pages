<?php
 session_start();// Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define the error messages
    $errors = [];

    // Validate name
    if (empty($_POST["name"])) {
        $errors["name"] = "Name is required";
    } elseif (!preg_match('/^[A-Za-z\s]+$/', $_POST["name"])) {
        $errors["name"] = "Name must contain only alphabetic characters";
    }

    // Validate email
    if (empty($_POST["email"])) {
        $errors["email"] = "Email is required";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email format";
    }

    // Validate contact
    if (empty($_POST["contact"])) {
        $errors["contact"] = "Contact Number is required";
    } elseif (!preg_match('/^\d{9,12}$/', $_POST["contact"])) {
        $errors["contact"] = "Contact Number must be between 9 and 12 digits";
    }

    // Validate city
    if (empty($_POST["city"])) {
        $errors["city"] = "City is required";
    } elseif (!preg_match('/^[A-Za-z\s]+$/', $_POST["city"])) {
        $errors["city"] = "City must contain only alphabetic characters";
    }

    // Validate message
    if (empty($_POST["message"])) {
        $errors["message"] = "Message is required";
    } elseif (!preg_match('/^[A-Za-z\s]{10,}$/', $_POST["message"])) {
        $errors["message"] = "Message must contain at least 10 alphabetic characters";
    }

    // If no errors, show success message
    if (empty($errors)) {
        // Process form data (e.g., send an email or save to database)
        $_SESSION['success_message'] = "Your message has been sent successfully!";
        
        // Clear form data
        header("Location: index.html");
        exit;
    } else {
        $_SESSION['errors'] = $errors;
        header("Location: index.html");
        exit;
    }
}
?>
