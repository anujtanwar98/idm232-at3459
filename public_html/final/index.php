<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
?>

<?php include_once __DIR__ . '/_components/navbar.php';
?>
<main class="main">
  <?php $title = 'Home';?>
  <h1 class="text-center text-white"><?php echo $title; ?></h1>      
    <div class="container py-4">
      <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold">Welcome to UXID Quick Recipes</h1>
          <p class="col-md-8 fs-4">This website is a collection of recipes that are easy to make and quick to prepare. It allows users to search for recipes by name, ingredients. This website also allows users to add, edit and delete recipes.</p>
          <a class="text-white text-center" href="<?php echo site_url(); ?>/allrecipes.php" style="text-decoration: none;">
            <button class="btn btn-lg btn-primary">Check All Recipes</button>
          </a>
        </div>
      </div>

      <div class="row align-items-md-stretch">
        <div class="col-md-6">
          <div class="h-100 p-5 text-white bg-dark rounded-3">
            <h2>Create Recipe</h2>
            <p>You can create your own recipes and share on the website. You can also edit and delete your recipes.</p>
            <a class="text-white text-center" href="<?php echo site_url(); ?>/admin/recipes/create.php" style="text-decoration: none;">
              <button class="btn btn-lg btn-primary">Create Recipe</button>
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="h-100 p-5 bg-light border rounded-3">
            <h2>Admin Page</h2>
            <p>You can also access the admin page to view all recipes, edit and delete recipes.</p>
            <a class="text-white text-center" href="<?php echo site_url(); ?>/admin/recipes/index.php" style="text-decoration: none;">
              <button class="btn btn-lg btn-primary">Admin</button>
            </a>
          </div>
        </div>
      </div>
    </div>    
</main>

<?php include_once __DIR__ . '/_components/footer.php'; ?>