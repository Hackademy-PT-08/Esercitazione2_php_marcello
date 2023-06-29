<?php

//ESERCIZIO 1

$users = [

    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
    ['name' => 'Michele', 'surname' => 'Giordano', 'gender' => 'M'],
    ['name' => 'Giulia', 'surname' => 'Lunetta', 'gender' => 'F'],
    ['name' => 'chiara', 'surname' => 'Cariola', 'gender' => 'F'],
];

foreach($users as $user){
if ($user['gender'] == 'M'){
    echo"Buongiorno Sig. $user[name] $user[surname] \n";
 }else if
    ($user['gender'] == 'F'){
       echo "Buongiorno Sig.ra $user[name] $user[surname] \n"; 
    }
}

//ESERCITAZIONE2

//Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array


// $numbers = [ 
//     1, 2, 4, 666, 34, 234, 45, 37
// ];

// $sum = 0;
// $zero = 0;

// foreach($numbers as $number){
//     if($number % 2 === 0){ 
//        $sum = $sum + $number;
//        $zero ++;
//     }
//     ;
// }
// ;

// $middle = $sum / $zero;
// var_dump ($middle);

// $numbers = [3, 5, 66, 88, 33, 52,17, 43, 32, 25,16,36];
// $sum = 0;
// $zero = 0;

// foreach($numbers as $number){

//     if($number % 2 === 0){

//         $sum = $sum += $number;

//         $zero ++;
//     };
// };

// $middle = $sum / $zero;

// echo "la media dei numeri pari è $middle";


$numbers = [45, 34, 33, 45654, 23334, 1654, 2121, 32354,435, 2];
$sum = 0;
$zero = 0;

foreach($numbers as $number){

    if($number % 2 == 0){
        $sum = $sum + $number;
        $zero ++;

    }
};

$middle = $sum / $zero;

echo "la media è $middle ";


//ESERCIZIO 3


// - Traccia 3:

// Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".

for ( $i = 0; $i <= 100; $i ++){
    if ($i % 3 == 0 && $i % 5 == 0){
         echo "hackademy\n";}
    else if($i % 3 == 0){ 
         echo "PHP\n" ;
    }else if($i % 5 == 0){   
    echo "Javascript\n";
};
}

//ESERCIZIO BONUS


// Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".

// ESERCIZIO EXTRA
// Scrivere un programma che converta un voto numerico (v) in un giudizio seguendo questi parametri:
// v < 18: insufficiente
// 18 <= v < 21: sufficiente
// 21 <= v < 24: buono
// 24 <= v < 27: distinto
// 27 <= v <= 29: ottimo
// v = 30: eccellente
// Esempio:
// Input: v = 29
// Output: Ottimo

for ($i = 0; i <= 30; ){

if(i <= 17){
     echo "insufficiente";}else if ( i >= 18 && i <=)

};



