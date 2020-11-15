<?php

namespace App\Db;

use \PDO;
use \PDOException;

class Database {

  //host de conexao com o banco
  const HOST = 'localhost';

  // nome do banco de dados
  const NAME = 'wdev_vagas';

  // usuario do banco
  const USER =  'root';

  // senha de acesso ao banco
  const PASS = '';

  private $table;
  private $connection; // pdo

  public function __construct($table = null) {
    $this->table = $table;
    $this->setConnection();
  }

  private function setConnection(){
    try {
      $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
      $this->connection->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION); // configura o pdo para mandar uma excpetion quando tiver algo errado
    }catch(PDOException $e) {
      die('ERROR: '.$e->getMessage());
    }
  }
}