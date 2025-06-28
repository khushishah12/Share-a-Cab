<style>
/* Hero Section Styling */
	H1
	{
		color: white;
	    text-shadow: 1px 3px 4px rgba(0,0,0,0.4);
	    text-align: center;
	    font-size: 40px;
	    letter-spacing: 0.4px;
	    font-family: $font;

		
	}
	p
	{
		font-size: 1.2em;
		margin-bottom: 30px;
	}
	.section 
	{
		position: relative;
		width: 100%;
		height: 100vh; /* Full height of the viewport */
		background-size: cover;
		background-position: center;
		color: white;
		display: flex;
		justify-content: center;
		align-items: center;
		text-align: center;
	}
	.hero {
		background-image: url('images/hero-image.jpg'); /* Your hero image */
	}
	.WWD{
	  
	  background: #84e8dc;
	  background: -moz-linear-gradient(-45deg, #84e8dc 0%, #f4ed8b 100%);
	  background: -webkit-linear-gradient(-45deg, #84e8dc 0%,#f4ed8b 100%);
	  background: linear-gradient(135deg, #84e8dc 0%,#f4ed8b 100%);
	}
	.MDT{
		position: relative;
		width: 100%;
		height: 100vh; /* Full height of the viewport */
		background-size: cover;
		background-position: center;
		color: white;
		
		justify-content: center;
		align-items: center;
		text-align: center;
	  background: #fcdbf9;
	  
	}

	/* Content inside the hero section */
	.content 
	{
  		max-width: 800px;
	  	padding: 20px;
  		background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background for text */
	  	border-radius: 10px;
	}
	.cta-button 
	{
  		font-size: 1.1em;
  		padding: 12px 25px;
  		background-color: #ff6600; /* CTA button color */
  		color: white;
  		text-decoration: none;
  		border-radius: 5px;
  		transition: background-color 0.3s;
	}
	.cta-button:hover 
	{
  		background-color: #cc5200; /* Darker shade on hover */
	}
	header {
  	padding: 50px 0;
  	h1{
	    color: white;
	    text-shadow: 1px 3px 4px rgba(0,0,0,0.4);
	    text-align: center;
	    font-size: 40px;
	    letter-spacing: 0.4px;
	    font-family: $font;
	  }
	}

	.i-container{
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
  justify-content: center;
  padding: 0 30px;
  
  .thumbex{
    margin: 10px 20px 30px;
    width: 100%;
    min-width: 250px;
    max-width: 435px;
    height: 300px;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    overflow: hidden;
    outline: 2px solid white;
    outline-offset: -15px;
    background-color: #fcdbf9;
    box-shadow: 5px 10px 40px 5px rgba(0,0,0,0.5);
    
    .thumbnail{
      overflow: hidden;
      min-width: 250px;
      height: 300px;
      position: relative;
      opacity: 0.88;
      backface-visibility: hidden;
      transition: all 0.4s ease-out;
      
      
      img{
        position: absolute;
        z-index: 1;
        left: 50%;
        top: 50%;
        height: 115%;
        width: auto;
        transform: translate(-50%, -50%);
        backface-visibility: hidden;
      }
      
      span{
        position: absolute;
        z-index: 2;
        top: calc(250px - 20px);
        left: 0;
        right: 0;
        background: rgba(0,0,0,0.7);
        padding: 5px 5px;
        margin: 0 45px;
        text-align: center;
        font-size: 16px;
        color: white;
        font-weight:300;
        font-family: $font;
        letter-spacing: 0.2px;
        transition: all 0.3s ease-out;
      }
      
      &:hover{
        backface-visibility: hidden;
        transform: scale(1.15, 1.15);
        opacity: 1;
        
        span{
          opacity: 0;
        }
        
      }
    }
  }
}
/* Footer Styling */
.footer {
  background-color: #333;
  color: #fff;
  padding: 40px 20px;
}

.footer-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.footer-section {
  flex: 1 1 300px; /* Allow sections to be flexible */
  margin: 10px;
}

.footer-section h3 {
  font-size: 1.5rem;
  margin-bottom: 10px;
}

.footer-section p, .footer-section ul {
  font-size: 1rem;
}

.footer-section ul {
  list-style-type: none;
}

.footer-section ul li {
  margin-bottom: 8px;
}

.footer-section ul li a {
  color: #fff;
  text-decoration: none;
}

.footer-section ul li a:hover {
  text-decoration: underline;
}

.footer-bottom {
  text-align: center;
  margin-top: 20px;
  font-size: 0.9rem;
}

/* Responsive Styling */
@media (max-width: 768px) {
  .footer-container {
    flex-direction: column;
    align-items: center;
  }

  .footer-section {
    text-align: center;
    margin: 15px 0;
  }

  .footer-bottom {
    font-size: 0.8rem;
  }
}
</style>
<section class="section hero">
    <div class="content">
      	<h1>Share A Cab </h1>
      	<p>If we could all carpool, it would cut down the number of cars on the road to a great extent; means there would be less emission of carbon into the air, causing less pollution, and a cleaner environment.</p>
    </div>
</section>
<section class="section">
    <div class="content">
      	<h1>Our Story </h1>
      	<p>Started in 2024</p><p> During journey to Home... </p>
	<p>The inspiration came from the severe trafic problem we faced while going back to home town.</p>
	<p>Traffic congestion in Gujarat, particularly in urban centers like Ahmedabad, has become a significant concern in recent years. According to the TomTom Traffic Index 2024, Ahmedabad ranks 7<sup>th</sup> among Indian cities and 43<sup>rd</sup> globally for traffic congestion. The average travel time per 10 km is approximately 29 minutes, with commuters experiencing 23% time loss in traffic, equating to about 73 hours annually.</p>
    </div>
</section>
<section class="section WWD">
    <div class="content">
      	<h1>What We Do  </h1>
      	<p>The team at Share-A-Cab is an energetic, young, and socially conscious group that is
working hand in hand with you to solve the problems of traffic congestion, increased
transit times and reducing air pollution.</p>
	
    </div>
</section>
<section class="MDT">
<header>
    <h1>A Multi-Disciplinary Team</h1>
</header>
<div class="i-container">
    <div class="thumbex">
        <div class="thumbnail"><a href="javascript:void(0)"> <img src=""><span> <b> KHUSHI SHAH </b> <br /> Founder & CEO </span></a></div>
    </div>
    <div class="thumbex">
        <div class="thumbnail"><a href="javascript:void(0)"><img src=""/><span><b> -- </b> <br /> Co-Founder  </span></a></div>
    </div>
    <div class="thumbex">
        <div class="thumbnail"><a href="javascript:void(0)"><img src=""/><span><b> -- </b> <br /> Co-Founder  </span></a></div>
    </div>
    <div class="thumbex">
        <div class="thumbnail"><a href="javascript:void(0)"><img src=""/><span><b> -- </b> <br /> Co-Founder  </span></a></div>
    </div>
</div>
</section>

<footer class="footer">
    <div class="footer-container">
      <div class="footer-section">
        <h3>About Us</h3>
        <p>Share-A-Cab.com , A non-Profit organization , promoting carpool</p>
      </div>
      <div class="footer-section">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="https://random-coder.in/Share-a-Cab/login.php?op=0">Home</a></li>
          <li><a href="https://random-coder.in/Share-a-Cab/login.php?op=16">About</a></li>
          <li><a href="https://random-coder.in/Share-a-Cab/login.php?op=15">Contact</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>Contact Us</h3>
        <p>Email: contact@Share-A-Cab.com</p>
        <p>Phone: (123) 456-7890</p>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2025 Your Company. All Rights Reserved.</p>
    </div>
  </footer>