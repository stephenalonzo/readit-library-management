<?php

require_once('controller.php');

$appViews = new appViews();

$header = $appViews->appHeader();
$footer = $appViews->appFooter();

echo $header;

?>

<div class="px-4 w-full h-full col-span-6 space-y-6">
    <div class="flex flex-col items-center bg-white w-full h-full">
        <div class="bg-gray-200 px-4 py-2 w-full text-black font-semibold">Issue a Book</div>
        <form action="" method="post" class="p-4 w-2/3 flex flex-col space-y-8">
            <div class="flex flex-row items-center">
                <label for="" class="w-1/5">Student ID</label>
                <input type="text" name="student_id" id="" class="p-2 rounded-sm w-full border">
            </div>
            <div class="flex flex-row items-center">
                <label for="" class="w-1/5">Book ID</label>
                <select name="book_id" id="" class="p-2 rounded-sm w-full border">
                    <?php

                    $books = new getBooks();
                    $appView = new appViews();

                    $results = $books->getBookList($conn);
                    $row = $appView->viewNonIssuedBooks($results);

                    echo $row;

                    ?>
                </select>
            </div>
            <div class="flex flex-row justify-items-end items-end">
                <button type="submit" name="issue_book" class="w-28 px-4 py-2 rounded-sm bg-blue-600 text-white">Issue Book</button>
            </div>
        </form>
    </div>
    <div class="flex flex-col items-center bg-white w-full h-full">
        <div class="bg-gray-200 px-4 py-2 w-full text-black font-semibold">Return a Book</div>
        <form action="" method="post" class="p-4 w-2/3 flex flex-col space-y-8">
            <div class="flex flex-row items-center">
                <label for="" class="w-1/5">Book ID</label>
                <select name="book_id" id="" class="p-2 rounded-sm w-full border">
                    <?php

                    $books = new getBooks();
                    $appView = new appViews();

                    $results = $books->getBookList($conn);
                    $row = $appView->viewIssuedBooks($results);

                    echo $row;

                    ?>
                </select>
            </div>
            <div class="flex flex-row justify-items-end items-end">
                <button type="submit" name="return_book" class="w-32 px-4 py-2 rounded-sm bg-blue-600 text-white">Return Book</button>
            </div>
        </form>
    </div>
</div>

<?php

echo $footer;

?>