<?php

use \PHPUnit\Framework\TestCase;

require_once('../simpleTest.php');

class simplePHPUnitTest extends TestCase
{
    public function test_true()
    {
        $this->assertTrue(simpleText('TEST') === 'TEST');
    }

    public function test_error()
    {
        $this->assertTrue(simpleText('TEST') === 'ERROR');
    }
}