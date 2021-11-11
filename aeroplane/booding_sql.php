
<?php

$con=mysqli_connect("localhost","root","","AEROTRAVEL");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(isset($_REQUEST['print']))

{

$date = date('Y-m-d');
$time = date('Y-m-d H:i:s');
   $MOBILE=trim($_REQUEST['mob']);
       $Gemail=trim($_REQUEST['Gemail']);
       
 $swl= "SELECT * FROM GuestBooking WHERE G_mobile='$MOBILE' AND Gemail='$Gemail'";
       if ($resulte=mysqli_query($con,$swl))
  			{
 			$check_user = mysqli_num_rows($resulte);
			}

$row=mysqli_fetch_row($resulte);
       $USERID=$row[0];
       
       
       
       $quert="
       INSERT INTO aero_booking(book_id,user_id,root_id,plane_ID,dateon)
       VALUES (NULL,'$USERID','".$_REQUEST['rootid']."','".$_REQUEST['planeid']."','".$date."')";
        
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









<?php

$con=mysqli_connect("localhost","root","","AEROTRAVEL");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(isset($_REQUEST['print']))

{

$date = date('Y-m-d');
$time = date('Y-m-d H:i:s');
   $MOBILE=trim($_REQUEST['mob']);
       $Gemail=trim($_REQUEST['Gemail']);
       
 $swp= "SELECT * FROM GuestBooking WHERE G_mobile='$MOBILE' AND Gemail='$Gemail'";
       if ($result=mysqli_query($con,$swp))
  			{
 			$check_user = mysqli_num_rows($result);
			}

$row=mysqli_fetch_row($result);
       $USERID=$row[0];
       //book id
        $BOOK= "SELECT * FROM  aero_booking WHERE user_id='$USERID'";
       if ($results=mysqli_query($con,$BOOK))
  			{
 			$check_user = mysqli_num_rows($results);
			}

$row=mysqli_fetch_row($results);
       $BOOKID=$row[0];
       //book id end
       $STAUS = 'Y';
       $quer="
       INSERT INTO plane_status(Plane_id,book_id,root_id,seat_status,seat_no)
       VALUES ('".$_REQUEST['planeid']."','$BOOKID','".$_REQUEST['rootid']."','$STAUS','".$date."')";
        
        if(mysqli_query($con,$quer))
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