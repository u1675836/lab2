<?php

// Lab 2: PHP Expressions and Control Structures

echo '<h1>Lab 2A: Expressions and Control Structures</h1>';

// 1. Expressions and Operators
echo '<h2>1. Expressions and Operators</h2>';

$x = -5;

// y = 3(abs(2x) + 4)
$y = 3 * (abs(2 * $x) + 4);

echo "The value of y is: $y<br>";

// 2. Boolean Comparisons
echo '<h2>2. Comparisons</h2>';

echo '2 > 1: ';
var_dump(2 > 1);
echo '<br>2 == 3: ';
var_dump(2 == 3);
echo '<br>"5" == 5: ';
var_dump("5" == 5);
echo '<br>"5" === 5: ';
var_dump("5" === 5);
echo '<br>';

// 3. Unary Operators
echo '<h2>3. Unary Operators</h2>';

$c = 5;

$negative = -$c;   // unary minus
$positive = +$c;   // unary plus
$next = ++$c;      // pre-increment: $c becomes 6 first, then is assigned

echo "Unary minus: $negative<br>";
echo "Unary plus: $positive<br>";
echo "Pre-increment: $next (c is now $c)<br>";

// 4. Operator Precedence
echo '<h2>4. Operator Precedence</h2>';

$withoutParentheses = 2 + 3 * 4;   // multiplication first: 2 + 12
$withParentheses = (2 + 3) * 4;    // parentheses first: 5 * 4

echo "2 + 3 * 4 = $withoutParentheses<br>";
echo "(2 + 3) * 4 = $withParentheses<br>";

// 5. Assignment Associativity
echo '<h2>5. Assignment Associativity</h2>';

// Assignment works right to left
$level = $score = $time = 0;

echo "Level: $level<br>";
echo "Score: $score<br>";
echo "Time: $time<br>";

// 6. Equality and Assignment
echo '<h2>6. Equality and Assignment</h2>';

$num1 = 10;
$num2 = 10;
$num3 = 20;
$text = "10";

echo '$num1 == $num2: ';
var_dump($num1 == $num2);
echo '<br>$num1 == $num3: ';
var_dump($num1 == $num3);
echo '<br>$num1 == $text: ';
var_dump($num1 == $text);
echo '<br>$num1 === $text: ';
var_dump($num1 === $text);
echo '<br>';

// 7. Logical Operators
echo '<h2>7. Logical Operators</h2>';

$a = 1;
$b = 0;

echo '$a && $b: ';
var_dump($a && $b);
echo '<br>$a || $b: ';
var_dump($a || $b);
echo '<br>!$a: ';
var_dump(!$a);
echo '<br>!$b: ';
var_dump(!$b);
echo '<br>';

// 8. Scholarship Decision with if...else
echo '<h2>8. Scholarship Decision with if...else</h2>';

$gpa = 3.59;

if ($gpa >= 3.5) {
    echo "With a GPA of $gpa, the student receives a scholarship.<br>";
} else {
    echo "With a GPA of $gpa, the student does not receive a scholarship.<br>";
}

// 9. Scholarship Decision with if...elseif...else
echo '<h2>9. Scholarship Decision with if...elseif...else</h2>';

if ($gpa >= 3.7) {
    echo "GPA $gpa: Full scholarship<br>";
} elseif ($gpa >= 3.5) {
    echo "GPA $gpa: Partial scholarship<br>";
} else {
    echo "GPA $gpa: No scholarship<br>";
}

// 10. Access Status
echo '<h2>10. Access Status</h2>';

$status = 'pending';

switch ($status) {
    case 'approved':
        echo 'Access granted.<br>';
        break;
    case 'pending':
        echo 'Your request is still pending.<br>';
        break;
    default:
        echo 'Access denied.<br>';
}

// 11. While Loop
echo '<h2>11. While Loop</h2>';

$fuel = 10;

while ($fuel > 1) {
    echo "There is enough fuel (fuel level: $fuel)<br>";
    $fuel--;
}

// 12. Multiplication Table
echo '<h2>12. Multiplication Table</h2>';

for ($i = 1; $i <= 12; $i++) {
    echo "12 x $i = " . (12 * $i) . '<br>';
}
