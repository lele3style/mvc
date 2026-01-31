<?php

$numeri = [2,3,4];
echo 'E\' un array (<strong>is_array($numeri)</strong>)? '; var_dump(is_array($numeri));

echo '<br>Aggiungo 5 alla fine con <strong>array_push($numeri, 5)</strong>: ';
array_push($numeri, 5);
echo print_r($numeri,true);

echo '<br>Aggiugere 0 e 1 prima nei numeri con <strong>array_unshift($numeri, 0, 1)</strong>: ';
array_unshift($numeri, 0, 1);
echo print_r($numeri,true);

echo '<br>Rimuovere l\'ultimo elemento con <strong>array_pop($numeri)</strong>: ';
array_pop($numeri);
echo print_r($numeri,true);

echo '<br>Rimuovere il primo elemento con <strong>array_shift($numeri)</strong>: ';
array_shift($numeri);
echo print_r($numeri,true);


$page = array(
    'title'     =>  'Homepage',
    'body'      =>  'Contenuto della homepage',
    'footer'    =>  'Copywrite &copy; '.date('Y')
);
echo '<br><br>prendo solo i valori in un array $values con  <strong>array_values($page)</strong>: ';
$values = array_values($page);
echo print_r($values,true);

echo '<br>prendo solo le chiavi in un array $keys con  <strong>array_keys($page)</strong>: ';
$keys = array_keys($page);
echo print_r($keys,true);

echo '<br>trasformare i valori di $keys con lo stesso valore con ":" davati usando <strong>array_map(fn($key) => ":$key", $keys)</strong>: ';
//placeholder = array_map(function ($key) {return ":$key";}, $keys);        //callback
$placeholder = array_map(fn($key) => ":$key", $keys);                       //funz. abbreviata con arrow function
echo print_r($placeholder,true);


$check = ['numero stringa' => ' 1 '];
echo '<br><br>controllare se esiste in check una chiave "numero stringa" con <strong>array_key_exists("numero stringa", $check)</strong>: ';
var_dump( array_key_exists('numero stringa', $check) );

echo '<br>controllare se esiste in check il valore 1 con <strong>in_array(1, $check, true)</strong> (true per forzare il controllo sul tipo): ';
var_dump( in_array(1, $check, true) );


$a = [1]; $b = [2]; $c = [3];
echo '<br><br>unire in un unico array altri 3 array con <strong>array_merge($a, $b, $c)</strong>: ';
var_dump( array_merge($a, $b, $c) );


$reverse = [1, 2];
echo '<br><br>invertire l\'ordine degli elementi 1,2 i un array con <strong>array_reverse($reverse)</strong> (riassegna gli indici): ';
$invertito = array_reverse($reverse);
var_dump( $invertito );    //inverte l'ordine dei valori, riassegnando gli indici
echo '<br>invertire l\'ordine degli elementi 1,2 i un array con <strong>array_reverse($reverse, true)</strong> (mantenendo gli indici originali): ';
var_dump( array_reverse($reverse, true) );    //inverte l'ordine dei valori, mantiene gli indici


$a = [1,2,3];
echo '<br><br>da un array $a 1,2,3 voglio creare un array che contenga gli stessi dati più 4,5 con <strong>$b = [...$a, 4, 5]</strong> (spread operator "...", dalla php 8.1 posso mischiare anche con key=>value): ';
echo print_r( [...$a, 4, 5], true );
//https://www.php.net/manual/en/array.sorting.php