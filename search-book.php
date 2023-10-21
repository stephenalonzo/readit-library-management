<?php

require_once('controller.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search a Book | ReadIT Library Management System</title>
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./dist/output.css">
</head>

<body class="bg-gray-100">
    <section class="px-4 py-6">
        <div class="container mx-auto w-2/3 flex flex-col items-center space-y-8">
            <div class="bg-white w-full rounded-sm">
                <div class="px-4 py-2 bg-gray-200 font-semibold">Search a Book</div>
                <div class="p-6 w-full h-full bg-white text-white space-y-6">
                    <form action="" method="post" class="flex flex-row items-center m-0">
                        <div class="flex flex-row items-center space-x-2 w-full text-black">
                            <input type="text" name="book" id="" placeholder="Name or author of the book" class="p-2 rounded-sm w-full border">
                            <button type="submit" name="search_book" class="px-4 py-2 rounded-sm bg-blue-600 text-white">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="p-6 bg-white w-full rounded-sm">
                <div class="overflow-x-auto rounded-lg border border-gray-200">
                    <table class="w-full divide-y-2 divide-gray-200 bg-white text-sm">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                    Book ID
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                    Book Title
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                    Author
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                    Category
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                    Status
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 text-center">
                            <tr>
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                    John Doe
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">Web Developer</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">$120,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>

</html>