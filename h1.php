<?php
$array = [1,2,3,4,5,6,8,9];
$result = 0;
foreach (array_reverse)($array) as $key => $item; $key++){
	$result .= $array[$key];
	$keyItem = $key + $item;
	$keyItem = $item;
	// 备注为什么不能用
	// 试试现在能不能用
	//
}
echo $keyItem;
?>


