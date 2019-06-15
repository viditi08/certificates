<?php
$num1=3;
$num2=5;
$choice=1;
switch ($choice) {
	case '3':
		$num1*=$num2;
		echo"$num1";
		break;

	case '2':
	    $num1-=$num2;
	    echo"$num1";
	    break;
    case '1':
	    $num1+=$num2;
	    echo"$num1";
	    break;
    case '4':
	    $num1/=$num2;
	    echo"$num1";
	    break;
	default:
		# code...
		break;
}