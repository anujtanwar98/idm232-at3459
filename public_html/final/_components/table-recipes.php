<?php
if (!isset($recipes)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>
<div class="my-table">
  <table class="table text-white">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Small Image</th>
        <th scope="col">Big Image</th>
        <!-- <th scope="col">Ingredients</th>
        <th scope="col">Steps</th> -->
        <th scope="col">
          <span class="sr-only">Edit</span>
        </th>
        <th scope="col">View recipes</th>
      </tr>
    </thead>

    <!--  this is for ref -->
    <!-- <td>{$recipe['ingredients']}</td>
    <td>{$recipe['steps']}</td> -->
    
    <tbody>
      <?php
      // Cant combine functions with string so we have to assign the function to a variable here.
      $site_url = site_url();
      while ($recipe = mysqli_fetch_array($recipes)) {
          echo "
            <tr>
              <td>{$recipe['id']}</td>
              <td>{$recipe['recipe_title']}</td>
              <td><img src='{$site_url}{$recipe['image_path_small']}' alt=''></td>
              <td><img src='{$site_url}{$recipe['image_path_large']}' alt=''></td>
              
              <td>
                <a class='text-white' href='{$site_url}/admin/recipes/edit.php?id={$recipe['id']}' style='text-decoration: none;'>
                  <button class='btn btn-primary'>Edit</button>
                </a>     
                <a class='text-white' href='{$site_url}/admin/recipes/delete.php?id={$recipe['id']}' style='text-decoration: none;'>
                  <button class='btn btn-danger'>Delete</button>
                </a>
              </td>
              <td>
                <a class='text-white' href='{$site_url}/recipes-show.php?id={$recipe['id']}' style='text-decoration: none;'>
                  <button class='btn btn-primary'>View</button>
                </a>
              </td>
            </tr>";
      }
      ?>
    </tbody>
  </table>
</div>