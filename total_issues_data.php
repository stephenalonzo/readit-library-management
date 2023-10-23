<?php 

class totalIssues
{

    public function totalIssues($pdo, $book_id, $student_id)
    {

        $sql = "INSERT INTO total_issues (book_id, student_id) VALUES (:book_id, :student_id)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':book_id', $book_id);
        $stmt->bindParam(':student_id', $student_id);
        $stmt->execute();

        return $stmt;

    }

}

?>