<?php 

require_once ('controller.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration | ReadIT Library Management System</title>
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./dist/output.css">
</head>
<body class="bg-gray-100">
    <section class="px-4 py-6">
        <div class="container mx-auto p-6 bg-white w-1/3 rounded-sm">
            <form action="" method="post" class="space-y-6">
                <div class="flex flex-row items-center space-x-4">
                    <input type="text" name="first_name" id="" class="p-2 rounded-sm w-full border" placeholder="Enter your first name">
                    <input type="text" name="last_name" id="" class="p-2 rounded-sm w-full border" placeholder="Enter your last name">
                </div>
                <div class="flex flex-row items-center space-x-4">
                    <input type="email" name="email" id="" class="p-2 rounded-sm w-full border" placeholder="Enter your email address">
                </div>
                <div class="flex flex-row items-center space-x-4">
                    <input type="password" name="password" id="" class="p-2 rounded-sm w-full border" placeholder="Enter your password">
                    <input type="password" name="confirm_password" id="" class="p-2 rounded-sm w-full border" placeholder="Confirm your password">
                </div>
                <div class="flex flex-row items-center space-x-4">
                    <button type="submit" name="register_student" class="w-24 px-4 py-2 rounded-sm bg-blue-600 text-white">Register</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>