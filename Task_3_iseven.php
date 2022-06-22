<!DOCTYPE html>

<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="Web Programming" />
  <meta name="keywords" content="Web Programming" />
  <title>Using variables, arrays and operators</title>
</head>

<body>

  <h1>Web Programming - Deployment Task 3</h1>

  <?php

  if (isset($_GET['var'])) {
    $var_check = $_GET['var'];
    if (preg_match("/^[a-z A-Z]*$/", $var_check)) {
      echo "Please just enter a number.";
    } else {
      $var_ori = (float)$_GET['var'];
      $var_num = round($var_ori);
      $is_num = (is_numeric(($var_num) == 1)  //check boolean or not
        ? " not a number" : " a number");
      (is_numeric($var_num) == 1)
        ? ($even_num = $var_num % 2 == 0
          ? " The variable <b>is even</b>" : " The variable <b>is not even</b>.")
        : $even_num = "";
      echo "<p> The variable $var_num is $is_num. $even_num. </p>";
    }
  } else {
    echo "Please send the variable again.";
  }
  ?>

</body>

</html>