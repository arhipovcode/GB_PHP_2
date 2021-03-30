<?php
namespace app\models;

use app\services\Db;

class Product extends Model
{
    public $id;
    public $name;
    public $description;
    public $price;
    public $category_id;

    public function getTableName(): string
    {
        return 'products';
    }


}