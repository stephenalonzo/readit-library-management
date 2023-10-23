<?php 

class addBook
{

    public function addBook($pdo, $book_title, $author_name, $book_description, $genre_id)
    {

        $sql = "INSERT INTO books (book_title, author_name, book_description, genre_id) VALUES (:book_title, :author_name, :book_description, :genre_id)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':book_title', $book_title);
        $stmt->bindParam(':author_name', $author_name);
        $stmt->bindParam(':book_description', $book_description);
        $stmt->bindParam(':genre_id', $genre_id);
        $stmt->execute();

        return $stmt;

    }    

}

?>