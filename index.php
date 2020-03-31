<?php
$rope = true ;
$woodchunk = true ;
$nails = true ;
$knife = true ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php 
if ($rope) {
     echo "Máš provaz<br>";
 } 
 if ($woodchunk) {
    echo "Máš Dřevo<br>";
} 
if ($nails) {
    echo "Máš Hřebíky<br>";
} 
if ($knife) {
    echo "Máš nůž";
} 
?>   
<h1> Můžeš vyrobit</h1>
<?php
/*
bow = rope + knife + woodChunk
nail bat = nails + woodChunk
nunchucks = rope + woodChunk
spear = knife + woodChunk
*/

if($rope && $knife && $woodchunk){
    echo "Luk";
}elseif ($nails && $woodchunk) {
    echo "Pálka s hřebíky";
}elseif ($rope && $woodchunk){
    echo "Nunchaky";
}elseif ($rope && $knife && $woodchunk){
    echo "nunchaky";
}elseif($knife && $woodchunk) {
    echo "spear";
}else {
    echo "Nedostatek materálu";
}






?>
</body>
</html>