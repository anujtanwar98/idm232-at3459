<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$recipe_title_value = $_POST['recipe_title'];
$ingredients_value = $_POST['ingredients'];
$steps_value = $_POST['steps'];
$id_value = $_POST['id'];

// Create a SQL statement to insert the data into the database
$query = "UPDATE users SET recipe_title = '{$recipe_title_value}', ingredients = '{$ingredients_value}', steps = '{$steps_value}' WHERE id = {$id_value}";

// Run the SQL statement
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/users');
} else {
    $error_message = 'User was not updated';
    redirect_to('/admin/users?error=' . $error_message);
}