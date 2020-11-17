<?php

declare(strict_types=1);

namespace Bogosoft\Claims;

/**
 * A collection of claim value type identifiers.
 *
 * @package Bogosoft\Claims
 */
class ClaimValueType
{
    const ANY_URI              = 'http://www.w3.org/2001/XMLSchema#anyURI';
    const BASE64_BINARY        = 'http://www.w3.org/2001/XMLSchema#base64Binary';
    const BASE64_OCTET         = 'http://www.w3.org/2001/XMLSchema#base64Octet';
    const BOOLEAN              = 'http://www.w3.org/2001/XMLSchema#boolean';
    const BYTE                 = 'http://www.w3.org/2001/XMLSchema#byte';
    const DATE                 = 'http://www.w3.org/2001/XMLSchema#date';
    const DATE_TIME            = 'http://www.w3.org/2001/XMLSchema#dateTime';
    const DAYTIME_DURATION     = 'http://www.w3.org/TR/2002/WD-xquery-operators-20020816#dayTimeDuration';
    const DECIMAL              = 'http://www.w3.org/2001/XMLSchema#decimal';
    const DNS_NAME             = 'http://schemas.xmlsoap.org/claims/dns';
    const DOUBLE               = 'http://www.w3.org/2001/XMLSchema#double';
    const DURATION             = 'http://www.w3.org/2001/XMLSchema#duration';
    const DSA_KEY_VALUE        = 'http://www.w3.org/2000/09/xmldsig#DSAKeyValue';
    const ENTITY               = 'http://www.w3.org/2001/XMLSchema#ENTITY';
    const ENTITIES             = 'http://www.w3.org/2001/XMLSchema#ENTITIES';
    const FLOAT                = 'http://www.w3.org/2001/XMLSchema#float';
    const FQBN                 = 'http://www.w3.org/2001/XMLSchema#fqbn';
    const G_DAY                = 'http://www.w3.org/2001/XMLSchema#gDay';
    const G_MONTH              = 'http://www.w3.org/2001/XMLSchema#gMonth';
    const G_MONTH_DAY          = 'http://www.w3.org/2001/XMLSchema#gMonthDay';
    const G_YEAR               = 'http://www.w3.org/2001/XMLSchema#gYear';
    const G_YEAR_MONTH         = 'http://www.w3.org/2001/XMLSchema#gYearMonth';
    const HEX_BINARY           = 'http://www.w3.org/2001/XMLSchema#hexBinary';
    const ID                   = 'http://www.w3.org/2001/XMLSchema#ID';
    const IDREF                = 'http://www.w3.org/2001/XMLSchema#IDREF';
    const IDREFS               = 'http://www.w3.org/2001/XMLSchema#IDREFS';
    const INT                  = 'http://www.w3.org/2001/XMLSchema#int';
    const INT32                = 'http://www.w3.org/2001/XMLSchema#integer32';
    const INT64                = 'http://www.w3.org/2001/XMLSchema#integer64';
    const INTEGER              = 'http://www.w3.org/2001/XMLSchema#integer';
    const KEY_INFO             = 'http://www.w3.org/2000/09/xmldsig#KeyInfo';
    const LANGUAGE             = 'http://www.w3.org/2001/XMLSchema#language';
    const LONG                 = 'http://www.w3.org/2001/XMLSchema#long';
    const NAME                 = 'http://www.w3.org/2001/XMLSchema#Name';
    const NCNAME               = 'http://www.w3.org/2001/XMLSchema#NCName';
    const NEGATIVE_INTEGER     = 'http://www.w3.org/2001/XMLSchema#negativeInteger';
    const NMTOKEN              = 'http://www.w3.org/2001/XMLSchema#NMTOKEN';
    const NMTOKENS             = 'http://www.w3.org/2001/XMLSchema#NMTOKENS';
    const NON_NEGATIVE_INTEGER = 'http://www.w3.org/2001/XMLSchema#nonNegativeInteger';
    const NON_POSITIVE_INTEGER = 'http://www.w3.org/2001/XMLSchema#nonPositiveInteger';
    const NORMALIZED_STRING    = 'http://www.w3.org/2001/XMLSchema#normalizedString';
    const NOTATION             = 'http://www.w3.org/2001/XMLSchema#NOTATION';
    const POSITIVE_INTEGER     = 'http://www.w3.org/2001/XMLSchema#positiveInteger';
    const QNAME                = 'http://www.w3.org/2001/XMLSchema#QName';
    const RFC822_NAME          = 'urn:oasis:names:tc:xacml:1.0:data-type:rfc822Name';
    const RSA_KEY_VALUE        = 'http://www.w3.org/2000/09/xmldsig#RSAKeyValue';
    const SHORT                = 'http://www.w3.org/2001/XMLSchema#short';
    const SID                  = 'http://www.w3.org/2001/XMLSchema#sid';
    const STRING               = 'http://www.w3.org/2001/XMLSchema#string';
    const TIME                 = 'http://www.w3.org/2001/XMLSchema#time';
    const TOKEN                = 'http://www.w3.org/2001/XMLSchema#token';
    const UINT32               = 'http://www.w3.org/2001/XMLSchema#uinteger32';
    const UINT64               = 'http://www.w3.org/2001/XMLSchema#uinteger64';
    const UNSIGNED_BYTE        = 'http://www.w3.org/2001/XMLSchema#unsignedByte';
    const UNSIGNED_INT         = 'http://www.w3.org/2001/XMLSchema#unsignedInt';
    const UNSIGNED_LONG        = 'http://www.w3.org/2001/XMLSchema#unsignedLong';
    const UNSIGNED_SHORT       = 'http://www.w3.org/2001/XMLSchema#unsignedShort';
    const UPN_NAME             = 'http://schemas.xmlsoap.org/claims/UPN';
    const X500_NAME            = 'urn:oasis:names:tc:xacml:1.0:data-type:x500Name';
    const YEAR_MONTH_DURATION  = 'http://www.w3.org/TR/2002/WD-xquery-operators-20020816#yearMonthDuration';
}
