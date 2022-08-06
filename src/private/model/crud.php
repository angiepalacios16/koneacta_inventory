<?php
require_once 'connection.php';
abstract class Crud extends Connection
{
  private $connection;
  private $table;

  public function __construct($table)
  {
    $this->table=(string) $table;
    $this->connection = parent::conexion();
  }

  public function getAll()
  {
    try {
      $stm = $this->connection->prepare("SELECT * FROM $this->table");
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function getById($id)
  {
    try {
      $stm = $this->connection->prepare("SELECT * FROM $this->table WHERE id = $id");
      $stm->execute(array($id));
      return $stm->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function delete($id)
  {
    try {
      $stm = $this->connection->prepare("DELETE FROM $this->table WHERE id = $id");
      $stm->execute(array());
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  abstract function create();
  abstract function update();
}
