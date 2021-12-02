<?php

use pereuda\lab4\creditinterest\simpleinterest;
use Pereuda\lab4\excepcions\custexcept;
use PHPUnit\Framework\TestCase;

class simpleinterestTest extends TestCase
{
    private simpleinterest $example;

    public function setUp(): void
    {
        $this->example = new simpleinterest();
    }
    /** @test */
    public function Testindebtedness_s () {
        $this->assertEquals(65000, $this->example->indebtedness(50000,10,3));
    }
    /** @test */
    public function TestExcept(){
        $this->expectException(custexcept::class);
        $this->example->indebtedness("rf",10,3);
        $this->example->indebtedness(-1000,10,3);
    }

}
