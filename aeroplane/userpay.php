<?php
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

$query = "INSERT INTO GuestBooking(G_fname,G_lname,G_pos,G_mobile,datein,timein,payment,Gemail)
VALUES ('".$_REQUEST['gname']."','".$_REQUEST['glname']."','".$_REQUEST['pos']."','".$_REQUEST['mob']."','".$date."','".$time."','".$_REQUEST['totalp']."','".$_REQUEST['Gemail']."')";
         if(mysqli_query($con,$query))
      			{
					
					}
					else
						{
							echo "Not Registered";
						}
}
else
{

echo"not submit";

}
?>




<?php

$con=mysqli_connect("localhost","root","","AEROTRAVEL");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(isset($_REQUEST['pay']))

{

$date = date('Y-m-d');
$time = date('Y-m-d H:i:s');
   $MOBILE=trim($_REQUEST['mob']);
       $Gemail=trim($_REQUEST['Gemail']);
       
 $swl= "SELECT * FROM GuestBooking WHERE G_mobile='$MOBILE' AND Gemail='$Gemail'";
       if ($result=mysqli_query($con,$swl))
  			{
 			$check_user = mysqli_num_rows($result);
			}

$row=mysqli_fetch_row($result);
       $USERID=$row[0];
       
       
       
       $quert="
       INSERT INTO aeroseat_payment(payment_mode,payment_status,user_id,payment_gatway,payment_on)
       VALUES ('".$_REQUEST['paythrough']."','".$_REQUEST['totalp']."','$USERID','".$_REQUEST['MERCHANT']."','".$date."')";
        
        if(mysqli_query($con,$quert))
      			{
					
					}
					else
						{
							echo "Not Registered";
						}
		}
else
{

echo"not submit";
}

?>  