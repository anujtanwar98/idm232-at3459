<?php
    include_once __DIR__ . '/app.php';
    $page_title = 'Sesame Peanut Noodles';
    include_once __DIR__ . '/_components/header.php';
    ?>
    <?php include_once __DIR__ . '/_components/navbar.php'; ?>
    <main class="main">
        <div class="container text-white">
            <?php $title = 'Sesame Peanut Noodles';?>
            <h1 class="text-center"><?php echo $title; ?></h1>
            <div class="recipe-detail-image">
                <img src="./dist/images/4-ex.jpg" class="detail-page-image-1" alt="...">
            </div>
            <div class="recipe-detail-ingredients">
                <h3>Ingredients</h3>
                <h4 class="fst-italic">For the vinaigrette</h4>
                <ul>
                    <li>8 ounces dry soba, rice, or egg noodles</li>
                    <li>2 tablespoons toasted sesame oil, divided</li>
                    <li>3 tablespoons natural peanut butter</li>
                    <li>1/4 cup soy sauce</li>
                    <li>1 1/2 tablespoons honey</li>
                    <li>1 1/2 tablespoons rice vinegar</li>
                    <li>1 clove garlic, grated</li>
                    <li>1 tablespoon toasted sesame seeds, for garnish (optional)</li>
                    <li>1 green onion, sliced, for garnish (optional)</li>
                </ul>
            </div>
            <div class="recipe-detail-steps">
                <h3>Steps</h3>
                <h4 class="fst-italic">Cook the noodles:</h4>
                <p>Bring a large pot of water to a boil over high heat. Add the noodles and cook following package instructions. Drain into a colander set in the sink, then rinse with cold running water until cool to the touch. Drain well. Transfer into a medium bowl and toss them with 1 tablespoon sesame oil so that they don't stick to each other. Cover with plastic wrap and place them in the fridge to keep cool while you prepare the sauce.</p>
                <h4 class="fst-italic">Prepare the sauce:</h4>
                <p>In a small bowl, add the remaining 1 tablespoon sesame oil, peanut butter, soy sauce, honey, rice vinegar, and garlic. Whisk with a fork until combined and smooth.</p>
                <h4 class="fst-italic">Assemble the noodles:</h4>
                <p>Scrape the peanut sesame sauce on the cold noodles and toss to combine. Garnish with sesame seeds and green onions, if desired. Leftovers can be stored in an airtight container in the fridge for up to 3 days. Before serving them again, toss with a little warm water to thin out the sauce.</p>
            </div>
        </div>
    </main>
<?php include_once __DIR__ . '/_components/footer.php';