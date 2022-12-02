<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$recipe_title = sanitize_value($_POST['recipe_title']);
$image_path_small = sanitize_value($_POST['image_path_small']);
$image_path_large = sanitize_value($_POST['image_path_large']);
$description = sanitize_value($_POST['description']);
$ingredients = sanitize_value($_POST['ingredients']);
$steps = sanitize_value($_POST['steps']);
$id = sanitize_value($_POST['id']);

// Create a SQL statement to insert the data into the database
$query = "UPDATE recipes SET recipe_title = '{$recipe_title}', image_path_small = '{$image_path_small}', image_path_large = '{$image_path_large}', description = '{$description}', ingredients = '{$ingredients}', steps = '{$steps}' WHERE id = {$id}";

// Run the SQL statement
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes');
} else {
    $error_message = 'recipe was not updated';
    redirect_to('/admin/recipes?error=' . $error_message);
}