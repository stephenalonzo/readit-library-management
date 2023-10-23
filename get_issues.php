<?php 

class getIssues
{

    public function getIssues($pdo, $book_id)
    {

        $sql =
        "SELECT *
        FROM total_issues
        WHERE book_id = :book_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':book_id', $book_id);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;

    }

}

?>