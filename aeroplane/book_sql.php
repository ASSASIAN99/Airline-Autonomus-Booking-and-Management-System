<?php include "planeheader.php"; ?>
<?php include "block.php"; ?>
<?php

$con=mysqli_connect("localhost","root","","AEROTRAVEL");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
  
if(isset($_REQUEST['submit']))
{
$plane=trim($_REQUEST['planeid']);
$root=trim($_REQUEST['rootid']);
$datedept=trim($_REQUEST['date']);
$deptcit=trim($_REQUEST['deptcity']);
$arrvcit=trim($_REQUEST['arrvcity']);
$basefare=trim($_REQUEST['price']);
$FEE=$basefare*0.4;
$SERV=$FEE*0.25;
$GT=$FEE + $SERV + $basefare;
$sql="SELECT * FROM plane_root WHERE Plane_id='$plane' AND root_id='$root' AND dept_date='$datedept'";
}
if ($result=mysqli_query($con,$sql))
  {
 $check_user = mysqli_num_rows($result);
 echo '<form method="post" action="regist.php">';
echo '<div style="background:" class="container">';
ECHO '<div class="col-lg-7">';
echo '<FONT SIZE=4>✈️ </FONT>';ECHO '&nbsp;&nbsp;'; ECHO '<FONT color="white" FACE="PAPYRUS" SIZE=4> DEPARTURE</FONT>';
ECHO '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<br>';

echo '<nav class="navbar navbar-default">';

echo '<font size=5 face="chalkduster">';
echo 'DEPART DATE -> ';
echo $datedept;
ECHO '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<br>';
echo '</font>';

 echo '<div style="background:" class="container">';
echo '<table align="LEFT" border=0 width=50%>';

   
  // Fetch one and one row
  echo '<div style="background:" class="container">';
  while ($row=mysqli_fetch_row($result))
  
    {
     echo '<tr>';
    ECHO '<form method="POST" action="jo.php">';
    echo '<td align="center">'; ECHO '<FONT SIZE=4 color="black" >'; printf ("%s<br>",$row[2]); ECHO '</FONT>'; ECHO '<FONT SIZE=2 color="black">'; printf ("%s<br>",$row[0]); ECHO '</FONT>'; echo '</td>';
 
    echo '<td align="center"><FONT color="black" >'; printf ("%s<br> %s",$row[7],$row[4]); echo '</td>';
    echo '<td align="center"><FONT color="black" size="5">➔</font>';; echo '</td>';
    echo '<td align="center"><FONT color="black" >'; printf ("%s<br> %s",$row[8],$row[5]); echo '</td>';
	echo '<td align="center">'; echo '<FONT color="black" size=5 >'; printf("%s<br>",$row[11]); echo '</font>'; echo '<FONT color="grey" size=3 >'; printf ("%s Stop<br>",$row[10]); echo '</font>'; ECHO '<FONT face="optima"SIZE=2 >'; printf ("%s",$row[1]); ECHO '</FONT>'; echo '</td>';
  
   echo '</tr>';
   
   
   
   
  //kill
   echo '<td align="center">
   <input type="hidden" name="planeid" value="'.$row[0].'">
   <input type="hidden" name="rootid" value="'.$row[3].'">
   <input type="hidden" name="date" value="'.$row[6].'">
   <input type="hidden" name="deptcity" value="'.$row[4].'">
   <input type="hidden" name="arrvcity" value="'.$row[5].'">
   <input type="hidden" name="price" value="'.$row[12].'">
   <input type="HIDDEN" name="totalp" value="'.$GT.'">
   </td>';
   echo '</tr>';
   //ti herer
    }
    echo '</div>';
    echo '</div>';
     echo '</table>';
     echo '</nav>';
     echo '</div>';
     
       ECHO '<div class="col-lg-4">';
       ECHO '<FONT COLOR="white" FACE="PAPYRUS" SIZE=4>FARE SUMMARY</FONT>';
ECHO '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
       echo '<FONT color="white"SIZE=4>🚶1</FONT>';
ECHO '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
     echo '<nav class="navbar navbar-default">';
     echo '<table align="LEFT" border=0 width=100%>';
     ECHO '<TR class=INR>';
     ECHO '<Td>'; ECHO '<font size=4>BASE FARE</font>'; ECHO '</Td>'; ECHO '<Td align="right">'; ECHO '₨  '; echo $basefare; ECHO '</Td>';
     ECHO '</TR>';
     ECHO '<TR class=INR>';
      ECHO '<Td>'; ECHO '<font size=4>FEE & SURCHARGES</font>'; ECHO '</Td>'; ECHO '<Td align="right">';ECHO '₨  '; echo $FEE; ECHO '</Td>';
     ECHO '</TR>';
     ECHO '<TR class=INR>';
      ECHO '<Td>'; ECHO '<font size=4>TOTAL SERVICES</font>'; ECHO '</Td>'; ECHO '<Td align="right">'; ECHO '₨  ';echo $SERV; ECHO '</Td>';
     ECHO '</TR>';
     ECHO '<TR  class=INR bgcolor="#cfdfc0">';
      ECHO '<Td >'; ECHO '<font size=4 face="Impact">GRAND TOTAL</font>'; ECHO '</Td>'; ECHO '<Td align="right">'; ECHO '₨  ';echo $GT; ECHO '</Td>';
     ECHO '</TR>';
     ECHO '</TABLE>';
     echo '</nav>';
     echo '</div>';
     ECHO '<div class="col-lg-1">';
     echo '</div>';
    ECHO '<div class="col-lg-12">';
     echo '<font color="white" size="3">CONTACT INFORMATION</font>';
     echo '</div>';
      echo '<br><br><br><br><br><br><br><br><br>';
      ECHO '<div class="col-lg-12">';
     echo '<input type="email" class="form-control" PLACEHOLDER="Email Address" name="Gemail" size="30">';
     echo '</div>';
     echo '<br><br><br>';
      ECHO '<div class="col-lg-12">';
     echo '<input type="checkbox">'; echo ' By clicking this button, I understand & agree with Rules and Restrictions of this fare,the Privacy Policy & Terms & Conditions';
     echo '</div>';
      echo '<br><br>';
  
   
  echo '<div class="form-group col-lg-12">
     <span class="input-group_btn">
				<input type="submit" name="guest" class="btn btn-primary newsletter-box_btn" value="Continue as Guest">
			</span>

&nbsp;&nbsp;&nbsp;&nbsp; or &nbsp;&nbsp;&nbsp;&nbsp;
     <span class="input-group_btn">
				<input type="submit" name="Alogin" class="btn btn-primary newsletter-box_btn" value="Login & Continue">
			</span>

</div>';
      echo '</div>';
      echo '</form>';
  // Free result set
  mysqli_free_result($result);
   }

mysqli_close($con);
?>
</body>
</html>
