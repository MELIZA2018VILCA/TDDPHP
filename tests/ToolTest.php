<?php

use App\Tool;
use PHPUnit\Framework\TestCase;

class toolTest extends TestCase
{
    public function test_unique_with_interger()
    {
        $original = [10, 100, 1000, 500, 100, 500];
        $expended = [10, 100, 1000, 500];
        $result = Tool::unique($original);
        $this->assertEquals($expended, $result);
    }

    public function test_unique_with_text()
    {
        $original = ['halo', 'halo', 'ver', 'siguiente', 'prueba'];
        $expended = ['halo', 'ver', 'siguiente', 'prueba'];
        $result = Tool::unique($original);
        $this->assertEquals($expended, $result);
    }
    public function test_email()
    {

        $result = Tool::email('melizavilca@gmail.com');
        $this->assertTrue($result);
        $result = Tool::email('melizavilca@@gmail.com');
        $this->assertFalse($result);
    }
}
