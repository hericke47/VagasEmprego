<?php 

namespace App\Entity;
use \App\Db\Database;

class Vaga {

  public $id;
  public $titulo;
  public $descricao;
  public $ativo; //define vaga ativa ou nao
  public $data; //data de publicação da vaga

  public function cadastrar() {
    //definir data
    $this->data = date('Y-m-d H:i:s');

    //inserir no banco
    //atribuir o id da vaga na instancia
    $obDatabase = new Database('vagas');
    $obDatabase->insert([
      'titulo' => $this->titulo,
      'descricao' => $this->descricao,
      'ativo' => $this->ativo,
      'data' => $this->data
    ]);


    //retorna sucesso ou não
  }

}