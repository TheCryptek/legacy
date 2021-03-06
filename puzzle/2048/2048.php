<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <link href="puzzle/2048/style/main.css" rel="stylesheet" type="text/css">

  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<body><center>
  <div class="container">


    <div class="above-game">
      <p class="game-intro">Join the numbers and get to the <strong>2048 tile!</strong></p>
      <a class="restart-button">New Game</a>
    </div>

    <div class="game-container">
      <div class="game-message">
        <p></p>
        <div class="lower">
	        <a class="keep-playing-button">Keep going</a>
          <a class="retry-button">Try again</a>
        </div>
      </div>

      <div class="grid-container">
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
      </div>

      <div class="tile-container">

      </div>
    </div>
    <div class="heading">
        <div class="score-container">0</div>
        <div class="best-container">0</div>
    </div>
  </div></center>

  <script src="puzzle/2048/js/bind_polyfill.js"></script>
  <script src="puzzle/2048/js/classlist_polyfill.js"></script>
  <script src="puzzle/2048/js/animframe_polyfill.js"></script>
  <script src="puzzle/2048/js/keyboard_input_manager.js"></script>
  <script src="puzzle/2048/js/html_actuator.js"></script>
  <script src="puzzle/2048/js/grid.js"></script>
  <script src="puzzle/2048/js/tile.js"></script>
  <script src="puzzle/2048/js/local_storage_manager.js"></script>
  <script src="puzzle/2048/js/game_manager.js"></script>
  <script src="puzzle/2048/js/application.js"></script>
</body>
</html>
