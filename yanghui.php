<?php
function yanghui($n){
    $arr=[];
    for($i=1;$i<=$n;$i++){
        for($j=1;$j<=$i;$j++){
            if ($j==1 || $j==$i){
                $arr[$i][$j] =1;
            }else{
                $arr[$i][$j]=$arr[$i-1][$j-1]+$arr[$i-1][$j];
            }
        }
    }
    return $arr;
}

$result = yanghui(10);
for ($i=1;$i<count($result);$i++){
    echo "<pre>";
    echo implode('',$result[$i]);
}
?>

