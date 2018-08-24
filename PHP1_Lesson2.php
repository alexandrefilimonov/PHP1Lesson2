<?php
/*------------------------ 1 ------------------------*/
echo 'Task 1:<br />';
$a = rand(-1000,1000);
$b = rand(-1000,1000);
if($a>=0 && $b>=0) {
	echo '$a= '.$a.', $b= '.$b.', $a-$b= '.($a-$b);
}
elseif ($a<0 && $b<0) {
	echo '$a= '.$a.', $b= '.$b.', $a*$b= '.($a*$b);
}
else {
	echo '$a= '.$a.', $b= '.$b.', $a+$b= '.($a+$b);
}

/*------------------------ 2 ------------------------*/
echo '<hr />';
echo 'Task 2:<br />';
$d = rand(0,15);
echo '$d= '.$d.'<br />';
function atofifteen($c) {
	if ($c==15) {
		echo '15';
		return;
	}
	else {
		echo ' '.$c;
		atofifteen($c+1);
	}
}
atofifteen($d);

/*------------------------ 3 ------------------------*/
echo '<hr />';
echo 'Task 3:<br />';
echo 'sum($a, $b)= '.sum($a, $b);
echo '<br /><br />';
echo 'substraction($a, $b)= '.substraction($a, $b);
echo '<br /><br />';
echo 'multiplication($a, $b)= '.multiplication($a, $b);
echo '<br /><br />';
echo 'division($a, $b)= '.division($a, $b);
function sum($a, $b) {
	return $a+$b;
}
function substraction($a, $b) {
	return $a-$b;
}
function multiplication($a, $b) {
	return $a*$b;
}
function division($a, $b) {
	return $a/$b;
}
/*------------------------ 4 ------------------------*/
echo '<hr />';
echo 'Task 4:<br />';
$oOperation= rand(1,4);
echo '$a= '.$a.' $b= '.$b.'<br />';
echo '$operation= '.$oOperation.'<br />';

function mathOperation($arg1, $arg2, $operation) {
	switch($operation) {
		case 1:
			echo 'sum=';		
			return sum($arg1, $arg2); 
			break;
		case 2: 
			echo 'substraction=';
			return substraction($arg1, $arg2); 
			break;
		case 3:
			echo 'multiplication=';
			return multiplication($arg1, $arg2); 
			break;
		case 4: 
			echo 'division=';
			return division($arg1, $arg2); 
			break;
		default: 
			break;
	}
}
echo mathOperation($a, $b, $oOperation); 
/*------------------------ 6 ------------------------*/   
echo '<hr />';
echo 'Task 6:<br />';
$vall = rand(1,100);
$poww = rand(1,4);
echo '$val= '.$vall.' $pow= '.$poww.'<br />';
function power($val, $pow) {
	if ($pow==1) {
		return $val;
	}
	else {
		$p=$pow-1;
		return power($val, $p)*$val;
	}
}
echo 'power('.$vall.','.$poww.')= '.power($vall, $poww);

/*---------------------------------------------------*/
echo '<hr />';
$main="PHP1. LESSON 2. HOME WORK";
//var_dump($a == $b); 						//True,неявное приведение '05' к int дает 5 
?>
<!DOCTYPE html>
<head>
	<title></title>
	<meta charset="UTF-8">
</head>
<body>
	<h1><?=$main?></h1>
</body>
</html>