<?php 

class getStudentIssues
{

    public function getStudentIssues($pdo, $student_id)
    {

        $sql =
        "SELECT *
        FROM total_issues
        WHERE student_id = :student_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':student_id', $student_id);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;

    }

}

?>