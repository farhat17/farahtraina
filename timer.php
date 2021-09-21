<?php
session_start();
$mytime =300;
if(!isset($_SESSION['time'])){
	$_SESSION['time']=time();

}
else{
	$diff = time()-$_SESSION['time'];
	$diff = $mytime-$diff;
	$hrs = floor($diff/60);
	$min = (int)($diff/60);
	$sec = $diff%60;
	$show = $min.":".$sec;
	if($diff == 0 || $diff<0){
		echo "timeout";
		session_unset();
		session_destroy();
		header('location:form.php');
	}
	else{
		echo $show;

	}
}


?>