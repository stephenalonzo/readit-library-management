<?php

require_once('controller.php');

$appViews = new appViews();

$header = $appViews->appHeader();
$footer = $appViews->appFooter();

echo $header;

?>

<div class="px-4 w-full h-full col-span-6 space-y-6">
    <div class="flex flex-col items-center bg-white w-full h-full">
        <div class="bg-gray-200 px-4 py-2 w-full text-black font-semibold">Currently Issued Books</div>
        <div class="p-6 w-full">
            <div class="overflow-x-auto rounded-lg border border-gray-200">
                <table class="w-full divide-y-2 divide-gray-200 bg-white text-sm">
                    <thead class="ltr:text-left rtl:text-right">
                        <tr>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Book Issue ID
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Book Title
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Student Name
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Student ID
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Issued On
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Return Date
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        <?php 
                        
                        $issued = new getIssuedBooks();

                        $results = $issued->getIssuedBooks($conn);
                        $appViews->viewCurrentlyIssuedBooks($results);
                        
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