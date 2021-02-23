<?php

namespace Simtabi\Ensue\Validation\Rules;

use Simtabi\Ensue\Validation\AbstractRegexRule;

class Bic extends AbstractRegexRule
{
    /**
     * Regular expression pattern for BIC
     *
     * @var string
     */
    protected $pattern = "/^[A-Za-z]{4} ?[A-Za-z]{2} ?[A-Za-z0-9]{2} ?([A-Za-z0-9]{3})?$/";
}
