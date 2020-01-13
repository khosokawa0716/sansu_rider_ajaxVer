<?php

require('ajax_sample.php');

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>算数ライダー</title>
  <meta name="viewport" content="width=375" >
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="style.css">
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
</head>
<body>
  <main>
   <div class="container">
   <div class="f-container-enemy flex">
    <div class="enemy_number">
      <h1 class="enemy_number js-number"><?php echo $_SESSION['whatEnemy']; ?></h1>
    </div>
    <div class="enemy_name">
      <h1 class="enemy_name js-name"><?php echo $enemy->getName(); ?></h1>
    </div>
  </div>
    <div class="enemy_power">
      <meter class="js-meter" min="0" max="100" low="20" high="80" optimum="90" value="<?php echo $_POST ? $remainingHpRatio : 100 ?>">100%</meter>
    </div>
      <img src="img/<?php echo $enemy->getImgName(); ?>.png" alt="ライダーの画像" class="game_img js-img">
      <h5 class="question js-question"><?php echo $question; ?></h5>
    <form action="" method="post" class="js-formArea">
    <div class="answers flex">
      <button class="btn-push js-button1" name="playerAnswer" value="<?php echo $button1; ?>"><?php echo $button1; ?></button>
      <button class="btn-push js-button2 mc" name="playerAnswer" value="<?php echo $button2; ?>"><?php echo $button2; ?></button>
      <button class="btn-push js-button3" name="playerAnswer" value="<?php echo $button3; ?>"><?php echo $button3; ?></button>
    </div>
    <div class="message js-message" style="display: none;"></div>
    <div class="gameTimer flex">
      <input id="seconds" name="seconds" class="timer js-time" value="<?php echo $_POST ? $seconds : 99 ?>" readonly>
    </div>
    </form>
    </div>
    </main>
<script>
  // var seconds = document.getElementById('seconds').value;
  // var id = setInterval(
  //   function(){
  //     if(seconds > 0){
  //     document.getElementById('seconds').value = --seconds;
  //     } else {
  //     clearInterval(id);//idをclearIntervalで指定している
  //         window.location.href = 'result2.php';
  //     }}, 1000
  // );
</script>
<script src="app.js"></script>
</body>
</html>