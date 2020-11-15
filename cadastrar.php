<?php 

require __DIR__.'/vendor/autoload.php'; // para chamar classes

use \App\Entity\Vaga;

//Validacao do post
if(isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])){
  $obVaga = new Vaga;
  $obVaga->titulo = $_POST['titulo'];
  $obVaga->descricao = $_POST['descricao'];
  $obVaga->ativo = $_POST['ativo'];
  $obVaga->cadastrar();

}

include __Dir__.'/includes/header.php';
include __Dir__.'/includes/formulario.php';
include __Dir__.'/includes/footer.php';