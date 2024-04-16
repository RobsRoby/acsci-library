
<?php
include 'connection.php';   
$datatable="grade11";
$results_per_page="1";
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_page;
$sql = "SELECT * FROM ".$datatable." ORDER BY LRN ASC LIMIT $start_from, ".$results_per_page;
?> 
<table border="1" cellpadding="4">
<tr>
    <td bgcolor="#CCCCCC"><strong>LRN</strong></td>
    <td bgcolor="#CCCCCC"><strong>Name</strong></td>
    <td bgcolor="#CCCCCC"><strong>Section</strong></td>
    <td bgcolor="#CCCCCC"><strong>Semester</strong></td>
</tr>
<?php 
if ($rs_result=mysqli_query($db,$sql)){
   while ($row=mysqli_fetch_assoc($rs_result)){
?> 
            <tr>
            <td><?php echo $row['LRN']; ?></td>
            <td><?php echo $row["Name"]; ?></td>
            <td><?php echo $row["Section"]; ?></td>
            <td><?php echo $row["Semester"]; ?></td>
            </tr>
<?php 
}
} 
?> 
</table>
 
 
 
<?php 
$sql = "SELECT COUNT(LRN) AS total FROM ".$datatable;
$result = $db->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results
for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
            echo "<a href='table.php?page=".$i."'";
            if ($i==$page)  echo " class='curPage'";
            echo ">".$i."</a> "; 
}; 
?>
      