<?php
$to = $_POST['Email'];
$otp=$_POST['OTP'];
$otp_id=$_POST['OTP_ID'];
$user=$_POST['UNM'];

$subject = "One Time password for Share-a-Cab registration";

$htmlContent = '
<html>
<body>
	<table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;background-color: #eB7020;"> 
		<tr> 
                	<th align=center> Share-a-Cab.com </th> 
	         </tr> 
        	 <tr > 
                	<th align=center>contact@Share-a-Cab.com</th> 
	         </tr> 
            	<tr> 
                	<th align=center> <a href="http://random-coder.in/Share-a-Cab/">http://random-coder.in/Share-a-Cab</a></th> 
            </tr> 
        </table> 
	<h1>Share-a-Cab.com </h1>
	<p>Dear '.$user.',</p>
	<p>One Time Password has been generated for E-Mail verification at Share-a-Cab Registration. The One Time Password with id '.$otp_id .' is : <b>'. $otp.' </b> </p>
	<p> Please do not share it with anyone.
	<br />
	In case you have any queries / clarification, please call Share-a-Cab Customer Care.
	<br />
	<br />You are receiving this mail as part of E-Mail Verification process. For more details please contact Share-a-Cab Customer care.</p>
 	<br />
	&nbsp;&nbsp; &nbsp;Thanking & assuring you of our best services always.
	<br/ > 
	<br/ > 
	Warm Regards,
	<br />Team Share-a-Cab.
	</body>
	</html>';

// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: Team Share-a-Cab<otp@Share-a-cab.com>' . "\r\n";

// Send email
if(mail($to,$subject,$htmlContent,$headers)):
    echo "1";
else:
    echo "0";
endif;
?>  