<nav class="navbar navbar-expand-lg bg-light navbar navbar-dark bg-dark shadow-lg">
  <div class="container-fluid">
    <a class="navbar-brand link-primary bg-black p-2 shadow rounded" href="<?php echo site_url(); ?>/index.php">UXID Quick Recipes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url(); ?>/index.php">All Recipes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url(); ?>./admin/recipes/index.php">Admin</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Quick Veg Recipes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">No Cooking</a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Quick Veg Recipes</a>
        </li> -->
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>