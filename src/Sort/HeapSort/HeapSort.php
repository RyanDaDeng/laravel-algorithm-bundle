<?php
/**
 * Created by PhpStorm.
 * User: dadeng
 * Date: 2019/1/10
 * Time: 7:55 PM
 */

namespace TimeHunter\LaravelAlgorithmBundle\Sort\HeapSort;


/**
 * Class HeapSort
 * @package TimeHunter\LaravelAlgorithmBundle\Sort\HeapSort
 */
class HeapSort
{


    /**
     * Used to check the node if it satisfies the max heap requirement
     * @param array $array
     * @param $index
     * @param $heapSize
     */
    public function maxHeapify(&$array = [], $index, $heapSize)
    {
        dump("check index $index, value is $array[$index]");
        while (true) {

            $leftChildIndex = $index * 2 + 1;
            $rightChildIndex = $index * 2 + 2;
            $maxValueIndex = $index; // set current index as max value pointer

            // if left child greater than max, then assign left to max
            if ($leftChildIndex < $heapSize && $array[$leftChildIndex] > $array[$index]) {
                $maxValueIndex = $leftChildIndex;
            }

            // if right child greater than max, then assign right to max
            if ($rightChildIndex < $heapSize && $array[$rightChildIndex] > $array[$maxValueIndex]) {
                $maxValueIndex = $rightChildIndex;
            }

            if ($maxValueIndex === $index) {
                dump("max $maxValueIndex equal to index $index");
                // if there is no more data greater than current index
                break;
            } else {

                dump("parent less than child for index $index, swap it with maxindex $maxValueIndex");
                // swap the node
                $temp = $array[$index];
                $array[$index] = $array[$maxValueIndex];
                $array[$maxValueIndex] = $temp;
                $index = $maxValueIndex;
            }
        }
    }


    /**
     * Create one Max Heap by a given array
     * @param $array
     */
    public function buildMaxHeap(&$array)
    {
        $length = count($array);
        $start = (int)floor($length / 2 - 1);
        for ($i = $start; $i >= 0; $i--) {
            $this->maxHeapify($array, $i, $length);
        }
    }

    /**
     * @param $array
     * @return array
     */
    public function maxHeapSort($array)
    {
        // make an initial heap first
        $this->buildMaxHeap($array);
        $length = count($array);

        // loop through right first, which means bottom-up search
        for ($i = $length - 1; $i >= 1; $i--) {

            // swap the root node with last node, so the the root node swap to
            $temp = $array[0]; // current biggest node
            $array[0] = $array[$i]; // assign last node (end of array) to replace 0 index
            $array[$i] = $temp; // assign the biggest node to be last node

            // so the $i decrease, and right-side child will be kept as in order
            $this->maxHeapify($array, 0, $i);
        }

        dump("done");
        return $array;
    }
}