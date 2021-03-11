<?php

namespace Simtabi\Ensue\Test;

use Simtabi\Ensue\AbstractRule;
use Simtabi\Ensue\Exception\EnsueException;
use Simtabi\Ensue\Rules\HexColor;
use Simtabi\Ensue\Rules\Iban;
use Simtabi\Ensue\Ensue;
use PHPUnit\Framework\TestCase;

class ValidatorTest extends TestCase
{
    public function testConstructor()
    {
        $rule = $this->getMockForAbstractClass(AbstractRule::class);
        $validator = new Ensue($rule);
        $this->assertInstanceOf(Ensue::class, $validator);
    }

    public function testMake()
    {
        $rule = $this->getMockForAbstractClass(AbstractRule::class);
        $validator = Ensue::make($rule);
        $this->assertInstanceOf(Ensue::class, $validator);
    }

    public function testValidate()
    {
        $validator = Ensue::make(new HexColor());
        $this->assertIsBool($validator->validate('#ccc'));
        $this->assertIsBool($validator->validate('xxx'));
        $this->assertTrue($validator->validate('#ccc'));
        $this->assertFalse($validator->validate('xxx'));
    }

    public function testAssert()
    {
        $validator = Ensue::make(new HexColor());
        $this->expectException(EnsueException::class);
        $validator->assert('foo');
    }

    public function testDynamicStaticIsValid()
    {
        $this->assertTrue(Ensue::isHexColor('#cccccc'));
    }

    public function testDynamicStaticIsInvalid()
    {
        $this->assertFalse(Ensue::isHexColor('foo'));
    }

    public function testDynamicStaticIsNonExisting()
    {
        $this->expectError();
        $this->assertTrue(Ensue::isNonExisting('#cccccc'));
    }

    public function testDynamicStaticAssertValid()
    {
        $this->assertTrue(Ensue::assertHexColor('#cccccc'));
    }

    public function testDynamicStaticAssertInvalid()
    {
        $this->expectException(EnsueException::class);
        $this->assertFalse(Ensue::assertHexColor('foo'));
    }

    public function testDynamicStaticAssertNonExisting()
    {
        $this->expectError();
        $this->assertTrue(Ensue::assertNonExisting('#cccccc'));
    }

    public function testNonExistingStaticCallType()
    {
        $this->expectError();
        $this->assertTrue(Ensue::fooHexColor('#cccccc'));
    }

    public function testSetGetRule()
    {
        $validator = new Ensue(new HexColor());
        $this->assertInstanceOf(HexColor::class, $validator->getRule());

        $result = $validator->setRule(new Iban());
        $this->assertInstanceOf(Ensue::class, $result);
        $this->assertInstanceOf(Iban::class, $validator->getRule());
    }
}
