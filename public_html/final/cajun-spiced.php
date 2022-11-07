<?php
    include_once __DIR__ . '/app.php';
    $page_title = 'Cajun-Spiced Grilled Corn';
    include_once __DIR__ . '/_components/header.php';
    ?>
    <?php include_once __DIR__ . '/_components/navbar.php'; ?>
    <main class="main">
        <div class="container text-white">
            <?php $title = 'Cajun-Spiced Grilled Corn';?>
            <h1 class="text-center"><?php echo $title; ?></h1>
            <div class="recipe-detail-image">
                <img src="./dist/images/3-ex.jpg" class="detail-page-image-1" alt="...">
            </div>
            <div class="recipe-detail-ingredients">
                <h3>Ingredients</h3>
                <!-- <h4 class="fst-italic">For the vinaigrette</h4> -->
                <ul>
                    <li>8 tablespoons (1 stick) salted butter</li>
                    <li>8 ears fresh corn, husks removed</li>
                    <li>1 tablespoon Cajun seasoning, homemade or store-bought</li>
                </ul>
                <h4 class="fst-italic">For Garnish</h4>
                <ul>
                    <li>1/4 cup Cotija cheese</li>
                    <li>1/4 cup finely chopped cilantro</li>
                </ul>
            </div>
            <div class="recipe-detail-steps">
                <h3>Steps</h3>
                <h4 class="fst-italic">Preheat the grill to high, making sure the temperature reaches about 550℉.</h4>
                <h4 class="fst-italic">Meanwhile, melt the butter:</h4>
                <p>Add the butter to a small saucepan over medium heat and watch closely until melted, 1 to 2 minutes. Remove from heat.</p>
                <h4 class="fst-italic">Baste the corn with butter:</h4>
                <p>Lay the corn on a large platter or plate. Set aside 2 tablespoons melted butter, you'll use this later. With a heat-resistant basting brush, brush each piece with the remaining butter.</p>
                <h4 class="fst-italic">Season the corn:</h4>
                <p>Sprinkle the Cajun seasoning evenly on the corn.</p>
                <h4 class="fst-italic">Grill the corn:</h4>
                <p>Using tongs, place each ear directly on the grill grate. Cook the corn for 10 to 15 minutes, turning them every 2 to 3 minutes, making sure each side is evenly charred. Baste corn with butter while it cooks. The corn is fully cooked when the kernels are tender when gently pressing them with the tongs.</p>
                <h4 class="fst-italic">Baste the corn with more butter, garnish, and serve:</h4>
                <p>Remove the cooked corn from the grill and place on a serving platter. Brush the remaining butter on the corn using the basting brush. Garnish with the Cotija cheese and cilantro and serve immediately.</p>
            </div>
        </div>
    </main>
<?php include_once __DIR__ . '/_components/footer.php';