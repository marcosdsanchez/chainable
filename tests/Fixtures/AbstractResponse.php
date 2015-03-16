<?php

namespace ChainableTest\Fixtures;

use Chainable\ChainableInterface;
use Chainable\Result\ChainResult;
use Chainable\Result\ChainResultInterface;

abstract class AbstractResponse implements ChainableInterface
{
    abstract public function getValue();

    /**
     * @param mixed $data
     *
     * @return ChainResultInterface
     */
    public function process(... $data)
    {
        return new ChainResult($this->getValue(), reset(reset($data)) === $this->getValue());
    }
}
