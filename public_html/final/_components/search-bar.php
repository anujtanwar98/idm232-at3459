<?php
$search_value = '';
// If Search exist, make that the search value
if (isset($_GET['search'])) {
    $search_value = $_GET['search'];
}
?>
<form class="d-flex" action="<?php echo site_url(); ?>/admin/search" method="GET" class="block">
  <input placeholder="Search Recipes" class="form-control me-2" type="text" name="search" value="<?php echo $search_value; ?>">
  <input class="btn btn-primary" type="submit" value="Search">
</form>