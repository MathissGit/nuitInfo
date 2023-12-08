<!DOCTYPE html>
<html>
  <head>
    <title>TETRIS GAMES WITH JAVASCRIPT</title>
    <link rel="stylesheet" type="text/css" href="tetris_styles.css" />
  </head>
  <body>
    <div id="tetris">
      <div id="info">
        <div id="next_shape"></div>
        <p id="level">Level: <span></span></p>
        <p id="lines">Lines: <span></span></p>
        <p id="score">Score: <span></span></p>
        <p id="time">Time: <span></span></p>
        <button id="start">Start</button>
        <p class="red">Press the Esc button to pause<span></span></p>
      </div>
      <div id="canvas"></div>
    </div>
    <script type="text/javascript" src="tetris_script.js"></script>
  </body>
</html>