<?php

	$ans = 0;

	function recur($money, $coins, $cur_coin){
	    if($money < 0)
	      return 0;
	        
	    global $ans;
	    if($money === 0){
	      $ans++;
	      return;
	    }
	    
	    foreach($coins as $coin){
	      if($coin >= $cur_coin)
	      	recur($money - $coin, $coins, $coin);
	    }
	}

	$a = [1, 3];
	sort($a);
	recur(10, $a, 1);
	echo $ans;

	// $money = 10;
	// $coins = [2, 5, 3, 6];

	// $sol = [0];

	// for($i = 1; $i <= $money; $i++){
	// 	array_push($sol, 0);
	// }

	// for($i = 1; $i <= $money; $i++){
	// 	$mx = 0;
	// 	foreach($coins as $coin){
	// 		if($i - $coin >= 0)
	// 			$mx = max($sol[$i - $coin], $mx);
	// 	}	
	// 	$sol[$i] = $mx + 1;
	// }

	// echo $sol[$money];
	// print_r($sol);

	// function rec($money, $index, $arr_size, $arr){
	// 	if($money < 0 or $index >= $arr_size)
	// 		return 0;
	// 	if($money === 0)
	// 		return 1;

	// 	return rec($money, $index + 1, $arr_size, $arr) + rec($money - $arr[$index], $index, $arr_size, $arr);
	// }

	// echo rec(10, 0, 4, [2, 5, 3, 6]);
?>