<?php 
	print '
<button onclick="myFunction()">Toggle dark mode</button>

<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>

 <h1>Contact Form</h1>
		<div id="contact" style="width:1000px; display:block;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2456.5221638418357!2d-0.741206650298616!3d51.99736242319605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876553e20a29323%3A0xab6c668894377f73!2sBletchley%20Park!5e0!3m2!1sen!2shr!4v1610050542554!5m2!1sen!2shr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			<form action="http://work2.eburza.hr/pwa/responzive-page/send-contact.php" id="contact_form" name="contact_form" method="POST">
				<label for="fname">First Name *</label>
				<input type="text" id="fname" name="firstname" placeholder="Your name.." required>

				<label for="lname">Last Name *</label>
				<input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
				
				<label for="lname">Your E-mail *</label>
				<input type="email" id="email" name="email" placeholder="Your e-mail.." required>

				<label for="country">Country</label>
				<select id="country" name="country">
				  <option value="">Please select</option>
				  <option value="BE">Belgium</option>
				  <option value="HR" selected>Croatia</option>
				  <option value="LU">Luxembourg</option>
				  <option value="HU">Hungary</option>
				  <option value="UK">United Kingdom</option>
				  <option value="US">United States of America</option>
				  <option value="DE">Germany</option>
				  <option value="AU">Austria</option>
			          <option value="CH">Switzerland</option>
				  <option value="FR">France</option>
				  <option value="IT">Italy</option>
			          <option value="RU">Russia</option>
				  <option value="PL">Poland</option>
				</select>

				<label for="subject">Subject</label>
				<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

				<input type="submit" value="Submit">
			</form>
		</div>

	';
?>