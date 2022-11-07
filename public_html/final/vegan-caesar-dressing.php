<?php
    include_once __DIR__ . '/app.php';
    $page_title = 'Vegan Caesar Dressing';
    include_once __DIR__ . '/_components/header.php';
    ?>
    <?php include_once __DIR__ . '/_components/navbar.php'; ?>
    <main class="main">
        <div class="container text-white">
            <?php $title = 'Vegan Caesar Dressing';?>
            <h1 class="text-center"><?php echo $title; ?></h1>
            <div class="recipe-detail-image">
                <img src="./dist/images/5-ex.jpg" class="detail-page-image-1" alt="...">
            </div>
            <div class="recipe-detail-ingredients">
                <h3>Ingredients</h3>
                <h4 class="fst-italic">For the vinaigrette</h4>
                <ul>
                    <li>4 cloves garlic</li>
                    <li>1/2 cup tahini, stirred well</li>
                    <li>1/4 cup fresh lemon juice</li>
                    <li>3 tablespoons nutritional yeast</li>
                    <li>2 tablespoons red wine vinegar or caper brine</li>
                    <li>1 tablespoon extra virgin olive oil</li>
                    <li>2 teaspoons Dijon mustard</li>
                    <li>2 teaspoons soy sauce or vegan Worcestershire sauce</li>
                    <li>1 teaspoon agave or maple syrup</li>
                    <li>1/2 teaspoon kosher salt, plus more to taste</li>
                    <li>1/4 teaspoon freshly ground black pepper, plus more to taste</li>
                    <li>1/4 cup warm water, divided, plus more as needed</li>
                </ul>
            </div>
            <div class="recipe-detail-steps">
                <h3>Steps</h3>
                <h4 class="fst-italic">Combine the ingredients:</h4>
                <p>In a blender, add the garlic, tahini, lemon juice, nutritional yeast, vinegar or brine, olive oil, mustard, soy sauce or Worcestershire, agave or maple syrup, salt, black pepper, and 2 tablespoons warm water.</p>
                <h4 class="fst-italic">Blend:</h4>
                <p>Secure the lid on and blend on medium-high speed until very smooth, about 2 minutes. Drizzle in the remaining 2 tablespoons warm water while blending, adding up to 2 additional tablespoons as needed to reach the desired consistency. For dressing a salad, it should be thin enough that it easily drips off a spoon. For a dip or spread, it should be thick like sour cream.</p>
                <h4 class="fst-italic">Taste and Serve:</h4>
                <p>Taste the dressing and add more salt and black pepper as needed. Serve immediately or store in the fridge for up to 5 days. Before serving, give it a stir. If it is too thick upon chilling, stir in warm water, 1/2 teaspoon at a time, until the dressing loosens. I do not recommend freezing this dressing—it tends to separate when defrosted.Taste the dressing and add more salt and black pepper as needed. Serve immediately or store in the fridge for up to 5 days. Before serving, give it a stir. If it is too thick upon chilling, stir in warm water, 1/2 teaspoon at a time, until the dressing loosens. I do not recommend freezing this dressing—it tends to separate when defrosted.</p>
            </div>
        </div>
    </main>
<?php include_once __DIR__ . '/_components/footer.php';