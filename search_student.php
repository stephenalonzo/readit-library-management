<?php 

class searchStudent
{

    public function searchStudent($pdo, $find_student)
    {

        $sql = "SELECT * FROM students WHERE student_id = :student_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':student_id', $find_student);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;

    }

}

?>