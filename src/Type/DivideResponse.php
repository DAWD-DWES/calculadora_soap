<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DivideResponse implements ResultInterface
{
    /**
     * @var int
     */
    private int $DivideResult;

    /**
     * @return int
     */
    public function getDivideResult() : int
    {
        return $this->DivideResult;
    }

    /**
     * @param int $DivideResult
     * @return static
     */
    public function withDivideResult(int $DivideResult) : static
    {
        $new = clone $this;
        $new->DivideResult = $DivideResult;

        return $new;
    }
}

