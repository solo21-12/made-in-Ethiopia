<?php
include("./data/cart.data.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>cart</title>
  <link rel="shortcut icon" href="./images/icons/one.jpg" type="image/x-icon" />

  <script src="https://kit.fontawesome.com/fa59f54b37.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/cart.css" />
  <link rel="stylesheet" href="./css/nav.css" />
  <link rel="stylesheet" href="./css/footer.css" />
  <link rel="stylesheet" href="./css/common.css">
  <link rel="stylesheet" href="./css/font.css" />
  <script src="https://kit.fontawesome.com/fa59f54b37.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>

<body id='content'>
  <nav>
    <?php
    include("./template/header.php");
    ?>
  </nav>
  <main>

    <div>

      <?php
      if (count($unique_array) == 0) :
      ?>
        <div class="empty-cart">
          <i class="fa-solid fa-cart-shopping red i"></i>

          <div>
            <h3 class="red">Oops! Your cart is empty</h3>
            <p>Look like you haven't added anything to your cart yet</p>
            <button class="remove-btn btn "><i class="fa fa-duotone fa-shop "></i><a href="/index.php" class="white">Shop Now</a> </button>
          </div>
        </div>
      <?php
      else :
      ?>
        <div>
          <div class="container-wrapper" style="min-height:80vh;">
            <div class="list-items">
              <?php
              foreach ($unique_array as $key => $value) :
              ?>
                <div class="cart-item">
                  <div class="cart-item-child">
                    <div class="cart-item-image">
                      <img src="<?= $value["image"]; ?>" alt="Item name" />
                    </div>
                    <div class="cart-item-details">
                      <h3 class="cart-item-name"><?php echo $value["name"]; ?></h3>
                      <p class="cart-item-price"><?php echo $value["price"]; ?> Birr</p>
                      
                    </div>
                  </div>
                  <div class="form-child">
                    <form method="post">
                      <input type="hidden" name="index" value="<?php echo $key; ?>">
                      <input type="submit" name="submit_button" value="Remove" class="remove-btn ">
                    </form>
                  </div>
                </div>
              <?php
              endforeach;
              ?>

            </div>
            <div class="total-price">
              <?php
              $s = 0;
              foreach ($unique_array as $i) {
                $s += $i["price"];
              }
              ?>
              <div>
                <p>Your order is eligible for FREE Delivery.</p>
                <h3>Subtotal (<?php echo count($unique_array) ?> items): <?php echo $s ?> Birr</h3>
                <button><a href="/checkout.php">proceed to buy</a></button>
              </div>
            </div>
          </div>
        <?php
      endif
        ?>
  </main>
  <footer>
    <?php
    include("./template/footer.php");
    ?>
  </footer>
  <script src="./js/cart.js"></script>

</body>

</html>