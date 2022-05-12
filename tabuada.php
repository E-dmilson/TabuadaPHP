<html>
    <head>
        <style>
            body{
                background: #000;
                color: #fff;
                text-align: center;
                font: 20pt arial;
            }
            h1{
            text-decoration: underline green;
        }
        </style>
    </head>
<body>
            
<?php

$n = isset($_GET['num'])? $_GET['num']: 1;
echo "<h1>Mostrando a tabuada de $n</h1>";

$s = 1;
do{
    $res = $n * $s;
    echo "$n x $s = $res <br>";
    $s++;
}while($s <= 10);

?>

</body>
</html>