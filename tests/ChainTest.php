<?php

namespace ChainableTest;

use Chainable\Handler\ChainHandler;
use ChainableTest\Fixtures\ResponseA;
use ChainableTest\Fixtures\ResponseB;

class ChainTest extends \PHPUnit_Framework_TestCase
{
    public function testResponseInFirstChain()
    {
        $chainHandler = $this->create([new ResponseA(), new ResponseB()]);
        $this->assertEquals('A', $chainHandler->process('A'));
    }

    public function testResponseInSecondChain()
    {
        $chainHandler = $this->create([new ResponseA(), new ResponseB()]);
        $this->assertEquals('B', $chainHandler->process('B'));
    }

    public function testResponseWithoutSuccess()
    {
        $chainHandler = $this->create([new ResponseA(), new ResponseB()]);
        $this->assertNull($chainHandler->process('C'));
    }

    private function create($chains)
    {
        $chainHandler = new ChainHandler();
        foreach ($chains as $chain) {
            $chainHandler->append($chain);
        }

        return $chainHandler;
    }
}
