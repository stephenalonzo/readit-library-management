<?php 

class getBooks {
    
    public function getBookList($pdo)
    {

        $sql = 
        "SELECT *
        FROM books
        INNER JOIN book_categories
        ON books.book_category = book_categories.id
        INNER JOIN students
        ON books.current_issue = students.id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;

    }

}

?>