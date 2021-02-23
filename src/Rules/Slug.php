<?php

namespace Simtabi\Ensue\Validation\Rules;

use Simtabi\Ensue\Validation\AbstractRegexRule;

class Slug extends AbstractRegexRule
{
    /**
     * Regular expression pattern of a user- and SEO-friendly short text
     *
     * @var string
     */
    protected $pattern = "/^[a-z0-9]+(?:-[a-z0-9]+)*$/i";
}
