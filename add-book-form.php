<?php

require_once('controller.php');

$appViews = new appViews();

$header = $appViews->appHeader();
$footer = $appViews->appFooter();

echo $header;

?>


<div class="px-4 w-full h-full col-span-6 space-y-6">
<div class="flex flex-col items-center bg-white w-full h-full">
    <div class="bg-gray-200 px-4 py-2 w-full text-black font-semibold">Add Books</div>
    <form action="" method="post" class="p-4 w-2/3 flex flex-col space-y-8">
        <div class="flex flex-row items-center">
            <label for="" class="w-1/5">Title of Book</label>
            <input type="text" name="book_title" id="" class="p-2 rounded-sm w-full border">
        </div>
        <div class="flex flex-row items-center">
            <label for="" class="w-1/5">Author Name</label>
            <input type="text" name="author_name" id="" class="p-2 rounded-sm w-full border">
        </div>
        <div class="flex flex-row items-start">
            <label for="" class="w-1/5">Description</label>
            <textarea name="book_description" id="" class="p-2 rounded-sm w-full border h-52 resize-none"></textarea>
        </div>
        <div class="flex flex-row items-center">
            <label for="" class="w-1/5">Category</label>
            <select name="book_category" id="" class="p-2 rounded-sm w-full border">
                <option value="1">Test</option>
            </select>
        </div>
        <div class="flex flex-row justify-items-end items-end">
            <button type="submit" name="add_book" class="w-26 px-4 py-2 rounded-sm bg-blue-600 text-white">Add Book</button>
        </div>
    </form>
</div>
</div>

<?php 

echo $footer;

?>