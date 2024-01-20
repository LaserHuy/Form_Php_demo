<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white dark:bg-gray-900">
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Check if all fields are filled
                $requiredFields = ['lastName', 'firstName', 'email', 'phone', 'subject', 'message'];

                foreach($requiredFields as $field) {
                    if(!isset($_POST[$field]) || empty($_POST[$field])) {
                        echo "<h2 class='mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white'>Sorry, All fields are required.</h2>";
                        exit;
                    }
                }

                // Check if email is valid
                $email = $_POST['email'];
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<h2 class='mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white'>Sorry, Invalid email format.</h2>";
                    exit;
                }

                $lastName = $_POST['lastName'];
                $firstName = $_POST['firstName'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];

                echo "<h2 class='mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white'>Thank you $firstName $lastName for contacting us about \"$subject\"!</h2>";
                echo "<p class='text-center text-gray-900 dark:text-white'>One of our advisors will contact you either at $email or by telephone at $phone as soon as possible to process your request:</p>";
                echo "<p class='text-center text-gray-900 dark:text-white'>$message</p>";
            } else {
                header('Location: /contact.php');
                exit();
            }
        ?>
    </div>
</body>
</html>