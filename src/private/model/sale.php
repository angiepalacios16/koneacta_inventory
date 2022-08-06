<?php
require_once 'crud.php';
class Sale extends Crud
{
  private $connection;

  private $product_id;
  private $quantity;


  const TABLE = 'sales';

  public function __construct()
  {
    parent::__construct(self::TABLE);
    $this->connection = parent::conexion();
  }

  public function __set($name, $value)
  {
    $this->$name = $value;
  }

  public function __get($name)
  {
    return $this->$name;
  }

  public function create()
  {
    try {
      $stm = $this->connection->prepare("INSERT INTO " . self::TABLE . " (product_id, quantity) VALUES (?,?)");
      $stm->execute(array($this->product_id, $this->quantity));
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function update()
  {
    try {
      $stm = $this->connection->prepare("UPDATE " . self::TABLE . " SET product_id = ?, quantity = ? WHERE id = ?");
      $stm->execute(array($this->product_id, $this->quantity, $this->id));
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}
?>