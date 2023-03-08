<?php
/*
2) Dado a sequência de Fibonacci, onde se inicia por 0 e 1 e o próximo valor sempre será a soma dos 2 valores anteriores (exemplo: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34...), escreva um programa na linguagem que desejar onde, informado um número, ele calcule a sequência de Fibonacci e retorne uma mensagem avisando se o número informado pertence ou não a sequência.

IMPORTANTE:
Esse número pode ser informado através de qualquer entrada de sua preferência ou pode ser previamente definido no código;
*/

$a = 0;
$b = 1;
$c = 0;
        
$num = 5;
while ($num > $c){
  $c = $a + $b;
  $a = $b;
  $b = $c;
}

if($num == 0 or $num == 1){
  echo 'O número faz parte da sequência de Fibonacci';
}else if($num == $c){
  echo 'O número faz parte da sequência de Fibonacci';
}else{
  echo 'O número não faz parte da sequência de Fibonacci';
}

?>
