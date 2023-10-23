<?php 

class getIssuedBooks {
    
    public function getIssuedBooks($pdo)
    {

        $sql = 
        "SELECT * FROM books 
        JOIN issued_books ON books.book_id = issued_books.book_id 
        JOIN students ON issued_books.student_id = students.student_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;

    }

}

?>