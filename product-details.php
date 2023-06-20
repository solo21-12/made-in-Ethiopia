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
        <?php
        while ($product = mysqli_fetch_assoc($fetured)) :
        ?>
            <div class="container-x">
                <div class="x-child-one">

                    <div class='x-child-one-child'>
                        <img src="<?= $product["image"]; ?>" alt="">
                    </div>
                </div>
                <div class="x-child-two">
                    <div class="x-child-two-name">
                        <h1><?php echo $product["name"] ?></h1>
                        <p class='price'><?php echo $product["price"] ?> Birr</p>
                    </div>
                    <div class='wrapper'>

                        <?php echo $product["description"] ?>
                        <p class='des'></p>

                        <div class='x-child-two-related'>
                            <?php
                            while ($all_product = mysqli_fetch_assoc($all)) :
                            ?>
                                <a href="/product-details.php?id=<?= $all_product["id"]; ?>&category=<?= $all_product["category"]; ?>" class="related">
                                    <img src="<?= $all_product["image"]; ?>" alt="">
                                </a>
                            <?php
                            endwhile;
                            ?>
                        </div>
                        <form action="" method="post">
                            <input type="text" name="input_value" style="display: none;" value="<?= $product["id"]; ?>">
                            <button type="submit" name="add_value">Add to cart</button>
                            <button type="submit" class="t2" name="add_value2" id='add_value2'>Buy know</button>
                        </form>
                    </div>
                    <div>

                    </div>

                </div>


            </div>
        <?php
        endwhile;
        ?>
    </main>

    <footer>
        <?php
        include("./template/footer.php")
        ?>
    </footer>
</body>

</html>