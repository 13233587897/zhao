<?php
/**
 * Created by PhpStorm.
 * User: 赵谦
 * Date: 2019/7/12
 * Time: 8:40
 */
function six($n,$m){
    $arr=[];
    for ($i=$n;$i<$m;$i++){
        $arr[] = $i;
        $cha = implode($arr);
    }
    return substr_count($cha,"1");
}
echo six(100,1301);


?>