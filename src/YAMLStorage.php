<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 22.04.19
 * Time: 17:23
 */

namespace App;


use Symfony\Component\Yaml\Yaml;

class YAMLStorage extends AbstractController
{

    public function set($key, $value)
    {
        $arr = $this->getData();
        $arr[$key] = $value;
        $dataYaml = Yaml::dump($arr);
        file_put_contents('yaml_storage.yaml', $dataYaml);
    }

    public function remove($key)
    {
        $arr = $this->getData();
        if(isset($arr[$key])){
            unset($arr[$key]);
            file_put_contents('yaml_storage.yaml',Yaml::dump($arr));
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