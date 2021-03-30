<?php


namespace app\interfaces;

// интерфейс, служит для описания методов. Все методы внутри абстрактные
interface ModelInterface
{
    // получаем все товары
    public function getAll();

    // получаем по id
    public function getById(int $id);

    // удаляем по id
    public function delete(int $id);

    // получаем имя таблицы БД
    public function getTableName(): string;
}