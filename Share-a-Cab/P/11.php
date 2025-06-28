<style>
 p {
            font-family: 'Arial', sans-serif;
            font-size: 16px;
            font-weight: normal;
            line-height: 1.5;
            text-align: justify;
            color: #333;
            
            word-spacing: 2px;
            letter-spacing: 1px;
}
table {
    width: 100%;
    border-collapse: collapse; /* Removes extra space between borders */
    margin: 20px 0;
    font-family: Arial, sans-serif;
}

/* Header Row Styling */
thead p{
    font-size: 18px;
    font-weight: bold;
    color: white;  /* Text color for the header paragraph */
    margin: 0;  /* Remove default margin of <p> */
    text-align: center;
}
thead{
    text-align: center;
    background-color: #333;
	
    color: white; /* White text in header */
}
th {
    padding: 10px;
    text-align: left;
    border: 2px solid #000; /* Dark border for header cells */
}

/* Body Rows Styling */
tbody tr {
    background-color: #f9f9f9; /* Light gray background for rows */
}

td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd; /* Light border below body rows */
}

/* Add spacing between columns */
td, th {
    padding-left: 20px;
    padding-right: 20px;
}

/* Add hover effect for rows */
tbody tr:hover {
    background-color: #f1f1f1; /* Light background on hover */
}
.faq-container {
    max-width: 800px;
    margin: 10px auto;
    padding: 10px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.faq-title {
    text-align: center;
    font-size: 2rem;
    margin-bottom: 10px;
}

.faq-item {
    margin-bottom: 10px;
}

.faq-question {
    width: 100%;
    padding: 10px;
    font-size: 1.1rem;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: left;
    transition: background-color 0.3s ease;
}

.faq-question:hover {
    background-color: #0056b3;
}

.faq-answer {
    display: none;
    padding: 5px 5px;
    font-size: 1rem;
    background-color: #f9f9f9;
    border-left: 3px solid #007bff;
}

@media (max-width: 768px) {
    .faq-container {
        margin: 20px;
        padding: 15px;
    }

    .faq-title {
        font-size: 1.5rem;
    }
}
</style>
<section class="faq-container">
        <h2 class="faq-title">Frequently Asked Questions</h2>
       <div class="faq-item">
            <button class="faq-question" aria-expanded="false">What is Scalability and Flexibility of Share-A-Cab.com </button>
            <div class="faq-answer">
                <p><b>For Short and Long Distances: </b> Carpooling apps cater to both short-distance daily commutes (e.g., going to work or school) and long-distance travel (e.g., road trips or interstate travel), offering a flexible option for various types of trips.</p>
            </div>
        </div>
	<div class="faq-item">
            <button class="faq-question" aria-expanded="false">How does user benefits from  Share-A-Cab.com </button>
            <div class="faq-answer">
			<p> Share-A-Cab.com  is a platform that lets corporate employees travelling on the same route share rides, share commuting costs, reduce traffic and pollution, all the same time.</p>
			<p> <b> Carpool giver </b> gets to share your petrol cost and network with corporate employees.</p>
			<p> <b> Carpool Taker </b> gets to share the empty seats in colleague's vehicle and has a comfortable and eco-friendly commute. </p>
            </div>
        </div>
	<div class="faq-item">
            <button class="faq-question" aria-expanded="false">How secure is Share-A-Cab.com </button>
            <div class="faq-answer">
			<p> Share-A-Cab.com clearly differentiates the users with Verified status, after validating the corporate email id. Users can configure their social network profiles, so other users can make informed decisions before connecting.</p>
            </div>
        </div>
	<div class="faq-item">
            <button class="faq-question" aria-expanded="false">How Share-A-Cab.com is different from other Cab booking app?</button>
            <div class="faq-answer">
			<p> Share-A-Cab.com  is not a cab service application. Carpool givers in here are working professionals who commute to and fro in their vehicle. Since they are the only ones travelling in their vehicle, it usually remains empty. They want to cut the cost of travel by offering rides to other needy passengers.</p>
			<table>
				<thead>
					<tr>
						<th width=300px;><P>Other Car Pooling App</p></th>
						<th width=300px;><P>Share-A-Cab</div> </th>
						<th width=300px; ><p>impact of using Share-A-Cab</p></th>

					</tr>
				</thead>
				<tbody>
			                <tr>
						<td><p>Encourage adding new vehicles on road </p></td>
						<td><p>Does not encourage adding new vehicles on road. Our main aim is to efficiently utilize the <b>"empty"</b> seats of vehicles that are already on the roads</p></td>
						<td><p>Reduce the traffic congestions and total travel time for all.</p></td>
					</tr>
					<tr>
						<td><p>Price is high and fluctuates a lot on a daily basis</p></td>
						<td><p>Price is very economical and does not fluctuate</p></td>
						<td><p>Pocket friendly (almost 20-25% of price set by commercial taxi providers/aggregators)</p></td>
					</tr>
					<tr>
						<td><p>Route is not fixed and de-tours are unreasonable</p></td>
						<td><p>Route is fixed at the time of joining the ride</p></td>
						<td><p>No de-tours and unpleasant surprises</p></td>
					</tr>
					<tr>
						<td><p>Cannot control who will be my co-riders</p></td>
						<td><p>You can see all co-riders in the ride view along with their ratings. If you don’t feel comfortable with any of them, you can unjoin the ride.</p></td>
						<td><p>Very transparent and more secure</p></td>
					</tr>
				</tbody>
			</table>
            </div>
        </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const questions = document.querySelectorAll('.faq-question');

    questions.forEach(question => {
        question.addEventListener('click', () => {
            const answer = question.nextElementSibling;
            const isExpanded = question.getAttribute('aria-expanded') === 'true';

            // Toggle the visibility of the answer
            if (isExpanded) {
                answer.style.display = 'none';
                question.setAttribute('aria-expanded', 'false');
            } else {
                answer.style.display = 'block';
                question.setAttribute('aria-expanded', 'true');
            }
        });
    });
});

</script>