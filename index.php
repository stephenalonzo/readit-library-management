<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | ReadIT Library Management System</title>
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
                    <div class="flex flex-col items-start space-y-6">
                        <div class="p-6 rounded-sm bg-white text-black w-full text-center">
                            <span class="text-2xl font-semibold">ReadIT Library Management System</span>
                        </div>
                        <div class="grid grid-cols-9 gap-6 w-full text-center">
                            <a href="#" class="p-6 bg-white rounded-sm w-full col-span-3 flex flex-col items-center space-y-4">
                                <i class="fas fa-list text-4xl text-blue-600"></i>
                                <span class="text-xl font-semibold">Find Book</span>
                            </a>
                            <a href="#" class="p-6 bg-white rounded-sm w-full col-span-3 flex flex-col items-center space-y-4">
                                <i class="fas fa-book text-4xl text-blue-600"></i>
                                <span class="text-xl font-semibold">Find Book Issue</span>
                            </a>
                            <a href="#" class="p-6 bg-white rounded-sm w-full col-span-3 flex flex-col items-center space-y-4">
                                <i class="fas fa-user text-4xl text-blue-600"></i>
                                <span class="text-xl font-semibold">Find Student</span>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="p-6 w-full h-full bg-white text-white space-y-6">
                        <form action="" method="post" class="flex flex-row items-center space-x-4">
                            <div class="flex flex-row items-center space-x-2 w-full text-black">
                                <label for="">Enter Student ID</label>
                                <input type="text" name="" id="" class="p-2 rounded-sm w-full border">
                            </div>
                            <button type="submit" class="px-4 py-2 rounded-sm bg-blue-600 text-white">Search</button>
                        </form>
                        <div class="px-4 py-2 bg-blue-300 text-blue-600 text-sm text-center">Student Details</div>
                        <div class="flex flex-row space-x-4">
                            <ul class="text-end">
                                <li class="text-black font-semibold">Student ID</li>
                                <li class="text-black font-semibold">Student Name</li>
                                <li class="text-black font-semibold">Book Issued</li>
                                <li class="text-black font-semibold">Total Books Issued</li>
                            </ul>
                            <ul class="text-start">
                                <li class="text-black">Student ID</li>
                                <li class="text-black">Student Name</li>
                                <li class="text-black">Book Issued</li>
                                <li class="text-black">Total Books Issued</li>
                            </ul>
                        </div>
                        <div class="px-4 py-2 bg-blue-300 text-blue-600 text-sm text-center">Issued Book Details</div>
                        <div class="flex flex-row space-x-4">
                            <ul class="text-end">
                                <li class="text-black font-semibold">Issue ID</li>
                                <li class="text-black font-semibold">Book Title</li>
                                <li class="text-black font-semibold">Issued On</li>
                            </ul>
                            <ul class="text-start">
                                <li class="text-black">Issue ID</li>
                                <li class="text-black">Book Title</li>
                                <li class="text-black">Issued On</li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
</body>
</html>