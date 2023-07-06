<?php
 include "connection/db_conn.php"; echo "<br>";
 $varQuerySelect = "SELECT * FROM tbl_registration WHERE status='1'";
 $resQuerySelect = $conn->query($varQuerySelect);
 /*print_r($rowQuerySelect);*/
 $vnum_rows = $resQuerySelect->num_rows;
 echo "Records Found($vnum_rows) <br>";
 /*echo $vfield_count = $rowQuerySelect->field_count;*/
 /*
 $row = $resQuerySelect->fetch_assoc(); // Field Names
 $row = $resQuerySelect->fetch_row();   // Offset/Index
 $row = $resQuerySelect->fetch_array(); // Field Names and Offset/Index
 print_r($row);
 */
 echo "<table align='center' cellpadding='10px' cellspacing='0' border='1'>";

  echo "<tr>";
   echo "<th>Sr. No.</th>";
   echo "<th>FULL NAME</th>";
   echo "<th>MOBILE NUMBER</th>";
  echo "</tr>";
$srno = 0;
 while($row = $resQuerySelect->fetch_array())
 {  
 	$srno = $srno + 1;
 	$fID = $row['id'];
 	$fFullName = $row['fullname'];
 	$fmobile = $row['mobile'];

 	echo "<tr>";
     echo "<td>$srno</td>";
     echo "<td>$fFullName</td>";
     echo "<td>$fmobile</td>";
    echo "</tr>";
 }
echo "</table>";
$conn->close();
?>