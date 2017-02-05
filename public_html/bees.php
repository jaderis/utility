<html>
<body>
<form action="" method="post">
<?php echo "Hit the bees!"; ?>

<?php

$queen = 100;
$hit1 = 1;
$worker = 75;
$hit2 = 2;
$drone = 50;
$hit3 = 3;
$rand = rand(1, 3);


if (isset($_POST["hitbtn"])) {

}


?>
<br>
<br>
  <input type="submit" name="hitbtn" value="Hit!"/>
<br>
  <input type="submit" name="SubmitButton"/>
  <form action="bees.php" method="POST">
      <input type="submit" name="submit" value="Clear">
  </form>
<br>
<br>
</form>
</body>
</html>
