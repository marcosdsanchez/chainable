<?php

namespace Chainable\Handler;

use Chainable\ChainableInterface;

interface ChainHandlerInterface
{
    /**
     * @param ChainableInterface $chainable
     *
     * @return mixed
     */
    public function append(ChainableInterface $chainable);

    /**
     * @param mixed $data
     *
     * @return mixed
     */
    public function process(... $data);
}
