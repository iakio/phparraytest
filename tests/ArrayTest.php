<?php
class ArrayTest extends PHPUnit_Framework_TestCase {
    function append($arr, $val) {
        $arr[] = $val;
        return $arr;
    }
    function test_unset_and_append() {
        $arr = array(0, 1);
        unset($arr[1]);
        $arr = $this->append($arr, 2);
        $this->assertEquals(2, $arr[2]);
    }
}
