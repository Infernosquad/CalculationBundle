<?php

namespace Infernosquad\CalculationBundle\Tests;

use NumbersPHP\Basic;

class CalculationTest extends \PHPUnit_Framework_TestCase
{
    public function testSum()
    {
        $result = Basic::sum(array(1,2));

        $this->assertEquals(3, $result);
    }

}