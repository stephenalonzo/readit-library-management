<?php 

error_reporting (E_ALL ^ E_NOTICE);
error_reporting (E_ERROR | E_PARSE);
date_default_timezone_set('America/Los_Angeles');

require_once ('db_credentials.php');
require_once ('db_access.php');
require_once ('filter_params.php');
require_once ('clean_params.php');
require_once ('get_students.php');
require_once ('student_registration_data.php');
require_once ('add_book_data.php');
require_once ('issue_book_data.php');
require_once ('get_books.php');
require_once ('get_specific_book.php');

require_once ('app-views.php');

$db = new dbCredentials();
$pdo = new dbAccess();

$db->setServerName('localhost');
$db->setUsername('root');

$conn = $pdo->dbConnect($db->getServerName(), $db->getUsername());

$filter_params = new filterParams();
$clean_params = new cleanParams();

$params = $filter_params->filterParams($clean_params);
$clean_params->setCleanParams($params);

$get_specific_books = new getSpecificBook();
$specific_books = $get_specific_books->getSpecificBook($conn, $params['book_id']);

foreach ($specific_books as $specific_book)
{

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
            $add_book->addBook($conn, $params['book_title'], $params['author_name'], $params['book_description'], $params['book_category'], $params['current_issues']);
        break;

        case 'issue_book':
            $issue_book = new issueBook();
            $issue_book->issueBook($conn, $book_title, $params['student_id']);
        break;

    }

}

?>