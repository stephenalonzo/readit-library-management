<?php 

require_once ('controller.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currently Issued Books | ReadIT Library Management System</title>
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="./dist/output.css">
</head>

<body class="bg-gray-100">
    <section class="px-4 py-6">
        <div class="container mx-auto">
            <div class="flex flex-row space-x-8 w-full">
                <div class="col-span-2 w-1/3 rounded-sm">
                    <ul>
                        <li class="pl-4 text-white py-4 bg-stone-800">
                            <a href="#">Home</a>
                        </li>
                        <hr>
                        <li class="pl-4 text-white py-4 bg-stone-800">
                            <a href="#">Students for Approval</a>
                        </li>
                        <hr>
                        <li class="pl-4 text-white py-4 bg-stone-800">
                            <a href="#">Manage Students</a>
                        </li>
                        <hr>
                        <li class="pl-4 text-white py-4 bg-stone-800">
                            <a href="#">Manage Library</a>
                        </li>
                        <hr>
                        <li class="pl-4 text-white py-4 bg-stone-800">
                            <a href="#">Add Books</a>
                        </li>
                        <hr>
                        <li class="pl-4 text-white py-4 bg-stone-800">
                            <a href="#">Issue/Return Books</a>
                        </li>
                        <hr>
                        <li class="pl-4 text-white py-4 bg-stone-800">
                            <a href="#">View Currently Issued Books</a>
                        </li>
                        <hr>
                    </ul>
                </div>
                <div class="px-4 w-full h-full col-span-6 space-y-6">
                    <div class="flex flex-col items-center bg-white w-full h-full">
                        <div class="bg-gray-200 px-4 py-2 w-full text-black font-semibold">Currently Issued Books</div>
                        <div class="p-6 w-full">
                            <div class="overflow-x-auto rounded-lg border border-gray-200">
                                <table class="w-full divide-y-2 divide-gray-200 bg-white text-sm">
                                    <thead class="ltr:text-left rtl:text-right">
                                        <tr>
                                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                                Book Issue ID
                                            </th>
                                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                                Book Title
                                            </th>
                                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                                Student ID
                                            </th>
                                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                                Student Name
                                            </th>
                                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                                Issued On
                                            </th>
                                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                                Return Date
                                            </th>
                                        </tr>
                                    </thead>
    
                                    <tbody class="divide-y divide-gray-200">
                                        <tr>
                                            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-center">

                                            </td>
                                            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-center">

                                            </td>
                                            <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center">
                                                
                                            </td>
                                            <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center">
                                                
                                            </td>
                                            <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center">
                                                
                                            </td>
                                            <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center">
                                                
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>