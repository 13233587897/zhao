<?php
/**
 * Created by PhpStorm.
 * User: 赵谦
 * Date: 2019/7/24
 * Time: 8:35
 */
$target=7;
$array=[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];

function get($target,$array){
    for ($i=0;$i<=$target;$i++){
        $array[] = $target;
    }

    return $target;
}


?>