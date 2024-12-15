




<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .hero-bg {
            background-image: url('pexel.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
        .message {
            display: none;
            margin-top: 10px;
            padding: 10px;
            border-radius: 5px;
        }
        .error { 
            background-color: #f8d7da;
            color: #721c24;
        }
        .success { 
            background-color: #d4edda;
            color: #155724;
        }
    </style>
    <script>
        function clearMessages() {
            document.querySelector('.success').style.display = 'none';
            document.querySelector('.error').style.display = 'none';
        }
        
        function showMessage(type, message) {
            const msgElement = document.querySelector('.' + type);
            msgElement.textContent = message;
            msgElement.style.display = 'block';
            setTimeout(clearMessages, 5000);
        }
    </script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!-- Full Screen Image -->
    <div class="hero-bg flex items-center justify-center text-white">
        <h1 class="text-5xl font-bold bg-black bg-opacity-50 p-4 rounded-lg">Welcome to Ruttonsha</h1>
    </div>
    <div class="container mx-auto p-6">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-3xl font-bold mb-4 text-center">Contact Us</h1>
            <!-- Contact Details -->
            <div class="grid md:grid-cols-2 gap-8 mb-8">
                <div class="space-y-6">
                    <div>
                        <h2 class="text-xl font-semibold">Get in Touch</h2>
                        <p class="text-gray-600 mt-2">We'd love to hear from you! Whether you have a question, feedback, or a project to discuss, our team is ready to assist you.</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium">Email</h3>
                        <a href="mailto:marketing@ruttonsha.com" class="text-blue-600 hover:underline">marketing@ruttonsha.com</a>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium">Phone</h3>
                        <p class="text-gray-600">+91 93 2212 1271</p>
                        <p class="text-gray-600">+91 77 3814 1738</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium">Follow Us</h3>
                        <div class="flex space-x-4 mt-2">
                            <a href="#" class="text-blue-600 hover:underline"><i class="fab fa-facebook-square"></i> Facebook</a>
                            <a href="#" class="text-blue-600 hover:underline"><i class="fab fa-twitter-square"></i> Twitter</a>
                            <a href="#" class="text-blue-600 hover:underline"><i class="fab fa-linkedin"></i> LinkedIn</a>
                        </div>
                    </div>
                </div>
                <!-- Contact Form -->
                <div>
                    <form class="space-y-4" action="" method="post">
                        <div class="success message"></div>
                        <div class="error message"></div>
                        <input type="text" name="name" placeholder="Name" class="w-full p-3 border rounded-lg" />
                        <input type="email" name="email" placeholder="Email" class="w-full p-3 border rounded-lg" />
                        <input type="text" name="contact" placeholder="Contact Number" class="w-full p-3 border rounded-lg" />
                        <input type="text" name="city" placeholder="City" class="w-full p-3 border rounded-lg" />
                        <textarea name="message" placeholder="Message" rows="6" class="w-full p-3 border rounded-lg"></textarea>
                        <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700">Send</button>
                    </form>
                </div>
            </div>
            <!-- Map -->
            <div class="mb-8">
                <h3 class="text-lg font-medium">Map</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.6333455528293!2d72.88897517466633!3d19.123734450473332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c80e7065cd01%3A0x6762fa5c67ba4ac0!2sRIR%20POWER%20ELECTRONICS%20LIMITED%20(Formerly%20Ruttonsha%20International%20Rectifier%20Ltd.)!5e0!3m2!1sen!2sin!4v1734250243655!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- Company Address -->
            <div class="bg-blue-50 p-6 rounded-lg mb-8">
                <h2 class="text-xl font-semibold text-blue-800">Our Address</h2>
                <p class="text-gray-700 mt-2">
                    <span class="font-bold">Ruttonsha</span><br>
                    139/141, Solaris 1, B-wing, 1st Floor, Saki Vihar Road, Powai, Opp. L&T Gate N0 6,<br>
                    Andheri(E), Maharashtra, India<br>
                    PIN - 400070
                </p>
            </div>
            <!-- Company Details -->
            <div class="bg-blue-50 p-6 rounded-lg">
                <h2 class="text-xl font-semibold text-blue-800">About Ruttonsha</h2>
                <p class="text-gray-700 mt-2">At <span class="font-bold">Ruttonsha</span>, RIR is a 5-decade-old organization making considerable state-of-the-art innovations in the “Power Electronics” industry. RIR enjoys the advantage of being the only company in the private sector to manufacture semiconductor devices right from the diffusion stage.</p>
            </div>
            <!-- Footer -->
            <footer class="mt-8 text-center text-gray-600">
                <p>&copy; 2024 <span class="font-bold">Ruttonsha</span>. All rights reserved.</p>
            </footer>
        </div>
    </div>
</body>
</html>

<?php


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
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        $_SESSION['errors'] = $errors;
    }
}

// Check for success message in session
if (isset($_SESSION['success_message'])) {
    echo '<script>showMessage("success", "' . $_SESSION['success_message'] . '");</script>';
    unset($_SESSION['success_message']); // Clear the message after displaying it
}

// Check for error messages in session
if (isset($_SESSION['errors'])) {
    foreach ($_SESSION['errors'] as $error) {
        echo '<script>showMessage("error", "' . $error . '");</script>';
    }
    unset($_SESSION['errors']); // Clear errors after displaying them
}
?>