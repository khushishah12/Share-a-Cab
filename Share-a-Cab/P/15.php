<style>
/* Section Styling */
.contact-us {
  background-color: #f4f4f9;
  padding: 10px 20px;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 15px;
  text-align: center;
}

h2 {
  font-size: 2.5rem;
  color: #333;
  margin-bottom: 20px;
}

p {
  font-size: 1.2rem;
  color: #666;
  margin-bottom: 40px;
}

.contact-content {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  gap: 10px;
}

.contact-info, .contact-form {
  flex: 1 1 45%; /* Each section takes up 45% of the width */
  background-color: #fff;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.contact-info h3, .contact-form h3 {
  font-size: 1.8rem;
  color: #333;
  margin-bottom: 20px;
}

.contact-info ul {
  list-style-type: none;
}

.contact-info ul li {
  font-size: 1rem;
  color: #666;
  margin: 10px 0;
}

.contact-info ul li strong {
  font-weight: bold;
}

.contact-form input, .contact-form textarea {
  width: 100%;
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 1rem;
  background-color: #f9f9f9;
}

.contact-form textarea {
  resize: vertical;
  height: 150px;
}

.contact-form button {
  padding: 15px 30px;
  background-color: #007BFF;
  color: white;
  border: none;
  border-radius: 8px;
  font-size: 1rem;
  cursor: pointer;
}

.contact-form button:hover {
  background-color: #0056b3;
}

/* Responsive Styling */
@media (max-width: 768px) {
  .contact-content {
    flex-direction: column;
    align-items: center;
  }

  .contact-info, .contact-form {
    width: 90%;
    margin-bottom: 20px;
  }
}
</style>
<section class="contact-us">
    <div class="container">
      <h2>Contact Us</h2>
      <p>We'd love to hear from you! Please fill out the form below to get in touch with us.</p>
      
      <div class="contact-content">
        <div class="contact-info">
          <h3>Get in Touch</h3>
          <p>If you have any questions, feel free to reach out to us!</p>
          <ul>
            <li><strong>Email:</strong> contact@Share-A-Cab.com</li>
            <li><strong>Phone:</strong> (91) ###-###-###</li>
            <li><strong>Address:</strong> 1234 Street, City, Country</li>
          </ul>
        </div>
        
        <div class="contact-form">
          <h3>Contact Form</h3>
          <form action="#" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </section>