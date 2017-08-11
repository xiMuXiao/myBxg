<?php
$pathinfo = $_SERVER['PATH_INFO'];
// echo $pathinfo;
//include './views/' . $pathinfo . ".html";
// /login/index.html
// 有三种 
// 1. 0层   index.php
// 2. 1层   index.php/index
// 3. 2层   index.php/index/index
// 因为 $pathinfo 起始是 /index/index 我们需要去掉第一个反斜杠
$pathinfo = substr($pathinfo, 1);
// echo $pathinfo;
$str = explode('/', $pathinfo);  // 此时得到一个数组
// print_r( $str );
if(empty($pathinfo)) {
    $path = 'index/index';
} else if (count($str) == 1) {
    $path = 'index/' . $str[0];
} else {
    $path =  '/' . $pathinfo;
}

include './views/'. $path . '.html';
?>