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



<!-- About Section -->
<section class="about-section spad">
	<div class="container">
		<div class="section-title text-center">
			<h2>Health Calculators</h2>
			<p>BMI, BMR, WHR</p>
		</div>

		<div class="singup-form contact-form my-4">
			<h2 class="mb-2">BMI Calculator</h2>
			<div class="row">
				<div class="col">
					<label for="height">Height (cm):</label>
					<input type="number" id="height" name="height">
				</div>
				<div class="col">
					<label for="weight">Weight (kg):</label>
					<input type="number" id="weight" name="weight">
				</div>
				<div class="col">
					<button onclick="calculateBMI()" class="site-btn sb-gradient mt-4">Calculate BMI</button>
					<h4 class="ai-text my-3" style=" text-align-last: end;">Your BMI: <span id="bmiResult"></span></h4>
				</div>
			</div>
		</div>

		<div class="singup-form input contact-form my-4">
			<h2 class="mb-2">BMR Calculator</h2>
			<div class="row">
				<div class="col">
					<label for="age">Age (years):</label>
					<input type="number" id="age" name="age" min="1">
				</div>
				<div class="col">
					<div class="my-3">
						<label for="gender">Gender:</label>
						<select id="gender" name="gender" class="site-btn sb-gradient">
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col">
					<label for="height">Height (cm):</label>
					<input type="number" id="height1" name="height" min="1">
				</div>
				<div class="col">
					<label for="weight">Weight (kg):</label>
					<input type="number" id="weight1" name="weight" min="1">
				</div>
			</div>

			<div>
				<button onclick="calculateBMR()" class="site-btn sb-gradient">Calculate BMR</button>
				<h4 class="ai-text my-3" style="text-align-last: end;">Your BMR: <span id="bmrResult"></span></h4>
			</div>

		</div>

		<div class="singup-form contact-form my-4">

			<h2 class="mb-2">WHR Calculator</h2>
			<div class="row">
				<div class="col">
					<label for="waist">Waist Circumference (cm):</label>
					<input type="number" id="waist" name="waist">
				</div>
				<div class="col">
					<label for="hip">Hip Circumference (cm):</label>
					<input type="number" id="hip" name="hip">
				</div>
			</div>
			<div>
				<button onclick="calculateWHR()" class="site-btn sb-gradient">Calculate WHR</button>
				<h4 class="ai-text my-3" style=" text-align-last: end;">Your WHR: <span id="whrResult"></span></h4>
			</div>


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

		var height = parseFloat(document.getElementById('height1').value);

		var weight = parseFloat(document.getElementById('weight1').value);

		var bmr = 0;

		if (!isNaN(age) && !isNaN(height) && !isNaN(weight)) {
			if (gender === 'male') {
				bmr = 88.362 + (13.397 * weight) + (4.799 * height) - (5.677 * age);
			} else if (gender === 'female') {
				bmr = 447.593 + (9.247 * weight) + (3.098 * height) - (4.330 * age);
			}

			document.getElementById('bmrResult').textContent = bmr.toFixed(2);
		} else {
			alert('Please enter valid values for Age, Height, and Weight.');
		}
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