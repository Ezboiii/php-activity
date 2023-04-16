<!-- 
Interest calculation
1. Create a function that calculates the total amount + interest using the inputs: principal, rate and time 
2. The response should be echoed json_format with key: {
  principal: (Principal Input),
  rate: (Rate Input)
  time: (Time Input)
  total:(Total Amount),
  interest:(Interest)
}
3. the function must correctly return the total and interest;
-->

<html>
  <head>
    <title>Interest calculation</title>
  </head>
  <body>
    <form action="activity-7.5.php" method="post">
      Principal: <input type="number" name="principal"><br><br>
      Rate: <input type="number" step="0.01" name="rate"><br><br>
      Time: <input type="number" name="time"><br><br>
      <input type="submit" value="Enter">
    </form>
  </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $principal = $_POST["principal"];
  $rate = $_POST["rate"];
  $time = $_POST["time"];

  $interest = ($principal * $rate * $time) / 100;
  $total = $principal + $interest;
  $response = array(
    'principal' => $principal,
    'rate' => $rate,
    'time' => $time,
    'total' => $total,
    'interest' => $interest
  );
  echo json_encode($response);}
?>
