<?php

namespace Simtabi\Ensue\Test\Rules;

class BicTest extends AbstractRuleTestCase
{
    /**
     * Valid values
     *
     * @var array
     */
    protected $valid = [
        'PBNKDEFF',
        'NOLADE21SHO',
    ];

    /**
     * Invalid values
     *
     * @var array
     */
    protected $invalid = [
        'ABNFDBF',
        'GR82WEST',
        '5070081',
        'DEUTDBBER'
    ];
}
