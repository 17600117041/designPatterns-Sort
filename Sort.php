<?php
/**
 * Created by PhpStorm.
 * User: zhangda
 * Date: 2017/5/8
 * Time: 下午5:45
 */
class Sort
{
    //二分查找   递归
    public function twoSearch($array, $k, $lower = 0, $higher = 0)
    {
        //判断是否为第一次调用
        if (count($array) != 0 && $higher == 0) {
            $higher = count($array);
        }
        if ($lower < $higher) {  //如果还存在剩余的元素
            $mid = intval(($lower + $higher) / 2);   //取中间数值
            if ($array[$mid] == $k) {   //如果存在则返回
                return $mid;
            } elseif ($array[$mid] > $k) {  //如果不存在 继续查找
                //echo 'where';
                return twoSearch($array, $k, $lower, $mid - 1);
            } else {
                return twoSearch($array, $k, $mid + 1, $higher);
            }
        }
        return -1;
    }

    public function twoSearch1($array, $k, $low = 0, $high = 0)
    {
        if (!count($array) && $high == 0) {
            $high = count($array);
        }
        if ($low < $high) {
            $mid = intval(($low + $high) / 2);
            if ($array[$mid] = $k) {
                return $mid;
            } elseif ($array[$mid] > $k) {
                return twoSearch1($array, $k, $low, $mid - 1);
            } else {
                return twoSearch1($array, $k, $mid + 1, $high);
            }
        }
    }

    //while 循环实现二分法
    public function erSearch($arr, $k, $low = 0, $high = 0)
    {
        if (count($arr) != 0 && $high == 0) {
            $high = count($arr);
        }
        while ($low < $high) {
            $mid = intval(($low + $high) / 2);
            if ($arr[$mid] == $k) {
                return $mid;
            } elseif ($arr[$mid] < $k) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }
    }

    //冒泡排序
    public function bubbleSort($arr)
    {
        $n = count($arr);
        if ($n <= 1) {
            return $arr;
        }
        for ($i = 1; $i < $n; $i++) {
            for ($j = 0; $j < $n - $i; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $k = $arr[$j + 1];
                    $arr[$j + 1] = $arr[$j];
                    $arr[$j] = $k;
                }
            }
        }
        return $arr;
    }

    //选择排序
    public function selectSort($arr)
    {
        $count = count($arr);
        for ($i = 1; $i < $count; $i++) {
            //假设最小值的位置
            $min = $i;
            for ($j = $i + 1; $j < $count; $j++) {
                if ($arr[$min] > $arr[$j]) {
                    $min = $j;
                }
            }
            if ($min != $i) {
                $tmp = $arr[$min];
                $arr[$min] = $arr[$i];
                $arr[$i] = $tmp;
            }
        }
        return $arr;
    }

    //快速排序
    public function quickSort($arr)
    {
        $count = count($arr);
        if ($count < 1) {
            return $arr;
        }
        $base_num = $arr[0];
        $left_arr = array();
        $right_arr = array();
        for ($i = 1; $i < $count; $i++) {
            if ($base_num > $arr[$i]) {
                $left_arr = $arr[$i];
            } else {
                $right_arr = $arr[$i];
            }
        }
        $left_arr = quickSort($left_arr);
        $right_arr = quickSort($right_arr);
        $arr = array_merge($left_arr, array($base_num), $right_arr);
        return $arr;
    }

    //堆排序

}
//$arr = [1,31,22,5,8,3,9,0];
////$res = bubbleSort($arr);
////$res = selectSort($arr);
//$res = quickSort($arr);
//var_dump($res);
//$array = array(2,4,5,7,8,9,12);

//echo erSearch($array,9);
//$day = '2017-05-15';
//
////$a = date('Y-m-d',strtotime("+10day", strtotime($day)) -1);
//echo bcrypt('123456');
var_dump(json_decode($data));