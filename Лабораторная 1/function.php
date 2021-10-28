<?php

function build($menu, $v = false, $sub = null) {
	$v = ($v) ? 'display: inline-block;' : ''; 
	$sub = ($sub) ? '&sub=' . $sub : '';
	$list = "<ul style=''>";
	foreach($menu as $value => $key){
        $list .= "<li class='gap' style='{$v} margin: 0 10px'><a href='{$_SERVER['PHP_SELF']}?page={$value}{$sub}'>{$key['name']}</a></li>";
    }
    $list .= "</ul>";
    return $list;
}

