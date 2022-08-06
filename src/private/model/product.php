<?php
require_once 'crud.php';
class Product extends Crud
{
  private $connection;

  private $id;
  private $name;
  private $reference;
  private $price;
  private $weight;
  private $category;
  private $stock;
  private $created_at;

  const TABLE = 'products';

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
      $stm = $this->connection->prepare("INSERT INTO " . self::TABLE . " (name, reference, price, weight, category, stock, created_at) VALUES (?,?,?,?,?,?,?)");
      $stm->execute(array($this->name, $this->reference, $this->price, $this->weight, $this->category, $this->stock, date('Y-m-d')));
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function update()
  {
    try {
      $stm = $this->connection->prepare("UPDATE " . self::TABLE . " SET name = ?, reference = ?, price = ?, weight = ?, category = ?, stock = ?  WHERE id = ?");
      $stm->execute(array($this->name, $this->reference, $this->price, $this->weight, $this->category, $this->stock, $this->id));
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function update_stock()
  {
    try {
      $stm = $this->connection->prepare("UPDATE " . self::TABLE . " SET stock = ?  WHERE id = ?");
      $stm->execute(array($this->stock, $this->id));
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}
?>