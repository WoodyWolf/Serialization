<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 22.04.19
 * Time: 16:50
 */

namespace App;

interface KeyValueStorageInterface
{
    public function set($key,$value);
    public function get($key);
    public function has($key):bool;
    public function remove($key);
}