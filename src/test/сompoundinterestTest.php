<?php

use PHPUnit\Framework\TestCase;
use Pereuda\lab4\creditinterest\сompoundinterest;
use Pereuda\lab4\excepcions\custexcept;

class сompoundinterestTest extends TestCase
{
    private сompoundinterest $example;

    public function setUp(): void
    {
        $this->example = new сompoundinterest();
    }

    public function test_indebtedness_c (){
        $this->assertEquals(91252.5, $this->example->indebtedness(60000,15,3));
    }

    public function test_except(){
        $this->expectException(custexcept::class);
        $this->example->indebtedness("rf",10,3);
        $this->example->indebtedness(0,10,3);
    }
}