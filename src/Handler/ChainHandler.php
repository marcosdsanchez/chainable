<?php

namespace Chainable\Handler;

use Chainable\ChainableInterface;

final class ChainHandler implements ChainHandlerInterface
{
    /**
     * @var ChainableInterface[]
     */
    private $chain = [];

    /**
     * @param ChainableInterface $chainable
     *
     * @return $this
     */
    public function append(ChainableInterface $chainable)
    {
        $this->chain[] = $chainable;

        return $this;
    }

    /**
     * @param callable $data
     *
     * @return mixed|null
     */
    public function process(... $data)
    {
        foreach ($this->chain as $chain) {
            $result = $chain->process($data);
            if ($result->isSuccess()) {
                return $result->getData();
            }
        }
    }
}
