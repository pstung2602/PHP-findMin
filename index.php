<?php
function findMin($arr){
    $min=$arr[0];
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]<$min){
            $min=$arr[$i];
        }
    }
    return $min;
}
$arr= [8,2,3,5,7,0,9,8,7,6,5];
echo findMin($arr);

?>
