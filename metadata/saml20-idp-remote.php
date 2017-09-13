<?php
/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

/*
 * Guest IdP. allows users to sign up and register. Great for testing!
 */
// $metadata['https://openidp.feide.no'] = array(
// 	'name' => array(
// 		'en' => 'Feide OpenIdP - guest users',
// 		'no' => 'Feide Gjestebrukere',
// 	),
// 	'description'          => 'Here you can login with your account on Feide RnD OpenID. If you do not already have an account on this identity provider, you can create a new one by following the create new account link and follow the instructions.',
//
// 	'SingleSignOnService'  => 'https://openidp.feide.no/simplesaml/saml2/idp/SSOService.php',
// 	'SingleLogoutService'  => 'https://openidp.feide.no/simplesaml/saml2/idp/SingleLogoutService.php',
// 	'certFingerprint'      => 'c9ed4dfb07caf13fc21e0fec1572047eb8a7a4cb'
// );
$metadata['https://sts.windows.net/7a270f3e-f20b-4fb1-991a-09c569a6cff8/'] = array (
  'entityid' => 'https://sts.windows.net/7a270f3e-f20b-4fb1-991a-09c569a6cff8/',
  'contacts' =>
  array (
  ),
  'metadata-set' => 'saml20-idp-remote',
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://login.microsoftonline.com/7a270f3e-f20b-4fb1-991a-09c569a6cff8/saml2',
    ),
    1 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://login.microsoftonline.com/7a270f3e-f20b-4fb1-991a-09c569a6cff8/saml2',
    ),
  ),
  'SingleLogoutService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://login.microsoftonline.com/7a270f3e-f20b-4fb1-991a-09c569a6cff8/saml2',
    ),
  ),
  'ArtifactResolutionService' =>
  array (
  ),
  'NameIDFormats' =>
  array (
  ),
  'keys' =>
  array (
    0 =>
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIC8DCCAdigAwIBAgIQI89P9oLG4adDzz4JYmEKdTANBgkqhkiG9w0BAQsFADA0MTIwMAYDVQQDEylNaWNyb3NvZnQgQXp1cmUgRmVkZXJhdGVkIFNTTyBDZXJ0aWZpY2F0ZTAeFw0xNzA5MTExNzA3NDRaFw0yMDA5MTExNzA3NDRaMDQxMjAwBgNVBAMTKU1pY3Jvc29mdCBBenVyZSBGZWRlcmF0ZWQgU1NPIENlcnRpZmljYXRlMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAyDJaSPNz/KcqRhXebgoXviKank0lxiLnc3C8LC1pYyYiePRxXWlMktmBMApeL30wAPzUWUHAA1rc99GuxKcv46OTn+f2R/+pTpORYPkIhKbrkRtmvIEbExWiuYNFLTFDUayAgayIuwOgsmoUN+IvzT7+zRapCjZ8cUQrbGnTxkKRV5hz6u7JwULAAWqBnmcMIhIz/HayydTS464MFMtvmmlVWxHC/eyUEwcXzcAhoJiTYxwV+Ecrx23Z0Xj1mnAJidq6TGDpIMzhLEnHj90RejtaX3S8UGHuKNVFEIopMmotQmCYIJXydOlgPRkpz6oD5rzn7nTUBxD8fZ97aZbXhQIDAQABMA0GCSqGSIb3DQEBCwUAA4IBAQA8Q3Of2+AD45f7DPSkPhdqFLYMG80jm0yxKbaPMNvEvjfrSGuxp5NVHbpjWbnqFEFGVsXPj0IWOODAsTvZRX0W5os+/lRs7qchNRTlGf4RSf2f2OO7MZAZ8P/6D0kgrdcz4Sdx36NrlL8uPfQ2Ryl+2bLn2LR7wRk1r/9bMQhlJAl/dzGD/tk0eGDcYfZIfqOBiPHHktw1mGbyUproaNX65A3ZeWQ8ELzXNb2TxLYLtFg260hVx01ux6ZgZWkwJOoQOmtyf2dj0jcO57SDcQE3RN08QpfxJ2p/hzM3/ZJwQ/VNJIdRhD4XpBN5tcVv/GwuWrghBVy8A6CVNDRt0pvg',
    ),
  ),
);
