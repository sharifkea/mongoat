<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once("fun.php");

final class dataTest extends TestCase

{
    public function testadd(){

        
        $result =add(6,9);
        $expected=15;
        $this->assertEquals($expected, $result);
    }
    public function testsub(){

        
        $result =sub(9,6);
        $expected=3;
        $this->assertEquals($expected, $result);
    }
}