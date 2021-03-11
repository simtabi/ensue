<?php

namespace Simtabi\Ensue;

abstract class AbstractRegexRule extends AbstractStringRule
{

    /**
     * REGEX pattern of rule
     *
     * @var string
     */
    protected string $pattern;

    /**
     * Determine if current value is valid
     *
     * @return boolean
     */
    public function isValid(): bool
    {
        return (bool) preg_match($this->pattern, $this->getValue());
    }

}
