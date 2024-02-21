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
		<div class="contact-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d33245.297803635964!2d-73.76987401620775!3d40.704774398815005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1575866843291!5m2!1sen!2sbd" style="border:0;" allowfullscreen=""></iframe></div>
		<div class="row">
			<div class="col-lg-4">
				<div class="con-info">
					<h3>Visit the Yoga Ahana</h3>
					<ul>
						<li><i class="material-icons">map</i>184 Main Collins Street</li>
					</ul>
				</div>
				<div class="con-info">
					<h3>Message Us</h3>
					<ul>
						<li><i class="material-icons">map</i>(965) 436 3274</li>
						<li><i class="material-icons">map</i>ahana.yoga@gmail.com</li>
					</ul>
				</div>
				<div class="con-info">
					<h3>Opening Hours</h3>
					<ul>
						<li><i class="material-icons">map</i>Mon - Fri: 6:30am - 07:45pm</li>
						<li><i class="material-icons">map</i>Sat - Sun: 8:30am - 05:45pm</li>
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
						</div>
						<div class="col-md-6">
							<input type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" name="pnumber" placeholder="Phone No.">
						</div>
						<div class="col-md-12">
							<input type="text" placeholder="Your Email" name="email">
						</div>

						<div class="col-md-12">
							<textarea placeholder="Message" name="msg"></textarea>
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
<!-- <script>
$(document).ready(function() {
    // Add click event handler to the "Send message" button
    $("#send-message-btn").click(function(e) {
        e.preventDefault(); // Prevent default form submission
        
        // Serialize form data
        var formData = $("#contactusfrom").serialize();
        
        // Make AJAX request to send email
        $.ajax({
            url: "<?php echo base_url('send-mail'); ?>", // Correct endpoint
            type: "POST",
            dataType: "json",
            data: formData, // Pass serialized form data
            success: function(response) {
                if (response.success) {
                    alert('Email sent successfully');
                } else {
                    alert('Error sending email: ' + response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});

</script> -->
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
				url: "<?php echo base_url('send-mail'); ?>", // Correct endpoint
				type: "POST",
				dataType: "json",
				data: formData, // Pass serialized form data
				success: function(response) {
					if (response.success) {
						Swal.fire({
							title: "success",
							text: "Email sent successfully",
							icon: "success"
						});
					} else {
						Swal.fire({
							title: "error",
							text: "Error sending email:",
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