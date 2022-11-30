<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Services';
include_once __DIR__ . '/../../_components/header.php';
include_once __DIR__ . '/../../_components/navbar.php';
$recipes = get_recipes();

// Check if search exist in query
if (isset($_GET['search'])) {
    $search = $_GET['search'];
} else {
    $search = '';
}

$query = 'SELECT *';
$query .= ' FROM recipes';
$query .= " WHERE recipe_title LIKE '%{$search}%'";
$query .= " OR ingredients LIKE '%{$search}%'";
$query .= " OR steps LIKE '%{$search}%'";
$results = mysqli_query($db_connection, $query);

// Check if was have more than 0 results from db
if ($results->num_rows > 0) {
    $recipes_results = true;
} else {
    $recipes_results = false;
}

?>
<main class="main">
<div>
  <div>
    <!-- <?php include __DIR__ . '/../../_components/navigation-admin.php'; ?> -->
    <div>
      <div>
        <h1 class="text-white text-center">Search Results</h1>
        <h2 class="text-white text-center">You searched for "<?php echo $search; ?>"</h2>
        <?php
        // If no results, echo no results
        if (!$recipes_results) {
            echo '<p>No results found</p>';
        }
?>
        <?php
// If error query param exist, show error message
  if (isset($_GET['error'])) {
      echo '<p>' . $_GET['error'] . '</p>';
  }?>
      </div>
    </div>

    <?php
    // If we have results, show them
      if ($recipes_results) {
          while ($recipes_results = mysqli_fetch_assoc($results)) {
             echo '<div id="main-my-box">';
              echo 
              
              
              '<div class="small-box-recipes">' 
              
              

              . '<a class="box-recipes-link" href="' . site_url() . '/recipes-show.php?id=' . $recipes_results['id'] . '">'
              
              . '<div class="box-image-text">'

              . '<img src="' . site_url() . $recipes_results['image_path_small'] . '" class="my-images" alt="...">'

              . '<h4 class="text-center">' . $recipes_results['recipe_title'] . 
              
              '</h4>' . 

              '</div>' .

              '</a>' .
              
              '</div>';
              // echo '<h2>' . $recipes_results['recipe_title'] . ' ' . $recipes_results['ingredients'] . ' ' . $recipes_results['steps'] . '</h2>';
              echo '</div>';
          }
      }
?>

  </div>
</div>
</main>

<?php include_once __DIR__ . '/../../_components/footer.php';
?>