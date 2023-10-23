<?php 

class getSpecificBook {
    
    public function getSpecificBook($pdo, $book_id)
    {

        $sql = "SELECT * FROM books WHERE book_id = :book_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':book_id', $book_id);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }

}

?>