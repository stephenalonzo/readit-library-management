<?php 

class searchBook
{

    public function searchBook($pdo, $find_book)
    {

        $sql = 
        "SELECT * 
        FROM books 
        WHERE title LIKE '%$find_book%'
        OR author LIKE '%$find_book%'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;

    }

}

?>