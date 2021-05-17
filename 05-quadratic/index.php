<?php

/**
 * @return array An array of two elements containing roots in any order
 */
function findRoots($a, $b, $c)
{
	$t = $b*$b - 4*$a*$c;
    if ($t >= 0){
        $x1 = (-$b + sqrt($t))/(2*$a);
        $x2 = (-$b - sqrt($t))/(2*$a);
        return [$x1, $x2];
    } else {
        $x1 = -$b/(2*$a);
        $x2 = sqrt(-$t)/(2*$a);
        return [$x1, $x2];
    }
}

print_r(findRoots(2, 10, 8));
