<?php
class ArrayTest extends PHPUnit_Framework_TestCase {
    function append($arr, $val) {
        $arr[] = $val;
        return $arr;
    }
    function test_unset_and_append() {
        $this->markTestIncomplete();
        $arr = array(0, 1);
        unset($arr[1]);
        $arr = $this->append($arr, 2);
        $this->assertEquals(2, $arr[2]);
    }
    function return_array() {
        $arr = array(0, 1);
        unset($arr[1]);
        return $arr;
    }
    function test_array_returns_array() {
        $arr = $this->return_array();
        $arr[] = 2;
        $this->assertEquals(2, $arr[2]);
    }
}
