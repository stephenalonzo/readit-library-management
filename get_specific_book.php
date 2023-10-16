<?php 

class getSpecificBook {
    
    public function getSpecificBook($pdo, $book_id)
    {

        $sql = "SELECT * FROM books WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $book_id);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }

}

?>