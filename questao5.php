<?php

/*
5) Escreva um programa que inverta os caracteres de um string.

IMPORTANTE:
a) Essa string pode ser informada através de qualquer entrada de sua preferência ou pode ser previamente definida no código;
b) Evite usar funções prontas, como, por exemplo, reverse;
*/

$string = "Desenvolvedor";
$auxiliar = "";
$tamanho = strlen($string);
$b = strlen($string) - 1;

for($a = 0; $a < $tamanho; $a++){
  $auxiliar[$b] = $string[$a];
  $b--;     
}
        
echo "Frase normal: ".$string."<br>";
echo "Frase inversa: ".$auxiliar;

?>
