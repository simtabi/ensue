<?php

namespace Simtabi\Ensue\Validation\Rules;

use Simtabi\Ensue\Validation\AbstractRegexRule;

class Macaddress extends AbstractRegexRule
{
    /**
     * Mac Adress regex pattern
     *
     * @var string
     */
    protected $pattern = "/^[0-9a-f]{12}$/i";

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
