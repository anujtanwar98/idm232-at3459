<?php
    include_once __DIR__ . '/app.php';
    $page_title = 'Homemade Tortilla Chips';
    include_once __DIR__ . '/_components/header.php';
    ?>
    <?php include_once __DIR__ . '/_components/navbar.php'; ?>
    <main class="main">
        <div class="container text-white">
            <?php $title = 'Homemade Tortilla Chips';?>
            <h1 class="text-center"><?php echo $title; ?></h1>
            <div class="recipe-detail-image">
                <img src="./dist/images/7-ex.jpg" class="detail-page-image-1" alt="...">
            </div>
            <div class="recipe-detail-ingredients">
                <h3>Ingredients</h3>
                <h4 class="fst-italic">For the vinaigrette</h4>
                <ul>
                    <li>About 3/4 to 1 cup extra virgin olive oil, peanut oil, canola oil, or vegetable oil (more or less depending on how many chips you are making)</li>
                    <li>Corn tortillas (each tortilla will make 6 chips)</li>
                    <li>Kosher salt (or other coarse salt), to taste</li>
                </ul>
            </div>
            <div class="recipe-detail-steps">
                <h3>Steps</h3>
                <h4 class="fst-italic">Preheat the oven and cut tortilla chips:</h4>
                <p>Preheat the oven to 350°F. While the oven preheats, cut the tortillas into wedges</p>
                <h4 class="fst-italic">Place on baking sheet:</h4>
                <p>Spread the tortilla wedges out on a baking sheet in a single layer.</p>
                <h4 class="fst-italic">Bake:</h4>
                <p>Bake the tortilla wedges for about 6 minutes, then use tongs to turn the wedges over. Sprinkle with a little salt, and bake for another 6 to 9 minutes, until they are just beginning to color. Remove from the oven and let cool. Sprinkle with more salt to serve.</p>
            </div>
        </div>
    </main>
<?php include_once __DIR__ . '/_components/footer.php';