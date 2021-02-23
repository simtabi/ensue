<?php

namespace Simtabi\Ensue\Validation\Rules;

use Simtabi\Ensue\Validation\AbstractRegexRule;

class Username extends AbstractRegexRule
{

    /**
     * Pattern for "valid" username
     *  - only alpha-numeric (a-z, A-Z, 0-9), underscore and minus
     *  - starts with an letter (alpha)
     *  - underscores and minus are not allowed at the beginning or end
     *  - multiple underscores and minus are not allowed (-- or _____)
     *  - minimum of 3 character and maximum of 36 characters
     *
     * @var string
     */
    protected $pattern = "/^[a-z][a-z0-9]*(?:[_\-][a-z0-9]+)*$/i";

    /**
     * The collection of allowed usernames
     */
    protected $allowed = [];

    /**
     * The collection of disallowed usernames
     */
    protected $disallowed = [];

    public const MIN_LENGTH  = 3;
    public const MAX_LENGTH  = 36;

    protected $minLength;
    protected $maxLength;

    public function __construct($value = null, $minLength = self::MIN_LENGTH, $maxLength = self::MAX_LENGTH)
    {

        $this->minLength  = $minLength >= self::MIN_LENGTH                                       ? $minLength : self::MIN_LENGTH;
        $this->maxLength  = ($maxLength >= self::MAX_LENGTH) && ($maxLength <= self::MAX_LENGTH) ? $maxLength : self::MAX_LENGTH;

        $this->disallowed = collect(explode(',', ensueConfig('username.base')))->merge(explode(',', ensueConfig('username.disallowed')));
        $this->allowed    = collect(explode(',', ensueConfig('username.allowed')));

        parent::__construct($value);
    }

    /**
     * Determine if current value is usable as a username
     *
     * @return boolean
     */
    public function isUsable(): bool
    {
        $value = trim(strtolower($this->getValue()));

        if ($this->disallowed->contains($value)) {
            return false;
        }

        if ($this->allowed->contains($value)) {
            return true;
        }

        return false;
    }

    /**
     * Determine if current value is valid
     *
     * @return boolean
     */
    public function isValid(): bool
    {
        return $this->hasValidLength() && $this->isUsable() && parent::isValid();
    }

    /**
     * Check if the given value has the proper length
     *
     * @return boolean
     */
    private function hasValidLength(): bool
    {
        return (strlen($this->getValue()) >= $this->minLength && strlen($this->getValue()) <= $this->maxLength);
    }
}
