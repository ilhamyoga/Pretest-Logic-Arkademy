<?php
	function pohon($x,$y){
		if($x>0 && $y>0){
			$a=$x;
			for($i=0; $i<$y; $i++){
				$a = ($a*2)+1;
			}
		}
		echo $a;
	}
	pohon(10,2);
?>