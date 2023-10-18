<?php

require_once('controller.php');

$appViews = new appViews();

$header = $appViews->appHeader();
$footer = $appViews->appFooter();

echo $header;

?>

<div class="px-4 w-full h-full col-span-6 space-y-6">
    <div class="flex flex-col items-center bg-white w-full h-full">
        <div class="bg-gray-200 px-4 py-2 w-full text-black font-semibold">Manage Students</div>
        <div class="p-6 w-full">
            <div class="overflow-x-auto rounded-lg border border-gray-200">
                <table class="w-full divide-y-2 divide-gray-200 bg-white text-sm">
                    <thead class="ltr:text-left rtl:text-right">
                        <tr>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                First Name
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Last Name
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Email Address
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Books Issued
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        <?php

                        $students = new getStudents();
                        $appView = new appViews();

                        $results = $students->getStudentList($conn);
                        $row = $appView->viewStudents($results);

                        echo $row;

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