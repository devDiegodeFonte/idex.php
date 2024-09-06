<?php

//função anonima, a qual é criada dentro de uma variavel e reutilizavel dentro da propria aplicação

$yearOfbirth = function($year){
    $yearOfbirth = date("Y") - $year;
    return "<p>Você tem {$yearOfbirth} de idade</p>";

};

echo $yearOfbirth(2005);
echo $yearOfbirth(1991);