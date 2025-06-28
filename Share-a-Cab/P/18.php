<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
	input
	{
		padding: 8px;
		width: auto;
		min-width: 150px;  /* Minimum width to make sure the fields aren't too narrow */
        }
        button 
	{
		padding: 10px 15px;
		background-color: #4CAF50;
		color: white;
		border: none;
		cursor: pointer;
		font-size: 16px;
        }
        button:hover 
	{
		background-color: #45a049;
        }
	/* Centering the div using Flexbox */
	.centered-div 
	{
		display: flex;
		justify-content: center; /* Horizontally centers the div */
		align-items: center;     /* Vertically centers the div */
		height: 100vh;           /* Full viewport height */
	}
	.centered-div-content 
	{
		    /* Your content style */
		padding: 20px;
		background-color: lightblue;
		border-radius: 8px;
	}
	p 
	{
		color: navy;
		padding: 0px 0px 0px 0px;
		margin: 0px 0px 0px 0px;
	}
	.rule::before
	{
		content: '\f00d';
		font-family: FontAwesome;
		display: inline-block;
		margin-left: -30px;
		width: 20px;
		font-size: 12px;
	}
	.rule.checked
	{
		color: #0f0;
	}
	.rule.checked::before
	{
		content: '\f00c';
		color: #209237;
	}
</style>
<div class="centered-div">
	<div class="centered-div-content">
		<h1 align="center">Change your password</h1>
		<table>
			<tr>
				<td> User Name  </td>
				<td><input type="username" id=user-name placeholder="username" value="<?php echo$un;?>"> </td>
			</tr>

			<tr>
				<td> Old Password </td>
				<td><input type="password" id=old_password placeholder="Password" class="password-input-1"> </td>
			</tr>
			<tr>
				<td> New Password:</td>
				<td> <input type="password" id=password placeholder="Password" class="password-input"> </td>
			</tr>
			<tr>
				<td> Re-Enter Password:</td>
				<td> <input type="password" id=password1 placeholder="Password" class="password-input"> </td>
			</tr>
			<tr>
				<td colspan=2 align=center ><button  id=smtBtn >Change</button></td>

			</tr>
			<tr>
				<td colspan=2> <P>A New password you entered is : </p>  </td>
				
			</tr>

			<tr>
				<td> &nbsp; </td>
				<td><P class="rule">At least 8 character long</p> </td>
			</tr>
			<tr>
				<td> &nbsp; </td>
				<td><p class="rule">At least 1 number</p></td>
			</tr>
			<tr>
				<td> &nbsp; </td>
				<td><p class="rule">At least 1 lowercase letter</p></td>
			</tr>
			<tr>
				<td> &nbsp; </td>
				<td><p class="rule">At least 1 uppercase letter</p></td>
			</tr>
			<tr>
				<td> &nbsp; </td>
				<td><p class="rule">At least 1 special character</p></td>
			</tr>
		</table>
	</div>
</div>
<script >
let Pass = document.getElementById('password');
let Rules = document.querySelectorAll('.rule');
let VRX = [
    { ex: /.{8,}/ }, // min 8 letters,
    { ex: /[0-9]/ }, // numbers from 0 - 9
    { ex: /[a-z]/ }, // letters from a - z (lowercase)
    { ex: /[A-Z]/}, // letters from A-Z (uppercase),
    { ex: /[^A-Za-z0-9]/} // special characters
]
Pass.addEventListener('keyup', () => {  
	VRX.forEach((item, i) => {
        if(item.ex.test(Pass.value)){Rules[i].classList.add('checked');} 
	else{ Rules[i].classList.remove('checked');}
    })
})



$('#smtBtn').click(function()
{
	var user_name=$('#user-name').val();
	var old_pass =$('#old_password').val();
	var pass =$('#password').val();
	var pass1 =$('#password1').val();

	let regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@.#$!%*?&])[A-Za-z\d@.#$!%*?&]{8,15}$/;
	if(old_pass.length  == 0)
	{
		
		alert("Enter old password");
	}
	else	
	if(! (pass==pass1))
	{
		alert("New password must match with reentered password");
	}
	else
	if ( regex.test(pass)  )
	{

		$("#smtBtn").html("Wait");
		$.post("chpw.php", {
			user_name:user_name,
			old_pass:old_pass,
			pass:pass

		}, function(data) {
			alert(data);
			$("#smtBtn").html("Update");	
		});
	}
	else
	{
		alert("New password must match Password rule");
	}
});
</script>





