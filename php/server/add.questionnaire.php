<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $budget = $_POST['budget'];
    $primaryUse = $_POST['primary_use'];
    $fuelType = $_POST['fuel_type'];
    $safetyImportance = $_POST['safety_importance'];
    $carType = $_POST['car_type'];

    // Database connection
    $conn = new mysqli("servername", "username", "password", "dbname");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL query
    $sql = "SELECT * FROM cars WHERE price <= ? AND primary_use = ? AND fuel_type = ? AND safety_rating >= ? AND car_type = ?";

    // Prepare and bind
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issis", $budget, $primaryUse, $fuelType, $safetyImportance, $carType);

    // Execute the query
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch the matching cars
    if ($result->num_rows > 0) {
        echo "Based on your preferences, here are some car suggestions:<br>";
        while($row = $result->fetch_assoc()) {
            echo "Car: " . htmlspecialchars($row["name"]) . "<br>"; // Assuming there's a 'name' column
        }
    } else {
        echo "No cars found matching your criteria.";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>