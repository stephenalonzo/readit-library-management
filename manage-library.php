<?php

require_once('controller.php');

$appViews = new appViews();

$header = $appViews->appHeader();
$footer = $appViews->appFooter();

echo $header;

?>

<div class="px-4 w-full h-full col-span-6 space-y-6">
    <div class="flex flex-col items-center bg-white w-full h-full">
        <div class="bg-gray-200 px-4 py-2 w-full text-black font-semibold">Manage Library</div>
        <div class="p-6 w-full">
            <div class="overflow-x-auto rounded-lg border border-gray-200">
                <table class="w-full divide-y-2 divide-gray-200 bg-white text-sm">
                    <thead class="ltr:text-left rtl:text-right">
                        <tr>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Book ID
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Title
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Author
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Category
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Current Issue
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        <?php

                        $students = new getBooks();
                        $appView = new appViews();
                        $issues = new getIssues();

                        $results = $students->getBookList($conn);

                        $get_issues_results = $issues->getIssues($conn, $row['book_id']);

                        $rows = count($get_issues_results);

                        $appView->viewBooks($results, $rows);

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php

echo $footer;

?>