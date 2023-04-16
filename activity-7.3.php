<!--
Area of a triangle
1. Create a function that calculates the area of triangle having the 
2. The response should be echoed json_format: {
  base: (Base Input),
  height: (Height Input),
  area: (area of the triangle)
} 
3. the function must correctly calculate the area of triangle
-->

<html>
  <head>
    <title>Area of a triangle</title>
  </head>
  <body>
    <form action="activity-7.3.php" method="post">
      Base: <input type="text" name="base"><br><br>
      Height: <input type="text" name="height"><br><br>
      <input type="submit" value="Calculate">
    </form>
  </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $base = $_POST["base"];
  $height = $_POST["height"];

  $area = ($base * $height) / 2;
  $response = array(
    'base' => $base,
    'height' => $height,
    'area' => $area
  );
  echo json_encode($response);
  }
?>
