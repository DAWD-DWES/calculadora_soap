<?php

namespace Clases\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Divide implements RequestInterface
{
    /**
     * @var int
     */
    private int $intA;

    /**
     * @var int
     */
    private int $intB;

    /**
     * Constructor
     *
     * @param int $intA
     * @param int $intB
     */
    public function __construct(int $intA, int $intB)
    {
        $this->intA = $intA;
        $this->intB = $intB;
    }

    /**
     * @return int
     */
    public function getIntA() : int
    {
        return $this->intA;
    }

    /**
     * @param int $intA
     * @return static
     */
    public function withIntA(int $intA) : static
    {
        $new = clone $this;
        $new->intA = $intA;

        return $new;
    }

    /**
     * @return int
     */
    public function getIntB() : int
    {
        return $this->intB;
    }

    /**
     * @param int $intB
     * @return static
     */
    public function withIntB(int $intB) : static
    {
        $new = clone $this;
        $new->intB = $intB;

        return $new;
    }
}

