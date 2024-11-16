<!-- answer [1] -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chessboard</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            width: 50px;
            height: 50px;
            text-align: center;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
</style>
</head>
<body>
<table>
<?php
for($i = 1; $i <= 8; $i++){
    echo "<tr>";
    for($j = 1; $j <= 8; $j++){
        $color =  ($i + $j) % 2 == 0;
        $class = $color ? "black" : "white";
        echo "<td class='$class'></td>";
    }
    echo "</tr>";
} 
?>
</table>
</body>
</html>
<!-- answer(2) -->
<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($j <= $i) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}for ($i=1 ; $i <=5; $i++) {

for ($j=$i ; $j <=5 ; $j++) {


    echo "*";
}
    echo "<br>";
}echo "<hr>";
$height = 3; 
for ($i = 1; $i <= $height; $i++) {
    for ($j = $height - $i; $j > 0; $j--) {
        echo " ";
    }
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = $height - 1; $i >= 1; $i--) {
    for ($j = $height - $i; $j > 0; $j--) {
        echo " ";
    }
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";
$height = 5;
for ($i = 1; $i <= $height; $i++) {
    for ($j = $height - $i; $j > 0; $j--) {
        echo "&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = $height - 1; $i >= 1; $i--) {
    for ($j = $height - $i; $j > 0; $j--) {
        echo "&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";
// answer(3)
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
function bubbleSortAsc(&$array) {
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
}
function bubbleSortDesc(&$array) {
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] < $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
}
bubbleSortAsc($array);
print_r($array);
bubbleSortDesc($array);
print_r($array);
echo"<hr>";
// answer(4)
$numbers = [2, 4, 3, 1, 6, 5, 7];
$sum = 0;
foreach ($numbers as $number) {
    $sum += $number;
}
$average = $sum / count($numbers);

echo "The average of the numbers is: " . $average;
echo "<hr>";
// answer(5)
$array = [2, 4, 3, 1, 6, 7, 5, 8, 10, 9];
$filteredArray = array_filter($array, function($num) {
    return $num % 2 !== 0;
});
$filteredArray = array_values($filteredArray);
echo "Array after removing even numbers: " . implode(", ", $filteredArray);

echo "<hr>";
// answer(6)
$num1 = 10;
$num2 = 30;
$num3 = 20;
if ($num1 >= $num2 && $num1 >= $num3) {
    $max = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $max = $num2;
} else {
    $max = $num3;
}
echo "The maximum number is: $max\n";
echo"<hr>";
// answer(7)
$date = '2012-12-21';
$dateTime = new DateTime($date);
$dateTime->modify('+1 month');
$newDate = $dateTime->format('Y-m-d');
echo $newDate;
echo "<hr>";
// answer(8)
$currentMonth = date('n');
$previousMonth = $currentMonth - 1;
if ($previousMonth === 0) {
    $previousMonth = 12;
}echo "The previous month number is: $previousMonth" ;
echo "<hr>";

// answer(9)
$mainString = "This is a sample string to test";
$subString = "sample";

// Using preg_match() with a simple regular expression
if (preg_match("/$subString/", $mainString)) {
    echo "The substring '$subString' is found in the main string.";
} else {
    echo "The substring '$subString' is not found in the main string.";
}echo "<hr>";

// answer(10)
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }return true;
}
$num = 17;
if (isPrime($num)) {
    echo "$num is a prime number.";
} else {
    echo "$num is not a prime number.";
}echo"<hr>";

// answer(11)
if (isset($_COOKIE["background"])){
    echo "<style>body {background-color: " . $_COOKIE["background"] . " }</style>";
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        setcookie("background", $_POST["bg-color"], time() + 60 * 60 * 24 * 30);
        header("Location: ". $_SERVER["PHP_SELF"]);
    }
    
?>
<form action="" method="POST">

<input type="color" name="bg-color">

<input type="submit" value="choose color">




</form>






