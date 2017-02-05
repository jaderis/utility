<html>
<body>
<form action="" method="post">
<?php echo "Type a number from 1 to 10"; ?>
<br>
  <input type="number" name="inputNumber"/>
<br>
<?php
$rand = rand(1 , 10);
    if(isset($_POST['SubmitButton'])){ //check if form was submitted
      $input = $_POST['inputNumber']; //get input text
      if ($input<1 || $input > 10) {
        echo "It must be between 1 and 10. " . $input; echo " is not quit there now, is it not?";
      }  else {
        if ($input != $rand) {
          echo $message = "You entered: ".$input; echo ". But the number was: " . $rand;
        } else {
          echo "You got it! The number was indeed " .$rand;
        }
      }
    }
?>
<br>
  <input type="submit" name="SubmitButton"/>
  <form action="guess.php" method="POST">
      <input type="submit" name="submit" value="Clear">
  </form>
<br>
<br>
</form>
</form>
<form action="index.php" method="POST">
  </br>
    <input type="submit" name="submit" value="Guessing game">
</form>
</body>
</html>
