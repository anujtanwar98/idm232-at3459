<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Home';
include_once __DIR__ . '/../_components/header.php';
?>
<?php include_once __DIR__ . '/../_components/navbar.php'; ?>

<!-- <main class="main">
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
</main> -->

<?php include_once __DIR__ . '/../_components/footer.php'; ?>