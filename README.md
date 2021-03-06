# Ensue Validation

Ensue Validation is an extension library for Laravel's own validation system. The package adds rules to validate data like IBAN, BIC, ISBN, creditcard numbers and more.

[![Latest Version](https://img.shields.io/packagist/v/simtabi/ensue.svg)](https://packagist.org/packages/simtabi/ensue)
![build](https://github.com/Simtabi/ensue/workflows/build/badge.svg)
[![Monthly Downloads](https://img.shields.io/packagist/dm/simtabi/ensue.svg)](https://packagist.org/packages/simtabi/ensue/stats)


With inspiration from ``https://github.com/Intervention/validation``

## Installation

You can install this package quick and easy with Composer.

Require the package via Composer:

    $ composer require ensue/validation

### Laravel integration (optional)

The Validation library is built to work with the Laravel Framework (>=5.5). It comes with a service provider, which will be discovered automatically and registers the validation rules into your installation.

## Usage

```php
use Simtabi\Ensue\Validation\Validator;
use Simtabi\Ensue\Validation\Rules\HexColor;
use Simtabi\Ensue\Validation\Exception\EnsueException;

// create validator (for HexColor)
$validator = new Validator(new HexColor);

// validate against given values
$valid = $validator->validate('#ccc'); // true
$valid = $validator->validate('www'); // false

// change the validation rule
$validator->setRule(new Domainname);

// now validate new rule domainname
$valid = $validator->validate('foo.com'); // true
$valid = $validator->validate('?'); // false

// validator can also throw exceptions on invalid data. 
// just call assert() instead of validate().
try {
    $validator->assert('foobar');
} catch (EnsueException $e) {
    echo $e->getMessage();
}
```

## Static Usage

```php
use Simtabi\Ensue\Validation\Validator;
use Simtabi\Ensue\Validation\Rules\HexColor;
use Simtabi\Ensue\Validation\Exception\EnsueException;

// create validator statically
$valid = Validator::make(new HexColor)->validate('ccc'); // true
$valid = Validator::make(new HexColor)->validate('#www'); // false

// throw exceptions on invalid data instead of returning boolean
try {
    Validator::make(new HexColor)->assert('www');
} catch (EnsueException $e) {
    echo $e->getMessage();
}
```

## Static dynamic call Usage

```php
use Simtabi\Ensue\Validation\Validator;
use Simtabi\Ensue\Validation\Rules\HexColor;
use Simtabi\Ensue\Validation\Exception\EnsueException;

// call validation rule directly via static method
$valid = Validator::isHexColor('#ccc'); // true
$valid = Validator::isHexColor('#www'); // false

// throw exceptions on invalid data
try {
    Validator::assertHexColor('foo');
} catch (EnsueException $e) {
    echo $e->getMessage();
}
```

## Usage with Laravel

The installed package provides additional `validation rules` including their error messages.

```php
use Illuminate\Support\Facades\Validator;

$validator = Validator::make($request->all(), [
    'color' => 'required|hexcolor',
    'number' => 'iban',
]);
```

### Changing the error messages:

Add the corresponding key to `/resources/lang/<language>/validation.php` like this:

```php
// example
'iban' => 'Please enter IBAN number!',
```

Or add your custom messages directly to the validator like [described in the docs](https://laravel.com/docs/6.x/validation#custom-error-messages).

## Available Rules

The following validation rules are available.

### base64 (Simtabi\Ensue\Validation\Rules\Base64)

Checks if given value is [Base64 encoded](https://en.wikipedia.org/wiki/Base64).

### bic (Simtabi\Ensue\Validation\Rules\Bic)

Checks for a valid [Business Identifier Code](https://en.wikipedia.org/wiki/ISO_9362) (BIC).

### camelcase (Simtabi\Ensue\Validation\Rules\CamelCase)

The given field must be a formated in [Camel case](https://en.wikipedia.org/wiki/Camel_case).

### cidr (Simtabi\Ensue\Validation\Rules\Cidr)

Check if the value is a [Classless Inter-Domain Routing](https://en.wikipedia.org/wiki/Classless_Inter-Domain_Routing) notation (CIDR).

### creditcard (Simtabi\Ensue\Validation\Rules\Creditcard)

The given field must be a valid [creditcard number](https://en.wikipedia.org/wiki/Payment_card_number).

### domainname (Simtabi\Ensue\Validation\Rules\Domainname)

The given field must be a well formed [domainname](https://en.wikipedia.org/wiki/Domain_name).

### hexcolor (Simtabi\Ensue\Validation\Rules\HexColor)

The field under validation must be a valid [hexadecimal color code](https://en.wikipedia.org/wiki/Web_colors).

### htmlclean (Simtabi\Ensue\Validation\Rules\HtmlClean)

The field under validation must be free of any html code.

### iban (Simtabi\Ensue\Validation\Rules\Iban)

Checks for a valid [International Bank Account Number](https://en.wikipedia.org/wiki/International_Bank_Account_Number) (IBAN).

### imei (Simtabi\Ensue\Validation\Rules\Imei)

The given field must be a [International Mobile Equipment Identity](https://en.wikipedia.org/wiki/International_Mobile_Equipment_Identity) (IMEI).

### isbn (Simtabi\Ensue\Validation\Rules\Isbn)

The field under validation must be a valid [International Standard Book Number](https://en.wikipedia.org/wiki/International_Standard_Book_Number) (ISBN).

### isin (Simtabi\Ensue\Validation\Rules\Isin)

Checks for a valid [International Securities Identification Number](https://en.wikipedia.org/wiki/International_Securities_Identification_Number) (ISIN).

### issn (Simtabi\Ensue\Validation\Rules\Issn)

Checks for a valid [International Standard Serial Number](https://en.wikipedia.org/wiki/International_Standard_Serial_Number) (ISSN).

### jwt (Simtabi\Ensue\Validation\Rules\Jwt)

The given value must be a in format of a [JSON Web Token](https://en.wikipedia.org/wiki/JSON_Web_Token).

### kebabcase (Simtabi\Ensue\Validation\Rules\KebabCase)

The given value must be formated in [Kebab case](https://en.wikipedia.org/wiki/Letter_case#Special_case_styles).

### lowercase (Simtabi\Ensue\Validation\Rules\LowerCase)

The given value must be all lower case letters.

### luhn (Simtabi\Ensue\Validation\Rules\Luhn)

The given value must verify against its included [Luhn algorithm](https://en.wikipedia.org/wiki/Luhn_algorithm) check digit.

### macaddress (Simtabi\Ensue\Validation\Rules\MacAddress)

The field under validation must be a [media access control address](https://en.wikipedia.org/wiki/MAC_address) (MAC address).

### semver (Simtabi\Ensue\Validation\Rules\SemVer)

The given field must be a valid version numbers using [Semantic Versioning](https://semver.org/).

### slug (Simtabi\Ensue\Validation\Rules\Slug)

The field under validation must be a user- and [SEO-friendly short text](https://en.wikipedia.org/wiki/Clean_URL#Slug).

### snakecase (Simtabi\Ensue\Validation\Rules\SnakeCase)

The field under validation must formated as [Snake case](https://en.wikipedia.org/wiki/Snake_case) text.

### titlecase (Simtabi\Ensue\Validation\Rules\TitleCase)

The field under validation must formated in [Title case](https://en.wikipedia.org/wiki/Title_case).

### uppercase (Simtabi\Ensue\Validation\Rules\UpperCase)

The field under validation must be all upper case.

### username (Simtabi\Ensue\Validation\Rules\Username)

The field under validation must be a valid username with a minimum of 3 characters and maximum of 20 characters. Consisting of alpha-numeric characters, underscores, minus and starting with a alphabetic character. Multiple underscore and minus chars are not allowed. Underscore and minus chars are not allowed at the beginning or end.


An extension to Laravel's Validator class that provides some additional validation rules.

## Installation
You can install the package via composer:

```
composer require mallardduck/extended-validator-laravel
```
Just require the project and Laravel's Service Provider Auto-discovery will do the rest.  
All the new rules will be automatically registered for use without any configuration.

## Requirements
* PHP 7.3.x
* Laravel 8.x

## Available Rules
* [`PublicIp`](#publicip)
* [`PublicIpv4`](#publicipv4)
* [`PublicIpv6`](#publicipv6)
* [`UnfilledIf`](#unfilledif)
* [`UnfilledWith`](#unfilledwith)
* [`UnfilledWIthAll`](#unfilledwithall)

### `PublicIp`
Determine if the field under validation is a valid public IP address.  
Just like Laravel's `ip` rule, but IPs cannot be within private or reserved ranges.

```
$rules = [
    'ip' => 'required|public_ip',
];
```

### `PublicIpv4`
Determine if the field under validation is a valid public IPv4 address.  
Just like Laravel's `ipv4` rule, but IPs cannot be within private or reserved ranges.

```
$rules = [
    'ip' => 'required|public_ipv4',
];
```

### `PublicIpv6`
Determine if the field under validation is a valid public IPv6 address.  
Just like Laravel's `ipv6` rule, but IPs cannot be within private or reserved ranges.

```
$rules = [
    'ip' => 'required|public_ipv4',
];
```

### `UnfilledIf`
The field under validation must not be present if the anotherfield field is equal to any given value.  
Think of it as the opposite of Larave's `required_if`.

```
$rules = [
    'shape'  => 'required',
    'size'   => 'unfilled_if:shape,rect',
    'height' => 'unfilled_if:shape,square',
    'width'  => 'unfilled_if:shape,square',
];
```

### `UnfilledWith`
The field under validation must not be present only if any of the other specified fields are present.  
Think of it as the opposite of Larave's `required_with`.

```
$rules = [
    'name' => 'sometimes',
    'first_name' => 'unfilled_with:name',
    'last_name' => 'unfilled_with:name'
];
```

### `UnfilledWIthAll`
The field under validation must not be present only if all the other specified fields are present.  
Think of it as the opposite of Larave's `required_with_all`.

```
$rules = [
    'name' => 'unfilled_with_all:first_name,middle_name,last_name',
    'first_name' => 'sometimes',
    'middle_name' => 'sometimes',
    'last_name' => 'sometimes'
];
```

## License

Ensue Validation is licensed under the [MIT License](http://opensource.org/licenses/MIT).
