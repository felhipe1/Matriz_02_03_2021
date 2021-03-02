


<?php

header('Content-Type: application/json');
header('Accept-Charset: UTF-8');

$dimension = (int) 10;
$matriz = (array) array_fill(0, $dimension, null);
$columna = (array) array_fill(0, $dimension, null);
$i = count($matriz)-1;
matriz:
if($i>=0){
    $matriz[$i] = $columna;
    $i--;
    goto matriz;
}
print_r($matriz);





//-------------------------------------------------------------------------------------------------------------






// $listaAnidadad = (array) [
//     "INFORMACION_PERSONAL" => (array) [
//         (array) [
//             "NOMBRE" => (string) "Miguel Angel",
//             "APELLIDO" => (string) "Castro Escamilla",
//             "EDAD" => (int) 23
//         ],
//         (array) [
//             "NOMBRE" => (string) "Luis Felipe",
//             "APELLIDO" => (string) "Melo Carrillo",
//             "EDAD" => (int) 40
//         ],
//     ],
// ];

// array_push($listaAnidadad["INFORMACION_PERSONAL"], (array) [
//     "NOMBRE" => (string) "Catalina",
//     "APELLIDO" => (string) "Arevalo",
//     "EDAD" => (int) 38
// ] );


// print_r($listaAnidadad);
// print_r(json_encode($listaAnidadad, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));




//----------------------------------------------------------------------------------------





// $listaASSC = (array) [
//     "Nombre" => (string) "Miguel Angel",
//     "Apellidos" => (string) "Castro Escamilla",
//     "Edad" => (int) 23
// ];

// print_r($listaASSC["Apellidos"]);



// $lista = (array) [
//     (string) "Miguel",
//     (int) 3,
//     (bool) true,
//     (array) [
//         "Saludar" => function(){
//             return "Hola como estas";
//         },
//     ]
// ];
// print_r($lista[3]["Saludar"]());





?>