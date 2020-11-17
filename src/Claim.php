<?php

declare(strict_types=1);

namespace Bogosoft\Claims;

/**
 * Represents an assertion or claim about an entity.
 *
 * @package Bogosoft\Claims
 */
class Claim
{
    private ?string $issuer;
    private ?string $originalIssuer;
    private string $type;
    private ?string $value;
    private ?string $valueType;

    /**
     * Create a new claim.
     *
     * @param string      $type           The type of the new claim.
     * @param string|null $value          The value of the new claim.
     * @param string|null $valueType      The type of the value of the new
     *                                    claim.
     * @param string|null $issuer         The issuer of the new claim.
     * @param string|null $originalIssuer The original issuer of the new
     *                                    claim.
     */
    function __construct(
        string $type,
        string $value = null,
        string $valueType = null,
        string $issuer = null,
        string $originalIssuer = null
        )
    {
        $this->issuer         = $issuer;
        $this->originalIssuer = $originalIssuer;
        $this->type           = $type;
        $this->value          = $value;
        $this->valueType      = $valueType;
    }

    /**
     * Get the identifier of the party that issued the current claim.
     *
     * Ideally, an issuer identifier should be a key in a registry by which
     * the necessary cryptographic material needed to verify tokens issued by
     * the issuer can be looked up; e.g. an X509 certificate.
     *
     * @return string|null A string identifier.
     */
    function getIssuer(): ?string
    {
        return $this->issuer;
    }

    /**
     * Get the identifier of the party that originally issued the current
     * claim.
     *
     * Ideally, an issuer identifier should be a key in a registry by which
     * the necessary cryptographic material needed to verify tokens issued by
     * the issuer can be looked up; e.g. an X509 certificate.
     *
     * @return string|null A string identifier.
     */
    function getOriginalIssuer(): ?string
    {
        return $this->originalIssuer;
    }

    /**
     * Get the type of the current claim.
     *
     * @return string A string identifier for the type of the current claim.
     */
    function getType(): string
    {
        return $this->type;
    }

    /**
     * Get the value of the current claim.
     *
     * @return string The value of the current claim.
     */
    function getValue(): string
    {
        return $this->value;
    }

    /**
     * Get the type of the value of the current claim.
     *
     * @return string A string identifier for the type of the value of the
     *                current claim.
     */
    function getValueType(): string
    {
        return $this->valueType;
    }
}
