<?php
// 1. Придумать класс, который описывает любую сущность из
// предметной области интернет-магазинов

class Products
{
    public $id;
    public $title;
    public $price;
    public $discount = 0;

//    public function __construct($id, $title, $price, $discount = 0)
//    {
//        $this->id = $id;
//        $this->title = $title;
//        $this->price = $price;
//        $this->discount = $discount;
//    }


    // Получить информацию о товаре, id, title, price
    public function getInfoProduct()
    {
        $product = [];
        $product[] = $this->id;
        $product[] = $this->title;
        $product[] = $this->price;
        return $product;
    }

    // Применить скидку к товару
    public function getDiscount()
    {
        return $this->price - (($this->price / 100) * $this->discount);
    }

}


$product = new Products();
$product->id = 1;
$product->title = 'Мультиварка';
$product->price = 3500;


var_dump($product);
var_dump($product->getInfoProduct());

// Дан код:

//class A {
//    public function foo() {
//        static $x = 0;
//        echo ++$x;
//    }
//}
//$a1 = new A();
//$a2 = new A();
//$a1->foo();
//$a2->foo();
//$a1->foo();
//$a2->foo();
//Что он выведет на каждом шаге? Почему?
// $x это статическое свойство, оно одинакого для любого объекта, поэтому на каждом шаге оно увеличивается на единицу

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();
// Объясните результаты в этом случае.
// здесь объект и наследник от него, это два разных объекта
// при каждом вызове метода foo() переменная увеличивается на единицу внутри объекта в котором вызвана