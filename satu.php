<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
<form action="" method="post">
			<input type="text" name="a">
			<input type="text" name="b">
			<input type="text" name="g">
			<button type="submit">submit</button>
</form>

<?php
$a=$_POST["a"];
$b=$_POST["b"];
$g=$_POST["g"];

$j=0;
 for ($i=0; $i <$b ; $i++) {
	 $j= $j+$a;
 }
 $c = $j;
 $d = 0;
 for($i=0; $i<$c;$i++){

 	if(($j - $g) > -1){
 		$j = $j - $g;
 		$d = $d + 1;

 	}

 }
 echo $d;
 ?>

</body>
</html>
