<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $budget = $_POST['budget'];
    $primaryUse = $_POST['primary_use'];
    $fuelType = $_POST['fuel_type'];
    $safetyImportance = $_POST['safety_importance'];
    $carType = $_POST['car_type'];

    // Process the data
    // This is where you would typically interact with a database
    // For demonstration, we'll just echo the responses

    echo "Thank you for completing the questionnaire!<br>";
    echo "Budget: " . htmlspecialchars($budget) . "<br>";
    echo "Primary Use: " . htmlspecialchars($primaryUse) . "<br>";
    echo "Fuel Type: " . htmlspecialchars($fuelType) . "<br>";
    echo "Safety Importance: " . htmlspecialchars($safetyImportance) . "<br>";
    echo "Car Type: " . htmlspecialchars($carType) . "<br>";

    // Here you can add logic to suggest cars based on the responses
    // For example, query a database to find matching cars
}
?>