<!--
Day of the week
1. Create a function that returns what day of the week the input day is. 
2. The response should be echoed json_format: {
  date: (Date Input),
  day_of_the_week: (Day of the week),
}
3. the function must correctly display the day;
-->

<html>
  <head>
    <title>Day of the week</title>
  </head>
  <body>
    <form action="activity-7.4.php" method="post">
      Date: <input type="date" name="date"><br><br>
      <input type="submit" value="Enter">
    </form>
  </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $date = $_POST["date"];

  $day_of_week = date('l', strtotime($date));
  $response = array(
    'date' => $date,
    'day_of_the_week' => $day_of_week
  );
  echo json_encode($response);
}
?>
