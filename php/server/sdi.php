<?php
include 'config.php'; // Include your database configuration file

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Prepare an INSERT statement
        $stmt = $conn->prepare("INSERT INTO questionnaire_responses (budget, primary_use, fuel_type, safety_importance, car_type) VALUES (:budget, :primary_use, :fuel_type, :safety_importance, :car_type)");

        // Bind parameters  
        $stmt->bindParam(':budget', $budget);
        $stmt->bindParam(':primary_use', $primaryUse);
        $stmt->bindParam(':fuel_type', $fuelType);
        $stmt->bindParam(':safety_importance', $safetyImportance);
        $stmt->bindParam(':car_type', $carType);

        // Assign values from the form to variables
        $budget = $_POST['budget'];
        $primaryUse = $_POST['primary_use'];
        $fuelType = $_POST['fuel_type'];
        $safetyImportance = $_POST['safety_importance'];
        $carType = $_POST['car_type'];

        // Execute the statement
        $stmt->execute();

        echo "Responses recorded successfully.";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>