<?php

namespace Simtabi\Ensue\Validation\Rules;

use Simtabi\Ensue\Validation\AbstractRegexRule;

class Kebabcase extends AbstractRegexRule
{
    /**
     * Regular expression pattern for kebab-case string
     *
     * @var string
     */
    protected $pattern = "/^(?:\p{Ll}+\-)*\p{Ll}+$/u";
}
