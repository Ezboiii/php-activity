
<!-- 
Celsius to Fahrenheit conversion
1. Create a function that converts the input value into Fahrenheit
2.The response should be echoed json_format: {
  celsius: (Celsius Input),
  fahrenheit: (Fahrenheit)
} 
3. the page must correctly convert celsius into Fahrenheit; -->

<html>
  <head>
    <title>Celsius to Fahrenheit conversion</title>
  </head>
  <body>
    <form action="activity-7.2.php" method="post">
      Celsius: <input type="text" name="celsius"><br><br>
      <input type="submit" value="Convert">
    </form>
  </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $celsius = $_POST["celsius"];

  $fahrenheit = ($celsius * 9/5) + 32;
  $response = array(
    'celsius' => $celsius,
    'fahrenheit' => $fahrenheit
  );
  echo json_encode($response);
}
?>
