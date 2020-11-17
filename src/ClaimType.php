<?php

declare(strict_types=1);

namespace Bogosoft\Claims;

/**
 * A collection of claim type identifiers.
 *
 * @package Bogosoft\Claims
 */
class ClaimType
{
    const ACTOR                          = 'http://schemas.xmlsoap.org/ws/2009/09/identity/claims/actor';
    const ANONYMOUS                      = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/anonymous';
    const AUTHENTICATION                 = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/authentication';
    const AUTHENTICATION_DECISION        = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/authorizationdecision';
    const AUTHENTICATION_INSTANT         = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/authenticationinstant';
    const AUTHENTICATION_METHOD          = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/authenticationmethod';
    const COOKIE_PATH                    = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/cookiepath';
    const COUNTRY                        = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/country';
    const DATE_OF_BIRTH                  = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/dateofbirth';
    const DENY_ONLY_PRIMARY_GROUP_SID    = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/denyonlyprimarygroupsid';
    const DENY_ONLY_PRIMARY_SID          = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/denyonlyprimarysid';
    const DENY_ONLY_SID                  = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/denyonlysid';
    const DENY_ONLY_WINDOWS_DEVICE_GROUP = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/denyonlywindowsdevicegroup';
    const DNS                            = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/dns';
    const DSA                            = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/dsa';
    const EMAIL_ADDRESS                  = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/emailaddress';
    const EXPIRATION                     = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/expiration';
    const EXPIRED                        = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/expired';
    const GENDER                         = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/gender';
    const GIVEN_NAME                     = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/givenname';
    const GROUP_SID                      = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/groupsid';
    const HASH                           = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/hash';
    const HOME_PHONE                     = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/homephone';
    const IS_PERSISTENT                  = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/ispersistent';
    const LOCALITY                       = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/locality';
    const MOBILE_PHONE                   = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/mobilephone';
    const NAME                           = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/name';
    const NAME_IDENTIFIER                = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/nameidentifier';
    const OTHER_PHONE                    = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/otherphone';
    const POSTAL_CODE                    = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/postalcode';
    const PRIMARY_GROUP_SID              = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/primarygroupsid';
    const PRIMARY_SID                    = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/primarysid';
    const PRIVATE_PERSONAL_IDENTIFIER    = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/privatepersonalidentifier';
    const ROLE                           = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/role';
    const RSA                            = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/rsa';
    const SERIAL_NUMBER                  = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/serialnumber';
    const SID                            = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/sid';
    const SPN                            = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/spn';
    const STATE_OR_PROVINCE              = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/stateorprovince';
    const STREET_ADDRESS                 = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/streetaddress';
    const SURNAME                        = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/surname';
    const SYSTEM                         = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/system';
    const THUMBPRINT                     = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/thumbprint';
    const UPN                            = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/upn';
    const URI                            = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/uri';
    const USER_DATA                      = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/userdata';
    const VERSION                        = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/version';
    const WEBPAGE                        = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/webpage';
    const WINDOWS_ACCOUNT_NAME           = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/windowsaccountname';
    const WINDOWS_DEVICE_CLAIM           = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/windowsdeviceclaim';
    const WINDOWS_DEVICE_GROUP           = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/windowsdevicegroup';
    const WINDOWS_FQBN_VERSION           = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/windowsfqbnversion';
    const WINDOWS_SUB_AUTHORITY          = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/windowssubauthority';
    const WINDOWS_USER_CLAIM             = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/windowsuserclaim';
    const X500_DISTINGUISHED_NAME        = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/x500distinguishedname';
}
