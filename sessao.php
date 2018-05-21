<?php 

//Não pode ter imprimida nada antes
session_start(); //Sessão criada entre usuario e servidor!

//cokeie = guarda no computador!


//Armazenar dado na sessao:

$_SESSION["teste"] = "Deusyvan Silva";

$_SESSION["teste2"] = array("diversas coisas");


echo "Sessão foi feita";


echo "Meu nome é: ".$_SESSION["teste"];

?>