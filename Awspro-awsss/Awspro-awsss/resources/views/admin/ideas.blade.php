<link rel="stylesheet" href="{{ asset('css/ideas.css') }}">

<body>
	<h1>Business Idea Registration Form</h1>
 	<form method="post" action="/createIdeas">
    @csrf

		<label for="industry_type">Industry Type:</label>
		<select id="industry_type" name="industry_type" required>
			<option value="Technology">Technology</option>
			<option value="Retail">Retail</option>
			<option value="Finance">Finance</option>
			<option value="Healthcare">Healthcare</option>
		</select><br><br>

		<label for="product_type">Product Type:</label>
		<select id="product_type" name="product_type" required>
			<option value="Software">Software</option>
			<option value="Hardware">Hardware</option>
			<option value="Consumer Goods">Consumer Goods</option>
			<option value="Service">Service</option>
		</select><br><br>

		<label for="">Business type:</label>
		<select id="Business_type" name="business_type" required>

			<option value="brand">brand</option>
			<option value="dropshiping">dropshiping</option>
			<option value="print_on_demand">print on demand</option>
            <option value="not_decided">not decided</option>
		</select><br><br>

        <label for="estimated_budget">Estimated Budget:</label>
		<select id="estimated_budget" name="estimated_budget" required>
			<option disabled>Select your estimated budget</option>
			<option value="Less than $10,000">$10,000 or less</option>
			<option value="$10,000 - $50,000">$10,000 - $50,000</option>
			<option value="$50,000 - $100,000">$50,000 - $100,000</option>
			<option value="Over $100,000">Over $100,000</option>
		</select><br><br>

		<label for="country"country>Location</label>
		<select id="country" name="location" required>
			<option disabled>Select your location</option>
			<option value="New York- USA">New York- USA</option>
			<option value="London - UK">London - UK</option>
			<option value="Berlin - GERMANY">Berlin - GERMANY</option>
		</select><br><br>
        <label for="additional_details">Additional Comments or Details:</label><br>
		<textarea id="additional_details" name="additional_details" rows="5" cols="50"></textarea><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
