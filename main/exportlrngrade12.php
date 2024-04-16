

<?php
include 'connection.php';
$output = '';
if(isset($_POST["export"]))
{
 $section= $_POST['section12'];
 $query = "SELECT * FROM grade12 WHERE Section='".$section."' ORDER BY Section,Name" ;
 $result = mysqli_query($db, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
  <b><p>Grade 12</p></b><br>
   <table width="100%">  
                    <tr align="center">  
                         <th>LRN</th>  
                         <th>Name</th>  
                 <th>Section</th>
                 <th>Barcode</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr align="center">  
                <td>'.$row["LRN"].'</td>  
                <td>'.$row["Name"].'</td>  
                <td>'.$row["Section"].'</td>
                <font face="Code 128" size="36"><td>'.$row["LRN"].'</td></font>

    </tr>
   ';
  }
  $output .= '</table>';

          header("Content-Type: application/vnd.msword");
          header("Expires: 0");//no-cache
          header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
          header("content-disposition: attachment;filename=Grade 12 LRN Barcode.doc");
          echo "<html>";
          echo $output;
          echo "</html>";  
  }
}

?> 