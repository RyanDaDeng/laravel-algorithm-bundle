<?php
/**
 * Created by PhpStorm.
 * User: dadeng
 * Date: 2019/1/10
 * Time: 7:55 PM
 */

namespace TimeHunter\LaravelAlgorithmBundle\Sort\HeapSort;


class HeapSortBundle extends HeapSort
{

    /**
     * @param array $array
     * @param int $k
     */
    public function findKClosetElements($array = [], $k)
    {


    }


    /**
     * @param array $array
     * @param $k
     * @return array
     */
    public function findKLargestElements($array = [], $k)
    {
        $array = $this->maxHeapSort($array);
        $res = [];
        $size = sizeof($array);
        for ($i = $size - 1; $i > $size - $k - 1; $i--) {
            $res[] = $array[$i];
        }
        return $res;
    }


    /**
     * @param array $array
     * @param $k
     * @return array
     */
    public function findKSmallestElements($array = [], $k)
    {
        // make k sized heap array
        $res = [];
        for ($i = 0; $i < $k; $i++) {
            $res[] = $array[$i];
        }

        $this->buildMaxHeap($res);

        $size = sizeof($array);
        for ($i = $k; $i < $size; $i++) {
            if($res[0] > $array[$i]){
                $res[0] = $array[$i];
                $this->buildMaxHeap($res);
            }
        }
        return $res;
    }


    public function findKFrequentElements($map = [], $k)
    {
        $valueToKey = [];
        $values = [];
        foreach ($map as $key => $value) {
            $valueToKey[$value] = $key;
            $values[] = $value;
        }

        $array = $this->maxHeapSort($values);

        $res = [];

        $size = sizeof($array);

        for ($i = $size - 1; $i > $size - $k - 1; $i--) {
            $res[] = $valueToKey[$array[$i]];
        }
        return $res;
    }
}