<?= $this->extend("frontend/layout") ?>
<?= $this->section("body-contents") ?>

<!-- Page top Section -->
<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 m-auto text-white">
				<h2>Contact</h2>
				<p>Thanks for visiting SF2. If you need more information, need help with something , let us know and we'll respond ASAP! address of branches, contact number </p>
			</div>
		</div>
	</div>
</section>
<!-- Page top Section end -->

<!-- Contact Section -->
<section class="contact-page-section spad overflow-hidden">
	<div class="container">
		<div class="contact-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3781.63797418739!2d73.79730407519331!3d18.59035328251681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s702%2C%20A4B%2C%20siddhivinayak%20ginger%2C%20pimple%20saudagar%2C%20pune!5e0!3m2!1sen!2sin!4v1718783498591!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>


		<div class="row">
			<div class="col-lg-4">
				<div class="con-info">
					<h3>Visit the Yoga SF2</h3>
					<ul>
						<li><i class="material-icons">map</i>
							<p><a class="text-dark" href="https://maps.app.goo.gl/8nbr71CVX4JNyUWd7">702, A4B
									Siddhivinayak Ginger
									Pimple Saudagar
									Pune, Maharashtra</a></p>
						</li>
					</ul>
				</div>
				<div class="con-info">
					<h3>Message Us</h3>
					<ul>
						<li><i class="material-icons">map</i> <a href="tel:+919033902823" class="text-dark">+91 90339 02823</a> , <a href="tel:+919158394180" class="text-dark">+91 91583 94180</a>
						</li>
						<li><i class="material-icons">map</i><a class="text-dark" href="mailto:bhumika.sf2stayfitforever@gmail.com">bhumika.sf2stayfitforever@gmail.com</a></li>
					</ul>
				</div>
				<div class="con-info">
					<h3>Opening Hours</h3>
					<ul>
						<li><i class="material-icons">map</i>Mon - Sat: 7:00am - 10:00pm</li>
					</ul>
				</div>
				<div class="contact-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
			</div>
			<div class="col-lg-8">
				<form class="singup-form contact-form" action="javascript:void(0);" method="post" id="contactusfrom">
					<div class="row">
						<div class="col-md-6">
							<input type="text" placeholder="First Name" name="name">
							<span class="error-message" id="name-error"></span>
						</div>
						<div class="col-md-6">
							<input type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" name="pnumber" placeholder="Phone No.">
							<span class="error-message" id="pnumber-error"></span>
						</div>
						<div class="col-md-12">
							<input type="text" placeholder="Your Email" name="email">
							<span class="error-message" id="email-error"></span>
						</div>

						<div class="col-md-12">
							<textarea placeholder="Message" name="msg"></textarea>
							<span class="error-message" id="msg-error"></span>
							<a href="#" id="send-message-btn" class="site-btn sb-gradient">Send message</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- Trainers Section end -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
	$(document).ready(function() {
		// Add click event handler to the "Send message" button
		$("#send-message-btn").click(function(e) {
			e.preventDefault(); // Prevent default form submission

			// Serialize form data
			var formData = $("#contactusfrom").serialize();

			// Make AJAX request to send email
			$.ajax({
				url: "<?php echo base_url('send-mail'); ?>", 
				type: "POST",
				// dataType: "json",
				data: formData, // Pass serialized form data
				success: function(response) {
					if (response.success) {
						Swal.fire({
							title: "success",
							text: "Email sent successfully",
							icon: "success"
						}).then((result) => {
                            if (result.isConfirmed) {
                                // Clear the form when the user clicks "OK"
                                $("#contactusfrom")[0].reset();
                                // Clear any previous error messages
                                $(".error-message").text('');
                            }
                        });
						
					} else {
						Swal.fire({
							title: "error",
							text: "Please fill the required information",
							icon: "error"
						});
					}
				},
				error: function(xhr, status, error) {
					// SweetAlert for AJAX error
					swal("Error", "AJAX Error: " + xhr.responseText, "error");
				}
			});
		});
	});
</script>

<?= $this->endSection() ?>