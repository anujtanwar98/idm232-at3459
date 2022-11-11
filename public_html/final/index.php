<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
?>

<?php include_once __DIR__ . '/_components/navbar.php'; ?>
<main class="main">
  <?php $title = 'All Recipes';?>
  <h1 class="text-center text-white"><?php echo $title; ?></h1>
<button class="btn btn-primary">
  <a class="text-white" href="<?php echo site_url(); ?>/admin/recipes/add.php" style="text-decoration: none;">Add Recipe</a>
</button>
  <div id="main-my-box">
    <div class="small-box-recipes">
      <a class="box-recipes-link" href="./mediterranean-chickpea-salad.php">
      <!-- <div class="box-image-text"> -->
        <img src="./dist/images/1.jpg" class="my-images" alt="...">
        <h4 class="text-center">Mediterranean Chickpea Salad</h4>
      <!-- </div> -->
      </a>
    </div>
    <div class="small-box-recipes">
      <a class="box-recipes-link" href="./chickpea-salad-sandwich.php">
      <!-- <div class="box-image-text"> -->
        <img src="./dist/images/2.jpg" class="my-images" alt="...">
        <h4 class="text-center">Chickpea Salad Sandwich</h4>
      <!-- </div> -->
      </a>
    </div>
    <div class="small-box-recipes">
      <a class="box-recipes-link" href="./cajun-spiced.php">
      <!-- <div class="box-image-text"> -->
        <img src="./dist/images/3.jpg" class="my-images" alt="...">
        <h4 class="text-center">Cajun-Spiced Grilled Corn</h4>
      <!-- </div> -->
      </a>
    </div>
    <div class="small-box-recipes">
      <a class="box-recipes-link" href="./sesame-noodles.php">
      <!-- <div class="box-image-text"> -->
        <img src="./dist/images/4.jpg" class="my-images" alt="...">
        <h4 class="text-center">Sesame Peanut Noodles</h4>
      <!-- </div> -->
      </a>
    </div>
    <div class="small-box-recipes">
      <a class="box-recipes-link" href="./vegan-caesar-dressing.php">
      <!-- <div class="box-image-text"> -->
        <img src="./dist/images/5.jpg" class="my-images" alt="...">
        <h4 class="text-center">Vegan Caesar Dressing</h4>
      <!-- </div> -->
      </a>
    </div>
    <div class="small-box-recipes">
      <a class="box-recipes-link" href="./spinach-tofu.php">
      <!-- <div class="box-image-text"> -->
        <img src="./dist/images/6.jpg" class="my-images" alt="...">
        <h4 class="text-center">Spinach Tofu Scramble</h4>
      <!-- </div> -->
      </a>
    </div>
    <div class="small-box-recipes">
      <a class="box-recipes-link" href="./homemade-tortilla.php">
      <!-- <div class="box-image-text"> -->
        <img src="./dist/images/7.jpg" class="my-images" alt="...">
        <h4 class="text-center">Homemade Tortilla Chips</h4>
      <!-- </div> -->
      </a>
    </div>
    <div class="small-box-recipes">
      <a class="box-recipes-link" href="./homemade-pancake.php">
      <!-- <div class="box-image-text"> -->
        <img src="./dist/images/8.jpg" class="my-images" alt="...">
        <h4 class="text-center">Homemade Pancake</h4>
      <!-- </div> -->
      </a>
    </div>
</div>
</main>

<?php include_once __DIR__ . '/_components/footer.php';