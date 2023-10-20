<?php 

class getBooks {
    
    public function getBookList($pdo)
    {

        $sql = "SELECT * FROM book_categories INNER JOIN books ON book_categories.id = books.book_category";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;

    }

}

?>