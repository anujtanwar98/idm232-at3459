<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body> -->
    <?php
    include_once __DIR__ . '/app.php';
    $page_title = 'Mediterranean Chickpea Salad';
    include_once __DIR__ . '/_components/header.php';
    ?>
    <?php include_once __DIR__ . '/_components/navbar.php'; ?>
    <main class="main">
        <div class="container text-white">
            <?php $title = 'Mediterranean Chickpea Salad';?>
            <h1 class="text-center"><?php echo $title; ?></h1>
            <div class="recipe-detail-image">
                <img src="./dist/images/1-ex.jpg" class="detail-page-image-1" alt="...">
            </div>
            <div class="recipe-detail-ingredients">
                <h3>Ingredients</h3>
                <h4 class="fst-italic">For the vinaigrette</h4>
                <ul>
                    <li>2 tablespoons olive oil</li>
                    <li>2 tablespoons red wine vinegar</li>
                    <li>1 teaspoon dried oregano</li>
                    <li>1/2 teaspoon kosher salt, plus more as needed</li>
                    <li>1/4 teaspoon freshly ground black pepper, plus more as needed</li>
                </ul>
                <h4 class="fst-italic">For the salad</h4>
                <ul>
                    <li>2 (15-ounce) cans chickpeas, drained and rinsed</li>
                    <li>1 (12 ounce) jar quartered and marinated artichoke hearts, drained</li>
                    <li>1 pint cherry tomato or grape tomatoes, halved</li>
                    <li>2 Persian cucumbers, halved lengthwise and thinly sliced</li>
                    <li>2/3 cup pitted Kalamata olives, halved</li>
                    <li>4 scallions (about 1/2 cup), white and green parts, thinly sliced</li>
                    <li>2 tablespoons fresh mint leaves, chopped</li>
                    <li>6 ounces (about 1 1/2 cups), feta cheese, crumbled plus more as needed</li>
                </ul>
            </div>
            <div class="recipe-detail-steps">
                <h3>Steps</h3>
                <h4 class="fst-italic">Make the oregano vinaigrette:</h4>
                <p>In a large bowl, whisk together the olive oil, red wine vinegar, dried oregano, kosher salt, and freshly ground black pepper.</p>
                <h4 class="fst-italic">Add salad ingredients to vinaigrette:</h4>
                <p>Add the chickpeas, artichoke hearts, tomatoes, cucumbers, olives, scallions, and mint to the bowl. Toss well to combine and coat in the vinaigrette. Add the feta cheese and toss gently to combine. Taste and season with additional salt and pepper as needed.</p>
                <h4 class="fst-italic">Serve:</h4>
                <p>Serve immediately or cover and refrigerate. You can keep this salad in the fridge covered, for 5 days. Enjoy cold or at room temperature.</p>
            </div>
        </div>
    </main>
<?php include_once __DIR__ . '/_components/footer.php';