<?php

session_start();

include("./data/index.data.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Garment</title>
  <link rel="stylesheet" href="./css/style2.css" />
  <link rel="stylesheet" href="./css/nav.css" />
  <link rel="stylesheet" href="./css/main.css" />
  <link rel="stylesheet" href="./css/footer.css" />
  <link rel="stylesheet" href="./css/common.css" />
  <link rel="stylesheet" href="./css/font.css" />
  <link rel="stylesheet" href="./css/testimoal.css">
  <link rel="stylesheet" href="./css/card.css">
  <link rel="shortcut icon" href="./images/icons/one.jpg" type="image/x-icon" />
  <script src="https://kit.fontawesome.com/fa59f54b37.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
  <nav>
    <?php
    include("./template/header.php")
    ?>

  </nav>
  <main>
    <?php
    include("./template/hero.php")

    ?>

    <div class="related-products second-wrapper" id="promotion">

      <h2 class="Roboto">Our new products</h2>
      <div class="product-list">

        <?php
        while ($product = mysqli_fetch_assoc($fetured)) :
        ?>

          <div class="product-card">
            <img class="product-card-image" src="<?= $product["image"]; ?>" alt="Product Image">
            <div class="product-card-tags">
              <div class="product-card-tag">New</div>
            </div>
            <div class="product-card-details">
              <div class="product-card-title"><?php echo $product['name']; ?></div>
              <div class="product-card-pri"><?php echo $product['price'] + 256; ?> Birr</div>

              <div class="product-card-price"><?php echo $product['price']; ?> Birr</div>
              <a href="/product.php?category=<?= $product["category"]; ?>" class="buy-now-button">Buy Now</a>
            </div>
          </div>


        <?php
        endwhile;
        ?>
      </div>
    </div>

    <h2 class="Roboto">Discover more</h2>

    <section class="double-banner-wrapper">
      <a href="/product.php?category=dress" class="double-banner-wrapper-left double-banner-wrapper-child">
      </a>
      <a href="/product.php?category=shirt" class="double-banner-wrapper-right double-banner-wrapper-child">
        <div class="middle-wrapper">
          <p class="big-text-wrapper Roboto" style="color: aliceblue">Shirts</p>
          <p class="middle-text-wrapper gray Roboto">
            Shirts like you've never seen
          </p>
        </div>
      </a>
    </section>
    <div class="banner-second">
      <div class="banner-init-text">
        <h1 class="middle-text-wrapper">
          Flat
          <span style="
                color: teal;
                font-size: 45px;
                font-style: italic;
                font-weight: 900;
                
              " class='Roboto'>20% </span>discount
        </h1>
        <h1 class="big-text-wrapper Roboto">Pay with any credit card</h1>
        <p class="small-text-wrapper-a Roboto ">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil,
          neque praesentium commodi adipisci corrupti deserunt nemo minus
          sequi consectetur quos eum, natus
        </p>
      </div>
      <div class="banner-second-empty"></div>
    </div>


  </main>
  <section>
    <?php

    include("./template/testimonal.php")
    ?>
  </section>
  <footer>
    <?php

    include("./template/footer.php")
    ?>
  </footer>

  <script src="./js/main.js"></script>
  <script src="./js/nav.js"></script>

</body>

</html>