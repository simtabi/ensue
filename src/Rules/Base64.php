<?php

namespace Simtabi\Ensue\Validation\Rules;

use Simtabi\Ensue\Validation\AbstractStringRule;

class Base64 extends AbstractStringRule
{
    /**
     * Determine if current value is valid
     *
     * @return boolean
     */
    public function isValid(): bool
    {
        return base64_encode(base64_decode($this->getValue(), true)) === $this->getValue();
    }
}
