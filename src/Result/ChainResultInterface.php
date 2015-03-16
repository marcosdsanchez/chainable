<?php

namespace Chainable\Result;

interface ChainResultInterface
{
    /**
     * @return bool
     */
    public function isSuccess();

    /**
     * @return mixed
     */
    public function getData();
}
