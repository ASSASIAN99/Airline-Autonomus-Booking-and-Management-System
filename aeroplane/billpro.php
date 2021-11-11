<?php include "planeheader.php"; ?>
<?php include "blockpay.php"; ?>

<html>
<head>
<link rel="stylesheet" href="bootstrap-theme.css">
</head>
<body>
<?php
echo '<form method="POST" action="booding.php">';
$con=mysqli_connect("localhost","root","","AEROTRAVEL");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
  
if(isset($_REQUEST['pay']))
{// Perform queries 
$date = date('Y-m-d');
$time = date('Y-m-d H:i:s');


         
$plane=trim($_REQUEST['planeid']);
$root=trim($_REQUEST['rootid']);
$datedept=trim($_REQUEST['deptdate']);
$deptcit=trim($_REQUEST['deptcity']);
$datee=trim($_REQUEST['date']);
$time=trim($_REQUEST['time']);
$arrvcit=trim($_REQUEST['arrvcity']);
$GT=trim($_REQUEST['totalp']);
$gname=trim($_REQUEST['gname']);
$glname=trim($_REQUEST['glname']);
$mob=trim($_REQUEST['mob']);
$pos=trim($_REQUEST['pos']);
$PAY=trim($_REQUEST['paythrough']);
$BANK=trim($_REQUEST['MERCHANT']);
$Gemail=trim($_REQUEST['Gemail']);
$sql="SELECT * FROM plane_root WHERE Plane_id='$plane' AND root_id='$root' AND dept_date='$datedept'";
if ($result=mysqli_query($con,$sql))
  {
 $check_user = mysqli_num_rows($result);
}


// table for the fetch database from plane_root
 echo '<div style="background:" class="container">';
 echo '<nav class="navbar navbar-default">';
echo '<table align="center" border=0 width=90%>';





  // Fetch one and one row
  echo '<div style="background:" class="container">';
 $row=mysqli_fetch_row($result);
    echo '<tr>';
    echo '<td align="center">'; ECHO '<FONT SIZE=4 color="black" >'; printf ("%s<br>",$row[2]); ECHO '</FONT>'; ECHO '<FONT SIZE=2 color="black">'; printf ("%s<br>",$row[0]); ECHO '</FONT>'; echo '</td>';
 
    echo '<td align="center"><FONT SIZE="3"color="black" >'; printf ("%s ",$row[4]);
   echo '<FONT color="grey" size="3">  ➔  </font>';
    echo '<FONT color="black" >'; printf ("%s<br>",$row[5]); 
     echo '<FONT color="black" >'; printf ("%s",$row[6]);
    echo '</td>';
	
      echo '<td align="center"><FONT color="black" SIZE=5>'; printf ("Rs %s",$GT); echo '<td align="left" bgcolor="green" width="1%">'; echo '<FONT color="white" face="Arial black"size="2">';echo '   PAID'; echo '</font>'; echo '</td>'; echo '</td>';
   echo '</tr>';
   echo '<input type="hidden" name="price" value="'.$GT.'">';
   echo '</tr>';
    
   echo '</div>';
    echo '</div>';
     echo '</table>';
     echo '</nav>';
     echo '</div>';
     ECHO '<CENTER>';
     echo '<td align="center">
   <input type="hidden" name="planeid" value="'.$row[0].'">
   <input type="hidden" name="rootid" value="'.$row[3].'">
   <input type="hidden" name="deptdate" value="'.$row[6].'">
   <input type="hidden" name="deptcity" value="'.$row[4].'">
   <input type="hidden" name="arrvcity" value="'.$row[5].'">
   <input type="hidden" name="totalp" value="'.$GT.'">
   <input type="hidden" name="Gemail" value="'.$Gemail.'">
   
   <input type="hidden" name="gname" value="'.$gname.'">
   <input type="hidden" name="glname" value="'.$glname.'">
   <input type="hidden" name="mob" value="'.$mob.'">
   <input type="hidden" name="pos" value="'.$pos.'">
   <input type="hidden" name="date" value="'.$datee.'">
   <input type="hidden" name="time" value="'.$time.'"> 
   
   </td>';
     echo '<input type="submit" name="print" class="btn btn-primary newsletter-box_btn" value="Generate E-Ticket">';
     echo '</form>';
  // Free result set
  mysqli_free_result($result);
   }
?>
<?php include "userpay.php"; ?>