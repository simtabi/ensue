<?php

namespace Simtabi\Ensue\Validation\Rules;

use Simtabi\Ensue\Validation\AbstractRegexRule;

class Camelcase extends AbstractRegexRule
{
    /**
     * Regular expression pattern for upper or lower camelCase string
     *
     * @var string
     */
    protected $pattern = "/^(?:\p{Lu}?\p{Ll}+)(?:\p{Lu}\p{Ll}+)*$/u";
}
