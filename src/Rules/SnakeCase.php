<?php

namespace Simtabi\Ensue\Rules;

use Simtabi\Ensue\AbstractRegexRule;

class SnakeCase extends AbstractRegexRule
{
    /**
     * Regular expression pattern for snake_case string
     *
     * @var string
     */
    protected string $pattern = "/^(?:\p{Ll}+_)*\p{Ll}+$/u";
}
