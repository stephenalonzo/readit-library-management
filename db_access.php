<?php 

class dbAccess {

    public function dbConnect($servername, $username)
    {

        try {
            $pdo = new PDO("mysql:host=$servername;dbname=timepunch", $username, '');
            // set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }

}

?>