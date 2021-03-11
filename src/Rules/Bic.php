<?php

namespace Simtabi\Ensue\Rules;

use Simtabi\Ensue\AbstractRegexRule;

class Bic extends AbstractRegexRule
{
    /**
     * Regular expression pattern for BIC
     *
     * @var string
     */
    protected string $pattern = "/^[A-Za-z]{4} ?[A-Za-z]{2} ?[A-Za-z0-9]{2} ?([A-Za-z0-9]{3})?$/";
}
