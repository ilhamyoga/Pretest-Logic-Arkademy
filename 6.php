<?php
	function binary($ds){
		while($ds>=1){
			$ss = $ds%2;
			$hs = $ds/2;
			$ds = $hs;
			$x[] = $ss;
		};

		for ($i=count($x)-1; $i>=0; $i--){ 
			echo $x[$i];
		}
	}
?>
<html>
	<?php error_reporting(0); ?>	
	<form method="GET">
		<p>Masukkan Angka Desimal :</p>
		<input type="text" name="nilai">
		<input type="submit">
	</form>
	Angka Biner :
	<?php echo binary($_GET['nilai']) ?>
</html>