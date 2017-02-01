<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Multiple choise</title>
  </head>
  <body>
    <div class="">
      <?php

$name = $_POST['name'];
$submit = $_POST['submit'];
$search = strpbrk ($name , 'r');

if (isset($submit)) {
  if ($name == NULL) {
    echo "Need a name";
  }
else{
    if ($search === FALSE ) {
      echo "Congratulations, you are not a CUNT!";
    }else {
      echo "You're a fuking cunt " . $name;   echo "! How can you live with yourself?" ;
    }
  }
}
 else {
  header ("Location: index.php");
  exit();
}
       ?>
    </div>
    <form action="cnut-page.php">
    </br>
    <input type="submit" name="submit" value="Back">
    </form>

    <form action="index.php">
    </br>
    <input type="submit" name="submit" value="Choose other game">
    </form>

  </body>
</html>
