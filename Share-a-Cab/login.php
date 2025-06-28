<?php
	$op=$_GET["op"];	
	$un=$_POST['username'];
	$pw=$_POST['password'];
	
	if ($un=="")
	{	
		session_start();
		$un=$_SESSION["username"];
		$pw=$_SESSION["password"];
		$admin_1=$_SESSION["admin_1"];
	}
	else
	{
		
		session_start();
		$_SESSION["username"]=$un;
		$_SESSION["password"]=$pw;
	}

	$servername = "118.139.181.71";
	$database = "c12";
	$username = "Khushi";
	$password = "Alpesh@01";
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Connection Check
	if (!$conn) {die("Connection failed: " . $conn->connect_error);}
	else
	{




		$sql = "Select user_Name,pasword_hash from cab_participants where user_Name='".$un."'";
		
		$result = $conn->query($sql);
		if ($result->num_rows > 0) 
		{
			
	
			$row = $result->fetch_assoc();
  			//if  ($row["pasword_hash"]==$pw)
			if(password_verify($pw, $row["pasword_hash"]))
			{

				$_SESSION["username"] =$un;
				$_SESSION["password"] =$pw;

				include "P/head.php";
				include "P/Nav.php";					
				include "P/App.php";
									
				include "P/Footer.php";	
  			}
			else
			{  ?>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="./Style-1.css"> 
</style>
</head>
<body>
	<div class="container" id="container">
		<div   class="form-container sign-up-container">
			<form1>
				<table border=0>
					<tr  id=r1>
						<td colspan=2 align=center><h1>Signup Form </h1> <br /> <br /></td>		
					</tr>
					<tr  id=r2>
						<td> <span> User Name: </span> </td>
						<td> <input type="User Name" id=RUN placeholder="User Name" /></td>
					</tr>
					<tr id=r3>
						<td> <span> Password: </span> </td>
						<td> <input type="password" id=RPW placeholder="Password" /></td>
					</tr>
					<tr id=r4>
						<td> <span> Re-Enter Password: </span> </td>
						<td> <input type="password" id=RPW1 placeholder="Re-Enter Password" /></td>
					</tr>
					<tr id=r5>
						<td> <span> E-Mail: </span> </td>
						<td> <input type="email" id=REM placeholder="Email" /></td>
					</tr>
					<tr id=r6>
						<td colspan=2 align=center><br /><button id="SENDOTP">SignUp</button> </td>
					</tr>
					<tr id=r7>
						<td colspan=2 align=center><h1>Enter OTP </h1> <br /><br /></td>
					</tr>
					<tr id=r8>
						<td colspan=2 align=center><p>An OTP  with id <b><span id=otp_2> *** </span></b> has been sent <br /> to your email <span id=otp_3> *** </span> -  <br /> & Mobile - **********. <br /><br /> Please submit OTP below: </p></td>
					</tr>
					<tr id=r9>
						<td> <span id=otp_1> O.T.P: </span> </td>
						<td> 
						<div class="otp-container">
						        	<!-- Create 6 input fields for OTP digits -->
							        <input type="text" id="otp1" class="otp-input" maxlength="1" oninput="moveFocus(1)" onkeydown="handleBackspace(event, 1)">
							        <input type="text" id="otp2" class="otp-input" maxlength="1" oninput="moveFocus(2)" onkeydown="handleBackspace(event, 2)">
							        <input type="text" id="otp3" class="otp-input" maxlength="1" oninput="moveFocus(3)" onkeydown="handleBackspace(event, 3)">
							        <input type="text" id="otp4" class="otp-input" maxlength="1" oninput="moveFocus(4)" onkeydown="handleBackspace(event, 4)">
							        <input type="text" id="otp5" class="otp-input" maxlength="1" oninput="moveFocus(5)" onkeydown="handleBackspace(event, 5)">
								<input type="text" id="otp6" class="otp-input" maxlength="1" oninput="moveFocus(6)" onkeydown="handleBackspace(event, 6)">
							</div>
						</td>
					</tr>
					<tr id=r10>
						<td colspan=2 align=center><p>OTP Expires in  <b><span id=timer> *** </span></b> </td>
					</tr>
					<tr id=r11>
						<td colspan=2 align=center> <button id=smt1 >Submit OTP</button></td>
					</tr>
					<tr id=r12>
						<td colspan=2 align=center>Please wait while <br /> we register your detail  <br /> with our website</td>
					</tr>
				</table>	
			</form1>
		</div>
		<div class="form-container sign-in-container">
			<form id=frmLogin action="login.php" method="post">
				<h1>Share-a-Cab.com </h1>
				<p> invalid password </p>
				<div class="social-container">
					<a href="#" class="social"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWImNyLWcy1CPLnwI3cq0uoF9MpBp7SDdePA&s" height=40 with=40></a>
					<a href="#" class="social"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQm0mk1Y8SLPtCWry0lO-YUpta5CswCKEb0Wg&s" height=40 with=40></i></a>
					<a href="#" class="social"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQm0mk1Y8SLPtCWry0lO-YUpta5CswCKEb0Wg&s" height=40 with=40></i></a>
				</div>
				<table border=0>
					<tr>
						<td> <span>User Name: </span> </td>
						<td> <input type="User Name" id=username name=username placeholder="User Name" /></td>
					</tr>
					<tr>
						<td> <span>Password: </span> </td>
						<td> <input type="password" id=password name=password placeholder="Password" /></td>
					</tr>
					<tr>
						<td colspan=2 align=center> <!-- 	<a href="#">Forgot your password?</a>--></td>
					</tr>
					<tr>
						<td colspan=2 align=center><button>Sign In</button></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Share-a-Cab Sigup Form.......</h1>
					
					<hr />
					
					<p> 1. Enter First Name , LastName Username , Password and Email.</p>
					<p> 2. An O.T.P. will be send to your Registered Email.</p>
					<p> 3. Enter the O.T.P. to the O.T.P. Field on the Form.</p>
					<p> 4. After Successful Entry of O.T.P. a login will be created.</p>
					<p> 5. Click on Register button to Register with us.</p>
	
					
					<hr />
					<h1> :: Have an account ::</h1>
					<p>&nbsp;</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>New to Share-a-Cab?</h1>
					<p> &nbsp; </p>
					<p> Our Mission is to remove 1 Million. Cars from the Roads, every day, at Share-a-Cab.com, Where Excellence Meets Transportation</p>
					<p> &nbsp; </p>
					<p> You want to be a part of this mission, Signup.   </p>
					<p> &nbsp; </p>
					<hr>
					<p> &nbsp; </p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<p>
			Share my Cab. Your Reliable Ride, It's Our Pride.
		</p>
	</footer>
<script language=javascript>
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');
	signUpButton.addEventListener('click', () => { container.classList.add('right-panel-active');});
	signInButton.addEventListener('click', () => { container.classList.remove('right-panel-active');});

	var G_otp="";
	var otp_id="";
	let timeLeft = 180; // 3 minutes in seconds
        const timerDisplay = document.getElementById("timer");

        function updateTimer() {
            let minutes = Math.floor(timeLeft / 60);
            let seconds = timeLeft % 60;

            seconds = seconds < 10 ? "0" + seconds : seconds;
            timerDisplay.textContent = `0${minutes}:${seconds}`;

            if (timeLeft === 0) {
                clearInterval(timerInterval);
                timerDisplay.textContent = "OTP Expired";
                timerDisplay.classList.add("expired");
            }

            timeLeft--;
        }

        const timerInterval = setInterval(updateTimer, 1000);
       
	 // Automatically move focus to the next input when a digit is entered
        function moveFocus(currentInput) 
	{
		const inputValue = document.getElementById('otp' + currentInput).value;
		// If the current input has a value, move focus to the next input field
		if (inputValue && currentInput < 6) 
		{
                	document.getElementById('otp' + (currentInput + 1)).focus();
		}
        }
        // Handle Backspace key to move focus to the previous input if the current input is empty
        function handleBackspace(event, currentInput) 
	{
		if (event.key === 'Backspace' && !document.getElementById('otp' + currentInput).value && currentInput > 1) 
		{
	                document.getElementById('otp' + (currentInput - 1)).focus();
        	}
        }
        // Submit OTP function
        function submitOTP() 
	{
		let otp = '';
		for (let i = 1; i <= 6; i++) 
		{
                	otp += document.getElementById('otp' + i).value;
		}
		if (otp.length === 6) 
		{
			if(G_otp==otp)
			{
				alert("OTP MATCHED");
			}
			else
			{
				alert("invalid otp");
			}
            	} 
		else 
		{
                	alert('Please enter all 6 digits of the OTP.');
		}
        }

	function generateOTP(length = 6) 
	{
    		let otp = '';
	    	for (let i = 0; i < length; i++) 
		{
        		otp += Math.floor(Math.random() * 10); // Generates a random digit (0-9)
	    	}
    		return otp;
	}
	function validateEmail(email) 
	{
		const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
		return emailPattern.test(email);
	}

	$(document).ready(function () {
        	$('#r1').show();
		$('#r2').show();
		$('#r3').show();
		$('#r4').show();
		$('#r5').show();
		$('#r6').show();

		$('#r7').hide();
		$('#r8').hide();
		$('#r9').hide();
		$('#r10').hide();
		$('#r11').hide();
		$('#r12').hide();

	});
	$('#SENDOTP').click(function()
	{
		
		var un = $('#RUN').val(); 
		var pw = $('#RPW').val(); 
		var pw1 = $('#RPW1').val(); 
		var REM = $('#REM').val(); 
		

		G_otp=generateOTP(length = 6);
		otp_id=generateOTP(length = 3);
		if (un.length <=5 )
		{
			alert('Username must be greater than 5');
		}
		else if (pw.length <8)
		{
			alert('Password must be minimum 8 character Long');	
		}
		else if (!(pw==pw1))
		{
			alert('Password must be same as Re-entered password');	
		}
		else if (!validateEmail(REM))
		{
			alert('Enter Correct Email');	
		}
		else
		{
			$('#RUN').prop("disabled", true);
			$('#RPW').prop("disabled", true);
			$('#RPW1').prop("disabled", true);
			$('#REM').prop("disabled", true);
			$('#SENDOTP').html("Wait...");
			$.post("sendotp.php", {
				UNM:un,
				OTP_ID:otp_id,
				OTP:G_otp,
				Email:REM
			}, function(data) {
				if(data=1)
				{
					$('#r1').hide();
					$('#r2').hide();
					$('#r3').hide();
					$('#r4').hide();
					$('#r5').hide();
					$('#r6').hide();
					$("#otp_2").html(otp_id);
					$("#otp_3").html(REM);
					timeLeft=180;
					$('#r7').show();
					$('#r8').show();
					$('#r9').show();
					$('#r10').show();
					$('#r11').show();
				}
				else
				{
					alert(data);
				}
			});
		}
		
	});

	$('#smt1').click(function(){
        	
		let otp = '';
		for (let i = 1; i <= 6; i++) 
		{
                	otp += document.getElementById('otp' + i).value;
		}
		if (otp.length === 6) 
		{
			if(G_otp==otp)
			{
				//OTP MATCHED
				$('#r7').hide();
				$('#r8').hide();
				$('#r9').hide();
				$('#r10').hide();
				$('#r11').hide();
				$('#r12').show();

				var un = $('#RUN').val(); 
				var pw = $('#RPW').val(); 
				var REM = $('#REM').val(); 
				$.post("addUser.php", {
					UNM:un,
					PW:pw,
					Email:REM
					}, function(data) {
					if (data==1)
					{
						//alert("Registration Successful login now");
						document.getElementById('username').value=un;
						document.getElementById('password').value=pw;
						document.getElementById("frmLogin").submit();
					}
					else
					{
						alert(data);	
					}
				});
			}
			else
			{
				alert("invalid otp");
			}
            	} 
		else 
		{
                	alert('Please enter all 6 digits of the OTP.');
		}
	});
    </script>
</body>
</html>
			<?php
			}
		} 
		else 
		{
		?>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="./Style-1.css"> 
</style>
</head>
<body>
	<div class="container" id="container">
		<div   class="form-container sign-up-container">
			<form1>
				<table border=0>
					<tr  id=r1>
						<td colspan=2 align=center><h1>Signup Form </h1> <br /> <br /></td>		
					</tr>
					<tr  id=r2>
						<td> <span> User Name: </span> </td>
						<td> <input type="User Name" id=RUN placeholder="User Name" /></td>
					</tr>
					<tr id=r3>
						<td> <span> Password: </span> </td>
						<td> <input type="password" id=RPW placeholder="Password" /></td>
					</tr>
					<tr id=r4>
						<td> <span> Re-Enter Password: </span> </td>
						<td> <input type="password" id=RPW1 placeholder="Re-Enter Password" /></td>
					</tr>
					<tr id=r5>
						<td> <span> E-Mail: </span> </td>
						<td> <input type="email" id=REM placeholder="Email" /></td>
					</tr>
					<tr id=r6>
						<td colspan=2 align=center><br /><button id="SENDOTP">SignUp</button> </td>
					</tr>
					<tr id=r7>
						<td colspan=2 align=center><h1>Enter OTP </h1> <br /><br /></td>
					</tr>
					<tr id=r8>
						<td colspan=2 align=center><p>An OTP  with id <b><span id=otp_2> *** </span></b> has been sent <br /> to your email <span id=otp_3> *** </span> -  <br /> & Mobile - **********. <br /><br /> Please submit OTP below: </p></td>
					</tr>
					<tr id=r9>
						<td> <span id=otp_1> O.T.P: </span> </td>
						<td> 
						<div class="otp-container">
						        	<!-- Create 6 input fields for OTP digits -->
							        <input type="text" id="otp1" class="otp-input" maxlength="1" oninput="moveFocus(1)" onkeydown="handleBackspace(event, 1)">
							        <input type="text" id="otp2" class="otp-input" maxlength="1" oninput="moveFocus(2)" onkeydown="handleBackspace(event, 2)">
							        <input type="text" id="otp3" class="otp-input" maxlength="1" oninput="moveFocus(3)" onkeydown="handleBackspace(event, 3)">
							        <input type="text" id="otp4" class="otp-input" maxlength="1" oninput="moveFocus(4)" onkeydown="handleBackspace(event, 4)">
							        <input type="text" id="otp5" class="otp-input" maxlength="1" oninput="moveFocus(5)" onkeydown="handleBackspace(event, 5)">
								<input type="text" id="otp6" class="otp-input" maxlength="1" oninput="moveFocus(6)" onkeydown="handleBackspace(event, 6)">
							</div>
						</td>
					</tr>
					<tr id=r10>
						<td colspan=2 align=center><p>OTP Expires in  <b><span id=timer> *** </span></b> </td>
					</tr>
					<tr id=r11>
						<td colspan=2 align=center> <button id=smt1 >Submit OTP</button></td>
					</tr>
					<tr id=r12>
						<td colspan=2 align=center>Please wait while <br /> we register your detail  <br /> with our website</td>
					</tr>
				</table>	
			</form1>
		</div>
		<div class="form-container sign-in-container">
			<form id=frmLogin action="login.php" method="post">
				<h1>Share-a-Cab.com </h1>
				<p> invalid user name </p>
				<div class="social-container">
					<a href="#" class="social"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWImNyLWcy1CPLnwI3cq0uoF9MpBp7SDdePA&s" height=40 with=40></a>
					<a href="#" class="social"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQm0mk1Y8SLPtCWry0lO-YUpta5CswCKEb0Wg&s" height=40 with=40></i></a>
					<a href="#" class="social"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQm0mk1Y8SLPtCWry0lO-YUpta5CswCKEb0Wg&s" height=40 with=40></i></a>
				</div>
				<table border=0>
					<tr>
						<td> <span>User Name: </span> </td>
						<td> <input type="User Name" id=username name=username placeholder="User Name" /></td>
					</tr>
					<tr>
						<td> <span>Password: </span> </td>
						<td> <input type="password" id=password name=password placeholder="Password" /></td>
					</tr>
					<tr>
						<td colspan=2 align=center> <!--	<a href="#">Forgot your password?</a>--></td>
					</tr>
					<tr>
						<td colspan=2 align=center><button>Sign In</button></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Share-a-Cab Sigup Form.......</h1>
					
					<hr />
					
					<p> 1. Enter First Name , LastName Username , Password and Email.</p>
					<p> 2. An O.T.P. will be send to your Registered Email.</p>
					<p> 3. Enter the O.T.P. to the O.T.P. Field on the Form.</p>
					<p> 4. After Successful Entry of O.T.P. a login will be created.</p>
					<p> 5. Click on Register button to Register with us.</p>
	
					
					<hr />
					<h1> :: Have an account ::</h1>
					<p>&nbsp;</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>New to Share-a-Cab?</h1>
					<p> &nbsp; </p>
					<p> Our Mission is to remove 1 Million. Cars from the Roads, every day, at Share-a-Cab.com, Where Excellence Meets Transportation</p>
					<p> &nbsp; </p>
					<p> You want to be a part of this mission, Signup.   </p>
					<p> &nbsp; </p>
					<hr>
					<p> &nbsp; </p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<p>
			Share my Cab. Your Reliable Ride, It's Our Pride.
		</p>
	</footer>
<script language=javascript>
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');
	signUpButton.addEventListener('click', () => { container.classList.add('right-panel-active');});
	signInButton.addEventListener('click', () => { container.classList.remove('right-panel-active');});

	var G_otp="";
	var otp_id="";
	let timeLeft = 180; // 3 minutes in seconds
        const timerDisplay = document.getElementById("timer");

        function updateTimer() {
            let minutes = Math.floor(timeLeft / 60);
            let seconds = timeLeft % 60;

            seconds = seconds < 10 ? "0" + seconds : seconds;
            timerDisplay.textContent = `0${minutes}:${seconds}`;

            if (timeLeft === 0) {
                clearInterval(timerInterval);
                timerDisplay.textContent = "OTP Expired";
                timerDisplay.classList.add("expired");
            }

            timeLeft--;
        }

        const timerInterval = setInterval(updateTimer, 1000);
       
	 // Automatically move focus to the next input when a digit is entered
        function moveFocus(currentInput) 
	{
		const inputValue = document.getElementById('otp' + currentInput).value;
		// If the current input has a value, move focus to the next input field
		if (inputValue && currentInput < 6) 
		{
                	document.getElementById('otp' + (currentInput + 1)).focus();
		}
        }
        // Handle Backspace key to move focus to the previous input if the current input is empty
        function handleBackspace(event, currentInput) 
	{
		if (event.key === 'Backspace' && !document.getElementById('otp' + currentInput).value && currentInput > 1) 
		{
	                document.getElementById('otp' + (currentInput - 1)).focus();
        	}
        }
        // Submit OTP function
        function submitOTP() 
	{
		let otp = '';
		for (let i = 1; i <= 6; i++) 
		{
                	otp += document.getElementById('otp' + i).value;
		}
		if (otp.length === 6) 
		{
			if(G_otp==otp)
			{
				alert("OTP MATCHED");
			}
			else
			{
				alert("invalid otp");
			}
            	} 
		else 
		{
                	alert('Please enter all 6 digits of the OTP.');
		}
        }

	function generateOTP(length = 6) 
	{
    		let otp = '';
	    	for (let i = 0; i < length; i++) 
		{
        		otp += Math.floor(Math.random() * 10); // Generates a random digit (0-9)
	    	}
    		return otp;
	}
	function validateEmail(email) 
	{
		const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
		return emailPattern.test(email);
	}

	$(document).ready(function () {
        	$('#r1').show();
		$('#r2').show();
		$('#r3').show();
		$('#r4').show();
		$('#r5').show();
		$('#r6').show();

		$('#r7').hide();
		$('#r8').hide();
		$('#r9').hide();
		$('#r10').hide();
		$('#r11').hide();
		$('#r12').hide();

	});
	$('#SENDOTP').click(function()
	{
		
		var un = $('#RUN').val(); 
		var pw = $('#RPW').val(); 
		var pw1 = $('#RPW1').val(); 
		var REM = $('#REM').val(); 
		

		G_otp=generateOTP(length = 6);
		otp_id=generateOTP(length = 3);
		if (un.length <=5 )
		{
			alert('Username must be greater than 5');
		}
		else if (pw.length <8)
		{
			alert('Password must be minimum 8 character Long');	
		}
		else if (!(pw==pw1))
		{
			alert('Password must be same as Re-entered password');	
		}
		else if (!validateEmail(REM))
		{
			alert('Enter Correct Email');	
		}
		else
		{
			$('#RUN').prop("disabled", true);
			$('#RPW').prop("disabled", true);
			$('#RPW1').prop("disabled", true);
			$('#REM').prop("disabled", true);
			$('#SENDOTP').html("Wait...");
			$.post("sendotp.php", {
				UNM:un,
				OTP_ID:otp_id,
				OTP:G_otp,
				Email:REM
			}, function(data) {
				if(data=1)
				{
					$('#r1').hide();
					$('#r2').hide();
					$('#r3').hide();
					$('#r4').hide();
					$('#r5').hide();
					$('#r6').hide();
					$("#otp_2").html(otp_id);
					$("#otp_3").html(REM);
					timeLeft=180;
					$('#r7').show();
					$('#r8').show();
					$('#r9').show();
					$('#r10').show();
					$('#r11').show();
				}
				else
				{
					alert(data);
				}
			});
		}
		
	});

	$('#smt1').click(function(){
        	
		let otp = '';
		for (let i = 1; i <= 6; i++) 
		{
                	otp += document.getElementById('otp' + i).value;
		}
		if (otp.length === 6) 
		{
			if(G_otp==otp)
			{
				//OTP MATCHED
				$('#r7').hide();
				$('#r8').hide();
				$('#r9').hide();
				$('#r10').hide();
				$('#r11').hide();
				$('#r12').show();

				var un = $('#RUN').val(); 
				var pw = $('#RPW').val(); 
				var REM = $('#REM').val(); 
				$.post("addUser.php", {
					UNM:un,
					PW:pw,
					Email:REM
					}, function(data) {
					if (data==1)
					{
						//alert("Registration Successful login now");
						document.getElementById('username').value=un;
						document.getElementById('password').value=pw;
						document.getElementById("frmLogin").submit();
					}
					else
					{
						alert(data);	
					}
				});
			}
			else
			{
				alert("invalid otp");
			}
            	} 
		else 
		{
                	alert('Please enter all 6 digits of the OTP.');
		}
	});
    </script>
</body>
</html>

		<?php
		}
	}
?>
