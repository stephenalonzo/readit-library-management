<?php 

class issueBook
{

    public function issueBook($pdo, $book_title, $student_id)
    {

        $sql = "INSERT INTO issued_books (book_title, student_id, issued_on, return_date) VALUES (:book_title, :student_id, NOW(), NOW()+3)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':book_title', $book_title);
        $stmt->bindParam(':student_id', $student_id);
        $stmt->execute();

        if ($book_title != NULL || $student_id != NULL)
        {

            return $stmt;

        }

    }    

}

?>