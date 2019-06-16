<?php
	function palindrome($x,$y){
		$g = strrev($x);
		$c=$x.$g;
		$a = 0;
		for($i=0; $i<=strlen($c); $i++){
			$x = substr($c, $i,strlen($y));
			if($x == $y){
				$a+=1;
			}
		}
		echo $a;
		//index 1-4,index 2-5,index 3-6
		//echo "bana anan nana anan nana ana na a";
	}
	palindrome("banananana","nana");

?>