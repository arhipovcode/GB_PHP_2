<?php
namespace app\services;

class Autoloader
{
    // расширение файла(приватное свойство)
    private $fileExtention = ".php";

    public function loadclass(string $classname)
    {
        //заменяем входные параметры $classname
        // константы берутся из config файла
        $classname = str_replace([ROOT_NAMESPACE[0], ROOT_NAMESPACE[1]], [ROOT_DIR[0], ROOT_DIR[1]], $classname);

        // realPath - убирает не нужные символы, а также ставит нужные для системы слэши
        $filename = realpath($classname . $this->fileExtention);

        if(file_exists($filename)) {
            require $filename;
            return true;
        }
        return false;
    }
}