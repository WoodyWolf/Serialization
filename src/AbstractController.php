<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 22.04.19
 * Time: 17:00
 */

namespace App;

abstract class AbstractController implements KeyValueStorageInterface
{
    abstract public function set($key, $value);
    abstract public function remove($key);
    abstract public function getData();

    public function get($key)
    {
        $arr = $this->getData();
        if($this->has($key)){
            return $arr[$key];
        }
        else
            return null;
    }

    public function has($key):bool
    {
        $arr = $this->getData();
        return isset($arr[$key]);
    }

}