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

/** Message documentation (Message documentation) */
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
	'sslauth-prefs-linktospecial' => 'Text for the preferences link to Special:ClientSSL.',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'sslauth-desc' => 'Ermöglicht es Benutzern, SSL-Zertifikate zur Authentifizierung hochzuladen',
	'sslauth-title-enable' => 'SSL-Client-Authentifizierung aktivieren',
	'sslauth-title-disable' => 'SSL-Client-Authentifizierung deaktivieren',
	'sslauth-enable' => 'Aktivieren',
	'sslauth-disable' => 'Deaktivieren',
	'sslauth-cn' => 'Allgemeiner Name',
	'sslauth-email' => 'E-Mail-Adresse',
	'sslauth-serial' => 'Seriennummer',
	'sslauth-response-enable' => 'Die SSL-Authentifizierung wurde erfolgreich aktiviert. Immer, wenn du dich mit deinem Clientzertifikat auf {{SITENAME}} über HTTPS verbindest, wirst du automatisch angemeldet.',
	'sslauth-response-disable' => 'Die SSL-Authentifizierung wurde erfolgreich deaktiviert.',
	'sslauth-invalidrequest-title' => 'Ungültige Anfrage',
	'sslauth-invalidrequest' => 'Für diese Seite muss ein gültiges SSL-Zertifikat angegeben werden.',
	'clientssl-legend' => 'SSL-Authentifizierung',
	'clientssl-text' => 'Verwende diese Seite, um die Authentifizierung mit Client-SSL-Zertifikaten zu aktivieren/deaktivieren.',
	'sslauth-prefs-name' => 'SSL-Authentifizierung',
	'sslauth-prefs-linktospecial' => 'Clientzertifikate aktivieren/deaktivieren',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'sslauth-desc' => '認証に使用する SSL 証明書を利用者がアップロードできるようにする',
	'sslauth-title-enable' => 'SSL クライアント認証を有効化',
	'sslauth-title-disable' => 'SSL クライアント認証を無効化',
	'sslauth-enable' => '有効化',
	'sslauth-disable' => '無効化',
	'sslauth-cn' => '一般名 (CN)',
	'sslauth-email' => 'メール アドレス',
	'sslauth-serial' => 'シリアル番号',
	'sslauth-response-enable' => 'SSL 認証を有効にしました。自分のクライアント証明書を使用して HTTPS で{{SITENAME}}に接続すれば常に自動ログインできるようになりました。',
	'sslauth-response-disable' => 'SSL 認証を無効にしました。',
	'sslauth-invalidrequest-title' => '無効なリクエスト',
	'sslauth-invalidrequest' => 'このページを有用なものにするために、有効な SSL クライアント証明書を指定してください。',
	'clientssl-legend' => 'SSL 認証',
	'clientssl-text' => 'このページでは、クライアント SSL 証明書での認証を有効化/無効化できます。',
	'sslauth-prefs-name' => 'SSL 認証',
	'sslauth-prefs-linktospecial' => 'クライアント証明書を有効化/無効化',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'sslauth-desc' => 'Овозможува корисниците да подигаат SSL-уверенија што ќе се користат за заверки',
	'sslauth-title-enable' => 'Овозможи заверка со SSL',
	'sslauth-title-disable' => 'Овнеозможи заверка со SSL',
	'sslauth-enable' => 'Овозможи',
	'sslauth-disable' => 'Оневозможи',
	'sslauth-cn' => 'Заедничко име',
	'sslauth-email' => 'Е-пошта',
	'sslauth-serial' => 'Сериски број',
	'sslauth-response-disable' => 'Заверката со SSL е успешно оневозможена.',
	'sslauth-invalidrequest-title' => 'Неважечко барање',
	'clientssl-legend' => 'Заверка со SSL',
	'sslauth-prefs-name' => 'Заверка со SSL',
	'sslauth-prefs-linktospecial' => 'Овозможи/Оневозможи клиентски уверенија',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'sslauth-email' => 'ఈ-మెయిల్ చిరునామా',
	'sslauth-serial' => 'క్రమ సంఖ్య',
);

