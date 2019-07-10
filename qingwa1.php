<?php
/**
 * Created by PhpStorm.
 * User: 赵谦
 * Date: 2019/7/10
 * Time: 8:51
 */
function calSteps($n){
    if ($n==1) return 1;
    if ($n==2) return 2;
    return calSteps($n-1)+calSteps($n-2);
}
echo calSteps(4);

?>