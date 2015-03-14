<?php namespace PhpDaddy\Contract\Multiton\Test;

use PhpDaddy\Contract\Multiton\Stub\MultitonStub;

class MultitonTest extends TestCase
{
    /** @test */
    public function should_instantiate()
    {
        $firstInstance = MultitonStub::getInstance('first_key');

        $this->assertInstanceOf(
            'PhpDaddy\Contract\Multiton\Multiton',
            $firstInstance
        );
    }

    /** @test */
    public function should_have_different_instances()
    {
        $firstInstance = MultitonStub::getInstance('first_key');
        $secondInstance = MultitonStub::getInstance('second_key');

        $this->assertInstanceOf(
            'PhpDaddy\Contract\Multiton\Multiton',
            $firstInstance
        );

        $this->assertInstanceOf(
            'PhpDaddy\Contract\Multiton\Multiton',
            $secondInstance
        );

        $this->assertEquals($firstInstance, $secondInstance);
    }
}
