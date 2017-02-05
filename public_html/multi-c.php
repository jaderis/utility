<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div>
    <form action="" method="POST">
        Is there love in you? What is your name?:
<br>
         <input type="text" name="name">
        </br>
        <input type="submit" name="submit" value="Find out!">
        <br>
  <?php
  $name = $_POST['name'];
  $submit = $_POST['submit'];
  $search = strpbrk ($name , 'loveLOVE');

  if (isset($submit)) {
  if ($name == NULL) {
  echo "Feed me names!";
  }
  else{
  if ($search === FALSE ) {
  echo "I'm so sorry..." . $name; echo ". Best of luck with all the cats.";
  }else {
  echo "All the love for " . $name;   echo "!!! <3" ;
  }
  }
  }
  else {
  header ("Location: index.php");
  exit();
  }
   ?>
<form action="multi-c.php" method="POST">
        </br>
        <input type="submit" name="submit" value="Other name?">
</form>
    </form>
    <form action="index.php" method="POST">
            </br>
            <input type="submit" name="submit" value="Game page">
    </form>
    </div>
  </body>
</html>
