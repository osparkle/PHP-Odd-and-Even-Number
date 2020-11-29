<?php
# ============================================
# PHP program to display
# Odd and Even Numbers 
# between 1 and 50
# Author: Simeon Adedokun
# Date: July 2, 2020
# Email: ayoade@simdols.com
# Website: https://educlancy.blogspot.com
# ============================================
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Display Odd and Even Numbers</title>
</head>
<body>
	<h1>PHP Display Odd and Even Numbers</h1>
	<p>Even numbers are numbers divisible by 2, while odd numbers are numbers whose remainder equals 1 if divided by two.</p>
	<p>This PHP script displays even and odd numbers between 1 and 50. The limit can be changed by changing the value of the last number variable.</p>

	<?php
		$last_number = 50; #the end number - value can be changed

		# Display Even Number
		echo "<p><strong>Even Numbers</strong>:<br />";
		$i = 2; # initial even number
		while ($i <= $last_number){
			/* display $i only if it's remainder division results into 0 */
			if($i % 2 == 0){
				echo $i.", ";
			}
		 	$i++;
		}

		#Display Odd Numbers
		echo "<p><strong>Odd Numbers</strong>:<br />";
		$i = 1; # initial odd number
		while ($i <= $last_number){
			/* display $i only if it's remainder division results into 1 */
			if($i % 2 == 1){
				echo $i.", ";
			}
			$i++;
		}
	?>
	</p>
</body>
</html>