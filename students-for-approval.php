<?php

require_once('controller.php');

$appViews = new appViews();

$header = $appViews->appHeader();
$footer = $appViews->appFooter();

echo $header;

?>

<div class="px-4 w-full h-full col-span-6 space-y-6">
    <div class="flex flex-col items-center bg-white w-full h-full">
        <div class="bg-gray-200 px-4 py-2 w-full text-black font-semibold">Students for Approval</div>
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
                                Action
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-center">
                                John Doe
                            </td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center">24/05/1995</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                <div class="w-full flex flex-row items-center justify-center space-x-4">
                                    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-sm">Approve</button>
                                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-sm">Deny</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php

echo $footer;

?>