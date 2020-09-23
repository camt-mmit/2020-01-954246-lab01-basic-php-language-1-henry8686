<?php
printf("Input usage unit: ");
fscanf(STDIN, "%d", $unit);
if($unit==0){
    printf("price of electricity bill = 0");
}elseif($unit>=1 && $unit<=5){
    printf("price of electricity bill = 10");
}elseif($unit>=6 && $unit<=10){
    printf("price of electricity bill = %d\n",$price=3*($unit-5)+10);
}elseif($unit>=11 && $unit<=15){
    printf("price of electricity bill = %d\n",$price=3*5+5*($unit-10)+10);
}else{
    printf("price of electricity bill = %d\n",$price=3*5+5*5+10*($unit-15)+10);
}
?>