<?php

namespace Chainable;

use Chainable\Result\ChainResultInterface;

interface ChainableInterface
{
    /**
     * @param mixed $data
     *
     * @return ChainResultInterface
     */
    public function process(... $data);
}
