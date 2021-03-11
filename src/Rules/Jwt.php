<?php

namespace Simtabi\Ensue\Rules;

use Simtabi\Ensue\AbstractRegexRule;

class Jwt extends AbstractRegexRule
{
    /**
     * Regular expression pattern of JWT
     *
     * @var string
     */
    protected string $pattern = "/^[a-zA-Z0-9-_]+\.[a-zA-Z0-9-_]+\.[a-zA-Z0-9-_]+$/";
}
