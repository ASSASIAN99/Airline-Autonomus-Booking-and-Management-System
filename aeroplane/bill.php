<?php include "planeheader.php"; ?>
<?php include "block2.php"; ?>
<?php
echo '<form method="POST" action="billpro.php">';
echo '<link rel="stylesheet" href="bootstrap-theme.css">';
$con=mysqli_connect("localhost","root","","AEROTRAVEL");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }






if(isset($_REQUEST['guest']))

{// Perform queries 
$date = date('Y-m-d');
$time = date('Y-m-d H:i:s');


$mob=trim($_REQUEST['mobile']);
$pos=trim($_REQUEST['pos']);
$plane=trim($_REQUEST['planeid']);
$root=trim($_REQUEST['rootid']);
$datedept=trim($_REQUEST['date']);
$deptcit=trim($_REQUEST['deptcity']);
$arrvcit=trim($_REQUEST['arrvcity']);
$GT=trim($_REQUEST['totalp']);
$gname=trim($_REQUEST['fname']);
$glname=trim($_REQUEST['lname']);
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
 
    echo '<td align="center"><FONT color="black" size=2>'; printf ("%s ",$row[4]);
   echo '<FONT color="grey" size="3">  ➔  </font>';
    echo '<FONT color="black" >'; printf ("%s<br>",$row[5]); 
     echo '<FONT color="black" size=4 >'; printf ("%s",$row[6]);
    echo '</td>';
	echo '<td align="center">'; echo '<FONT size=2>'; printf ("%s ———— %s<br>",$row[7],$row[8]); echo '<FONT>'; echo '<FONT size=1>'; printf("%s, ",$row[11]); echo '</font>'; echo '<FONT color="grey" size=1 >'; printf (" %s Stop<br>",$row[10]); echo '</font>'; ECHO '<FONT face="optima"SIZE=2 >'; printf ("%s",$row[1]); ECHO '</FONT>'; echo '</td>';
      echo '<td class=INR align="center"><FONT SIZE="3" color="black" >'; echo 'Total Travelers: '; echo $check_user; echo '<br>Total Amount <br>';echo '<font color=red>'; printf (" Rs %s",$GT); echo '</font>'; echo '<td align="left" bgcolor="green" width="1%">'; echo '<FONT color="white" face="Arial black"size="2">';echo '   Refundable'; echo '</font>'; echo '</td>'; echo '</td>';
   echo '<table width="100%">';echo '</tr>';
   echo '<tr bgcolor="lightgrey">';
      echo '<td> <font size=4> Travellers : </font>';
      echo '<font size=5> 🚶 </font>';
      echo '<b><font size=4>';
   echo $gname;
   echo ' &nbsp;&nbsp;';
   echo $glname;
   echo '</font></b>';
     echo '</td>';
    echo '</tr>';
    echo '</table>';
    
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
   <input type="hidden" name="date" value="'.$date.'">
   <input type="hidden" name="time" value="'.$time.'"> 
   
   </td>';
   
   
 
    echo ' <FONT SIZE= 4><B>CHOOSE PAYMENT MODE</B></FONT><BR><FONT SIZE=1>Convenience fee will be charged based on payment mode</FONT><BR>';
    echo '</nav>';
    echo '
    <select class="form-control" name="MERCHANT">
    <option value="J&K">J & K Bank</option>
    <option value="ICICI">ICICI BANK</option>
    <option value="CANARA">CANARA BANK</option>
    <option value="AXIS">AXIS BANK</option>
     <option value="HDFC">HDFC BANK</option>
    <option value="SBI">SBI BANK</option>
    </SELECT><BR>
    <select class="form-control" name="paythrough">
    <option value="Debit_Card">Debit Card</option>
    <option value="Credit_Card">Credit Card</option>
    <option value="NETBANKING">Net banking</option>
    <option value="Mobile_Wallet">Mobile Wallet</option>
    </SELECT><BR>
    '; 
  ECHO '<FONT color=White SIZE=4> '; echo '<b>Total Amount</b>:   '; ECHO '</FONT>'; ECHO '<b><FONT color="red" SIZE=5> ';  ECHO 'Rs ';ECHO $GT; ECHO '</FONT></br>'; echo '<center>';
       
    echo '<input type="submit" name="pay" class="btn btn-primary newsletter-box_btn" value="MAKE PayMENT">';
   echo '</div>';
    echo '</div>';
     echo '</table>';
     
     echo '</div>';

echo '</form>';
  // Free result set
  mysqli_free_result($result);
 
   }
mysqli_close($con);

?>
