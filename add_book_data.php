<?php 

class addBook
{

    public function addBook($pdo, $book_title, $author_name, $book_description, $genre_id)
    {

        $sql = "INSERT INTO books (title, author, description, genre_id) VALUES (:title, :author, :description, :genre_id)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':title', $book_title);
        $stmt->bindParam(':author', $author_name);
        $stmt->bindParam(':description', $book_description);
        $stmt->bindParam(':genre_id', $genre_id);
        $stmt->execute();

        return $stmt;

    }    

}

?>