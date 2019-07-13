<?php
$local = $_POST["local"];
$f = fopen("arquivo.csv", "r");
$x = fgetcsv($f);
$soma = 0;
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>{$x[0]}</th>";
    echo "<th>{$x[1]}</th>";
    echo "<th>{$x[2]}</th>";
    echo "<th>{$x[3]}</th>";
    echo "<th>{$x[4]}</th>";
    echo "<th>{$x[5]}</th>";
    echo "<th>{$x[6]}</th>";
    echo "</tr>";
while ($x) {
    $x = fgetcsv($f);
    if($local == $x[0]){
        echo "<tr>";
        echo "<td>{$x[0]}</td>";
        echo "<td>{$x[1]}</td>";
        echo "<td>{$x[2]}</td>";
        echo "<td>{$x[3]}</td>";
        echo "<td>{$x[4]}</td>";
        echo "<td>{$x[5]}</td>";
        echo "<td>{$x[6]}</td>";
        echo "</tr>";
        for($i=1;$i<7;$i++){
            $soma += $x[$i];
        }
    }
}
    echo "</table>";
    echo "</br>";
    echo "Somatorio das Ocorrências: ";
    echo $soma;
?>