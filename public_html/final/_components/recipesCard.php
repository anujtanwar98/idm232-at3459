<?php
if (!isset($recipes)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>   
          
<?php
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($recipes)) {
        echo "
        <div id='main-my-box'>
            <div class='small-box-recipes'>
                <a class='box-recipes-link' href='./mediterranean-chickpea-salad.php'>
                <div class='box-image-text'>
                    <h4 class='text-center'>{$recipe['recipe_title']}</h4>
                </div>
                </a>
            </div>
        </div>
        ";
    }
?>