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
        for($i -1; $i<n; $i++){
            $a = strval($i);
        }
    }
}

?>

<!-- Day 2
On day 1, one person discovers a secret.

You are given an integer delay, which means that each person will share the secret with a new person every day, starting from delay days after discovering the secret. You are also given an integer forget, which means that each person will forget the secret forget days after discovering it. A person cannot share the secret on the same day they forgot it, or on any day afterwards.

Given an integer n, return the number of people who know the secret at the end of day n. Since the answer may be very large, return it modulo 109 + 7. -->
<?php

class Solution {

    /**
     * @param Integer $n
     * @param Integer $delay
     * @param Integer $forget
     * @return Integer
     */
    function peopleAwareOfSecret($n, $delay, $forget) {
        $MOD = 1000000007;

        $dp = array_fill(0,$n +1 ,0);
        $dp[1] = 1;

        $share = array_fill(0,$n + 2 ,0);
        $share[1 + $delay] = 1;
        if(1 + $forget <= $n){
            $share[1+ $forget] = ($share[1 + $forget] - 1 + $MOD) % $MOD;
        }

        $cur = 0;
        for($day = 2; $day <= $n; $day++){
            $cur =  ($cur + $share[$day]) % $MOD;
            $dp[$day] = $cur;

            if($day + $delay <= $n){
                $share[$day + $delay] = ($share[$day + $delay] + $dp[$day]) % $MOD;
            }

            if($day + $forget <= $n){
                $share[$day + $forget] = ($share[$day + $forget] - $dp[$day] + $MOD) % $MOD;
            }

        }
        $ans =0;
        for($i = $n - $forget + 1; $i <= $n; $i++){
            if($i >= 1){
                $ans = ($ans + $dp[$i]) % $MOD;
            }
        }
        return $ans;
    }
}
?>