<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout Page</title>
  <link rel="shortcut icon" href="./images/icons/one.jpg" type="image/x-icon" />

  <script src="https://kit.fontawesome.com/fa59f54b37.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/checkout.css" />
  <link rel="stylesheet" href="./css/footer.css" />
  <link rel="stylesheet" href="./css/nav.css" />
  <link rel="stylesheet" href="./css/font.css" />

</head>

<body>
  <nav>
    <?php
    include("./template/header.php")
    ?>
  </nav>
  <main>
    <h1>Checkout Page</h1>

    <form id="checkout-form" action="message.php" method="post">
      <div class="form-controller">
        <div>
          <h2>Billing Information</h2>
          <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" id="name" />
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" />
            <p id="error-message"></p>
          </div>
          <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" id="address" />
          </div>
          <div class="form-group">
            <label for="city">City:</label>
            <input type="text" id="city" />
          </div>
          <div class="form-group">
            <label for="state">State:</label>
            <input type="text" id="state" />
          </div>
          <div class="form-group">
            <label for="zip">Zip Code:</label>
            <input type="text" id="zip" />
          </div>
        </div>

        <div>
          <h2>Payment Information</h2>
          <div class="form-group">
            <label for="card-number">Card Number:</label>
            <input type="text" id="card-number" />
          </div>
          <div class="form-group">
            <label for="expiration-date">Expiration Date:</label>
            <input type="text" id="expiration-date" />
          </div>
          <div class="form-group">
            <label for="security-code">Security Code:</label>
            <input type="text" id="security-code" />
          </div>
        </div>
      </div>

      <button type="submit">Submit Order</button>
    </form>
  </main>
  <footer>
    <?php

    include("./template/footer.php")
    ?>
  </footer>
  <script src="./js/checkout.js"></script>

</body>

</html>