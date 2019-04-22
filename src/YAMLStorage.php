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
        $dataJson = Yaml::dump($arr);
        file_put_contents('yaml_storage.yaml', $dataJson);
    }

    public function remove($key)
    {
        $arr = $this->getData();
        if(isset($arr[$key])){
            unset($arr[$key]);
            file_put_contents(yaml_storage.yaml,Yaml::dump($arr));
            return true;
        }
        else
            return false;
    }

    public function getData()
    {
        return Yaml::parseFile('yaml_storage.yaml');
    }
}