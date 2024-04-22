<!DOCTYPE html>
<html>

<head>
  <!-- Meta data section -->
  <meta charset="utf-8">
  <meta name="description" content="Guess a number and see if it matches a randomly generated number, Using PHP">
  <meta name="keywords" content="immaculata, icd2o">
  <meta name="author" content="Atri Sarker">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
  <link rel="manifest" href="./fav_index/site.webmanifest">

  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css">

  <!-- MDL -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

  <!-- Title -->
  <title>Guess The Number in PHP</title>
</head>

<body>

  <!-- Header -->
  <h1>Guess The Number in PHP</h1>

  <!-- FORM -->
  <form id="guessForm" action="results.php" method="post" target="resultFrame">
    <!-- Table For Layout -->
    <table>
      <tr>
        <td>
          <!--  NUMBER Input -->
          <label for="guessInput">Choose a number (1-6):</label>
          <input id="guessInput" type="number" name="guess" value="" step="1" min="1" max="6" />
          <br>
        </td>
        <td>
          <!-- Image of "Guess My Number" -->
          <img class="contentImg" src="./images/GuessMyNumber.png" alt="Guess My Number!">
          <br>
        </td>
      </tr>
    </table>

    <!-- Guess Button -->
    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit"
      value=":)" id="GuessBtn">Guess</button>
  </form>

  <!-- Result -->
  <iframe name="resultFrame" id="resultFrame">
  </iframe>

</body>

</html>