<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 22.04.19
 * Time: 17:20
 */

namespace App;


class JSONStorage extends AbstractController
{

    public function set($key, $value)
    {
        $arr = $this->getData();
        $arr[$key] = $value;
        $dataJson = json_encode($arr);
        file_put_contents('json_storage.json', $dataJson);
    }

    public function remove($key)
    {
        $arr = $this->getData();
        if ($this->has($key)){
            unset($arr[$key]);
            file_put_contents('json_storage.json',json_encode($arr));
            return true;
        }
        return false;
    }

    public function getData()
    {
        $file = file_get_contents('json_storage.json');
        return json_decode($file,true);
    }
}