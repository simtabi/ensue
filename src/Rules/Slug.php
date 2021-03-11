<?php

namespace Simtabi\Ensue\Rules;

use Simtabi\Ensue\AbstractRegexRule;

class Slug extends AbstractRegexRule
{
    /**
     * Regular expression pattern of a user- and SEO-friendly short text
     *
     * @var string
     */
    protected string $pattern = "/^[a-z0-9]+(?:-[a-z0-9]+)*$/i";
}
