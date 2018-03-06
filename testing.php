<!DOCTYPE html>
<html>
  <head>
    <title>PHP DEMO</title>
    <meta charset="UTF-8">
  </head>

  <body>
    <?php
      echo "Hello " . $_GET["name"] . "!! <br>";
      
      $option = (int)$_GET["drop_down"];
      
      if ($option == 1){
      echo "<br>Looks like it's time to learn about variables!";
      echo '<br><br>Variables are instantiated in this form:';
      echo '<br><br>$var_name = var_val';
      echo '<br><br>And from henceforth "$var_name" returns var_val';
      echo '<br><br>PHP interacts very nicely with HTML, and is great at getting form elements from html pages.';
      echo '<br><br>To procure a form element, we might do something like $_GET["keyname"]';
      echo "<br><br>Here we call '\$option = (int)\$_GET['drop_down']'";
      echo "<br><br>option = $option <br>";
      } elseif ($option == 2){
      echo "<br> This should be operators.";
      echo "<br><br> option = $option <br>";
      }else{
      echo "<br>Other stuff!";
      echo "<br><br>option = $option <br>";
      }
      
      ?>
    <br>
    <a href="index.html">Back</a>
  </body>
</html>
