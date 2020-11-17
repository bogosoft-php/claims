<?php

declare(strict_types=1);

namespace Bogosoft\Claims\Tests;

use Bogosoft\Claims\Claim;
use Bogosoft\Claims\ClaimValueType;
use PHPUnit\Framework\TestCase;

class ClaimTest extends TestCase
{
    function testCanRetrieveIssuer(): void
    {
        $expected = 'http://example.org/';

        $claim = new Claim('', '', 'string', $expected);

        $actual = $claim->getIssuer();

        $this->assertEquals($expected, $actual);
    }

    function testCanRetrieveOriginalIssuer(): void
    {
        $expected = 'the people';

        $claim = new Claim('law', 'obey', 'string', 'the legislature', $expected);

        $actual = $claim->getOriginalIssuer();

        $this->assertEquals(
            $expected,
            $actual,
            'The legislature has subverted the will of the people!'
            );
    }

    function testCanRetrieveType(): void
    {
        $expected = 'is-authenticated';

        $claim = new Claim($expected);

        $actual = $claim->getType();

        $this->assertEquals($expected, $actual);
    }

    function testCanRetrieveValue(): void
    {
        $expected = 'Hello, World!';

        $claim = new Claim('salutation', $expected);

        $actual = $claim->getValue();

        $this->assertEquals($expected, $actual);
    }

    function testCanRetrieveValueType(): void
    {
        $expected = ClaimValueType::STRING;

        $claim = new Claim('salutation', 'Hello, World!', $expected);

        $actual = $claim->getValueType();

        $this->assertEquals($expected, $actual);
    }
}
