<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SubtractResponse implements ResultInterface
{
    /**
     * @var int
     */
    private int $SubtractResult;

    /**
     * @return int
     */
    public function getSubtractResult() : int
    {
        return $this->SubtractResult;
    }

    /**
     * @param int $SubtractResult
     * @return static
     */
    public function withSubtractResult(int $SubtractResult) : static
    {
        $new = clone $this;
        $new->SubtractResult = $SubtractResult;

        return $new;
    }
}

