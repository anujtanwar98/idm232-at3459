<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Home';
include_once __DIR__ . '/../../_components/header.php';
?>
<?php include_once __DIR__ . '/../../_components/navbar.php'; ?>

<main class="main">
    <div>
        <?php $title = 'Admin';?>
        <h1 class="text-center text-white"><?php echo $title; ?></h1>
    </div>
    <div>
    <button class="btn btn-primary">
        <a class="text-white" href="<?php echo site_url(); ?>/admin/recipes/create.php" style="text-decoration: none;">Create Recipe</a>
    </button>
    <button class="btn btn-primary">
        <a class="text-white" href="<?php echo site_url(); ?>/admin/recipes/edit.php" style="text-decoration: none;">Edit Recipe</a>
    </button>
    <button class="btn btn-primary">
        <a class="text-white" href="<?php echo site_url(); ?>/admin/recipes/delete.php" style="text-decoration: none;">Delete Recipe</a>
    </button>
    </div>
</main>

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900">recipes</h1>
        <p class="mt-2 text-sm text-gray-700">A list of all the recipes in your account including their name, title, email
          and role.</p>
        <?php
        // If error query param exist, show error message
          if (isset($_GET['error'])) {
              echo '<p class="text-red-500">' . $_GET['error'] . '</p>';
          }

?>
      </div>
      <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
        <button type="button"
          class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
          <a href="<?php echo site_url() . '/admin/recipes/create.php' ?>">
            Add Recipe</a></button>
      </div>
    </div>
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <?php include __DIR__ . '/../../_components/table-recipes.php'; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include_once __DIR__ . '/../../_components/footer.php';