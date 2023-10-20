<?php

require_once('controller.php');

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
        <div class="container mx-auto w-2/3 flex flex-row items-start space-x-8">
            <div class="bg-white w-full rounded-sm">
                <div class="px-4 py-2 bg-gray-200">Librarian/Admin Login</div>
                <div class="p-6">
                    <form action="" method="post" class="space-y-6 mb-0">
                        <div class="flex flex-row items-center space-x-4">
                            <input type="email" name="email" id="" class="p-2 rounded-sm w-full border" placeholder="Email address">
                        </div>
                        <div class="flex flex-row items-center space-x-4">
                            <input type="password" name="password" id="" class="p-2 rounded-sm w-full border" placeholder="Password">
                        </div>
                        <div class="flex flex-row items-center space-x-4">
                            <button type="submit" name="librarian_login" class="w-24 px-4 py-2 rounded-sm bg-blue-600 text-white">Log In</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bg-white w-full rounded-sm">
                <div class="px-4 py-2 bg-gray-200">Student Section</div>
                <div class="p-6 flex flex-col space-y-4">
                    <a href="#" class="font-medium">Student Registration Form</a>
                    <a href="#" class="font-medium">Search Book</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>