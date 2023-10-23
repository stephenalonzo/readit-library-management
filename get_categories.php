<?php 

class getCategories {
    
    public function getCategories($pdo)
    {

        $sql = "SELECT * FROM genres";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;

    }

}

?>