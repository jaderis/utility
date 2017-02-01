<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gen</title>
  </head>
  <body>
<div class="">
  <?php
      $rand = rand(1, 10);

      $guess = $_POST['guess'];
      $submit = $_POST['submit'];

      if (isset($submit)) {
        if ($guess<1 || $guess>10) {
          echo "Your number must be between 1 and 10";
        }else {
          if ($guess!=$rand) {
            echo "Incorrect, the answer is " . $rand;
          }else {
            echo "That's correct!";
          }
        }
      } else {
        header ("Location: index.php");
        exit();
      }

  ?>

</div>
<form action="guess.php">
</br>
<input type="submit" name="submit" value="Back">
</form>

<form action="index.php">
</br>
<input type="submit" name="submit" value="Choose other game">
</form>

  </body>
</html>
