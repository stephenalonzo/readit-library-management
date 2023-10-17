<?php require_once ('controller.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue/Return Book | ReadIT Library Management System</title>
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
                        <div class="bg-gray-200 px-4 py-2 w-full text-black font-semibold">Issue a Book</div>
                        <form action="" method="post" class="p-4 w-2/3 flex flex-col space-y-8">
                            <div class="flex flex-row items-center">
                                <label for="" class="w-1/5">Student ID</label>
                                <input type="text" name="student_id" id="" class="p-2 rounded-sm w-full border">
                            </div>
                            <div class="flex flex-row items-center">
                                <label for="" class="w-1/5">Book ID</label>
                                <select name="book_id" id="" class="p-2 rounded-sm w-full border">
                                    <?php 
                                    
                                    $books = new getBooks();
                                    $appView = new appViews();

                                    $results = $books->getBookList($conn);
                                    $row = $appView->getNonIssuedBooks($results);

                                    echo $row;
                                    
                                    ?>
                                </select>
                            </div>
                            <div class="flex flex-row justify-items-end items-end">
                                <button type="submit" name="issue_book" class="w-28 px-4 py-2 rounded-sm bg-blue-600 text-white">Issue Book</button>
                            </div>
                        </form>
                    </div>
                    <div class="flex flex-col items-center bg-white w-full h-full">
                        <div class="bg-gray-200 px-4 py-2 w-full text-black font-semibold">Return a Book</div>
                        <form action="" method="post" class="p-4 w-2/3 flex flex-col space-y-8">
                            <div class="flex flex-row items-center">
                            <label for="" class="w-1/5">Book ID</label>
                                <select name="book_id" id="" class="p-2 rounded-sm w-full border">
                                    <?php 
                                    
                                    $books = new getBooks();
                                    $appView = new appViews();

                                    $results = $books->getBookList($conn);
                                    $row = $appView->getIssuedBooks($results);

                                    echo $row;
                                    
                                    ?>
                                </select>
                            </div>
                            <div class="flex flex-row justify-items-end items-end">
                                <button type="submit" name="return_book" class="w-32 px-4 py-2 rounded-sm bg-blue-600 text-white">Return Book</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>