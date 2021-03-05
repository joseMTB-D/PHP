<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$dia=[];//forma 1
$mes=array();//forma2
$any=[];

for ($i=0; $i <30; $i++) {
$dia[]= $i;

}
for ($j=0; $j <12; $j++) {
    $mes[$j]= $j;
    
}
for ($a=1900; $a <2020 ; $a++) { 
       $any[$a]=$a;
       
}
//enseñar
/*for ($i=0; $i <30; $i++) {
echo $dia[$i],",";
}
echo ' ';
for ($j=0; $j <12; $j++) {
    echo $mes[$j],",";
    
}
echo ' ';*/
        //array--recorredor
foreach($dia  as $dias){
echo $dias ;
echo '<br>';
}
foreach($mes as $dias){
echo $dias . ' ' ;
echo '<br>';
}

    ?>
</body>
</html>