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
                <div class='box-image-text'>
                    <h4 class='text-center'>{$recipe['recipe_title']}</h4>
                </div>
                </a>
            </div>
        ";
    }
?>