<?php

// Including the class created in the "Classes" folder
include("Classes.php");

// Instantiate a new object for the first car
$carro0 = new Carro();

// Assign values to the attributes of the first car
$carro0->ano = "2018";
$carro0->modelo = "Accord";
$carro0->cor = "Prata";
$carro0->fabricante = "Honda";
$carro0->status = "Disponível";

// Instantiate a new object for the second car
$carro1 = new Carro();

$carro1->ano = "2022";
$carro1->modelo = "F-150";
$carro1->cor = "Azul";
$carro1->fabricante = "Ford";
$carro1->status = "Indisponível";

// Instantiate new objects for two more cars
$carro2 = new Carro();

$carro2->ano = "2019";
$carro2->modelo = "Wrangler";
$carro2->cor = "Verde";
$carro2->fabricante = "Jeep";
$carro2->status = "Disponível";

$carro3 = new Carro();

$carro3->ano = "2021";
$carro3->modelo = "Civic Type R";
$carro3->cor = "Vermelho";
$carro3->fabricante = "Honda";
$carro3->status = "Indisponível";

// Instantiate two more objects for the fifth and sixth cars
$carro4 = new Carro();

$carro4->ano = "2020";
$carro4->modelo = "Aventador";
$carro4->cor = "Laranja";
$carro4->fabricante = "Lamborghini";
$carro4->status = "Disponível";

$carro5 = new Carro();

$carro5->ano = "2023";
$carro5->modelo = "Taycan";
$carro5->cor = "Branco";
$carro5->fabricante = "Porsche";
$carro5->status = "Indisponível";

// Printing the information of each car to the user
echo "Carro " . $carro0->status . ": <br/><br>";

echo "Fabricante do carro: " . $carro0->fabricante . "<br>
                        Modelo: " . $carro0->modelo . "<br>
                        de Cor: " . $carro0->cor . "<br>
                        Ano: " . $carro0->ano . "<br> <hr>";

echo "Carro " . $carro1->status . ": <br/><br>";

echo "Fabricante do carro: " . $carro1->fabricante . "<br>
                        Modelo: " . $carro1->modelo . "<br>
                        de Cor: " . $carro1->cor . "<br>
                        Ano: " . $carro1->ano . "<br> <hr>";

echo "Carro " . $carro2->status . ": <br/><br>";

echo "Fabricante do carro: " . $carro2->fabricante . "<br>
                        Modelo: " . $carro2->modelo . "<br>
                        de Cor: " . $carro2->cor . "<br>
                        Ano: " . $carro2->ano . "<br> <hr>";

echo "Carro " . $carro3->status . ": <br/><br>";

echo "Fabricante do carro: " . $carro3->fabricante . "<br>
                        Modelo: " . $carro3->modelo . "<br>
                        de Cor: " . $carro3->cor . "<br>
                        Ano: " . $carro3->ano . "<br> <hr>";

echo "Carro " . $carro4->status . ": <br/><br>";

echo "Fabricante do carro: " . $carro4->fabricante . "<br>
                        Modelo: " . $carro4->modelo . "<br>
                        de Cor: " . $carro4->cor . "<br>
                        Ano: " . $carro4->ano . "<br> <hr>";

echo "Carro " . $carro5->status . ": <br/><br>";

echo "Fabricante do carro: " . $carro5->fabricante . "<br>
                        Modelo: " . $carro5->modelo . "<br>
                        de Cor: " . $carro5->cor . "<br>
                        Ano: " . $carro5->ano . "<br> <hr>";
