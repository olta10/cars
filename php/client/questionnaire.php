<?php include_once('header.php');?>
<body>
    <form action="../server/submit_questionnaire.php" method="post">
        <h2>Car Preference Questionnaire</h2>

        <!-- Budget -->
        <label for="budget">Budget for a new car:</label>
        <input type="number" id="budget" name="budget" min="5000" max="100000" step="1000"><br><br>

        <!-- Primary Use -->
        <label for="primary_use">Primary use of the car:</label>
        <select id="primary_use" name="primary_use">
            <option value="commuting">Commuting</option>
            <option value="family">Family</option>
            <option value="offroading">Off-roading</option><div class="container mt-5">
        <h2 class="mb-4">Car Preference Questionnaire</h2>
        <form action="submit_questionnaire.php" method="post" class="needs-validation" novalidate>

            <!-- Budget -->
            <div class="form-group">
                <label for="budget">Budget for a new car:</label>
                <input type="number" class="form-control" id="budget" name="budget" min="5000" max="100000" step="1000" required>
                <div class="invalid-feedback">Please enter a valid budget.</div>
            </div>

            <!-- Primary Use -->
            <div class="form-group">
                <label for="primary_use">Primary use of the car:</label>
                <select class="form-control" id="primary_use" name="primary_use">
                    <option value="commuting">Commuting</option>
                    <option value="family">Family</option>
                    <option value="offroading">Off-roading</option>
                    <option value="sports">Sports</option>
                    <option value="luxury">Luxury</option>
                </select>
            </div>

            <!-- Fuel Type -->
            <div class="form-group">
                <label>Preferred fuel type:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="electric" name="fuel_type" value="electric">
                    <label class="form-check-label" for="electric">Electric</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="hybrid" name="fuel_type" value="hybrid">
                    <label class="form-check-label" for="hybrid">Hybrid</label>
                </div>
            </div>

            <!-- Safety Importance -->
            <div class="form-group">
                <label for="safety_importance">Importance of car safety (1=Low, 5=High):</label>
                <input type="range" class="custom-range" id="safety_importance" name="safety_importance" min="1" max="5">
            </div>

            <!-- Car Type -->
            <div class="form-group">
                <label>Car type preference:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="new" name="car_type" value="new" required>
                    <label class="form-check-label" for="new">New</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="used" name="car_type" value="used">
                    <label class="form-check-label" for="used">Used</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
            <option value="sports">Sports</option>
            <option value="luxury">Luxury</option>
        </select><br><br>

        <!-- Fuel Type -->
        <label>Preferred fuel type:</label>
        <input type="radio" id="petrol" name="fuel_type" value="petrol">
        <label for="petrol">Petrol</label>
        <input type="radio" id="diesel" name="fuel_type" value="diesel">
        <label for="diesel">Diesel</label>
        <input type="radio" id="electric" name="fuel_type" value="electric">
        <label for="electric">Electric</label>
        <input type="radio" id="hybrid" name="fuel_type" value="hybrid">
        <label for="hybrid">Hybrid</label><br><br>

        <!-- Safety Importance -->
        <label for="safety_importance">Importance of car safety (1=Low, 5=High):</label>
        <input type="range" id="safety_importance" name="safety_importance" min="1" max="5"><br><br>

        <!-- Car Type -->
        <label>Car type preference:</label>
        <input type="radio" id="new" name="car_type" value="new">
        <label for="new">New</label>
        <input type="radio" id="used" name="car_type" value="used">
        <label for="used">Used</label><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php include_once('footer.php');?>