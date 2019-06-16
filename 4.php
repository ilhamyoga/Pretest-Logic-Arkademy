<?php 
	function sorting($a){
		$x=$a[0];
		for($i=0;$i<count($a);$i++){
			if($a[$i]<$x){
				$x=$a[$i];
			}
		}
		echo "a. Data Terkecil : ".$x."</br>";
		for($i=0;$i<count($a);$i++){
			if($a[$i]>$x){
				$x=$a[$i];
			}
		}
		echo "b. Data Terbesar : ".$x."</br>";
		echo "c. Data yang disortir dari data terkecil ke terbesar : ";
		for($i=0;$i<count($a);$i++){
			for($j=0;$j<count($a);$j++){
				if($a[$i]<$a[$j]){
					$s=$a[$i];
					$a[$i]=$a[$j];
					$a[$j]=$s;
				}
			}
		}
		for($i=0;$i<count($a);$i++){
			echo $a[$i]." ";
		}
		echo "</br>";
		echo "d. Data yang disortir dari data : ";
		for($i=0;$i<count($a);$i++){
			for($j=0;$j<count($a);$j++){
				if($a[$i]>$a[$j]){
					$s=$a[$i];
					$a[$i]=$a[$j];
					$a[$j]=$s;
				}
			}
		}
		for($i=0;$i<count($a);$i++){
			echo $a[$i]." ";
		}
	}
	$a = [6,22,34,15,2,13,26,57,42,32];
	sorting($a);
?>