
<?php



//********************************1
for ($i = 4; $i <= 12; $i++) {
    echo $i . " ";
    
}
print "<br><hr>";
echo "<br>";  


//************************************2
function affichage($number) {    
    if($number>=1){    
     echo "$number <br/>";    
     affichage($number-1);    
    }  
}    
affichage(10);

print "<br><hr>";

//************************************************3
$hauteur= 10;
 
for ($i = 0; $i < $hauteur; $i++)
{
for ($k = 0; $k < $hauteur; $k++)
{echo " ";}
for($z=0;$z<=$i;$z++)
{echo "*";
}
echo "<br />";
}

print "<br><hr>";


//***************************************************************4
function multiplier($n, $m) {
    return $n * $m;
}

$n = 5;

for ($i = 1; $i <= $n; $i++) {
     for ($j = 1; $j <= $n; $j++) {
         echo multiplier($i, $j) . "\t";
     }
     echo "\n";
 }

 print "<br><hr>";








?>