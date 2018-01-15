<?php
/**
 * Created by PhpStorm.
 * User: carles
 * Date: 12/01/2018
 * Time: 14:52
 */

namespace Bitblitter\Foo\Tests;

use Bitblitter\Foo\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calc = new Calculator();
        $this->assertEquals(3, $calc->add(1, 2));
    }
}
