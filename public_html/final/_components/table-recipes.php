<?php
if (!isset($recipes)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>
<table class="table text-white">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Ingredients</th>
      <th scope="col">Steps</th>
      <th scope="col">
        <span class="sr-only">Edit</span>
      </th>
    </tr>
  </thead>

<!-- <table class="min-w-full divide-y divide-gray-300">
  <thead class="bg-gray-50">
    <tr>
      <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">ID</th>
      <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Title</th>
      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Ingredients</th>
      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Steps</th>
      <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
        <span class="sr-only">Edit</span>
      </th>
    </tr>
  </thead> -->
  <tbody>
    <?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($recipes)) {
        echo "
          <tr>
            <td>{$recipe['id']}</td>
            <td>{$recipe['recipe_title']}</td>
            <td>{$recipe['ingredients']}</td>
            <td>{$recipe['steps']}</td>
            <td>
              <a href='{$site_url}/admin/recipes/edit.php?id={$recipe['id']}'>Edit</a>
              <a href='{$site_url}/admin/recipes/delete.php?id={$recipe['id']}'>Delete</a>
            </td>
          </tr>";
    }
    ?>
  </tbody>
</table>