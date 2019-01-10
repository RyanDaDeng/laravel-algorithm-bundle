<?php
/**
 * Created by PhpStorm.
 * User: dadeng
 * Date: 2019/1/10
 * Time: 9:28 PM
 */

namespace TimeHunter\LaravelAlgorithmBundle\Test\Sort\HeapSort;

use PHPUnit\Framework\TestCase;
use TimeHunter\LaravelAlgorithmBundle\Sort\HeapSort\Heap;

class HeapTest extends TestCase
{

    public function testBasic()
    {
        $s = new Heap();

        $res = [1, 34333, 3, 12, 222, 4];
        $s->maxHeapSort($res);

        $this->assertEquals([1, 3, 4, 12, 222, 34333], $res);
    }


    public function testBasic2()
    {
        $s = new Heap();
        $arr = [1, 222, 5, 5, 5, 6, 6, 68, 111, 5];
        $s->maxHeapSort($arr);

        $this->assertEquals([1, 5, 5, 5, 5, 6, 6, 68, 111, 222], $arr);
    }


    public function testBasic3()
    {
        $s = new Heap();

        $arr = [4, 6, 2, 8, 9, 1, 8];
        $s->maxHeapSort($arr);

        $this->assertEquals([1, 2, 4, 6, 8, 8, 9], $arr);
    }

    public function testBasic4()
    {
        $s = new Heap();

        $arr = [1, 34333, 3, 12, 222, 4];
        $s->buildMinHeap($arr);
        $this->assertEquals([1, 12, 3, 34333, 222, 4], $arr);
    }


    public function testBasic5()
    {
        $s = new Heap();
        $arr = [1, 34333, 3, 12, 222, 4];
        $s->minHeapSort($arr);
        $this->assertEquals([34333, 222, 12, 4, 3, 1], $arr);
    }

}