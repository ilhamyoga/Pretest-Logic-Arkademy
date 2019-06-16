<?php
	function simple_math(){
		$x = 0;
		$b = 0;
		for($i=1; $i<=50000; $i++){
			if(is_int($i/2500)){
				$x = $x + 1;
			}
		}
		for($i=1; $i<=$x; $i++){
			if(is_int($i/4)){
				$b = $b + 1;
			}
		}
		echo $x+$b;
	}
	simple_math();
?>