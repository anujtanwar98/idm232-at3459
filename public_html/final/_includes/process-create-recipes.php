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

$result = add_recipe(
    $recipe_title,
    $image_path_small,
    $image_path_large,
    $description,
    $ingredients,
    $steps
);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes');
} else {
    $error_message = 'Sorry there was an error creating the recipe';
    redirect_to('/admin/recipes?error=' . $error_message);
}