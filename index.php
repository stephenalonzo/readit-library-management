<?php

require_once('controller.php');

$appViews = new appViews();

$header = $appViews->appHeader();
$footer = $appViews->appFooter();

echo $header;

?>

<script>
    document.getElementById("searchBook").addEventListener("click", ctaFindbook);
    document.getElementById("searchStudent").addEventListener("click", ctaFindStudent);
    document.getElementById("searchIssue").addEventListener("click", ctaFindIssue);

    function ctaFindBook() {

        document.getElementById("searchBook").classList.remove("hidden");
        document.getElementById("searchBook").classList.add("flex");

        document.getElementById("searchStudent").classList.add("hidden");
        document.getElementById("searchStudent").classList.remove("flex");

        document.getElementById("searchIssue").classList.add("hidden");
        document.getElementById("searchIssue").classList.remove("flex");

    }

    function ctaFindStudent() {

        document.getElementById("searchStudent").classList.remove("hidden");
        document.getElementById("searchStudent").classList.toggle("flex");

        document.getElementById("searchBook").classList.add("hidden");
        document.getElementById("searchBook").classList.remove("flex");

        document.getElementById("searchIssue").classList.add("hidden");
        document.getElementById("searchIssue").classList.remove("flex");

    }

    function ctaFindIssue() {

        document.getElementById("searchIssue").classList.remove("hidden");
        document.getElementById("searchIssue").classList.add("flex");

        document.getElementById("searchStudent").classList.add("hidden");
        document.getElementById("searchStudent").classList.remove("flex");

        document.getElementById("searchBook").classList.add("hidden");
        document.getElementById("searchBook").classList.remove("flex");

    }
</script>

<div class="px-4 w-full h-full col-span-6 space-y-6">
    <div class="flex flex-col items-start space-y-6">
        <div class="p-6 rounded-sm bg-white text-black w-full text-center">
            <span class="text-2xl font-semibold">ReadIT Library Management System</span>
        </div>
        <div class="grid grid-cols-9 gap-6 w-full text-center">
            <button id="findBook" onclick="ctaFindBook()" class="p-6 bg-white rounded-sm w-full col-span-3 flex flex-col items-center space-y-4">
                <i class="fas fa-list text-4xl text-blue-600"></i>
                <span class="text-xl font-semibold">Find Book</span>
            </button>
            <button id="findBookIssue" onclick="ctaFindIssue()" class="p-6 bg-white rounded-sm w-full col-span-3 flex flex-col items-center space-y-4">
                <i class="fas fa-book text-4xl text-blue-600"></i>
                <span class="text-xl font-semibold">Find Book Issue</span>
            </button>
            <button id="findStudent" onclick="ctaFindStudent()" class="p-6 bg-white rounded-sm w-full col-span-3 flex flex-col items-center space-y-4">
                <i class="fas fa-user text-4xl text-blue-600"></i>
                <span class="text-xl font-semibold">Find Student</span>
            </button>
        </div>
    </div>
    <div class="p-6 w-full h-full bg-white text-white space-y-6 hidden" id="searchStudent">
        <form action="" method="POST" class="flex flex-row items-center m-0 w-full">
            <div class="flex flex-row items-center space-x-2 w-full text-black">
                <input type="text" name="student_id" id="" placeholder="Enter Student ID" class="p-2 rounded-sm w-full border">
                <button type="submit" name="search_student" class="px-4 py-2 rounded-sm bg-blue-600 text-white">Search</button>
            </div>
        </form>
    </div>
    <div class="p-6 w-full h-full bg-white text-white space-y-6 hidden" id="searchBook">
        <form action="" method="post" class="flex flex-row items-center m-0 w-full">
            <div class="flex flex-row items-center space-x-2 w-full text-black">
                <input type="text" name="book_id" id="" placeholder="Enter book title or author name" class="p-2 rounded-sm w-full border">
                <button type="submit" name="search_book" class="px-4 py-2 rounded-sm bg-blue-600 text-white">Search</button>
            </div>
        </form>
    </div>
    <div class="p-6 w-full h-full bg-white text-white space-y-6 hidden" id="searchIssue">
        <form action="" method="post" class="flex flex-row items-center m-0 w-full">
            <div class="flex flex-row items-center space-x-2 w-full text-black">
                <input type="text" name="book_issue" id="" placeholder="Enter Student ID or Book ID" class="p-2 rounded-sm w-full border">
                <button type="submit" name="search_book_issue" class="px-4 py-2 rounded-sm bg-blue-600 text-white">Search</button>
            </div>
        </form>
    </div>

<!-- Find Student pop-up -->

<?php

    $search_student = new searchStudent();
    $search_student_results = $search_student->searchStudent($conn, $_GET['find_student']);

    $student_issues = new getStudentIssues();
    $student_issues_results = $student_issues->getStudentIssues($conn, $_GET['find_student']);

    $rows = count($student_issues_results);

    if ($_GET['find_student']) {

        $appViews->viewStudentData($search_student_results, $rows);

    }

?>

<!-- Find book pop-up -->

<?php 

    $search_book = new searchBook();
    $search_book_results = $search_book->searchBook($conn, $_GET['find_book']);

    if ($_GET['find_book']) {

        $appViews->viewBookData($search_book_results);

    }

?>

<!-- Find book issue pop-up -->

<?php 

    $search_book_issue = new searchBookIssue();
    $search_book_issue_results = $search_book_issue->searchBookIssue($conn, $_GET['find_book_issue'], $_GET['find_book_issue']);

    if ($_GET['find_book_issue']) {

        $appViews->viewIssueBookData($search_book_issue_results);

    }

?>

<?php 

echo $footer;

?>