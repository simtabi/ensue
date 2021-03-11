<?php

namespace Simtabi\Ensue\Rules;

use Simtabi\Ensue\AbstractRegexRule;

class MacAddress extends AbstractRegexRule
{
    /**
     * Mac Adress regex pattern
     *
     * @var string
     */
    protected string $pattern = "/^[0-9a-f]{12}$/i";

    /**
     * Prepare value for validation
     *
     * @return string
     */
    public function getValue(): string
    {
        return preg_replace("/[\. :-]/i", '', parent::getValue());
    }
}
