<!-- Day 1 -->

<!-- 
No-Zero integer is a positive integer that does not contain any 0 in its decimal representation.

Given an integer n, return a list of two integers [a, b] where:

a and b are No-Zero integers.
a + b = n
The test cases are generated so that there is at least one valid solution. If there are many valid solutions, you can return any of them. -->

<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer[]
     */
    function getNoZeroIntegers($n) {
        for ($i = 1; $i < $n; $i++) {
            $a = strval($i);
            $b = strval($n - $i);
            if (strpos($a, '0') === false && strpos($b, '0') === false) {
                return [$i, $n - $i];
            }
        }
        return [];
    }
}


?>