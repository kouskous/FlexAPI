<?php

/**
 * Created by PhpStorm.
 * User: zekri
 * Date: 13/02/17
 * Time: 11:41
 */
class Autoloader
{
    protected static $fileExt = '.php';
    protected static $pathTop = __DIR__;
    protected static $fileIterator = null;

    public static function loader($className)
    {

        $directory = new RecursiveDirectoryIterator(static::$pathTop, RecursiveDirectoryIterator::SKIP_DOTS);
        if (is_null(static::$fileIterator)) {
            static::$fileIterator = new RecursiveIteratorIterator($directory, RecursiveIteratorIterator::LEAVES_ONLY);
        }
        $className = explode("\\", $className);
        $className = $className[count($className) - 1];
        $filename = $className . static::$fileExt;
        foreach (static::$fileIterator as $file) {
            //exit(strtolower($filename));
            if (strtolower($file->getFilename()) === strtolower($filename)) {
                if ($file->isReadable()) {
                    include_once $file->getPathname();
                }
                break;
            }
        }

    }

    public static function setFileExt($fileExt)
    {
        static::$fileExt = $fileExt;
    }

    public static function setPath($path)
    {
        static::$pathTop = $path;
    }
}


