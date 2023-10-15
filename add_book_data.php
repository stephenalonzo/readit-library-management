<?php 

class addBook
{

    public function addBook($pdo, $book_title, $author_name, $book_description, $book_category, $current_issues)
    {

        $sql = "INSERT INTO books (book_title, author_name, book_description, book_category, current_issues) VALUES (:book_title, :author_name, :book_description, :book_category, :current_issues)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':book_title', $book_title);
        $stmt->bindParam(':author_name', $author_name);
        $stmt->bindParam(':book_description', $book_description);
        $stmt->bindParam(':book_category', $book_category);
        $stmt->bindParam(':current_issues', $current_issues);
        $stmt->execute();

        return $stmt;

    }    

}

?>