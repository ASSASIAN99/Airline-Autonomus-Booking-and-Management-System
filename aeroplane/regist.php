<?php include "planeheader.php"; ?>
<?php include "book3.php"; ?>
<html>
<head>
<link rel="stylesheet" href="bootstrap-theme.css">
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","AEROTRAVEL");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
  
if(isset($_REQUEST['guest']))
{
$plane=trim($_REQUEST['planeid']);
$Gemail=trim($_REQUEST['Gemail']);
$root=trim($_REQUEST['rootid']);
$datedept=trim($_REQUEST['date']);
$deptcit=trim($_REQUEST['deptcity']);
$deptcit=trim($_REQUEST['deptcity']);
$arrvcit=trim($_REQUEST['arrvcity']);
$basefare=trim($_REQUEST['price']);
$GT=trim($_REQUEST['totalp']);

$sql="SELECT * FROM plane_root WHERE Plane_id='$plane' AND root_id='$root' AND dept_date='$datedept'";
if ($result=mysqli_query($con,$sql))
  {
 $check_user = mysqli_num_rows($result);
}

  ECHO '<form method="POST" action="bill.php">';

// table for the fetch database from plane_root
 echo '<div style="background:" class="container">';
 echo '<nav class="navbar navbar-default">';
echo '<table align="center" border=0 width=90%>';





  // Fetch one and one row
  echo '<div style="background:" class="container">';
  $row=mysqli_fetch_row($result);
  
   
    echo '<tr>';
  
    echo '<td align="center">'; ECHO '<FONT SIZE=4 color="black" >'; printf ("%s<br>",$row[2]); ECHO '</FONT>'; ECHO '<FONT SIZE=2 color="black">'; printf ("%s<br>",$row[0]); ECHO '</FONT>'; echo '</td>';
 
    echo '<td align="center"><FONT color="black" >'; printf ("%s ",$row[4]);
   echo '<FONT color="grey" size="3">  ➔  </font>';
    echo '<FONT color="black" >'; printf ("%s<br>",$row[5]); 
     echo '<FONT color="black" >'; printf ("%s",$row[6]);
    echo '</td>';
	echo '<td align="center">'; echo '<FONT size=2>'; printf ("%s ———— %s<br>",$row[7],$row[8]); echo '<FONT>'; echo '<FONT size=1>'; printf("%s, ",$row[11]); echo '</font>'; echo '<FONT color="grey" size=1 >'; printf (" %s Stop<br>",$row[10]); echo '</font>'; ECHO '<FONT face="optima"SIZE=2 >'; printf ("%s",$row[1]); ECHO '</FONT>'; echo '</td>';
      echo '<td align="center"><FONT color="black" >'; printf ("Rs %s",$GT); echo '<td align="left" bgcolor="green" width="1%">'; echo '<FONT color="white" face="Arial black"size="2">';echo '   Refundable'; echo '</font>'; echo '</td>'; echo '</td>';
   echo '</tr>';
   
   echo '<td align="center">
   <input type="hidden" name="planeid" value="'.$row[0].'">
   <input type="hidden" name="rootid" value="'.$row[3].'">
   <input type="hidden" name="date" value="'.$row[6].'">
   <input type="hidden" name="deptcity" value="'.$row[4].'">
   <input type="hidden" name="arrvcity" value="'.$row[5].'">
    <input type="hidden" name="totalp" value="'.$GT.'">
   </td>';
   
   echo '</tr>';
   echo '</div>';
    echo '</div>';
     echo '</table>';
     echo '</nav>';
     echo '</div>';
     
 echo '
<br><br>
<div align="center" style="background:" class="container">
<div class="form-group">
<br><br><br>
<form method="post" action="bill.php">
 <div ALIGN="LEFT" class="col-lg-6">
<font color="white" size="4">Traveller Name</font>
</div>
 <div ALIGN="LEFT" class="col-lg-6">

<font color="white" size="4">Mobile Number </font>
</div>
 <div class="col-lg-6">
<select class="form-control"  name="pos">
<option value="Mr.">Mr</option>
<option value="Ms">Ms</option>
<option value="Mrs">Mrs</option>

</select>
</div>
<div ALIGN="LEFT" class="col-lg-6">
<input name="mobile" class="form-control" type="text" placeholder="Active Phone Number">
<font size=2>Please provide country code as applicable</font>
</div>
 <div class="col-lg-12">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <ul  class="form form-nav">
    <input name="fname" type="text" class="form-control" placeholder="First Name">
      <input type="text" name="lname" class="form-control" id="" placeholder="Last Name" required>
      </ul><input type="hidden" name="Gemail" value="'.$Gemail.'">
<p align="left"></p>


<div class="form-group col-lg-12">
 <span class="input-group_btn">
				<input type="submit" name="guest" class="btn btn-primary newsletter-box_btn" value="Continue To Pay">
			</span>

</div>
</form>
</div>
</div>';
echo '</form>';
 // Free result set
  mysqli_free_result($result);
   }
   
mysqli_close($con);
?>