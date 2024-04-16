<?php
include 'connection.php';
$output = '';
if(isset($_POST["import"]))
{
 $where=$_POST["databasewhere"];
 $value = explode(".", $_FILES["excel"]["name"]);
 $extension = strtolower(array_pop($value));
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  include("PHPExcel/Classes/PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  $output .= "<label class='text-success' ><b>Data Inserted</b></label><br /><table class='table table-bordered'>";
  $output .= "<tr class='sorting'><td><b>LRN</b></td><td><b>Name</b></td><td><b>Section</b></td></tr>";
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {
    $output .= "<tr>";
    $lrn = mysqli_real_escape_string($db, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $name = mysqli_real_escape_string($db, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $section = mysqli_real_escape_string($db, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
    $query = "INSERT INTO ".$where." (LRN, Name, Section) VALUES ('".$lrn."','".$name."', '".$section."')";
    mysqli_query($db, $query);
    $output .= '<td>'.$lrn.'</td>';
    $output .= '<td>'.$name.'</td>';
    $output .= '<td>'.$section.'</td>';
    $output .= '</tr>';
   }
  } 
  $output .= '</table>';

 }
 else
 {
  $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
 }
}
   echo $output;
?>
