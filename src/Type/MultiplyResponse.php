<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class MultiplyResponse implements ResultInterface
{
    /**
     * @var int
     */
    private int $MultiplyResult;

    /**
     * @return int
     */
    public function getMultiplyResult() : int
    {
        return $this->MultiplyResult;
    }

    /**
     * @param int $MultiplyResult
     * @return static
     */
    public function withMultiplyResult(int $MultiplyResult) : static
    {
        $new = clone $this;
        $new->MultiplyResult = $MultiplyResult;

        return $new;
    }
}

