<?php

return [
    'isin'        => 'The :attribute must be a valid International Securities Identification Number (ISIN).',
    'iban'        => 'The :attribute must be a valid International Bank Account Number (IBAN).',
    'bic'         => 'The :attribute is not a valid Business Identifier Code (BIC).',
    'hexcolor'    => 'The :attribute must be a valid hexadecimal color code.',
    'creditcard'  => 'The :attribute must be a valid creditcard number.',
    'isbn'        => ':attribute must be a valid International Standard Book Number (ISBN).',
    'username'    => 'The supplied :attribute is invalid, it must be a valid username can contain a number but not start with either a number, hyphen, underscore or double underscores. Please try again with a different username.',
    'htmlclean'   => 'The value :attribute contains forbidden HTML code.',
    'domainname'  => ':attribute must be a well formed domainname.',
    'jwt'         => 'The value :attribute does not correspond to the JSON Web Token Format',
    'imei'        => 'The value :attribute must be a valid Mobile Equipment Identity (IMEI).',
    'macaddress'  => 'The value :attribute is no valid MAC address.',
    'slug'        => 'The value :attribute is no SEO-friendly short text.',
    'semver'      => 'The value :attribute is no version number using Semantic Versioning.',
    'luhn'        => 'The value :attribute cannot be verified using the Luhn algorithm.',
    'base64'      => 'The value :attribute is not Base64 encoded.',
    'issn'        => 'The value :attribute must be a valid International Standard Serial Number (ISSN).',
    'lowercase'   => 'The content :attribute may only consist of lowercase letters.',
    'uppercase'   => 'The content :attribute may only consist of uppercase letters.',
    'titlecase'   => 'All words from :attribute must begin with capital letters.',
    'snakecase'   => 'The content :attribute must be formatted in Snake case.',
    'kebabcase'   => 'The content :attribute must be formatted in Kebab case.',
    'camelcase'   => 'The content :attribute must be formatted in Camel case.',
    'cidr'        => 'The :attribute must be a valid CIDR notation.',

    'phone'               => 'The :attribute field contains an invalid number.',
    'older_than'          => 'You must be at least :min years old!',
    "alpha_dash_spaces"   => "The :attribute may only contain letters, spaces, and dashes.",
    "alpha_num_spaces"    => "The :attribute may only contain letters, numbers, and spaces.",
    "usable_url"          => "The :attribute doesn't seem to be a valid URL.",


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],
];
