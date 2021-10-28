<?php

function interactive($num) {
    return ($num < 10 && $num > 1) ? true : false; //в последствии используется, для того, чтобы ссылками являлись только числа от 1 до 9
}

function build($n1 = 1, $n2 = 9) {
  $s = "";
    global $path;
    for($n1; $n1 <= $n2; $n1++) {
        $s .= "<div style='margin-left: 50px; padding: 18px; border: 1px solid black; border-radius: 12px;'>";
        for($i = 1; $i < 10; $i++) {
            $s .= "<div style='margin-bottom: 12px'>";
            $s .= interactive($n1) ? "<a href='" . $path . $n1 . "'>$n1</a> x " : "$n1 x ";
            $s .= interactive($i) ? "<a href='" . $path . $i . "'>$i</a> = " : "$i = ";
            $s .= interactive($n1*$i) ? "<a href='" . $path . $n1*$i . "'>" . $n1*$i . "</a>" : $n1*$i;
            $s .= "</div>";
        }
        $s .= "</div>";
    }
    return $s;
}
