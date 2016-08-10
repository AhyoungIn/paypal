<?php

require 'vendor/autoload.php';

define('SITE_URL', 'http://localhost/paypal');

$paypal = new \PayPal\Rest\ApiContext(
	new \PayPal\Auth\OAuthTokenCredential(
	'ARRwfbgQp-kQjeqAlyCjiG7eAM82FNo5EWkikrt7nJ7de1zGHNLbbufSHgNEA3kshc9Fmh__3X_Z4pdi',
	'EEKJjb_SrbybIaxXNmaSPwASfavPzJB_qLJEsqvuCYu2gGIIn2mkWKOqDMn7eoOR_JWJH_GSWzlZF2cn'
	)
);