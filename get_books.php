<?php 

class getBooks
{
    
    public function getBookList($pdo)
    {

        $sql = 
        "SELECT * FROM genres 
        JOIN books 
        ON genres.genre_id = books.genre_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;

    }

}

?>