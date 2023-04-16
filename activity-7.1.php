<!-- TOTAL ITEM COST -->
<!-- 1. Create a function that calculates the total cost of an item
2.The response should be echoed json_format: {
  price: (Price Input),
  quantity: (Quantity Input),
  total: (Total)
} 
3. the page must correctly caclculate the total cost if an item; -->

<html>
  <head>
    <title>Total cost of item</title>
  </head>
  <body>
    <form action="activity-7.1.php" method="post">
      Price: <input type="text" name="price"><br><br>
      Quantity: <input type="text" name="quantity"><br><br>
      <input type="submit" value="Calculate">
    </form>
  </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $price = $_POST["price"];
  $quantity = $_POST["quantity"];
  
  echo json_encode([
    'price' => $price,
    'quantity' => $quantity,
    'total' => $price * $quantity
  ]);
}
?>
