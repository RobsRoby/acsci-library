<?php
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_page;
$sql = "SELECT * FROM ".$datatable." ORDER BY ID ASC LIMIT $start_from, ".$results_per_page;
$rs_result = $conn->query($sql);
?> 
<table border="1" cellpadding="4">
<tr>
    <td bgcolor="#CCCCCC"><strong>ID</strong></td>
    <td bgcolor="#CCCCCC"><strong>Name</strong></td><td bgcolor="#CCCCCC"><strong>Phone</strong></td></tr>
<?php 
 while($row = $rs_result->fetch_assoc()) {
?> 
            <tr>
            <td><? echo $row["ID"]; ?></td>
            <td><? echo $row["Name"]; ?></td>
            <td><? echo $row["PhoneNumber"]; ?></td>
            </tr>
<?php 
}; 
?> 
</table>
 
 
 
<?php 
$sql = "SELECT COUNT(ID) AS total FROM ".$datatable;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results
  
for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
            echo "<a href='index.php?page=".$i."'";
            if ($i==$page)  echo " class='curPage'";
            echo ">".$i."</a> "; 
}; 
?>



<script type="text/javascript">

function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
    }
    else document.getElementById('ifYes').style.display = 'none';

}

</script>
Yes <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck"> No <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck"><br>
    <div id="ifYes" style="display:none">
        If yes, explain: <input type='text' id='yes' name='yes'><br>
        What can we do to accommodate you?  <input type='text' id='acc' name='acc'>
    </div>
        
        other 3<input type='text' id='other3' name='other3'><br>
        other 4<input type='text' id='other4' name='other4'><br>


*export database*
<?php 
    //ENTER THE RELEVANT INFO BELOW
    $mysqlUserName      = "root";
    $mysqlPassword      = "03071809";
    $mysqlHostName      = "localhost";
    $DbName             = "lmbs";
    $backup_name        = "mybackup.sql";
    $tables             =  array("clearancegrade11","clearancegrade12","grade11","grade12","login","registeredbooks","section","summary");

   //or add 5th parameter(array) of specific tables:    array("mytable1","mytable2","mytable3") for multiple tables

    Export_Database($mysqlHostName,$mysqlUserName,$mysqlPassword,$DbName,  $tables=false, $backup_name=false );

    function Export_Database($host,$user,$pass,$name,  $tables=false, $backup_name=false )
    {
        $mysqli = new mysqli($host,$user,$pass,$name); 
        $mysqli->select_db($name); 
        $mysqli->query("SET NAMES 'utf8'");

        $queryTables    = $mysqli->query('SHOW TABLES'); 
        while($row = $queryTables->fetch_row()) 
        { 
            $target_tables[] = $row[0]; 
        }   
        if($tables !== false) 
        { 
            $target_tables = array_intersect( $target_tables, $tables); 
        }
        foreach($target_tables as $table)
        {
            $result         =   $mysqli->query('SELECT * FROM '.$table);  
            $fields_amount  =   $result->field_count;  
            $rows_num=$mysqli->affected_rows;     
            $res            =   $mysqli->query('SHOW CREATE TABLE '.$table); 
            $TableMLine     =   $res->fetch_row();
            $content        = (!isset($content) ?  '' : $content) . "\n\n".$TableMLine[1].";\n\n";

            for ($i = 0, $st_counter = 0; $i < $fields_amount;   $i++, $st_counter=0) 
            {
                while($row = $result->fetch_row())  
                { //when started (and every after 100 command cycle):
                    if ($st_counter%100 == 0 || $st_counter == 0 )  
                    {
                            $content .= "\nINSERT INTO ".$table." VALUES";
                    }
                    $content .= "\n(";
                    for($j=0; $j<$fields_amount; $j++)  
                    { 
                        $row[$j] = str_replace("\n","\\n", addslashes($row[$j]) ); 
                        if (isset($row[$j]))
                        {
                            $content .= '"'.$row[$j].'"' ; 
                        }
                        else 
                        {   
                            $content .= '""';
                        }     
                        if ($j<($fields_amount-1))
                        {
                                $content.= ',';
                        }      
                    }
                    $content .=")";
                    //every after 100 command cycle [or at last line] ....p.s. but should be inserted 1 cycle eariler
                    if ( (($st_counter+1)%100==0 && $st_counter!=0) || $st_counter+1==$rows_num) 
                    {   
                        $content .= ";";
                    } 
                    else 
                    {
                        $content .= ",";
                    } 
                    $st_counter=$st_counter+1;
                }
            } $content .="\n\n\n";
        }
        //$backup_name = $backup_name ? $backup_name : $name."___(".date('H-i-s')."_".date('d-m-Y').")__rand".rand(1,11111111).".sql";
        $backup_name = $backup_name ? $backup_name : $name.".sql";
        header('Content-Type: application/octet-stream');   
        header("Content-Transfer-Encoding: Binary"); 
        header("Content-disposition: attachment; filename=\"".$backup_name."\"");  
        echo $content; exit;
    }
?>


*csv*
<?php

$connect = mysqli_connect("localhost", "root", "", "testing");
$message = '';

if(isset($_POST["upload"]))
{
 if($_FILES['product_file']['name'])
 {
  $filename = explode(".", $_FILES['product_file']['name']);
  if(end($filename) == "csv")
  {
   $handle = fopen($_FILES['product_file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
    $product_id = mysqli_real_escape_string($connect, $data[0]);
    $product_category = mysqli_real_escape_string($connect, $data[1]);  
                $product_name = mysqli_real_escape_string($connect, $data[2]);
    $product_price = mysqli_real_escape_string($connect, $data[3]);
    $query = "
     UPDATE daily_product 
     SET product_category = '$product_category', 
     product_name = '$product_name', 
     product_price = '$product_price' 
     WHERE product_id = '$product_id'
    ";
    mysqli_query($connect, $query);
   }
   fclose($handle);
   header("location: index.php?updation=1");
  }
  else
  {
   $message = '<label class="text-danger">Please Select CSV File only</label>';
  }
 }
 else
 {
  $message = '<label class="text-danger">Please Select File</label>';
 }
}

if(isset($_GET["updation"]))
{
 $message = '<label class="text-success">Product Updation Done</label>';
}

$query = "SELECT * FROM daily_product";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Update Mysql Database through Upload CSV File using PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">Update Mysql Database through Upload CSV File using PHP</a></h2>
   <br />
   <form method="post" enctype='multipart/form-data'>
    <p><label>Please Select File(Only CSV Formate)</label>
    <input type="file" name="product_file" /></p>
    <br />
    <input type="submit" name="upload" class="btn btn-info" value="Upload" />
   </form>
   <br />
   <?php echo $message; ?>
   <h3 align="center">Deals of the Day</h3>
   <br />
   <div class="table-responsive">
    <table class="table table-bordered table-striped">
     <tr>
      <th>Category</th>
      <th>Product Name</th>
      <th>Product Price</th>
     </tr>
     <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["product_category"].'</td>
       <td>'.$row["product_name"].'</td>
       <td>'.$row["product_price"].'</td>
      </tr>
      ';
     }
     ?>
    </table>
   </div>
  </div>
 </body>
</html>
