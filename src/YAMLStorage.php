<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 22.04.19
 * Time: 17:23
 */

namespace App;



class YAMLStorage extends AbstractController
{

    public function set($key, $value)
    {
        $arr = $this->getData();
        $arr[$key] = $value;
        $dataJson = json_encode($arr);
        file_put_contents('json_storage.json', $dataJson);
    }

    public function remove($value)
    {
        // TODO: Implement remove() method.
    }

    public function getData()
    {
        // TODO: Implement getData() method.
    }
}