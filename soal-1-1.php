<!DOCTYPE html>
<html>
<body>


<?php
function Fungsi($kata){ 
    $kataString = strlen($kata); 
    $kataRev = '';
 
    for($i=$kataString; $i>-1;$i--){ 
        $kataRev .= $kata[$i];
    }
    return $kataRev;
} 
 
$katakata = "Katak";
if (Fungsi($katakata)){ 
    echo "True"; 
}
else { 
echo "False"; 
}

 
?> 

</body>
</html>
