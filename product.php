<?php

include("./data/product.data.php");
include("./data/productList.data.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Product</title>
  <link rel="shortcut icon" href="./images/icons/one.jpg" type="image/x-icon" />
  <link rel="stylesheet" href="./css/style2.css" />
  <link rel="stylesheet" href="./css/nav.css" />
  <link rel="stylesheet" href="./css/tshirt.css" />
  <link rel="stylesheet" href="./css/main.css" />
  <link rel="stylesheet" href="./css/footer.css" />
  <link rel="stylesheet" href="./css/product.css" />
  <link rel="stylesheet" href="./css/font.css" />
  <link rel="stylesheet" href="./css/tshirt-detail.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://kit.fontawesome.com/fa59f54b37.js" crossorigin="anonymous"></script>

</head>

<body>
  <nav>
    <?php
    include("./template/header.php")
    ?>
  </nav>
  <main>
    <div class="banner-init">
      <div class="banner-init-text">
        <h1 class="middle-text-wrapper">Buy your own <span style="color: #2298f8; font-weight:bold;"><?php echo ucfirst($params["category"]); ?></span> </h1>
        <h1 class="big-text-wrapper" style="color:#2298f8">Made in Ethiopia</h1>
        <p class="small-text-wrapper" style='color:antiquewhite'>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil,
          neque praesentium commodi adipisci corrupti deserunt nemo minus
          sequi consectetur quos eum, natus
        </p>
        <button class="btn btn-blue">
          <a href="#buy">Buy know</a>
        </button>
      </div>
      <div class="banner-init-empty"></div>
    </div>
    <div style='width:58%;margin:40px auto'>

      <h5 class="big-text-wrapper" style="font-size:25px">Made in Ethiopia</h5>
      <h3 style="color: #2298f8; font-weight:bold; font-size:40px"><?php echo ucfirst($params["category"]); ?></h3>
    </div>

    <div class="list-item-wrapper" id="buy">
      <?php
      while ($product = mysqli_fetch_assoc($fetured)) :
      ?>

        <a href="/product-details.php?id=<?= $product["id"]; ?>&category=<?= $product["category"]; ?>">
          <div class="list-item-child">
            <div class="list-item-child-img" style="background-image: url(<?= $product["image"]; ?>);"></div>
            <div class="text-wrapper-item">
              <p class="new-text">
                <?php
                echo $product["name"];
                ?></p>
              <a class="text-a" href="/product-details.php?id=<?= $product["id"]; ?>&category=<?= $product["category"]; ?>">

              </a>
              <p class="link-list">
                <?php
                echo $product["price"];
                ?> Birr</p>
            </div>
          </div>
        </a>

      <?php
      endwhile;
      ?>

    </div>


    <div class="banner-second">
      <div class="banner-init-text">
        <h1 class="middle-text-wrapper">Flat <span style="color: teal; font-size: 45px; font-style: italic; font-weight: 900;">20% </span>discount</h1>
        <h1 class="big-text-wrapper">Pay with any credit card</h1>
        <p class="small-text-wrapper" style='color:#000'>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil,
          neque praesentium commodi adipisci corrupti deserunt nemo minus
          sequi consectetur quos eum, natus
        </p>
        <button class="btn btn-blue">
          <a href="#buy">Buy know</a>
        </button>
      </div>
      <div class="banner-second-empty"></div>
    </div>

  </main>

  <footer>
    <?php
    include("./template/footer.php")
    ?>

  </footer>
  <script src="./js/nav.js"></script>
  <script src='./js/home.js'></script>
</body>

</html>