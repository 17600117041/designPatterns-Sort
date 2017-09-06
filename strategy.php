<?php
/**
 * Created by PhpStorm.
 * User: zhangda
 * Date: 2017/6/26
 * Time: 下午3:04
 */
//策略模式：  设计帮助构建的对象本身不必包括逻辑而是能够根据需要利用其他对象中的算法

class Strategy
{
    protected $data;

    public function __construct($title,$info)
    {
        $this->data['title'] = $title;
        $this->data['info'] = $info;
    }

    public function getData($obj_type)
    {
        return $obj_type->get($this->data);
    }
}

class Json
{
    public function get($data)
    {
        return json_encode($data);
    }
}

class Xml
{
    public function get($data)
    {
        $xml = '<?xml version="1.0" encoding="utf-8"?>';
        $xml .= '<return>';
        $xml .= '<data>' .serialize($data). '</data>';
        $xml .= '</return>';
        return $xml;
    }
}

$CI = new Strategy('developmentLang','PHP');

//echo $CI->getData(new json);

//echo $CI->getData(new xml);