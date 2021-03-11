<?php

namespace Simtabi\Ensue\Rules;

use Simtabi\Ensue\AbstractRegexRule;

class CamelCase extends AbstractRegexRule
{
    /**
     * Regular expression pattern for upper or lower camelCase string
     *
     * @var string
     */
    protected string $pattern = "/^(?:\p{Lu}?\p{Ll}+)(?:\p{Lu}\p{Ll}+)*$/u";
}
