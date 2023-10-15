<?php require_once ('controller.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Book | ReadIT Library Management System</title>
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet" type="text/css" />
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
                        <div class="bg-gray-200 px-4 py-2 w-full text-black font-semibold">Add Books</div>
                        <form action="" method="post" class="p-4 w-2/3 flex flex-col space-y-8">
                            <div class="flex flex-row items-center">
                                <label for="" class="w-1/5">Title of Book</label>
                                <input type="text" name="book_title" id="" class="p-2 rounded-sm w-full border">
                            </div>
                            <div class="flex flex-row items-center">
                                <label for="" class="w-1/5">Author Name</label>
                                <input type="text" name="author_name" id="" class="p-2 rounded-sm w-full border">
                            </div>
                            <div class="flex flex-row items-start">
                                <label for="" class="w-1/5">Description</label>
                                <textarea name="book_description" id="" class="p-2 rounded-sm w-full border h-52 resize-none"></textarea>
                            </div>
                            <div class="flex flex-row items-center">
                                <label for="" class="w-1/5">Category</label>
                                <select name="book_category" id="" class="p-2 rounded-sm w-full border">
                                    <option value="1">Test</option>
                                </select>
                            </div>
                            <div class="flex flex-row justify-items-end items-end">
                                <button type="submit" name="add_book" class="w-26 px-4 py-2 rounded-sm bg-blue-600 text-white">Add Book</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>