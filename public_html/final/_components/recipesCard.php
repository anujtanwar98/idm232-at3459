<?php
if (!isset($recipes)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>
       
<?php
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($recipes)) {
        echo "
            <div class='small-box-recipes'>
                <a class='box-recipes-link' href='{$site_url}/recipes-show.php?id={$recipe['id']}'>
                    <div class='box-image-text'>
                        <img class='my-images' src='{$site_url}/{$recipe['image_path_small']}'>
                        <h4 class='text-center'>{$recipe['recipe_title']}</h4>
                    </div>
                </a>
            </div>
        ";
    }
?>