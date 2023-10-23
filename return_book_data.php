<?php 

class returnBook
{

    public function returnBook($pdo, $book_id)
    {

        $sql = "DELETE FROM issued_books WHERE book_id = :book_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':book_id', $book_id);
        $stmt->execute();

        return $stmt;

    }    

}

class updateStatus extends returnBook
{

    public function updateStatus($pdo, $book_id)
    {

        $sql = "UPDATE books SET issues = NULL, issue_status = NULL WHERE book_id = :book_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':book_id', $book_id);
        $stmt->execute();

        return $stmt;

    }

}

?>