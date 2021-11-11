<?php include "planeheader.php"; ?>
<?php
echo '<link rel="stylesheet" href="bootstrap-theme.css">';
$con=mysqli_connect("localhost","root","","AEROTRAVEL");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
  
if(isset($_REQUEST['submit']))
{
$arrvcity=trim($_REQUEST['ARRVCITY']);
$deptcity=trim($_REQUEST['DEPTCITY']);
$dte=trim($_REQUEST['date']);
$TYPE=trim($_REQUEST['class']);



IF($arrvcity=='Different_Cities')
{
$sql="SELECT * FROM plane_root WHERE dept_city='$deptcity' AND dept_date='$dte' order by book_price";}
else{
$sql="SELECT * FROM plane_root WHERE dept_city='$deptcity' AND arrv_city='$arrvcity' AND dept_date='$dte' order by book_price";
}
if ($result=mysqli_query($con,$sql))
  {
 $check_user = mysqli_num_rows($result);
 echo 'FLIGHTS : ';
echo $check_user;
}





echo '<div style="background:" class="container">';
echo '<nav align="center" class="navbar navbar-default">';
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo $deptcity;
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
ECHO '<font size="4">→</font>';
ECHO '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo $arrvcity;
ECHO '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
ECHO '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo 'DEPART DATE : ';
echo $dte;
ECHO '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<br>';




// table for the fetch database from plane_root
 echo '<div style="background:" class="container">';
echo '<table  border=0 width=90%>';

    echo '<tr bgcolor="white" align="center">';
       echo '<td>'; echo 'FLIGHT';  echo '</td>';
     echo '<td>'; echo 'DEPARTURE'; echo '</td>';
     echo '<td>'; echo 'ARRIVAL'; echo '</td>';
echo '<td>'; echo 'DURATION'; echo '</td>';
echo '<td>'; echo 'STOPS'; echo '</td>';
echo '<td>'; echo 'PRICE'; echo '</td>';
echo '<td>'; echo 'ACTION'; echo '</td>';
echo '</tr>';




  // Fetch one and one row
  echo '<div style="background:" class="container">';
  while ($row=mysqli_fetch_row($result))
  
    {
     echo '<tr>';
    ECHO '<form method="POST" action="book_sql.php">';
    echo '<td align="center">'; ECHO '<FONT SIZE=4 color="black" >'; printf ("%s<br>",$row[2]); ECHO '</FONT>'; ECHO '<FONT SIZE=2 color="black">'; printf ("%s<br>",$row[0]); ECHO '</FONT>';ECHO '<FONT face="Arial Black"SIZE=4 >'; printf ("%s",$row[1]); ECHO '</FONT>'; echo '</td>';
 
    echo '<td align="center"><FONT color="black" >'; printf ("%s<br> %s",$row[7],$row[4]); echo '</td>';
    echo '<td align="center"><FONT color="black" >'; printf ("%s<br> %s",$row[8],$row[5]); echo '</td>';
	echo '<td align="center"><FONT color="black" >'; printf("%s",$row[11]); echo '</td>';
	echo '<td align="center"><FONT color="black" >'; printf ("%s",$row[10]); echo '</td>';
echo '<td align="center"><FONT color="black" >'; echo '₨ '; printf ("%s",$row[12]); echo '</td>';
   echo '<td align="center">
   <input type="hidden" name="planeid" value="'.$row[0].'">
   <input type="hidden" name="rootid" value="'.$row[3].'">
   <input type="hidden" name="date" value="'.$row[6].'">
   <input type="hidden" name="deptcity" value="'.$row[4].'">
   <input type="hidden" name="arrvcity" value="'.$row[5].'">
   <input type="hidden" name="price" value="'.$row[12].'">
   <span class="input-group_btn">
				<input type="submit" name="submit" class="btn btn-primary newsletter-box_btn" value="BOOK">
			</span>
   </td>';
   ECHO '</form>';
   echo '</tr>';
    }
   echo '</div>';
    echo '</div>';
     echo '</table>';
     echo '</nav>';
     echo '</div>';
     
  // Free result set
  mysqli_free_result($result);
   }
   
mysqli_close($con);
?>
</body>
</html>
