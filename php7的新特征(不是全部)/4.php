<?php
/*
 +----------------------------------------------------------------------
 + Title        : PHP7的一些新特征
 + Author       : 小黄牛
 + Version      : V1.0.0.1
 + Initial-Time : 2017-5-17 14:24:00
 + Last-time    : 2017-5-17 14:24:00 + 小黄牛
 + Desc         : 
 +     空合并运算符(??)是代替三元运算与 isset()函数的结合。
       如果它存在并且它不是空的，空合并运算符返回它的第一个操作数;否则返回第二个操作数。
 +----------------------------------------------------------------------
*/

# 注意，在PHP中，null 并不绝对等于 ''
$test = null;

echo isset($test) ? $test : '我爱小黄牛<br/>';

echo !empty($test) ? $test : '我爱小黄牛<br/>';

echo $test ?? '我爱小黄牛<br/>';

# 当$test为null时，上面三者的判断是等价的
# 当$test为''时，第一和第三条判断是等价的