<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

echo '<link href="style.css" rel="stylesheet" type="text/css" />';

  $username = $_POST["username"];
  $password = $_POST["password"];
   echo "Welcome ". $username . "<br>";
   echo "Your password is: " . $password. "<br><br>";
   echo "Thanks for shopping with us! Here is your receipt <br>";

   $item1quantity = $_POST["item1quantity"];
   $item2quantity = $_POST["item2quantity"];
   $item3quantity = $_POST["item3quantity"];
   $item1cost = 20;
   $item2cost = 30;
   $item3cost = 25;
   $subtotal1 = $item1cost*$item1quantity;
   $subtotal2 = $item2cost*$item2quantity;
   $subtotal3 = $item3cost*$item3quantity;
   $shippingOption = $_POST["shipping"];
   $sa = "a";
   $sb = "b";
   $sc = "c";
   $shippingCost = 0;
   if($shippingOption == $sb)
   {
     $shippingOption ="Fast";
     $shippingCost = 5;
   }else if($shippingOption== $sc){
     $shippingOption = "Extra Fast";
     $shippingCost = 50;
   }else {
     $shippingOption = "Free";
     $shippingCost = 0;
   }

   $totalCost = $subtotal1+$subtotal2+$subtotal3+$shippingCost;

   echo "<table>
   <tr>
   <th> </th>
   <th>Quantity</th>
   <th>Cost per Item</th>
   <th>Subtotal</th>
   </tr>
   <tr>
   <th>Item 1</th>
   <td>". $item1quantity."</td>
   <td>". $item1cost." </td>
   <td>". $subtotal1." </td>
   </tr>
   <tr>
   <th>Item 2</th>
   <td>". $item2quantity."</td>
   <td>". $item2cost." </td>
   <td>". $subtotal2." </td>
   </tr>
   <tr>
   <th>Item 3</th>
   <td>". $item3quantity."</td>
   <td>". $item3cost." </td>
   <td>". $subtotal3." </td>
   </tr>
   <tr>
   <th>Shipping</th>
   <th colspan='2'>".$shippingOption."</th>
   <td>".$shippingCost."</td>
   </tr>
   <tr>
   <th colspan='3'>Total cost</th>
   <td>". $totalCost." </td>
   </tr>
   </table>";


 ?>
