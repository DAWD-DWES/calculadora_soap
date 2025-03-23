<?php

namespace Clases;

use Phpro\SoapClient\Caller\Caller;
use Clases\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class CalculatorClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * Adds two integers. This is a test WebService. ©DNE Online
     *
     * @param RequestInterface & Type\Add $parameters
     * @return ResultInterface & Type\AddResponse
     * @throws SoapException
     */
    public function add(\Clases\Type\Add $parameters) : \Clases\Type\AddResponse
    {
        $response = ($this->caller)('Add', $parameters);

        \Psl\Type\instance_of(\Clases\Type\AddResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Subtract $parameters
     * @return ResultInterface & Type\SubtractResponse
     * @throws SoapException
     */
    public function subtract(\Clases\Type\Subtract $parameters) : \Clases\Type\SubtractResponse
    {
        $response = ($this->caller)('Subtract', $parameters);

        \Psl\Type\instance_of(\Clases\Type\SubtractResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Multiply $parameters
     * @return ResultInterface & Type\MultiplyResponse
     * @throws SoapException
     */
    public function multiply(\Clases\Type\Multiply $parameters) : \Clases\Type\MultiplyResponse
    {
        $response = ($this->caller)('Multiply', $parameters);

        \Psl\Type\instance_of(\Clases\Type\MultiplyResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Divide $parameters
     * @return ResultInterface & Type\DivideResponse
     * @throws SoapException
     */
    public function divide(\Clases\Type\Divide $parameters) : \Clases\Type\DivideResponse
    {
        $response = ($this->caller)('Divide', $parameters);

        \Psl\Type\instance_of(\Clases\Type\DivideResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

