<?php 

require __DIR__.'/vendor/autoload.php'; // para chamar classes

use \App\Entity\Vaga;

$vagas = Vaga::getVagas();

include __Dir__.'/includes/header.php';
include __Dir__.'/includes/listagem.php';
include __Dir__.'/includes/footer.php';