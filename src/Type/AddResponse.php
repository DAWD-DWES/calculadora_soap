<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AddResponse implements ResultInterface
{
    /**
     * @var int
     */
    private int $AddResult;

    /**
     * @return int
     */
    public function getAddResult() : int
    {
        return $this->AddResult;
    }

    /**
     * @param int $AddResult
     * @return static
     */
    public function withAddResult(int $AddResult) : static
    {
        $new = clone $this;
        $new->AddResult = $AddResult;

        return $new;
    }
}

