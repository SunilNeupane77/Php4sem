<?php

/* Accessing Static Methods from Other Methods: 
   
 -> Static methods can be called from other methods within the same class using 
    self:: followed by the method name. 
    
 -> This is useful for having one static method call another. 
*/

class MathOperations {
    public static function add($a, $b) {
        return $a + $b;
    }

    public static function subtract($a, $b) {
        return $a - $b;
    }

    // Using a static method to calculate the difference after addition
    public static function addThenSubtract($a, $b, $c) {
        $sum = self::add($a, $b);
        return self::subtract($sum, $c);
    }
}

$result = MathOperations::addThenSubtract(10, 5, 3); // 12
echo "Result: $result <br>";
