<?php 

class searchBook
{

    public function searchBook($pdo, $find_book)
    {

        $sql = 
        "SELECT * 
        FROM books 
        WHERE book_id = :book_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':book_id', $find_book);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;

    }

}

?>