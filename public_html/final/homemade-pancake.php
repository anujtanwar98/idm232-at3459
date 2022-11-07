<?php
    include_once __DIR__ . '/app.php';
    $page_title = 'Homemade Pancake';
    include_once __DIR__ . '/_components/header.php';
    ?>
    <?php include_once __DIR__ . '/_components/navbar.php'; ?>
    <main class="main">
        <div class="container text-white">
            <?php $title = 'Homemade Pancake';?>
            <h1 class="text-center"><?php echo $title; ?></h1>
            <div class="recipe-detail-image">
                <img src="./dist/images/8-ex.jpg" class="detail-page-image-1" alt="...">
            </div>
            <div class="recipe-detail-ingredients">
                <h3>Ingredients</h3>
                <h4 class="fst-italic">For the pancake mix (makes 7 cups):</h4>
                <ul>
                    <li>6 cups (940 g) all-purpose flour</li>
                    <li>1/3 cup (77 g) granulated sugar</li>
                    <li>3 tablespoons baking powder</li>
                    <li>2 teaspoons baking soda</li>
                    <li>2 teaspoons kosher salt</li>
                </ul>
                <h4 class="fst-italic">To make the pancakes (makes 6 pancakes):</h4>
                <ul>
                    <li>1 cup pancake mix</li>
                    <li>3/4 cup milk, or 1 cup buttermilk</li>
                    <li>1 large egg</li>
                    <li>1 teaspoon vanilla extract</li>
                    <li>1 tablespoon melted butter, plus more for the pan</li>
                </ul>
            </div>
            <div class="recipe-detail-steps">
                <h3>Steps</h3>
                <h4 class="fst-italic">Make the mix:</h4>
                <p>In a large bowl, combine flour, sugar, baking powder, baking soda, and salt. Whisk together. Transfer mix to an airtight container. Write "batter recipe" on a note card, and tape it to the canister. Store for up to 6 months.</p>
                <h4 class="fst-italic">To make the pancakes:</h4>
                <p>Put 1 cup of mix into a medium mixing bowl. In a separate small mixing bowl, combine milk, egg, and vanilla extract. Beat the egg with a fork or whisk until it's well incorporated with the milk and extract. Continue whisking the milk while you pour in the melted butter. Pour the egg mixture into the bowl with the pancake mix. Use a spatula to stir to combine. Don't worry about getting all the lumps out.</p>
                <h4 class="fst-italic">Cook the pancakes:</h4>
                <p>Set a large skillet or griddle over medium heat. Once it's hot enough for a few droplets of water to dance on the top, add a tablespoon of butter. Once the butter melts, pour 1/3 cup of pancake batter onto the skillet to form a pancake. Repeat until the pan is filled, but not too crowded. Once bubbles form on the top and the edges of the pancake look slightly drier than the middle, flip the pancake. You should cook the pancake for about 3 minutes on the first side and 1 to 2 minutes after flipping. The pancakes should be lightly golden on both sides, with crispy edges.</p>
                <h4 class="fst-italic">Serve:</h4>
                <p>Serve with maple syrup or powdered sugar and fruit. If feeding a crowd, keep warm on a plate in a low oven until ready to serve.</p>
            </div>
        </div>
    </main>
<?php include_once __DIR__ . '/_components/footer.php';