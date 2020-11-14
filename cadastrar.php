<?php 

require __DIR__.'/vendor/autoload.php'; // para chamar classes

//Validacao do post
if(isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])){
  die('Cadastrar');
}

include __Dir__.'/includes/header.php';
include __Dir__.'/includes/formulario.php';
include __Dir__.'/includes/footer.php';