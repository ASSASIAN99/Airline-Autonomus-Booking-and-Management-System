<?php include "booding_sql.php" ?>
<html>
<body>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">

</head>

<table align="center" border=0 width=90%>
<tr>
<td><font size="6">
Ticket</font>
</td>
<td align="right">
<img src="pic/me.png" width="150px" height="65px">
</td>
</tr>
</table>



</body>
</html>
<?php
echo '<div class="container"';
echo '<HR width=100% COLOR="black" size="13" noshade></HR>';
echo '<HR  shade></HR>';
echo '<form>';

$con=mysqli_connect("localhost","root","","AEROTRAVEL");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }






if(isset($_REQUEST['print']))

{// Perform queries 
$date = date('Y-m-d');
$time = date('Y-m-d H:i:s');


$mob=trim($_REQUEST['mob']);
$pos=trim($_REQUEST['pos']);
$plane=trim($_REQUEST['planeid']);
$root=trim($_REQUEST['rootid']);
$datedept=trim($_REQUEST['deptdate']);
$deptcit=trim($_REQUEST['deptcity']);
$arrvcit=trim($_REQUEST['arrvcity']);
$GT=trim($_REQUEST['totalp']);
$gname=trim($_REQUEST['gname']);
$glname=trim($_REQUEST['glname']);
$Gemail=trim($_REQUEST['Gemail']);
$datee=trim($_REQUEST['date']);
$time=trim($_REQUEST['time']);
   $MOBILE=trim($_REQUEST['mob']);
       $Gemail=trim($_REQUEST['Gemail']);
 
 // BOOK ID      
 $swl= "SELECT * FROM GuestBooking WHERE G_mobile='$MOBILE' AND Gemail='$Gemail'";
       if ($result=mysqli_query($con,$swl))
  			{
 			$check_user = mysqli_num_rows($result);
			}

$row=mysqli_fetch_row($result);
       $USERID=$row[0];
       // BOOK ID END
       $BOO= "SELECT * FROM  aero_booking WHERE user_id='$USERID'";
       if ($result=mysqli_query($con,$BOO))
  			{
 			$check_user = mysqli_num_rows($result);
			}

$row=mysqli_fetch_row($result);
       $BOOID=$row[0];
        // payment ID      
 $pay= "SELECT * FROM aeroseat_payment WHERE user_id='$USERID'";
       if ($result=mysqli_query($con,$pay))
  			{
 			$check_user = mysqli_num_rows($result);
			}

$row=mysqli_fetch_row($result);
       $PAYID=$row[0];
       // payment ID END

$sql="SELECT * FROM plane_root WHERE Plane_id='$plane' AND root_id='$root' AND dept_date='$datedept'";
if ($result=mysqli_query($con,$sql))
  {
 $check_user = mysqli_num_rows($result);
}

// table for the fetch database from plane_root
 echo '<div style="background:" class="container">';
 

  
  $row=mysqli_fetch_row($result);
  
  
  
  echo '<table align="center" border=0 width=90%>';
  echo '<tr>';
    echo '<td ><b><FONT size="7" color="black" size=2>'; printf ("%s ",$row[4]);
   echo '<FONT color="grey" size="6">  ➔  </font>';
    echo '<FONT color="black" size="7" >'; printf ("%s  ",$row[5]);
    echo '</b></td>';
    echo '<td  align="left">';
   echo '<font size="5">'; printf ("%s",$row[6]); echo '</font>';
      echo '</td>';
      echo '<td COLSPAN="2">';
     ECHO '<FONT SIZE=5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'; 
     echo 'BOOK ID: '; ECHO '</FONT>'; ECHO '<b><FONT SIZE=5>';  ECHO 'A';ECHO $BOOID; ECHO '</FONT></b>';
    echo '</td>';
     echo '</tr>';
     
     echo '</table>';
     echo '<HR></HR>';
     
     echo '<table align="center" border=0 width=90%>';
  // Fetch one and one ro
  echo '<div style="background:" class="container">';
  
echo '<tr>';

echo '<td colspan="4" align="left">'; ECHO '<b><FONT SIZE=6 color="black" >'; printf ("%s —— ",$row[2]); ECHO '</b></FONT>'; ECHO '<FONT SIZE=6 color="black">'; printf ("%s<br>",$row[0]); ECHO '</FONT>'; echo '</td>';

echo '</tr>';



    echo '<tr>';
    
  echo '<td align=Right><b><FONT  size=5>'; echo '<font color="black" size=6>'; printf ("%s ",$row[4]);   printf ("%s<br>",$row[7]); echo '</font>'; printf ("%s",$row[6]);
echo '</font></b></td>';

    echo '<td align=center>'; echo '<FONT size=6><img src="land.jpeg" width="120px" height=80px/></font><br>';echo '<FONT size=2>';  echo '<FONT>'; echo '<FONT face="copperplate" size=5>'; printf("%s<br> ",$row[11]); echo '</font>'; echo '<FONT color="grey" size=2 >'; printf (" %s Stop<br>",$row[10]); echo '</font>'; ECHO '<FONT face="COPPERPLATE"  SIZE=5>'; printf ("%s",$row[1]); ECHO '</FONT>';
     echo '</td>';
    
    echo '<td align="left">';
    echo '<b><FONT color="black" size=6>'; printf ("%s ",$row[8]);  printf ("%s<br>",$row[5]); echo '</font>';
     echo '<font size=5>'; printf ("%s",$row[9]);  echo '</b></font>';
    echo '</td>';
    
      echo '</tr>';
    echo '</table>';
    
   ECHO '<HR></HR>';
     






     echo '<table ALIGN=CENTER border=0 width=90%>';
   echo '<tr>';
      echo '<td><b> <font color="black" size=4> Travellers</font></b>';
      
     echo '</td>';
       echo '<td><b> <font color="black" size=4> PNR</font></b>';
      
     echo '</td>';
     
       echo '<td><b> <font color="black" size=4> Ticket No.</font></b>';
      
     echo '</td>';
     
    echo '</tr>';
    
    
    echo '<tr>';
    
    echo '<td>';
    echo '<b><font color="black" size=5>';
    echo '<font size=6> <img src="face.jpg" width="60px" height="50px"/> </font>';
   echo $gname;
   echo ' &nbsp;&nbsp;';
   echo $glname;
   echo '</b></font>';
   echo '</td>';
  
    echo '<td>';
     echo '<b><font size=4>';
    ECHO 'ADR';
   ECHO $PAYID;
    echo '</font></b>';
   echo '</td>';
   
   echo '<td>';
    echo '<b><font size=4>';
    ECHO 'ADR';
   ECHO $USERID;
    echo '</font></b>';
   
  
    echo '</td>';
 
   echo '</tr>';
   
    echo '</table>';
    
    echo '<font size=3>';
     echo '<HR></HR>';
     echo '<table ALIGN=CENTER border=0 width=90%>';
     echo '<tr>';
      echo '<td>';
      
      echo 'BOOKED ON -->  ';
      echo '</td>';
      echo '<td>';
      ECHO $time;
      
       echo '</td>';
      echo '</tr>';
      echo '</table>';
     echo '<HR></HR>';
     ECHO '<BR>';
     echo '<p><b>TIP</b> Learn the three letter code of your airport. It helps in several ways!</p>';
     echo '<HR></HR>';
    echo '<p><b>IMPORTANT</b> For hassle free refund processing, cancel/amend your tickets with Marshalome Customer Care instead of doing so directly
with Airline.</p>';
 echo '<HR></HR>';
 echo '<p><b>Additional Information</b></p>';
 echo '<ul>
 <li>Use your Airline PNR for all communication you have directly with the airline about this booking</li>
 <li>Use your Trip ID for all communication with Marshalome about this booking</li>
 <li>Your Ticket number serves as confirmation of your ticket status</li>
 <li>As per Government guidelines, check-in counters at all Airports will close 45 minutes before departure.</li>
<li>Your carry-on baggage shouldnot weigh more than 7kgs.</li>
<li>Carry a print out of this e-ticket and present it to the airline counter at time of check-in</li>
<li>Carry photo identification, you will need it as proof of identity while checking in</li>
 </ul>';
 
 echo '</font>';
 ECHO '<BR><BR>';
 echo '<HR></HR>';
 echo '<table ALIGN=CENTER border=0 width=90%>';
 ECHO '<TR>';
 ECHO '<TD>';
 ECHO '<B>Marshelo Me support</B> <BR><BR> +91 9915915032';
 ECHO '</TD>';
  ECHO '<TD>';
  ECHO '<B>';
  echo $row[2];
  ECHO '</B>';
  echo ' ';
 ECHO '<B>HELPLINE</B> <BR><BR> 9018045851';
 ECHO '</TD>';
  ECHO '<TD>';
 ECHO '<B>Need a hotel?</B> <BR><BR> 9103447849';
 ECHO '</TD>';
 ECHO '</TR>';
 ECHO '</TABLE>';
 echo '<HR></HR>';
  echo '<p align=center ><input type="button" class="btn btn-primary newsletter-box_btn" value="Print" onClick="window.print()"></p>';
 ECHO '<BR><BR><BR><BR><BR><BR>';
  echo '<HR WIDTH=70%></HR>';
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

