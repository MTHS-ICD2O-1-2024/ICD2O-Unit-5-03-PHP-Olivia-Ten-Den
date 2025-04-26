<!DOCTYPE html>
<!-- ICD2O-Unit5-03-PHP -->
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Watch a movie, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Olivia TD" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Watch a movie, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Watch a movie, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/movie_ratings.jpg" alt="Image of a poster with the types of movie ratings." />
      </div>
      <div class="page-content">Enter your age below.</div>
      <br />
      <form action="answer.php" method="GET">
        <div class="mdl-textfield mdl-js-textfield">
          <!-- input pattern attribute -->
          <input class="mdl-textfield__input" type="number" min="0" id="age" name="age" />
          <!-- mdl-textfield__label -->
          <label class="mdl-textfield__label" for="age-number">Enter your age below.</label>
          <!-- class "mdl-textfield__error" -->
          <span class="mdl-textfield__error">Input is not a valid number.</span>
        </div>
        <div>
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            type="check-button">
            Check
          </button>
        </div>
      </form>
      <br />
      <div class="page-content-answer">
        <div id="result"></div>
      </div>
    </main>
  </div>
</body>

</html>