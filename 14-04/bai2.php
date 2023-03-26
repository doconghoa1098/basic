<?php

function fibMonaccianSearch($arr, $x, $n)
{

    $fibMMm2 = 0; 
    $fibMMm1 = 1; 
    $fibM = $fibMMm2 + $fibMMm1;
 
    /* fibM is going to store the smallest Fibonacci
    Number greater than or equal to n */
    while ($fibM < $n)
    {
        $fibMMm2 = $fibMMm1; //5
        $fibMMm1 = $fibM; //8
        $fibM = $fibMMm2 + $fibMMm1; //13
    }
    $offset = -1;
    while ($fibM > 1) // 13>1 ; 5>1
    {
        // Check if fibMm2 is a valid location
        $i = min($offset+$fibMMm2, $n-1);  // -1+5 , 4 ->4 ; -1+2,4 -> 1; ; 1+2 , 4 ->3
        if ($arr[$i] < $x)  // 40 < 10 ; 3<10  
        {
            $fibM = $fibMMm1; //8  ;  3
            $fibMMm1 = $fibMMm2;   //3 ; 2
            $fibMMm2 = $fibM - $fibMMm1;    //5 ; 1
            $offset = $i;  // 4 ; 1
        }
        else if ($arr[$i] > $x) // 40 > 10
        {
            $fibM = $fibMMm2;  //5
            $fibMMm1 = $fibMMm1 - $fibMMm2;  //8-5 =3
            $fibMMm2 = $fibM - $fibMMm1; //5-3=2
        }
        else return $i;
    }
 
    /* comparing the last element with x */
    if($fibMMm1 && $arr[$n-1] == $x) return $n-1;
 
    /*element not found. return -1 */
    return -1;
}
 
/* driver code */
    $arr = [2, 3, 4, 10, 40];
    $n = count($arr);
    $x = 10;
    $ind = fibMonaccianSearch($arr, $x, $n);
    if($ind>=0)
    printf("index: ".$ind);
    else
    printf($x." isn't present in the array");
 
// This code is contributed by mits
?>