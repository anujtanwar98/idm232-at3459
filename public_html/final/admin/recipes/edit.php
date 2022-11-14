<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Home';
include_once __DIR__ . '/../../_components/header.php';
?>
<?php include_once __DIR__ . '/../../_components/navbar.php'; ?>

<div>
    <?php $title = 'Edit Recipes';?>
    <h1 class="text-center text-dark"><?php echo $title; ?></h1>
</div>


<?php
// get recipes data from database
$query = "SELECT * FROM recipes WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $recipe variable;
    $recipe = mysqli_fetch_assoc($result);
} else {
    $error_message = 'Recipe does not exist';
    // redirect_to('/admin/recipes?error=' . $error_message);
}

?>

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900">Edit Recipe</h1>
      </div>
    </div>
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <form action="<?php echo site_url(); ?>/_includes/process-edit-recipes.php" method="POST">
              <div class="block">
                <label for="">Recipe Title</label>
                <input class="border-black border-2" type="text" name="recipe_title"
                  value="<?php echo $recipe['recipe_title']?>">
              </div>
              <div class=" block">
                <label for="">Ingredients</label>
                <input class="border-black border-2" type="text" name="ingredients" value="<?php echo $recipe['ingredients']?>">
              </div>
              <div class=" block">
                <label for="">Steps</label>
                <input class="border-black border-2" type="text" name="steps" value="<?php echo $recipe['steps']?>">
              </div>
              <input class=" nline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4
                  py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2
                  focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto" type="submit" value="Update Recipe">

              <input type="hidden" name="id" value="">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include_once __DIR__ . '/../../_components/footer.php';