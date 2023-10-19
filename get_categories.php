<?php 

class getCategories {
    
    public function getCategories($pdo)
    {

        $sql = "SELECT * FROM book_categories";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;

    }

}

?>