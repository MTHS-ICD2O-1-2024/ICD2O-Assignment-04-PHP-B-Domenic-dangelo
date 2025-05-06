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
        <div>
          <span>Choose a card game</span>
        </div>
        <br />
        <form action="answer.php" method="GET">
          <!-- Simple Textfield -->
          <div class="mdl-textfield mdl-js-textfield">
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-yu-gi-oh">
              <input type="radio" id="option-yu-gi-oh" class="mdl-radio__button" name="types-of-cards" value="yuGiOh" checked>
              <span class="mdl-radio__label">Yu-Gi-Oh</span>
            </label>
          </div>
          <span>$14.90</span>
          <br />

          <div class="mdl-textfield mdl-js-textfield">
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-pokemon">
              <input type="radio" id="option-pokemon" class="mdl-radio__button" name="types-of-cards" value="pokemon">
              <span class="mdl-radio__label">Pokemon cards</span>
            </label>
          </div>
          <span>$12.50</span>
          <br />

          <div class="mdl-textfield mdl-js-textfield">
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-one-piece">
              <input type="radio" id="option-one-piece" class="mdl-radio__button" name="types-of-cards" value="onePiece">
              <span class="mdl-radio__label">One Piece card game</span>
            </label>
          </div>
          <span>$15.95</span>
          <br />

          <div class="mdl-textfield mdl-js-textfield">
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-magic">
              <input type="radio" id="option-magic" class="mdl-radio__button" name="types-of-cards" value="magic">
              <span class="mdl-radio__label">Magic: The Gathering</span>
            </label>
          </div>
          <span>$22.80</span>
          <br />

      </div>
      <br />
      <div>Enter how many card packs you want:</div>
      <br />
      <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="amountOfPacks" />
        <label class="mdl-textfield__label" for="amountOfPacks">Number ...</label>
        <span class="mdl-textfield__error">Input is not a number!</span>
      </div>
      <br />
      <!-- Accent-colored raised button with ripple -->
      <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
        type="submit">
        Show cost
      </button>
      </form>
    </main>
  </div>
</body>

</html>