<?php 

class returnBook
{

    public function returnBook($pdo, $book_id)
    {

        $sql = "DELETE FROM issued_books WHERE book_id = :book_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':book_id', $book_id);
        $stmt->execute();

        if ($stmt)
        {

            $sql = "UPDATE books SET current_issue = NULL WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $book_id);
            $stmt->execute();

            return $stmt;

        }

    }    

}

?>