<?php

namespace Simtabi\Ensue\Validation\Rules;

use Simtabi\Ensue\Validation\AbstractStringRule;

class Uppercase extends AbstractStringRule
{
    /**
     * Determine if value is uppercase
     *
     * @return boolean
     */
    public function isValid(): bool
    {
        return $this->getValue() === $this->getUpperCaseValue();
    }

    /**
     * Return value as uppercase
     *
     * @return string
     */
    private function getUpperCaseValue(): string
    {
        return mb_strtoupper($this->getValue(), mb_detect_encoding($this->getValue()));
    }
}
