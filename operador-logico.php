<?php

$idade = 30;
$cnh = true;
$infra = 1;
$quitaçao = true;
/*
&& e and vv
 || ou or vf 
 */
if($idade > 18 && $cnh == true) {
	echo 'pode dirigir!';

} else{
	echo 'nao pode dirigir,imundo';
}
if(($idade >= 23 && $infra == false)
	or ($idade >= 23 && $quitaçao == true)){
	echo "<hr>pode fazer a cnh d";
} else {
	echo "<hr> voce nao pode fazer a cnh D,bobao";
}

/**/

/* exercicio
o motorista pode ter infraçoes porem caso esteja quitado,
ele podera realizar a cnh D 
*/

?>