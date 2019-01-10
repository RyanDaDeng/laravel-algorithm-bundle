<?php
/**
 * Created by PhpStorm.
 * User: dadeng
 * Date: 2019/1/10
 * Time: 9:28 PM
 */

namespace TimeHunter\LaravelAlgorithmBundle\Test\Sort\HeapSort;

use PHPUnit\Framework\TestCase;
use TimeHunter\LaravelAlgorithmBundle\Sort\HeapSort\HeapSort;

class HeapSortTest extends TestCase
{

    public function testBasic()
    {
        $s = new HeapSort();

        $res = $s->maxHeapSort([1,34333,3,12,222,4]);

        $this->assertEquals([1,3,4,12,222,34333],$res);
    }



    public function testBasic2()
    {
        $s = new HeapSort();

        $res = $s->maxHeapSort([1,222,5,5,5,6,6,68,111,5]);

        $this->assertEquals([1,5,5,5,5,6,6,68,111,222],$res);
    }



    public function testBasic3()
    {
        $s = new HeapSort();

        $res = $s->maxHeapSort([4,6,2,8,9,1,8]);

        $this->assertEquals([1,2,4,6,8,8,9],$res);
    }


}