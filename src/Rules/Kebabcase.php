<?php

namespace Simtabi\Ensue\Rules;

use Simtabi\Ensue\AbstractRegexRule;

class Kebabcase extends AbstractRegexRule
{
    /**
     * Regular expression pattern for kebab-case string
     *
     * @var string
     */
    protected string $pattern = "/^(?:\p{Ll}+\-)*\p{Ll}+$/u";
}
