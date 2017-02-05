<?php
$winner = 'n';
$box = array('', '', '', '', '', '', '', '', '');
if (isset($_POST["submitbtn"])) {
  $box[0] = $_POST["box0"];
  $box[1] = $_POST["box1"];
  $box[2] = $_POST["box2"];
  $box[3] = $_POST["box3"];
  $box[4] = $_POST["box4"];
  $box[5] = $_POST["box5"];
  $box[6] = $_POST["box6"];
  $box[7] = $_POST["box7"];
  $box[8] = $_POST["box8"];
  /*print_r($box);*/
if (($box[0] == 'x' && $box[1] == 'x' && $box[2] == 'x' ) ||  ($box[3] == 'x' && $box[4] == 'x' && $box[5] == 'x' )
|| ($box[6] == 'x' && $box[7] == 'x' && $box[8] == 'x' ) || ($box[0] == 'x' && $box[3] == 'x' && $box[6] == 'x' )
|| ($box[1] == 'x' && $box[4] == 'x' && $box[7] == 'x') || ($box[2] == 'x' && $box[5] == 'x' && $box[8] == 'x')
|| ($box[2] == 'x' && $box[4] == 'x' && $box[6] == 'x' ) || ($box[0] == 'x' && $box[4] == 'x' && $box[8] == 'x' )){
  $winner = 'x';
  print("X is the winner");
}
$blank = 0;
for ($i=0; $i <= 8 ; $i++) {
  if ($box[i] == '') {
    $blank = 1;
  }
}
if ($blank == 1 && $winner == 'n') {
  $i = rand () % 8;
  while ($box[$i] != '') {
    $i = rand() % 8;
  }
  $box[$i] = '0';
  if (($box[0] == '0' && $box[1] == '0' && $box[2] == '0' ) ||  ($box[3] == '0' && $box[4] == '0' && $box[5] == '0' )
  || ($box[6] == '0' && $box[7] == '0' && $box[8] == '0' ) || ($box[0] == '0' && $box[3] == '0' && $box[6] == '0' )
  || ($box[1] == '0' && $box[4] == '0' && $box[7] == '0') || ($box[2] == '0' && $box[5] == '0' && $box[8] == '0')
  || ($box[2] == '0' && $box[4] == '0' && $box[6] == '0' ) || ($box[0] == '0' && $box[4] == '0' && $box[8] == '0' )){
    $winner = '0';
    print("0 is the winner");
}
  }else if($winner == 'n'){
    $winner = 't';
    print('Tied game!');
  }
}
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<style type="text/css">
#box {
  background: #efefef;
  border: solid 1px ;
  width: 50px;
  height: 50px;
  text-align: center;
  font-size: 40px;
}
#btn {
  background: #e3e3e3;
  border: solid 1px;
  width: 55px;
  text-align: center;
  text-decoration: none;
}
</style>
    <div class="">
      <form class="" name="tictactoe" action="test.php" method="post">
<?php
for ($i=0; $i <=8 ; $i++) {
  printf('<input type="text" name="box%s" value="%s" id="box">', $i , $box[$i]);
    if ($i == 2 || $i == 5 || $i == 8) {
      print('<br>');
  }
}
if ($winner == 'n') {
  print('<input type="submit" name="submitbtn" value="Go!" id="btn">');
}else {
  print('<input type="button" name="gamebtn" value="Again?" onclick="window.location.href=\'test.php\'" id="btn">');
}
 ?>
      </form>
    </div>
  </body>
</html>
