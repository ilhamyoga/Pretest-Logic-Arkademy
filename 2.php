<?php
	function s3($s){
		for($i=1; $i<=$s; $i++){
			$a=0;
			for($j=1; $j<=$i; $j++){
				if($i%$j==0){
					$a++;
				}
			}
			if($a==2){
				$x[]=$i;
			}
		}

		for($i=0; $i<count($x); $i++){
			for($j=0; $j<=$i; $j++){
				echo $x[$j];
			}
			echo '</br>';
		}
	}
	s3(5);
?>