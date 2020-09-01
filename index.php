<?php

function area($length = 1.23466, $width = 8) {
    $area = $length * $width;

    if (!is_numeric($length) && !is_numeric($width)) {
        exit("The lenght and/or width enteres is not numeric");

    }

    echo "the area of the rectangle is: " . round($area, 2) . '<br>';
}



function average() {

    $number = " 3, 24, 80, 9, 1,1.11111111";

    $number = explode(',', $number);

    $average = array_sum($number) / count($number);


    echo 'medeltalet är ' . round($average, 2) . '<br>';

}

area();
average();



?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>PHP Övning</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>

	</body>
</html>