<html>
    <head>
        <title>Signup Page</title>
        </head>
<body>
  <form action="calc.php" method="get">
    <input type="number" name="num1"><br>
    <input type="number" name="num2">
    <input type="submit">

  </form>
  <?php
  echo $_GET["num1"] + $_GET["num2"];
   ?>
