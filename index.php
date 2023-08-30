<?php 

// error_reporting (E_ALL ^ E_NOTICE);
// error_reporting (E_ERROR | E_PARSE);
// date_default_timezone_set('America/Los_Angeles');

require_once ('db_credentials.php');
require_once ('db_access.php');
require_once ('filter_params.php');
require_once ('clean_params.php');

$db = new dbCredentials();
$pdo = new dbAccess();

$filter_params = new filterParams();
$clean_params = new cleanParams();

$params = $filter_params->filterParams($clean_params);
$clean_params->setCleanParams($params);

$db->setServerName('localhost');
$db->setUsername('root');

$pdo->dbConnect($db->getServerName(), $db->getUsername());

echo $params['name'];

?>

<form action="" method="post">
    <input type="text" name="name" id="">
    <button type="submit">Send</button>
</form>