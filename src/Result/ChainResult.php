<?php

namespace Chainable\Result;

final class ChainResult implements ChainResultInterface
{
    /**
     * @var bool
     */
    private $isSuccess;
    /**
     * @var mixed
     */
    private $data;

    /**
     * @param mixed $data
     * @param bool  $isSuccess
     */
    public function __construct($data, $isSuccess)
    {
        $this->data = $data;
        $this->isSuccess = $isSuccess;
    }

    /**
     * @return bool
     */
    public function isSuccess()
    {
        return $this->isSuccess;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }
}
