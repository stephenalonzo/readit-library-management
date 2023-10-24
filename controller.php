<?php 

error_reporting (E_ALL ^ E_NOTICE);
error_reporting (E_ERROR | E_PARSE);
date_default_timezone_set('America/Los_Angeles');

require_once ('db_access.php');
require_once ('filter_params.php');
require_once ('clean_params.php');
require_once ('get_students.php');
require_once ('student_registration_data.php');
require_once ('add_book_data.php');
require_once ('issue_book_data.php');
require_once ('get_books.php');
require_once ('return_book_data.php');
require_once ('get_categories.php');
require_once ('get_issued_books.php');
require_once ('search_student.php');
require_once ('total_issues_data.php');
require_once ('get_issues.php');
require_once ('get_student_issues.php');
require_once ('search_book_issue.php');
require_once ('search_book.php');

require_once ('app-views.php');

$pdo = new dbAccess();
$conn = $pdo->dbConnect('localhost', 'root');

$filter_params = new filterParams();
$clean_params = new cleanParams();

$params = $filter_params->filterParams($clean_params);
$clean_params->setCleanParams($params);

// $get_specific_books = new getSpecificBook();
// $specific_books = $get_specific_books->getSpecificBook($conn, $params['book_id']);

foreach ($specific_books as $specific_book)
{

    $book_id = $specific_book['id'];
    $book_title = $specific_book['book_title'];

}

foreach ($_REQUEST as $key => $value)
{

    switch ($key)
    {

        case 'register_student':
            $student_registration = new studentRegistration();
            $student_registration->registerStudent($conn, $params['first_name'], $params['last_name'], $params['email'], $params['confirm_password']);
        break;

        case 'add_book':
            $add_book = new addBook();
            $add_book->addBook($conn, $params['book_title'], $params['author_name'], $params['book_description'], $params['genre_id'], $params['current_issues']);
        break;

        case 'issue_book':
            $issue_book = new checkIssue();
            $issue_book->issueBook($conn, $params['book_id'], $params['student_id']);
            $issue_book->checkIssue($conn, $params['book_id']);

            $total_issues = new totalIssues();
            $total_issues->totalIssues($conn, $params['student_id'], $params['book_id']);
        break;

        case 'return_book':
            $return_book = new updateStatus();
            $return_book->returnBook($conn, $params['book_id']);
            $return_book->updateStatus($conn, $params['book_id']);
        break;

        case 'search_student':
            header("Location: index.php?find_student=".$_POST['student_id']."");
        break;

        case 'search_book':
            header("Location: index.php?find_book=".$_POST['book_id']."");
        break;

        case 'search_book_issue':
            header("Location: index.php?find_book_issue=".$_POST['book_issue']."");
        break; 

    }

}

?>