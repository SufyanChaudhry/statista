<?php

namespace Tests\Unit;

use App\Http\Controllers\HomeController;
use PHPUnit\Framework\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_1()
    {
        $home = new HomeController();
        $actual = $home->output(1);
        $this->assertSame("1", $actual);
    }

    public function test_3()
    {
        $home = new HomeController();
        $actual = $home->output(3);
        $this->assertSame("Fizz", $actual);
    }

    public function test_5()
    {
        $home = new HomeController();
        $actual = $home->output(5);
        $this->assertSame("Buzz", $actual);
    }

    public function test_15()
    {
        $home = new HomeController();
        $actual = $home->output(15);
        $this->assertSame("FizzBuzz", $actual);
    }

    public function test_33()
    {
        $home = new HomeController();
        $actual = $home->output(33);
        $this->assertSame("Fizz", $actual);
    }

    public function test_75()
    {
        $home = new HomeController();
        $actual = $home->output(75);
        $this->assertSame("FizzBuzz", $actual);
    }

    public function test_99()
    {
        $home = new HomeController();
        $actual = $home->output(99);
        $this->assertSame("Fizz", $actual);
    }

    public function test_100()
    {
        $home = new HomeController();
        $actual = $home->output(100);
        $this->assertSame("Buzz", $actual);
    }
}
