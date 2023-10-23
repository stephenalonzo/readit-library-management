<?php 

class issueBook
{

    public function issueBook($pdo, $book_id, $student_id)
    {

        $sql = "INSERT INTO issued_books (book_id, student_id, issued_on, return_date) VALUES (:book_id, :student_id, NOW(), DATE_ADD(NOW(), INTERVAL 3 DAY))";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':book_id', $book_id);
        $stmt->bindParam(':student_id', $student_id);
        $stmt->execute();

        return $stmt;

    }    

}

class checkIssue extends issueBook
{

    public function checkIssue($pdo, $book_id)
    {

        $sql =
        "SELECT * FROM books WHERE book_id = :book_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':book_id', $book_id);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($results as $row)
        {

            if ($row['issues'] == NULL && $row['issued_status'] == NULL)
            {

                $sql =
                "UPDATE books SET issues = 1, issue_status = 'ISSUED'
                WHERE book_id = :book_id";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':book_id', $book_id);
                $stmt->execute();

                return $stmt;

            }

        }

    }

}

?>