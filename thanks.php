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
                echo "<h2 class='mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white'>Sorry, Invalid request</h2>";
            }
        ?>
    </div>
</body>
</html>