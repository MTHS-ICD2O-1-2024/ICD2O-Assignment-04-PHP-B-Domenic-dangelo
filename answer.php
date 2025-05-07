<!DOCTYPE html>
<!-- ICS2O-Unit5-assignment4-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Trading card shop, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="domenic dangelo" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-amber.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Trading card shop, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Trading card shop, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/student_discount.jpg" alt="museum discount" />
      </div>
      <div class="page-content-php">
        <div id="user-info">
          <?php
          //input
          $inputAmount = $_GET["amountOfPacks"];
          $cardType = $_GET["types-of-cards"];
          $SALES_TAX = 0.13;
          $basePrice = 0;

          $subtotal = $basePrice * $inputAmount;
          $tax = $subtotal * $SALES_TAX;
          $total = $subtotal + $tax;

          // process
          if ($cardType == "yuGiOh") {
            $basePrice = 14.90;
            // process
          } else if ($cardType == "pokemon") {
            $basePrice = 12.50;
            // process
          } else if ($cardType == "onePiece") {
            $basePrice = 15.95;
            // process
          } else {
            $basePrice = 22.80;
          }

          $subtotal = $basePrice * $inputAmount;
          $tax = $subtotal * $SALES_TAX;
          $total = $subtotal + $tax;

          echo "Subtotal: $" . round($subtotal, 2) . "<br>";
          echo "Tax: $" . round($tax, 2) . "<br>";
          echo "Total: $" . round($total, 2) . "<br>";
          ?>
          <div class="page-content-answer">
            <a href="./index.php">Return</a>
          </div>
        </div>
    </main>
  </div>
</body>

</html>