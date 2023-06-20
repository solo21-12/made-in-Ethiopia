<?php
include("./data/cart.data.php");
include("./data/message.data.php")
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/message.css">
    <script src="https://kit.fontawesome.com/fa59f54b37.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./images/icons/one.jpg" type="image/x-icon" />

    <link rel="stylesheet" href="./css/font.css" />
</head>

<body>
    <nav>
        <?php

        include("./template/header.php")
        ?>
    </nav>
    <main>

        <div class="message-container">
            <div class="message-container-child-cirlce"><i class="fa fa-check fa-beat "></i></div>
            <h2>Payment Succesful!</h2>
            <p class="gray align-center">Transaction number: <span>123654d</span></p>

            <div class="message-container-text-wrapper">

                <div>
                    <h3 class="gray">Amount paid:</h3>
                    <h3 class="gray">Bank:</h3>

                </div>
                <div>
                <?php
              $s = 0;
              foreach ($unique_array as $i) {
                $s += $i["price"];
              }
              ?>
                    <h3 class="gray"> <?php echo $s ?> Birr</h3>
                    <h3 class="gray">CBE</h3>

                </div>
            </div>
        </div>
    </main>

    <footer>

        <?php

        include("./template/footer.php")
        ?>
    </footer>


</body>

</html>