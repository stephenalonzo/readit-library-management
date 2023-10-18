<?php 

class addBook
{

    public function addBook($pdo, $book_title, $author_name, $book_description, $book_category, $current_issue)
    {

        switch ($book_category)
        {

            case 1:
                $category = 'Fiction';
            break;

        }

        $sql = "INSERT INTO books (book_title, author_name, book_description, book_category, current_issue) VALUES (:book_title, :author_name, :book_description, :book_category, :current_issue)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':book_title', $book_title);
        $stmt->bindParam(':author_name', $author_name);
        $stmt->bindParam(':book_description', $book_description);
        $stmt->bindParam(':book_category', $category);
        $stmt->bindParam(':current_issue', $current_issue);
        $stmt->execute();

        return $stmt;

    }    

}

?>