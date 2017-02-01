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
$search = strpbrk ($name , 'loveLOVE');

if (isset($submit)) {
  if ($name == NULL) {
    echo "Need a name";
  }
else{
    if ($search === FALSE ) {
      echo "I'm so sorry...";
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
    </div>
    <form action="multi-c.php">
    </br>
    <input type="submit" name="submit" value="Back">
    </form>

    <form action="index.php">
    </br>
    <input type="submit" name="submit" value="Choose other game">
    </form>

  </body>
</html>
