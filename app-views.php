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
                <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center">'.count($results).'</td>
            </tr>';

        }

        return $student_row;

    }

    public function viewNonIssuedBooks($results)
    {

        foreach ($results as $row)
        {

            if ($row['current_issue'] == NULL || empty($row['current_issue']))
            {

                $books_list = 
                '<option value="'.$row['id'].'">'.$row['id'].'</option>';
                
                echo $books_list;

            }

        }


    }

    public function viewIssuedBooks($results)
    {

        foreach ($results as $row)
        {

            if ($row['current_issue'] != NULL || !empty($row['current_issue']))
            {

                $books_list = 
                '<option value="'.$row['id'].'">'.$row['id'].'</option>';
                
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
                '.$row['id'].'
            </td>
            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-center">
                '.$row['book_title'].'
            </td>
            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-center">
                '.$row['student_name'].'
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

    public function viewBooks($results)
    {

        foreach ($results as $row)
        {

            $book_row = 
            '<tr>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-center">
                    '.$row['id'].'
                </td>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-center">
                    '.$row['book_title'].'
                </td>
                <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center">'.$row['author_name'].'</td>
                <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center">'.$row['category_title'].'</td>
                <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center">'.$row['current_issue'] .'</td>
            </tr>';

            echo $book_row;
            
        }
        
    }

    public function viewCategories($results)
    {

        foreach ($results as $row)
        {

            $categories = 
            '<option value="'.$row['id'].'">'.$row['category_title'].'</option>';
            
            echo $categories;

        }

    }

}

?>