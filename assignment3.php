<?php
printf("Input menu number: ");
fscanf(STDIN, "%f", $menu);
if($menu==1){
    printf("Input number (price %%discount): ");
fscanf(STDIN, "%f %f", $price,$discount);
printf("price %.2f discount %.2f netprice %.2f\n", $price, $dist_cost = $price * $discount/100, $netprice= $price - $dist_cost);
}elseif($menu==2){
    printf("Input number (number1 number2): ");
    fscanf(STDIN, "%f %f", $x,$y);
    if($x>$y){
        printf("%f\n greater than %f\n", $x, $y);
    }elseif($x<$y){
        printf("%f\n less than %f\n", $x, $y);
    }else 
    printf("%f\n equal to %f\n", $x, $y);
}else($menu==3){
    exit(0)
}
?>