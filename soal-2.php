<!DOCTYPE html>
<html>
<body>

<?php
$a = array(
	 array(11,2,4),
	 array(4,5,6),
     array(10,8,12));
     $t=0;
     $r=0;
     echo "Array 2 Dimensi<br>";
     
     for($i=0; $i<3;$i++){
        for($j=0;$j<3;$j++){
        echo $a[$i][$j] . "";
     }
     echo "<br>";
     }
     
     for($i=0;$i<3;$i++){
     	for($j=0;$j<3;$j++){
        	if($i == $j){
        	$t += $a[$i][$j];}
        }
     }
     echo "<br>Diagonal Kanan=$t";
     
     for($i=0;$i<3;$i++){
        for($j=0;$j<3;$j++){
           if($i == $j){
           $r += $a[$i][$j];}
       }
    }

    
    echo "<br>Diagonal Kiri=$r";
    $hasil = $r + $t;
    echo "<br>Total Keduanya=$hasil";
?> 

</body>
</html>
