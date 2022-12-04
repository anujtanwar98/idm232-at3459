<?php
include_once __DIR__ . '/app.php';
$page_title = 'All Recipes';
include_once __DIR__ . '/_components/header.php';
?>

<?php include_once __DIR__ . '/_components/navbar.php'; 
$recipes = get_recipes();
?>
<?php
    // get recipes data from database
    $query = 'SELECT * FROM recipes';
    $result = mysqli_query($db_connection, $query);
?>
<main class="main">
  <?php $title = 'All Recipes';?>
  <h1 class="text-center text-white"><?php echo $title; ?></h1>
<!-- <button class="btn btn-primary">
  <a class="text-white" href="<?php echo site_url(); ?>/admin/recipes/create.php" style="text-decoration: none;">Add Recipe</a>
</button> -->
  <div id="main-my-box">
        <?php include __DIR__ . '/_components/recipesCard.php'; ?>

        
<!-- reference to do for cards -->
    <!-- <div class="small-box-recipes">
      <a class="box-recipes-link" href="./mediterranean-chickpea-salad.php"> -->
      <!-- <div class="box-image-text"> -->
        <!-- <img src="./dist/images/1.jpg" class="my-images" alt="...">
        <h4 class="text-center">Mediterranean Chickpea Salad</h4> -->
      <!-- </div> -->
      <!-- </a>
    </div> -->
</div>
</main>

<?php include_once __DIR__ . '/_components/footer.php'; ?>