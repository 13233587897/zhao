<?php
/**
 * Created by PhpStorm.
 * User: 赵谦
 * Date: 2019/7/11
 * Time: 8:43
 */
$arr = [1,2,3,4,5,6];
function get($arr){
    $ou = [];
    $ji = [];
    for ($i=0;$i<count($arr);$i++){
        if ($arr[$i]%2==1){
            $ji[] = $arr[$i];
        }else{
            $ou[] =$arr[$i];
        }
    }
    return array_merge($ji,$ou);
}
print_r(get($arr));


?>