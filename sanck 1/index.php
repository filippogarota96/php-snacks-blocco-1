<?php 
/*
Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60
**/


//creo array matches

$matches = [
   [
    "Casa" => "Milano",
    "Ospite" => "Cantù",
    "puntiCasa" => "55",
    "puntiOspite" => "60"
  ],
  [
    "Casa" => "Scavolini Pesaro Basket",
    "Ospite" => "Virtus",
    "puntiCasa" => "70",
    "puntiOspite" => "60"
  ]
];

foreach ($matches as $match) {
  echo "{$match["Casa"]} - {$match['Ospite']} | {$match["puntiCasa"]} {$match["puntiOspite"]} \n";
}
