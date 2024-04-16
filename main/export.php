<?php
include 'connection.php';
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM summary";
 $result = mysqli_query($db, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1px">  
                    <tr>  
                         <th>Grade 11</th>  
                         <th>Grade 12</th>  
       					 <th>Book Submitted</th>
       					 <th>Total of Books</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                        <td>'.$row["No. Students"].'</td>  
       					<td>'.$row["Books Submitted"].'</td>  
       					<td>'.$row["Total of Books"].'</td>

    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Clearance Report.xls');
  echo $output;
 }
}
?>