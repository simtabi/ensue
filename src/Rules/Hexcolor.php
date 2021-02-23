<?php

namespace Simtabi\Ensue\Validation\Rules;

use Simtabi\Ensue\Validation\AbstractRegexRule;

class Hexcolor extends AbstractRegexRule
{
    /**
     * Regular expression pattern for RGB hex color
     *
     * @var string
     */
    protected $pattern = "/^#?([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/";
}
