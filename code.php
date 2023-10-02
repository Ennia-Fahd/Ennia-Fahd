
<?php 
$pdo = new PDO("mysql:host=localhost;dbname=dbEtudiant", "root", "");
?>
<?php
session_start();
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if(isset($_POST['save_excel_data']))
{
    $fileNom = $_FILES['import_file']['name'];
    $file_ext = pathinfo($fileNom, PATHINFO_EXTENSION);

    $dispo_ext = ['xls','csv','xlsx'];

    if(in_array($file_ext, $dispo_ext))
    {
        $inputFileNomPath = $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNomPath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        $count = "0";
        foreach($data as $row)
        {
            if($count > 0)
            {
                $fullname = $row['0'];
                $email = $row['1'];
                $phone = $row['2'];
                $course = $row['3'];

                $studentQuery = "INSERT INTO students (fullname,email,phone,course) VALUES ('$fullname','$email','$phone','$course')";
                $result =  $pdo->prepare($studentQuery);
                $result->execute([]);
                $msg = true;
            }
            else
            {
                $count = "1";
            }
        }

        if(isset($msg))
        {
            $_SESSION['message'] = "Successfully Imported";
            header('Location: test.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Imported";
            header('Location: test.php');
            exit(0);
        }
    }
    else
    {
        $_SESSION['message'] = "Invalid File";
        header('Location: test.php');
        exit(0);
    }
}
?>