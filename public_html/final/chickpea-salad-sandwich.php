<?php
    include_once __DIR__ . '/app.php';
    $page_title = 'Chickpea Salad Sandwich';
    include_once __DIR__ . '/_components/header.php';
    ?>
    <?php include_once __DIR__ . '/_components/navbar.php'; ?>
    <main class="main">
        <div class="container text-white">
            <?php $title = 'Chickpea Salad Sandwich';?>
            <h1 class="text-center"><?php echo $title; ?></h1>
            <div class="recipe-detail-image">
                <img src="./dist/images/2-ex.jpg" class="detail-page-image-1" alt="...">
            </div>
            <div class="recipe-detail-ingredients">
                <h3>Ingredients</h3>
                <h4 class="fst-italic">For the vinaigrette</h4>
                <ul>
                    <li>1 (15-ounce) can chickpeas, rinsed and drained</li>
                    <li>2 ribs celery, diced</li>
                    <li>2 tablespoons capers, rinsed and drained</li>
                    <li>3 tablespoons mayonnaise</li>
                    <li>2 tablespoons lemon juice</li>
                    <li>1/2 teaspoon Dijon mustard</li>
                    <li>1/8 teaspoon salt</li>
                    <li>2 pinches black pepper</li>
                    <li>4 slices sandwich bread</li>
                    <li>1/2 avocado</li>
                    <li>2 tablespoons roasted almonds, coarsely chopped</li>
                    <li>2 to 4 tomato slices</li>
                    <li>Handful watercress or other greens, such as lettuce, arugula, or spinach</li>
                </ul>
            </div>
            <div class="recipe-detail-steps">
                <h3>Steps</h3>
                <h4 class="fst-italic">Mash the chickpeas:</h4>
                <p>In a medium bowl with a potato masher, coarsely mash the chickpeas.</p>
                <h4 class="fst-italic">Make the filling:</h4>
                <p>Add the celery, capers, mayonnaise, lemon juice, and mustard to the bowl. Taste and add a pinch each of salt and pepper.</p>
                <h4 class="fst-italic">Assemble the sandwiches:</h4>
                <p>Set 2 pieces of sandwich bread on a cutting board. On one slice of bread, mash 1/4 avocado. Sprinkle lightly with salt and pepper. Top with a spoonful of the chickpea salad and sprinkle with 1 tablespoon of the almonds. Add a tomato slice or two, greens of your choice, and top with the second slice of bread. Repeat to make the second sandwich.</p>
                <h4 class="fst-italic">Enjoy:</h4>
                <p>Slice the sandwich in half or leave it whole and serve with chips or a side salad.</p>
            </div>
        </div>
    </main>
<?php include_once __DIR__ . '/_components/footer.php';