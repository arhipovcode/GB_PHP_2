<?php


namespace app\models;


use app\interfaces\ModelInterface;
use app\services\Db;

// abstract - абстрактный класс, от него нельзя создать экземпляр
// можно только наследовать. Эти классы как правило служат, как технические классы
abstract class Model implements ModelInterface
{
    // protected-защищенное свойство
    protected $tableName;
    protected $db;

    // Метод __constructor подключает автоматически класс Db
    public function __construct()
    {
        $this->db = new Db();
        $this->tableName = $this->getTableName();
    }

    // получаем все товары
    public function getAll()
    {
        $sql = "SELECT * FROM {$this->tableName}";
        return $this->db->queryAll($sql);
    }

    // получаем по id
    public function getById(int $id)
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE id = {$id}";
        return $this->db->queryOne($sql);
    }

    // удаляем по id
    public function delete(int $id)
    {
        $sql = "DELETE * FROM {$this->tableName} WHERE id = {$id}";
        return $this->db->execute($sql);
    }
}