<?= $this->extend("frontend/layout") ?>
<?= $this->section("body-contents") ?>

<!-- Page top Section -->
<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 m-auto text-white">
				<h2>calculator: BMI, BMR, WHR</h2>
				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
			</div>
		</div>
	</div>
</section>
<!-- Page top Section end -->

<!-- Service Section -->
<!-- <section class="service-section spad">
	<div class="container">
		<div class="section-title text-center">
			<img src="<?= base_url() ?>assets/img/icons/logo-icon.png" alt="">
			<h2>Who we are</h2>
		</div>
		<div class="row">
			<div class="col-lg-4 col-sm-6">
				<div class="about-item icon-box">
					<div class="ai-icon">
						<img src="<?= base_url() ?>assets/img/icons/about-1.png" alt="">
					</div>
					<div class="ai-text">
						<h4>Full Rejuvenation</h4>
						<p>SF2 was founded to help real people achieve real weight loss, without the unsustainable gimmicks, fad diets, restrictive foods, on-site meetings, or large price tags of other weight-loss companies.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="about-item icon-box">
					<div class="ai-icon">
						<img src="<?= base_url() ?>assets/img/icons/about-2.png" alt="">
					</div>
					<div class="ai-text">
						<h4>Extension of Spring</h4>
						<p>By delivering an easy, convenient, personalized program, SF2 empowers people to discover and embrace life-changing habits that help them achieve healthier lives and reach their weight-loss goals, regardless of age or lifestyle.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="about-item icon-box">
					<div class="ai-icon">
						<img src="<?= base_url() ?>assets/img/icons/about-3.png" alt="">
					</div>
					<div class="ai-text">
						<h4>Against Aging</h4>
						<p>SF2 is widely recognized for its weight loss solutions. We have among the largest scale and breadth of operations within the wellness services industry in India, serving consumers across 2 cities. We operate 4 Wellness Centres in India.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
					<div class="about-item icon-box">
						<div class="ai-icon">
							<img src="img/icons/about-4.png" alt="">
						</div>
						<div class="ai-text">
							<h4>Slim Body</h4>
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor</p>
						</div>
					</div>
				</div>
		</div>
	</div>
</section> -->
<!-- Service Section end -->

<!-- About Section -->
<!-- <section class="about-section spad">
	<div class="container">
		<div class="section-title text-center">
			<img src="<?= base_url() ?>assets/img/icons/logo-icon.png" alt="">
			<h2>How it works</h2>
			<p>Vibrating machine che and 12 days a montha vvanu e bdhu ahoya lakhvanu.</p>
		</div>

		<h3>Duration and timing </h3>
		<p>
			It depends on the nature of fat deposits on the body and patients medical conditions. However the minimum duration of treatment is not less than 15 days. We strictly follow the IMA rules of safe weight loss management. At we have arranged the timing so that anybody can find time for treatment. Each treatment is structured and planned. You have to attend the treatment only thrice a week and spend only 1-2 hr a day for the same. Our timing will be 7am to 7pm. We are open all 7 days a week including Sunday.
		</p>
		<h3>Cost </h3>
		<p>
			Treatment at is highly cost effective and economical. Our packages starts at Rs. 8000 onwards. The rate increases depending on the amount of fat present and percentage fat you need to lose.
		</p>
		<p>
			SF2 is continually enhancing and improving the weight-loss experience for members. Check out our Website for our most recent features and upgrades.
		</p>

	</div>
</section> -->

<!-- About Section end -->


<!-- About Section -->
<section class="about-section spad">
	<div class="container">
		<div class="section-title text-center">
			<img src="<?= base_url() ?>assets/img/icons/logo-icon.png" alt="">
			<h2>Health Calculators</h2>
			<p>BMI, BMR, WHR</p>
		</div>

		<div class="singup-form contact-form my-4">
			<h2 class="mb-2">BMI Calculator</h2>
			<label for="height">Height (cm):</label>
			<input type="number" id="height" name="height">
			<label for="weight">Weight (kg):</label>
			<input type="number" id="weight" name="weight">
			<button onclick="calculateBMI()" class="site-btn sb-gradient">Calculate BMI</button>
			<h4 class="ai-text my-3" style=" text-align-last: end;">Your BMI: <span id="bmiResult"></span></h4>
		</div>
		<div class="singup-form contact-form my-4">

			<h2 class="mb-2">BMR Calculator</h2>
			<label for="age">Age (years):</label>
			<input type="number" id="age" name="age">
			<div class="mb-5">
				<label for="gender">Gender:</label>
				<select id="gender" name="gender" class="site-btn sb-gradient">
					<option value="male" class="">Male</option>
					<option value="female" class=" ">Female</option>
				</select>
			</div>
			<button onclick="calculateBMR()" class="site-btn sb-gradient">Calculate BMR</button>

			<h4 class="ai-text my-3" style=" text-align-last: end;">Your BMR: <span id="bmrResult"></span></h4>
		</div>
		<div class="singup-form contact-form my-4">

			<h2 class="mb-2">WHR Calculator</h2>
			<label for="waist">Waist Circumference (cm):</label>
			<input type="number" id="waist" name="waist">

			<label for="hip">Hip Circumference (cm):</label>
			<input type="number" id="hip" name="hip">

			<button onclick="calculateWHR()" class="site-btn sb-gradient">Calculate WHR</button>

			<h4 class="ai-text my-3" style=" text-align-last: end;">Your WHR: <span id="whrResult"></span></h4>
		</div>
	</div>
</section>

<!-- About Section end -->

<script>
	function calculateBMI() {
		var height = parseFloat(document.getElementById('height').value);
		var weight = parseFloat(document.getElementById('weight').value);

		if (height && weight) {
			var bmi = weight / ((height / 100) * (height / 100));
			document.getElementById('bmiResult').textContent = bmi.toFixed(2);
		}
	}

	function calculateBMR() {
		var age = parseInt(document.getElementById('age').value);
		var gender = document.getElementById('gender').value;
		var height = parseFloat(document.getElementById('height').value);
		var weight = parseFloat(document.getElementById('weight').value);
		var activityLevel = parseFloat(document.getElementById('activityLevel').value);

		// Calculate BMR here based on age, gender, height, weight, and activity level

		var bmr = 0; // Calculate BMR

		document.getElementById('bmrResult').textContent = bmr.toFixed(2);
	}

	function calculateWHR() {
		var waist = parseFloat(document.getElementById('waist').value);
		var hip = parseFloat(document.getElementById('hip').value);

		if (waist && hip) {
			var whr = waist / hip;
			document.getElementById('whrResult').textContent = whr.toFixed(2);
		}
	}
</script>


<?= $this->endSection() ?>