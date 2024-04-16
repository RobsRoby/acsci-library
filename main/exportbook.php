

<?php
include 'connection.php';
$output = '';
if(isset($_POST["export"]))
{
 $booktitle= $_POST['booktitle'];
 $query = "SELECT * FROM registeredbooks WHERE book='".$booktitle."' ORDER BY Code" ;
 $result = mysqli_query($db, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
  <b><p>'.$booktitle.'</p></b><br>
   <table width="100%">  
                 <tr align="center">         
                 <th>Code</th>
                 <th>Barcode</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr align="center">  
                <td>'.$row["code"].'</td>
                <font face="Code 128" size="36"><td>'.$row["code"].'</td></font>

    </tr>
   ';
  }
  $output .= '</table>';

          header("Content-Type: application/vnd.msword");
          header("Expires: 0");//no-cache
          header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
          header("content-disposition: attachment;filename=".$booktitle." Barcode List.doc");
          echo "<html>";
          echo $output;
          echo "</html>";  
  }
}
 else{
 header("Location:re-printbar.php");
 }
?> 