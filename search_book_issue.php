<?php 

class searchBookIssue {
    
    public function searchBookIssue($pdo, $book_id, $student_id)
    {

        $sql = 
        "SELECT * 
        FROM issued_books
        INNER JOIN students
        ON issued_books.student_id = students.student_id
        INNER JOIN books
        ON issued_books.book_id = books.book_id
        WHERE issued_books.student_id = :student_id
        OR issued_books.book_id = :book_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':book_id', $book_id);
        $stmt->bindParam(':student_id', $student_id);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }

}

?>