<?php
/*You cannot use % sign to print % on output.
Because it is a special charector (for %d %f %s).
So you must use %% to print % on output*/
printf("Inputdata (price %%discount): ");
fscanf(STDIN, "%f %f", $price,$discount);
$dist_cost = $price * $discount/100;
$netprice = $price - $dist_cost;
// using %f to format 2 decimal-point
printf("price %.2f discount %.2f netprice %.2f\n", $price, $dist_cost, $netprice);
?>