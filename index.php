<?php 

// error_reporting (E_ALL ^ E_NOTICE);
// error_reporting (E_ERROR | E_PARSE);
// date_default_timezone_set('America/Los_Angeles');

require_once ('db_credentials.php');
require_once ('db_access.php');
require_once ('filter_params.php');
require_once ('clean_params.php');
require_once ('get_students.php');
require_once ('student_registration_data.php');

$db = new dbCredentials();
$pdo = new dbAccess();

$db->setServerName('localhost');
$db->setUsername('root');

$conn = $pdo->dbConnect($db->getServerName(), $db->getUsername());

$filter_params = new filterParams();
$clean_params = new cleanParams();

$params = $filter_params->filterParams($clean_params);
$clean_params->setCleanParams($params);

foreach ($_REQUEST as $key => $value)
{

    switch ($key)
    {

        case 'register_student':
            $student_registration = new studentRegistration();
            $student_registration->registerStudent($conn, $params['first_name'], $params['last_name'], $params['email'], $params['confirm_password']);
        break;

    }

}

?>