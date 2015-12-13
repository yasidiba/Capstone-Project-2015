<?php
 include "connect.php";

     $uname=$_REQUEST['username']; 
	$fname=$_REQUEST['fname'];
	$lname=$_REQUEST['lname'];
	$eid=$_REQUEST['eid'];
	$pass=$_REQUEST['password'];
	$cpass=$_REQUEST['cpassword'];
	$cnumber=$_REQUEST['cnumber'];
	$offadd1=$_REQUEST['offadd1'];
	$offadd2=$_REQUEST['offadd2'];
	$offaddcity=$_REQUEST['offcity'];
	$offaddstate=$_REQUEST['offstate'];
	$offaddpin=$_REQUEST['offpincode'];
	$offnumber=$_REQUEST['offnumber'];
	$shippingadd1=$_REQUEST['shippingadd1'];
	$shippingadd2=$_REQUEST['shippingadd2'];
	$shipcity=$_REQUEST['shippingcity'];
	$shipstate=$_REQUEST['shippingstate'];
	$shippin=$_REQUEST['shippingpincode'];
	
 if(isset($_POST["submit"]))
 {

	
	if ($uname != null && $fname !=null && $lname != null && $eid != null && $pass != null && $cpass != null && $cnumber != null && $offadd1 != null && $offadd2 != null && $offaddcity != null && $offaddstate != null &&  $offaddpin != null && $offnumber != null && $shippingadd1 != null && $shippingadd2 != null && $shipcity != null && $shipstate != null && $shippin != null)
			 {
								   
			$query = ("INSERT INTO signup (user_name,firstname,lastname,emailid,password,confirm_password,oaddress1,oaddress2,city,state,pincode,cnumber,sadddress1,saddress2,scity,sstate,spincode,contact_number) VALUES ('$uname', '$fname', '$lname', '$eid', '$pass', '$cpass', '$cnumber', '$offadd1', '$offadd2', '$offaddcity', '$offaddstate', '$offaddpin', '$offnumber', '$shippingadd1', '$shippingadd2', '$shipcity', '$shipstate', '$shippin')"); 
					
								
			 }
			 
			 
			if(mysql_query($query))
				{
					echo "insert successfully";
					header('Location: ../successful_signup.html');
				}
			
				else
				{
					echo "oops".mysql_error(). " <br>";
				}
			 
			/*
			  if ($uname == '')
				 {
					 echo "enter Username....";
					 exit();
			 	}
			  if ($fname == '')
			 {
				 echo "enter First name....";
				 exit();
			 }
			  if ($lname == '')
			 {
				 echo "enter Last name....";
				 exit();
			 }
			  if ($eid == '')
			 {
				 echo "enter Email id....";
				 exit();
			 }
			  if ($pass == '')
			 {
				 echo "enter Password....";
				 exit();
			 }
			  if ($cpass == '')
			 {
				 echo "enter Conform Password....";
				 exit();
			 }
			  if ($cnumber == '')
			 {
				 echo "enter Contact Number....";
				 exit();
			 }
			  if ($offadd1 == '')
			 {
				 echo "enter Office Address1....";
				 exit();
			 }
			  if ($offadd2 == '')
			 {
				 echo "enter  Office Address2....";
				 exit();
			 }
			  if ($offaddcity == '')
			 {
				 echo "enter City....";
				 exit();
			 }
			  if ($offaddstate == '')
			 {
				 echo "enter State....";
				 exit();
			 } 
			 if ($offaddpin == '')
			 {
				 echo "enter Pincode....";
				 exit();
			 }
			  if ($offnumber == '')
			 {
				 echo "enter Office number....";
				 exit();
			 }
			  if ($shippingadd1 == '')
			 {
				 echo "enter Shipping Address1....";
				 exit();
			 }
			  if ($shippingadd2 == '')
			 {
				 echo "enter Shipping Address2....";
				 exit();
			 }
			  if ($shipcity == '')
			 {
				 echo "enter Shipping city....";
				 exit();
			 }
			  if ($shipstate == '')
			 {
				 echo "enter shipping State....";
				 exit();
			 }
			 if ($shippin == '')
			 {
				 echo "enter shipping Pincode....";
				 exit();
			 }
			            
				 
	
 }*/
	  
?>