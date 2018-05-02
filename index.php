<?php
$animales = array (
    array('gallina', 2, true),
    array('tigre', 4, true),
    array('caballa', 0, false)
);

$punt = fopen('fichero.csv', 'w');

foreach ($animales as $campos) {
    fputcsv($punt, $campos);
}

fclose($fp);


if (($punt = fopen("fichero.csv", "r")) !== FALSE) {
    while (($datos = fgetcsv($punt)) !== FALSE) {
        $numero = count($datos);
        for ($c=0; $c < $numero; $c++) {
            $dato = $datos[$c];
            if(2 == $c){
                $dato = ($dato)?"true":"false";
            }
            echo $dato." ";
        }
        echo "<br />\n";
    }
    fclose($punt);
}
