<?php 

class appViews
{

    public function viewStudents($results)
    {

        foreach ($results as $row)
        {

            $student_row = 
            '<tr>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-center">
                    '.$row['first_name'].'
                </td>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-center">
                    '.$row['last_name'].'
                </td>
                <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center">'.$row['email'].'</td>
            </tr>';

        }

        return $student_row;

    }

    public function getNonIssuedBooks($results)
    {

        foreach ($results as $row)
        {

            if ($row['current_issue'] == NULL || empty($row['current_issue']))
            {

                $books_list = 
                '<option value="'.$row['id'].'">'.$row['id'].'</option>';
                
                echo $books_list;

            }

        }


    }

    public function getIssuedBooks($results)
    {

        foreach ($results as $row)
        {

            if ($row['current_issue'] != NULL || !empty($row['current_issue']))
            {

                $books_list = 
                '<option value="'.$row['id'].'">'.$row['id'].'</option>';
                
                echo $books_list;

            }

        }


    }

}

?>