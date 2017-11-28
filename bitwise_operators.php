<?php

// 左移 js: <<
function left_shift($number,$bits){
    return ($number << $bits) & 0xffffffff;
}

// 右移 js: >>
function sign_propagating_right_shift($number,$bits){
    return ($number >> $bits) & 0xffffffff;
}

// 无符号右移 js: >>>
function zero_fill_right_shift($number,$bits){
    $number = intval($number);
    $bits = intval($bits);
    $bits = (floor($bits) & 0xffffffff) % 32;
    return (($number >> $bits) & (0xffffffff >> $bits)) & 0xffffffff;
}