<?php 

class appViews
{

    public function appHeader()
    {

        $header = 
        '<!DOCTYPE html>
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
                                    <a href="./">Home</a>
                                </li>
                                <hr>
                                <li class="pl-4 text-white py-4 bg-stone-800">
                                    <a href="#">Students for Approval</a>
                                </li>
                                <hr>
                                <li class="pl-4 text-white py-4 bg-stone-800">
                                    <a href="./manage-students.php">Manage Students</a>
                                </li>
                                <hr>
                                <li class="pl-4 text-white py-4 bg-stone-800">
                                    <a href="./manage-library.php">Manage Library</a>
                                </li>
                                <hr>
                                <li class="pl-4 text-white py-4 bg-stone-800">
                                    <a href="./add-book-form.php">Add Books</a>
                                </li>
                                <hr>
                                <li class="pl-4 text-white py-4 bg-stone-800">
                                    <a href="./issue-return-book.php">Issue/Return Books</a>
                                </li>
                                <hr>
                                <li class="pl-4 text-white py-4 bg-stone-800">
                                    <a href="./currently-issued-books.php">View Currently Issued Books</a>
                                </li>
                                <hr>
                            </ul>
                        </div>';

                        return $header;

    }

    public function appFooter()
    {

        $footer = 
        '               </div>
                    </div>
                </section>
            </body>
        </html>';

        return $footer;
        
    }

    public function viewStudents($results)
    {

        foreach ($results as $row)
        {

            $student_row = 
            '<tr>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-center">
                    '.$row['first_name'].'
                </td>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-center">
                    '.$row['last_name'].'
                </td>
                <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center">'.$row['email'].'</td>
            </tr>';

            echo $student_row;

        }

    }

    public function viewNonIssuedBooks($results)
    {

        foreach ($results as $row)
        {

            if ($row['issue_status'] != 'ISSUED')
            {

                $books_list = 
                '<option value="'.$row['book_id'].'">'.$row['book_id'].'</option>';
                
                echo $books_list;

            }

        }


    }

    public function viewIssuedBooks($results)
    {

        foreach ($results as $row)
        {

            if ($row['issue_status'] == 'ISSUED')
            {

                $books_list = 
                '<option value="'.$row['book_id'].'">'.$row['book_id'].'</option>';
                
                echo $books_list;

            }

        }

    }

    public function viewCurrentlyIssuedBooks($results)
    {

        foreach ($results as $row)
        {

            $issued_books =
            '<tr>
            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-center">
                '.$row['book_id'].'
            </td>
            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-center">
                '.$row['title'].'
            </td>
            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-center">
                '.$row['first_name'].' '.$row['last_name'].'
            </td>
            <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center">
                '.$row['student_id'].'
            </td>
            <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center">
                '.$row['issued_on'].'
            </td>
            <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center">
                '.$row['return_date'].'
            </td>
        </tr>';

        echo $issued_books;

        }

    }

    public function viewBooks($results, $rows)
    {

        foreach ($results as $row)
        {

            $book_row = 
            '<tr>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-center">
                    '.$row['book_id'].'
                </td>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-center">
                    '.$row['title'].'
                </td>
                <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center">'.$row['author'].'</td>
                <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center">'.$row['genre'].'</td>
                <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center">'.$rows.'</td>
            </tr>';

            echo $book_row;
            
        }
        
    }

    public function viewCategories($results)
    {

        foreach ($results as $row)
        {

            $categories = 
            '<option value="'.$row['id'].'">'.$row['genre'].'</option>';
            
            echo $categories;

        }

    }

    public function viewStudentData($results, $rows)
    {

        foreach ($results as $row)
        {

            $student_data =
            '<div class="p-6 w-full h-full bg-white text-white space-y-6">
            <div class="px-4 py-2 bg-blue-300 text-blue-600 text-sm text-center">Student Details</div>
            <div class="flex flex-row space-x-4">
                <ul class="text-end">
                    <li class="text-black font-semibold">Student ID</li>
                    <li class="text-black font-semibold">Student Name</li>
                    <li class="text-black font-semibold">Book Issued</li>
                    <li class="text-black font-semibold">Total Books Issued</li>
                </ul>
                <ul class="text-start">
                    <li class="text-black">'.$row['student_id'].'</li>
                    <li class="text-black">'.$row['first_name'].' '.$row['last_name'].'</li>
                    <li class="text-black">Book Issued</li>
                    <li class="text-black">'.$rows.'</li>
                </ul>
            </div>
            <!-- <div class="px-4 py-2 bg-blue-300 text-blue-600 text-sm text-center">Issued Book Details</div>
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
            </div> --!>
        </div>';

            echo $student_data;
        
        }
    
    }

    public function viewBookData($results)
    {

        foreach ($results as $row)
        {

            $book_data =
            '<div class="p-6 w-full h-full bg-white text-white space-y-6">
            <div class="px-4 py-2 bg-blue-300 text-blue-600 text-sm text-center">Book Details</div>
            <div class="flex flex-row space-x-4">
                <ul class="text-end">
                    <li class="text-black font-semibold">Book ID</li>
                    <li class="text-black font-semibold">Book Title</li>
                    <li class="text-black font-semibold">Author</li>
                    <li class="text-black font-semibold">Book Genre</li>
                </ul>
                <ul class="text-start">
                    <li class="text-black">'.$row['book_id'].'</li>
                    <li class="text-black">'.$row['title'].'</li>
                    <li class="text-black">'.$row['author'].'</li>
                    <li class="text-black">'.$row['genre_id'].'</li>
                </ul>
            </div>
            <!-- <div class="px-4 py-2 bg-blue-300 text-blue-600 text-sm text-center">Issued Book Details</div>
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
            </div> --!>
        </div>';

            echo $book_data;
        
        }

    }

    public function viewIssueBookData($results)
    {

        foreach ($results as $row)
        {

            $book_data =
            '<div class="p-6 w-full h-full bg-white text-white space-y-6">
            <div class="px-4 py-2 bg-blue-300 text-blue-600 text-sm text-center">Book Details</div>
            <div class="flex flex-row space-x-4">
                <ul class="text-end">
                    <li class="text-black font-semibold">Book ID</li>
                    <li class="text-black font-semibold">Book Title</li>
                    <li class="text-black font-semibold">Author</li>
                    <li class="text-black font-semibold">Book Genre</li>
                </ul>
                <ul class="text-start">
                    <li class="text-black">'.$row['book_id'].'</li>
                    <li class="text-black">'.$row['title'].'</li>
                    <li class="text-black">'.$row['author'].'</li>
                    <li class="text-black">'.$row['genre_id'].'</li>
                </ul>
            </div>
            <div class="px-4 py-2 bg-blue-300 text-blue-600 text-sm text-center">Student Details</div>
            <div class="flex flex-row space-x-4">
                <ul class="text-end">
                    <li class="text-black font-semibold">Student ID</li>
                    <li class="text-black font-semibold">Student Name</li>
                </ul>
                <ul class="text-start">
                    <li class="text-black">'.$row['student_id'].'</li>
                    <li class="text-black">'.$row['first_name'].' '.$row['last_name'].'</li>
                </ul>
            </div>
        </div>';

            echo $book_data;
        
        }

    }

}

?>