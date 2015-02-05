<?php
	   
$text_introdus = strtolower($_GET['text_introdus']);
$cuvant_cautat = strtolower($_GET['cuvant_cautat']);


$lungime_cuvant = strlen ($cuvant_cautat);
$offset = 0;

while ($pozitie =strpos ($text_introdus, $cuvant_cautat, $offset))
{
     echo 'Cuvantul cautat <b>"'.$cuvant_cautat.'"</b> a fost gasit la pozitia '.$pozitie.' din textul introdus.<BR>';
	 $offset =  $pozitie + $lungime_cuvant;

}
