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

        if ($stmt)
        {

            $sql = "UPDATE books SET current_issue = :current_issue WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':current_issue', $student_id);
            $stmt->bindParam(':id', $book_id);
            $stmt->execute();

            return $stmt;

        }

    }    

}

?>