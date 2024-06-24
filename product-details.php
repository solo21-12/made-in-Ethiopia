<?php

include("./data/productDetails.data.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product details</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="./images/icons/one.jpg" type="image/x-icon" />
    <script src="https://kit.fontawesome.com/fa59f54b37.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/product-detail.css">
    <link rel="stylesheet" href="./css/nav.css" />
    <link rel="stylesheet" href="./css/footer.css" />
</head>

<body>
    <?php
    include("./template/header.php");
    ?>

    <main>
        <?php if ($featuredProduct) : ?>
            <div class="container-x">
                <div class="x-child-one">
                    <div class='x-child-one-child'>
                        <img src="<?= $featuredProduct["image"]; ?>" alt="">
                    </div>
                </div>
                <div class="x-child-two">
                    <div class="x-child-two-name">
                        <h1><?= $featuredProduct["name"] ?></h1>
                        <p class='price'><?= $featuredProduct["price"] ?> Birr</p>
                    </div>
                    <div class='wrapper'>
                        <?= $featuredProduct["description"] ?>
                        <div class='x-child-two-related'>
                            <?php foreach ($relatedProducts as $relatedProduct) : ?>
                                <a href="/product-details.php?id=<?= $relatedProduct["id"]; ?>&category=<?= $relatedProduct["category"]; ?>" class="related">
                                    <img src="<?= $relatedProduct["image"]; ?>" alt="">
                                </a>
                            <?php endforeach; ?>
                        </div>
                        <form action="" method="post">
                            <input type="hidden" name="input_value" value="<?= $featuredProduct["id"]; ?>">
                            <button type="submit" name="add_value">Add to cart</button>
                            <button type="submit" class="t2" name="add_value2" id='add_value2'>Buy now</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </main>

    <footer>
        <?php include("./template/footer.php") ?>
    </footer>
</body>

</html>