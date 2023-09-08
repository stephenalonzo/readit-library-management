<?php 

class studentRegistration
{

    public function registerStudent($pdo, $first_name, $last_name, $email, $confirm_password)
    {

        $sql = "INSERT INTO students (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $confirm_password);
        $stmt->execute();

        return $stmt;

    }    

}

?>