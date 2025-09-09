<!-- Ex 1
Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

You may assume that each input would have exactly one solution, and you may not use the same element twice.

You can return the answer in any order. -->

<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $map = [];
        foreach ($nums as $key = > $num){
            $comp = $target - $num;
            if(isset($map[$comp])){
                return [$map[$comp], $key];
            }
            $map[$num] = $key;
        }
        return [];
    }
}

?>

Ex 2
Given an integer x, return true if x is a palindrome, and false otherwise.
<?php
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if($x < 0) return false;

        $str = strval($x);
        $left = 0;
        $right = strlen($str) -1;
        while($left < $right){
            if($str[$left] != $str[$right]){
                return false;
            }
            $left++;
            $right--;
            return true;
        }
    }
}
?>
