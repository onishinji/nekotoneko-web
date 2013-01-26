<?php

namespace OAuth2;

use OAuth2\Model\IOAuth2Client;

/**
 * All storage engines need to implement this interface in order to use OAuth2 server
 * 
 * @author David Rochwerger <catch.dave@gmail.com>
 */
interface IOAuth2Storage {

    /**
     * @return IOAuth2Client
     */
    public function getClient($client_id);

	/**
	 * Make sure that the client credentials is valid.
	 * 
	 * @param $client_id
	 * Client identifier to be check with.
	 * @param $client_secret
	 * (optional) If a secret is required, check that they've given the right one.
	 *
	 * @return
	 * TRUE if the client credentials are valid, and MUST return FALSE if it isn't.
	 * @endcode
	 *
	 * @see http://tools.ietf.org/html/draft-ietf-oauth-v2-20#section-3.1
	 *
	 * @ingroup oauth2_section_3
	 */
	public function checkClientCredentials(IOAuth2Client $client, $client_secret = NULL);

	/**
	 * Look up the supplied oauth_token from storage.
	 *
	 * We need to retrieve access token data as we create and verify tokens.
	 *
	 * @param $oauth_token
	 * oauth_token to be check with.
	 *
	 * @return IOAuth2AccessToken
	 *
	 * @ingroup oauth2_section_7
	 */
	public function getAccessToken($oauth_token);

	/**
	 * Store the supplied access token values to storage.
	 *
	 * We need to store access token data as we create and verify tokens.
	 *
	 * @param $oauth_token
	 * oauth_token to be stored.
	 * @param $client_id
	 * Client identifier to be stored.
	 * @param $user_id
	 * User identifier to be stored.
	 * @param $expires
	 * Expiration to be stored.
	 * @param $scope
	 * (optional) Scopes to be stored in space-separated string.
	 *
	 * @ingroup oauth2_section_4
	 */
	public function createAccessToken($oauth_token, IOAuth2Client $client, $data, $expires, $scope = NULL);

	/**
	 * Check restricted grant types of corresponding client identifier.
	 *
	 * If you want to restrict clients to certain grant types, override this
	 * function.
	 *
	 * @param IOAuth2Client $client
	 * Client to be check with.
	 * @param $grant_type
	 * Grant type to be check with, would be one of the values contained in
	 * OAuth2::GRANT_TYPE_REGEXP.
	 *
	 * @return
	 * TRUE if the grant type is supported by this client identifier, and
	 * FALSE if it isn't.
	 *
	 * @ingroup oauth2_section_4
	 */
	public function checkRestrictedGrantType(IOAuth2Client $client, $grant_type);
}
