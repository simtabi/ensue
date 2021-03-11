<?php

namespace Simtabi\Ensue\Rules;

use Simtabi\Ensue\AbstractStringRule;

class HtmlClean extends AbstractStringRule
{
    /**
     * Determine if current value is valid
     *
     * @return boolean
     */
    public function isValid(): bool
    {
        return (strip_tags($this->getValue()) == $this->getValue());
    }
}
