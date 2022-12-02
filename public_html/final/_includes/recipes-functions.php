<?php

/**
 * get all recipes from the database
 * @return object - mysqli_result
 */
function get_recipes()
{
    global $db_connection;
    $query = 'SELECT * FROM recipes';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

/**
 * Insert a recipe into the database
 * @param  string $recipe_title - title of the recipe
 * @param  string $image_path_small - small image of the recipe
 * @param  string $image_path_large - large image of the recipe
 * @param  string $description - description of the recipe
 * @param  string $ingredients - ingredients of the recipe
 * @param  string $steps - steps of the recipe
 * @return object - mysqli_result
 */
function add_recipe($recipe_title, $image_path_small, $image_path_large, $description, $ingredients, $steps)
{
    global $db_connection;
    $query = 'INSERT INTO recipes';
    $query .= ' (recipe_title, image_path_small, image_path_large, description, ingredients, steps)';
    $query .= " VALUES ('$recipe_title', '$image_path_small', '$image_path_large', '$description', '$ingredients', '$steps')";

    $result = mysqli_query($db_connection, $query);
    return $result;
}