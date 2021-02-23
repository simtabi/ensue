<?php

namespace Simtabi\Ensue\Validation\Test\Rules;

use Simtabi\Ensue\Validation\Rules\Bic;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

abstract class AbstractRuleTestCase extends TestCase
{
    /**
     * Valid values
     *
     * @var array
     */
    protected $valid = [];

    /**
     * Invalid values
     *
     * @var array
     */
    protected $invalid = [];

    /**
     * Classname of rule to test
     *
     * @var string
     */
    protected $classname;

    /**
     * Setup test
     */
    protected function setUp(): void
    {
        $this->classname = $this->getRuleClassName();
    }

    /**
     * Return class name of currently tested rule
     *
     * @return string
     */
    protected function getRuleClassName()
    {
        $class = (new ReflectionClass($this))->getShortName();
        $class = str_replace('Test', '', $class);

        return "\\Simtabi\\Ensue\\Validation\\Rules\\" . $class;
    }

    public function testValid()
    {
        foreach ($this->valid as $value) {
            $this->assertTrue((new $this->classname($value))->isValid(), (string) $value);
        }
    }

    public function testInvalid()
    {

        foreach ($this->invalid as $value) {
            $this->assertFalse((new $this->classname($value))->isValid(), (string) $value);
        }
    }
}