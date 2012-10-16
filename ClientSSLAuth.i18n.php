<?php

/**
 * MediaWiki extension to allow client SSL authentication.
 * Copyright (C) 2012 Tyler Romeo <tylerromeo@gmail.com>

 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

$messages = array();

$messages['en'] = array(
	'sslauth-desc' => 'Allows users to upload SSL certificates to be used for authentication',
	'sslauth-title-enable' => 'Enable SSL Client Authentication',
	'sslauth-title-disable' => 'Disable SSL Client Authentication',
	'sslauth-enable' => 'Enable',
	'sslauth-disable' => 'Disable',
	'sslauth-cn' => 'Common name',
	'sslauth-email' => 'E-mail address',
	'sslauth-serial' => 'Serial number',
	'sslauth-response-enable' => 'SSL Authentication has been successfully enabled. Now whenever you connect to {{SITENAME}} over HTTPS with your client certificate, you will be automatically logged in.',
	'sslauth-response-disable' => 'SSL Authentication has been successfully disabled.',
	'sslauth-invalidrequest-title' => 'Invalid request',
	'sslauth-invalidrequest' => 'A valid SSL client certificate must be provided for this page to be useful.',
	'clientssl-legend' => 'SSL Authentication',
	'clientssl-text' => 'Use this page to enable/disable authentication with client SSL certificates.',
	'sslauth-prefs-name' => 'SSL Authentication',
	'sslauth-prefs-linktospecial' => 'Enable/Disable client certificates',
);

$messages['qqq'] = array(
	'sslauth-title-enable' => 'Title of Special:ClientSSL when ssl-auth is disabled and the user is enabling it.',
	'sslauth-title-disable' => 'Title of Special:ClientSSL when ssl-auth is enabled and the user is disabling it.',
	'sslauth-enable' => 'Label for the submit button when enabling. {{Identical|Enable}}',
	'sslauth-disable' => 'Label for the submit button when disabling. {{Identical|Disable}}',
	'sslauth-cn' => 'Label for the CN (Common Name) field of the SSL certificate.',
	'sslauth-email' => 'Label for the e-mail field of the SSL certificate.',
	'sslauth-serial' => 'Label for the serial number field of the SSL certificate.',
	'sslauth-response-enable' => 'Success message when SSL auth has been enabled.',
	'sslauth-response-disable' => 'Success message when SSL auth has been disabled.',
	'sslauth-invalidrequest-title' => 'Title of Special:ClientSSL when no SSL certificate has been given.',
	'sslauth-invalidrequest' => 'Message displayed on Special:ClientSSL when no SSL certificate has been given.',
	'clientssl-legend' => 'Title of the fieldset for the form on Special:ClientSSL.',
	'clientssl-text' => 'Prompt displayed on the client SSL form.',
	'sslauth-prefs-name' => 'Label for the preferences link to Special:ClientSSL (not the actual text for the link).',
	'sslauth-prefs-linktospecial' => 'Text for the preferences link to Special:ClientSSL.'
);
