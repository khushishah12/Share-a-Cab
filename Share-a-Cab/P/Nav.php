<div class="topnav" id="myTopnav">
	<div class="logo">
        <a href="#">
          <img src="images\logo.jpg" alt="Logo" class="logo-img"> <!-- Add your logo image here -->
        </a>
      </div>
	<a href="#" class="active">Share a Cab</a>
	<a href="login.php?op=0" >Home</a>
	<div class="dropdown">
		<button class="dropbtn">Car-Pool <i class="fa fa-caret-down"></i> </button>
		<div class="dropdown-content">
			<a href="login.php?op=1">Search</a>
			<a href="login.php?op=2">Share your Cab</a>
			<a href="login.php?op=3">Daily Commuting</a>
		</div>
	</div> 
	<div class="dropdown">
		<button class="dropbtn">Taxi <i class="fa fa-caret-down"></i> </button>
		<div class="dropdown-content">
			<a href="login.php?op=4">Airport </a>
		</div>
	</div> 	
	
	<div class="dropdown">
		<button class="dropbtn">Help <i class="fa fa-caret-down"></i> </button>
		<div class="dropdown-content">
			<a href="login.php?op=11">F.A.Q.</a>
			<a href="login.php?op=12">About us</a>
			<a href="login.php?op=13">Best Practices</a>
			<a href="login.php?op=14">Legal Aspect</a>
		</div>
	</div> 
	<a href="login.php?op=15">Contact us</a>
	<a href="login.php?op=16">About us</a>
	<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;aaa</a>
 	<div class="topnav-right">
		<div class="dropdown">
    			<button class="dropbtn"> <?php echo $un; ?> <i class="fa fa-caret-down"></i></button>
    			<div class="dropdown-content">
				<a href="login.php?op=17">Profile</a>
				<a href="login.php?op=18">Change Password</a>
    			</div>
  		</div> 
    		<a href="logout.php">Sign out</a>
  	</div>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
