<?php 

class getBooks {
    
    public function getBookList($pdo)
    {

        $sql = "SELECT * FROM books";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;

    }

}

?>