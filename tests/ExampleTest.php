<?php

namespace Foo\Tests;

use Foo\Example;
use Foo\Foo;
use Foo\Bar;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{

    public function testSomething()
    {
        $this->assertTrue(true);
    }

    public function testSomething2()
    {
        $this->assertTrue(true);
    }

    public function testSomething3()
    {
        $this->assertTrue(true);
    }

    public function testSomething4()
    {
        $this->assertTrue(true);
    }
    public function testSomething5()
    {
        $this->assertTrue(true);
    }

    public function testSomething46()
    {
        $this->assertTrue(true);
    }

    public function testSomething47()
    {
        $this->assertTrue(true);
    }

    public function testSomething48()
    {
        $this->assertTrue(true);
    }

    public function testSomething49()
    {
        $this->assertTrue(true);
    }

    public function testSomething41()
    {
        $this->assertTrue(true);
    }

    public function testSomething43()
    {
        $this->assertTrue(true);
    }

    public function testSomething42()
    {
        $this->assertTrue(true);
    }

    public function testSomething44()
    {
        $this->assertTrue(true);
    }

    public function testSomething99()
    {
        $eg = new Example;
        $bar = new Bar;

        $foo = $this->prophesize(Foo::class);
        $foo->something($bar)->shouldBeCalled();

        $eg->do($foo->reveal(), $bar);
    }

}