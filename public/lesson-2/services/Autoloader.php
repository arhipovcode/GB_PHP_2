<?php
namespace app\services;

class Autoloader
{
    public function loadclass(string $classname)
    {
        //replaceClassName - заменяет входные параметры $classname
        $replaceClassName = str_replace(['app', '\\'], ['/..', '/'], $classname);

        $filename = $_SERVER['DOCUMENT_ROOT'] . "{$replaceClassName}.php";

        if(file_exists($filename)) {
            require $filename;
            return true;
        }
        return false;
    }
}