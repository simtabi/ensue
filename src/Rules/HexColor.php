<?php

namespace Simtabi\Ensue\Rules;

use Simtabi\Ensue\AbstractRegexRule;

class HexColor extends AbstractRegexRule
{
    /**
     * Regular expression pattern for RGB hex color
     *
     * @var string
     */
    protected string $pattern = "/^#?([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/";
}
