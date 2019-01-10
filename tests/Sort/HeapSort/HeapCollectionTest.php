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
use TimeHunter\LaravelAlgorithmBundle\Sort\HeapSort\HeapCollection;

class HeapCollectionTest extends TestCase
{

    public function testBasic()
    {
        $s = new HeapCollection();
        $res = $s->findKLargestElements([1, 34333, 3, 12, 222, 4], 4);
        $this->assertEquals(array_reverse([34333, 222, 12, 4]), $res);
    }


    public function testBasic2()
    {
        $s = new HeapCollection();
        $res = $s->findKLargestElements([2, 222, 22, 22, 33, 33], 4);
        $this->assertEquals(array_reverse([222, 33, 33, 22]), $res);
    }


    public function testBasic3()
    {
        $s = new HeapCollection();
        $res = $s->findKLargestElements([2, 222, 22, 22, 33, 33], 1);
        $this->assertEquals(array_reverse([222]), $res);
    }


    public function testBasic4()
    {
        $s = new HeapCollection();
        $res = $s->findKLargestElements([2], 1);
        $this->assertEquals(array_reverse([2]), $res);
    }


//    public function testBasic5()
//    {
//        $s = new HeapCollection();
//        $res = $s->findKFrequentElements(
//            [
//                'a' => 5,
//                'e' => 1,
//                'h' => 55,
//                't' => 2
//            ]
//            ,
//            1);
//        $this->assertEquals([ 'h'], $res);
//    }


    public function testBasic6()
    {
        $s = new HeapCollection();
        $res = $s->findKSmallestElements(
            [
                1,
                5,
                55,
                2
            ]
            ,
            2);
        $this->assertEquals([2, 1], $res);
    }


    public function testBasic7()
    {
        $s = new HeapCollection();
        $res = [
            1,
            6,
            8,
            9,
            11,
            2,
            3,
            2,
            222,
            8,
            4
        ];
        $res = $s->findKSmallestElements(
            $res
            ,
            3);
        $this->assertEquals([2, 2, 1], $res);
    }




    public function testBasic8()
    {
        $s = new HeapCollection();
        $res = $s->findKFrequentElementsByMap(
            [
                'a' => 5,
                'e' => 55,
                'h' => 55,
                't' => 2
            ]
            ,
            3);
        $this->assertEquals(['e', 'h'], $res);
    }


}