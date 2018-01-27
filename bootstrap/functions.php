<?php
//打印数据
function dd($data, $exit = false){
    echo "<pre>" .print_r($data, true) . "</pre>" ;
    if($exit) die();
}




?>