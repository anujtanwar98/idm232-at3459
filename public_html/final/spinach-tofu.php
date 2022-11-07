<?php
    include_once __DIR__ . '/app.php';
    $page_title = 'Spinach Tofu Scramble';
    include_once __DIR__ . '/_components/header.php';
    ?>
    <?php include_once __DIR__ . '/_components/navbar.php'; ?>
    <main class="main">
        <div class="container text-white">
            <?php $title = 'Spinach Tofu Scramble';?>
            <h1 class="text-center"><?php echo $title; ?></h1>
            <div class="recipe-detail-image">
                <img src="./dist/images/6-ex.jpg" class="detail-page-image-1" alt="...">
            </div>
            <div class="recipe-detail-ingredients">
                <h3>Ingredients</h3>
                <h4 class="fst-italic">For the vinaigrette</h4>
                <ul>
                    <li>1 tablespoon extra virgin olive oil</li>
                    <li>1/2 (about 1/2 cup) yellow onion, diced</li>
                    <li>1 pound firm or extra firm tofu packed in water, drained well</li>
                    <li>1 teaspoon nutritional yeast</li>
                    <li>1/2 teaspoon kosher salt, plus more to taste</li>
                    <li>1/4 teaspoon freshly ground black pepper, plus more to taste</li>
                    <li>1/4 teaspoon ground turmeric</li>
                    <li>4 cups loosely packed fresh spinach leaves</li>
                    <li>1/4 teaspoon lemon juice</li>
                </ul>
            </div>
            <div class="recipe-detail-steps">
                <h3>Steps</h3>
                <h4 class="fst-italic">Cook the onion:</h4>
                <p>Heat a medium skillet over medium-high heat. Add oil; when it ripples, add the onion. Cook, stirring occasionally, until the onion is soft, 3 to 5 minutes.</p>
                <h4 class="fst-italic">Add the tofu and seasonings:</h4>
                <p>Use your fingers to crumble the drained tofu into bite-sized pieces. You can do this directly over the skillet. Add the nutritional yeast, salt, pepper, and turmeric, and stir to combine. Cook, stirring occasionally, until the tofu is hot, about 3 minutes. You're not aiming to brown the tofu here, but if that happens a little, it's not an issue.</p>
                <h4 class="fst-italic">Add the spinach, wilt, and finish with lemon juice:</h4>
                <p>Add the spinach and cook until wilted, 1 minute. Sprinkle the lemon juice over the scramble. Taste and adjust the seasoning with salt and pepper, if needed. Leftover tofu scramble will keep in a tightly covered container up to four days. I don't recommend freezing it.</p>
            </div>
        </div>
    </main>
<?php include_once __DIR__ . '/_components/footer.php';