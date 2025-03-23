<?php

namespace Clases;

use Clases\Type;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;

class CalculatorClassmap
{
    public static function getCollection() : \Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('Add', Type\Add::class),
            new ClassMap('AddResponse', Type\AddResponse::class),
            new ClassMap('Subtract', Type\Subtract::class),
            new ClassMap('SubtractResponse', Type\SubtractResponse::class),
            new ClassMap('Multiply', Type\Multiply::class),
            new ClassMap('MultiplyResponse', Type\MultiplyResponse::class),
            new ClassMap('Divide', Type\Divide::class),
            new ClassMap('DivideResponse', Type\DivideResponse::class),
        );
    }
}

