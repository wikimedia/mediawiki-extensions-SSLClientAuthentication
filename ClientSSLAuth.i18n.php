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
	'sslauth-email' => 'Email address',
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

/** Message documentation (Message documentation)
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'sslauth-desc' => '{{desc|name=SSL Client Authentication|url=http://www.mediawiki.org/wiki/Extension:SSL_authentication}}',
	'sslauth-title-enable' => '{{doc-special|ClientSSL|unlisted=1}}
Used when ssl-auth is disabled and the user is enabling it.

See also:
* {{msg-mw|Sslauth-title-disable}}',
	'sslauth-title-disable' => '{{doc-special|ClientSSL|unlisted=1}}
Used when ssl-auth is enabled and the user is disabling it.

See also:
* {{msg-mw|Sslauth-title-enable}}',
	'sslauth-enable' => 'Label for the submit button when enabling.
{{Identical|Enable}}',
	'sslauth-disable' => 'Label for the submit button when disabling.
{{Identical|Disable}}',
	'sslauth-cn' => 'Label for the CN (Common Name) field of the SSL certificate.
{{Identical|Common name}}',
	'sslauth-email' => 'Label for the e-mail field of the SSL certificate.
{{Identical|E-mail address}}',
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

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'sslauth-desc' => 'Permite a los usuarios xubir certificaos SSL pa usalos na identificación',
	'sslauth-title-enable' => 'Activar la identificación de cliente con SSL',
	'sslauth-title-disable' => 'Desactivar la identificación de cliente con SSL',
	'sslauth-enable' => 'Activar',
	'sslauth-disable' => 'Desactivar',
	'sslauth-cn' => 'Nome común',
	'sslauth-email' => 'Direición de corréu electrónicu',
	'sslauth-serial' => 'Númberu de serie',
	'sslauth-response-enable' => 'La identificación con SSL activóse correutamente. Agora, cuando se coneute a {{SITENAME}} per HTTPS col so certificáu de cliente, aniciará sesión automaticamente.',
	'sslauth-response-disable' => 'La identificación con SSL desactivóse correutamente.',
	'sslauth-invalidrequest-title' => 'Solicitú inválida',
	'sslauth-invalidrequest' => "Tien de dase un certificáu de cliente SSL pa qu'esta páxina seya útil.",
	'clientssl-legend' => 'Identificación SSL',
	'clientssl-text' => "Use esta páxina p'activar o desactivar la identificación con certificaos de cliente SSL.",
	'sslauth-prefs-name' => 'Identificación SSL',
	'sslauth-prefs-linktospecial' => 'Activar/desactivar los certificaos de cliente',
);

/** Breton (brezhoneg)
 * @author Fohanno
 */
$messages['br'] = array(
	'sslauth-enable' => 'Gweredekaat',
	'sslauth-disable' => 'Diweredekaat',
	'sslauth-email' => "Chomlec'h postel",
);

/** Catalan (català)
 * @author Pitort
 */
$messages['ca'] = array(
	'sslauth-enable' => 'Activa',
	'sslauth-disable' => 'Desactiva',
	'sslauth-email' => 'Adreça de correu electrònic',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'sslauth-enable' => 'Юкъадаладе',
);

/** Czech (čeština)
 * @author Vks
 */
$messages['cs'] = array(
	'sslauth-enable' => 'Povolit',
	'sslauth-disable' => 'Zakázat',
	'sslauth-email' => 'E-mailová adresa',
	'sslauth-serial' => 'Sériové číslo',
	'sslauth-invalidrequest-title' => 'Neplatný požadavek',
	'clientssl-legend' => 'Ověřování SSL',
	'sslauth-prefs-name' => 'Ověřování SSL',
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

/** Spanish (español)
 * @author Armando-Martin
 */
$messages['es'] = array(
	'sslauth-desc' => 'Permite a los usuarios subir certificados SSL para usarlos en la autenticación',
	'sslauth-title-enable' => 'Activar la autenticación de cliente mediante SSL',
	'sslauth-title-disable' => 'Desactivar la autenticación de cliente mediante SSL',
	'sslauth-enable' => 'Activar',
	'sslauth-disable' => 'Desactivar',
	'sslauth-cn' => 'Nombre común',
	'sslauth-email' => 'Dirección de correo electrónico',
	'sslauth-serial' => 'Número de serie',
	'sslauth-response-enable' => 'La autenticación mediante SSL se ha activado correctamente. Ahora cuando se conecte a {{SITENAME}} mediante HTTPS con su certificado de cliente accederás al sistema automáticamente.',
	'sslauth-response-disable' => 'La autenticación mediante SSL se ha desactivado correctamente.',
	'sslauth-invalidrequest-title' => 'Solicitud inválida',
	'sslauth-invalidrequest' => 'Debe proporcionar un certificado válido de cliente SSL para que esta página sea útil.',
	'clientssl-legend' => 'Autenticación mediante SSL',
	'clientssl-text' => 'Utiliza esta página para activar o desactivar la autenticación mediante certificados de cliente SSL.',
	'sslauth-prefs-name' => 'Autenticación SSL',
	'sslauth-prefs-linktospecial' => 'Activar/desactivar certificados de cliente',
);

/** Persian (فارسی)
 * @author Armin1392
 * @author Mjbmr
 * @author Reza1615
 */
$messages['fa'] = array(
	'sslauth-enable' => 'فعال سازی',
	'sslauth-disable' => 'غیرفعال سازی',
	'sslauth-cn' => 'نام معمولی',
	'sslauth-email' => 'نشانی پست الکترونیکی',
	'sslauth-serial' => 'شماره سریال',
	'sslauth-invalidrequest-title' => 'درخواست نامعتبر',
	'clientssl-legend' => 'تأییدیهٔ اس‌اس‌ال',
	'sslauth-prefs-name' => 'تأییدیهٔ اس‌اس‌ال',
);

/** Finnish (suomi)
 * @author Nedergard
 * @author Silvonen
 */
$messages['fi'] = array(
	'sslauth-email' => 'Sähköpostiosoite',
	'sslauth-serial' => 'Sarjanumero',
);

/** French (français)
 * @author Crochet.david
 * @author Gomoko
 */
$messages['fr'] = array(
	'sslauth-desc' => "Permet aux utilisateurs de télécharger des certificats SSL à utiliser pour l'authentification",
	'sslauth-title-enable' => "Activer l'authentification client SSL",
	'sslauth-title-disable' => "Désactiver l'authentification client SSL",
	'sslauth-enable' => 'Activer',
	'sslauth-disable' => 'Désactiver',
	'sslauth-cn' => 'Nom usuel',
	'sslauth-email' => 'Adresse de courriel',
	'sslauth-serial' => 'Numéro de série',
	'sslauth-response-enable' => "L'authentification SSL a bien été activée. Désormais, quand vous vous connectez à {{SITENAME}} via HTTPS avec votre certificat client, vous serez automatiquement connecté.",
	'sslauth-response-disable' => "L'authentification SSL a bien été désactivée.",
	'sslauth-invalidrequest-title' => 'Requête non valide',
	'sslauth-invalidrequest' => "Un certificat client SSL valide doit être fourni pour cette page afin d'être utile.",
	'clientssl-legend' => 'Authentification SSL',
	'clientssl-text' => "Utiliser cette page en activant/désactivant l'authentification avec les certificats client SSL.",
	'sslauth-prefs-name' => 'Authentification SSL',
	'sslauth-prefs-linktospecial' => 'Activer/Désactiver les certificats client',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'sslauth-desc' => 'Permite aos usuarios cargar certificados SSL para usalos na autenticación',
	'sslauth-title-enable' => 'Activar a autenticación de cliente mediante SSL',
	'sslauth-title-disable' => 'Desactivar a autenticación de cliente mediante SSL',
	'sslauth-enable' => 'Activar',
	'sslauth-disable' => 'Desactivar',
	'sslauth-cn' => 'Nome común',
	'sslauth-email' => 'Enderezo de correo electrónico',
	'sslauth-serial' => 'Número de serie',
	'sslauth-response-enable' => 'A autenticación SSL activouse correctamente. Agora cando se conecte a {{SITENAME}} con HTTPS co seu certificado de cliente accederás ao sistema automaticamente.',
	'sslauth-response-disable' => 'A autenticación SSL desactivouse correctamente.',
	'sslauth-invalidrequest-title' => 'Solicitude inválida',
	'sslauth-invalidrequest' => 'Cómpre proporcionar un certificado de cliente SSL para que esta páxina sexa útil.',
	'clientssl-legend' => 'Autenticación SSL',
	'clientssl-text' => 'Utilice esta páxina para activar ou desactivar a autenticación cos certificados de cliente SSL.',
	'sslauth-prefs-name' => 'Autenticación SSL',
	'sslauth-prefs-linktospecial' => 'Activar ou desactivar os certificados de cliente',
);

/** Hebrew (עברית)
 * @author חיים
 */
$messages['he'] = array(
	'sslauth-enable' => 'פעיל',
	'sslauth-disable' => 'כבוי',
	'sslauth-email' => 'כתובת דוא"ל',
	'sslauth-serial' => 'מספר סידורי',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'sslauth-desc' => 'Zmóžnja wužiwarjam SSL-certifikaty nahrać, kotrež maja so za awtentifikaciju wužiwać',
	'sslauth-title-enable' => 'Klientowu SSL-awtentifikaciju zmóžnić',
	'sslauth-title-disable' => 'Klientowu SSL-awtentifikaciju znjemóžnić',
	'sslauth-enable' => 'Zmóžnić',
	'sslauth-disable' => 'Znjemóžnić',
	'sslauth-cn' => 'Powšitkowne mjeno',
	'sslauth-email' => 'E-mejlowa adresa',
	'sslauth-serial' => 'Serijowe čisło',
	'sslauth-response-enable' => 'SSL-awtentifikacija je so wuspěšnje zmóžniła. Hdyžkuli zwjazuješ přez HTTPS z {{GRAMMAR:instrumental|{{SITENAME}}}} ze swojim klientowym certifikatom, budźeš so nětko awtomatisce přizjewjeć.',
	'sslauth-response-disable' => 'SSL-awtentifikacija je so wuspěšnje znjemóžniła.',
	'sslauth-invalidrequest-title' => 'Njepłaćiwe naprašowanje',
	'sslauth-invalidrequest' => 'Za tutu stronu dyrbi so płaćiwy klientowy SSL-certifikat podać.',
	'clientssl-legend' => 'SSL-awtentifikacija',
	'clientssl-text' => 'Wužij tutu stronu, zo by awtentifikaciju z klientowymi SSL-certifikatami zmóžnił/znjemóžnił.',
	'sslauth-prefs-name' => 'SSL-awtentifikacija',
	'sslauth-prefs-linktospecial' => 'Klientowe certifikaty zmóžnić/znjemóžnić',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'sslauth-desc' => "Consente agli utenti di caricare i certificati SSL da utilizzare per l'autenticazione",
	'sslauth-title-enable' => 'Abilita autenticazione client SSL',
	'sslauth-title-disable' => 'Disabilita autenticazione client SSL',
	'sslauth-enable' => 'Abilita',
	'sslauth-disable' => 'Disabilita',
	'sslauth-cn' => 'Nome comune',
	'sslauth-email' => 'Indirizzo e-mail',
	'sslauth-serial' => 'Numero di serie',
	'sslauth-response-enable' => "L'autenticazione SSL è stata attivata con successo. Ora ogni volta che ti connetti a {{SITENAME}} su HTTPS con il tuo certificato client, verrà effettuato automaticamente l'accesso.",
	'sslauth-response-disable' => "L'autenticazione SSL è stata disabilitata con successo.",
	'sslauth-invalidrequest-title' => 'Richiesta non valida',
	'sslauth-invalidrequest' => 'Deve essere fornito un certificato client SSL valido per rendere utilizzabile questa pagina.',
	'clientssl-legend' => 'Autenticazione SSL',
	'clientssl-text' => "Utilizza questa pagina per attivare o disattivare l'autenticazione con certificati SSL client.",
	'sslauth-prefs-name' => 'Autenticazione SSL',
	'sslauth-prefs-linktospecial' => 'Attiva/disattiva certificati client',
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
	'sslauth-email' => 'メールアドレス',
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

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'sslauth-enable' => 'ჩართული',
	'sslauth-disable' => 'გამორთული',
	'sslauth-email' => 'ელ. ფოსტის მისამართი',
	'sslauth-serial' => 'სერიული ნომერი',
	'sslauth-invalidrequest-title' => 'არასწორი მოთხოვნა',
);

/** Korean (한국어)
 * @author Priviet
 */
$messages['ko'] = array(
	'sslauth-desc' => '사용자가  인증하기 위해 SSL 인증서를 올릴 수 있도록 허용',
	'sslauth-title-enable' => 'SSL 클라이언트 인증 활성화',
	'sslauth-title-disable' => 'SSL 클라이언트 비활성화',
	'sslauth-enable' => '활성화',
	'sslauth-disable' => '비활성화',
	'sslauth-cn' => '공통 이름',
	'sslauth-email' => '이메일 주소',
	'sslauth-serial' => '일련 번호',
	'sslauth-response-enable' => 'SSL 인증이 성공적으로 활성화됐습니다. 지금부터 클라이언트 인증서를 가지고 있으면 HTTPS를 통해 {{SITENAME}}에 접속할 때마다 자동으로 로그인됩니다.',
	'sslauth-response-disable' => 'SSL 인증을 비활성화하는 데 성공했습니다.',
	'sslauth-invalidrequest-title' => '유효하지 않은 요청',
	'sslauth-invalidrequest' => '이 문서를 사용하려면 유효한 SSl 클라이언트 증명서를 지정해야합니다.',
	'clientssl-legend' => 'SSL 인증',
	'clientssl-text' => '클라이언트 SSL 증명서로 활성화/비활성화하기 위해 이 문서를 사용하기',
	'sslauth-prefs-name' => 'SSL 인증서',
	'sslauth-prefs-linktospecial' => '클라이언트 증명서 활성화/비활성화',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'sslauth-desc' => 'Löht de Metmaacher <i lang"en" title="secure socket layer">SSL</i>-Zättifikaate huh laade, di för et  Authentication jebruch wääde.', # Fuzzy
	'sslauth-title-enable' => 'De Metmaacher övver <i lang"en" title="secure socket layer">SSL</i> Authenticate lohße', # Fuzzy
	'sslauth-title-disable' => 'De Metmaacher nit övver <i lang"en" title="secure socket layer">SSL</i> Authenticate lohße', # Fuzzy
	'sslauth-enable' => 'Enschallde',
	'sslauth-disable' => 'Ußschallde',
	'sslauth-cn' => 'Der alljemeine Nahme',
	'sslauth-email' => 'De Addräß för de <i lang="en">e-mail</i>',
	'sslauth-serial' => 'Seerieje_Nommer',
	'sslauth-invalidrequest-title' => 'En önjöltejje Aanfrooch',
	'sslauth-invalidrequest' => 'E jöltesch <i lang"en" title="secure socket layer">SSL</i>-Zättifikaat es nüüdesch, domet heh di Sigg ene Senn hät.',
	'sslauth-prefs-linktospecial' => 'De metmaacher ier Zättifikaate en- udder ußschallde',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 * @author Soued031
 */
$messages['lb'] = array(
	'sslauth-desc' => 'Erméiglecht et de Benotzer fir SSL-Zertifikaten eropzeluede fir se fir Authentifizéierung ze benotzen',
	'sslauth-title-enable' => 'SSL-Client-Authentifizéierung aktivéieren',
	'sslauth-enable' => 'Aschalten',
	'sslauth-disable' => 'Ausschalten',
	'sslauth-cn' => 'Allgemengen Numm',
	'sslauth-email' => 'E-Mail-Adress',
	'sslauth-serial' => 'Seriennummer',
	'sslauth-response-disable' => "D'SSL-Authentifizéierung gouf desaktivéiert.",
	'sslauth-invalidrequest-title' => 'Net-valabel Ufro',
	'clientssl-legend' => 'SSL-Authentifikatioun',
	'sslauth-prefs-name' => 'SSL-Authentifikatioun',
);

/** Latvian (latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'sslauth-email' => 'E-pasta adrese',
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
	'sslauth-response-enable' => 'Заверката со SSL е успешно овозможена. Отсега ќе се најавувате автоматски кога ќе се поврзувате со {{SITENAME}} преку HTTPS со вашето клиентско уверение.',
	'sslauth-response-disable' => 'Заверката со SSL е успешно оневозможена.',
	'sslauth-invalidrequest-title' => 'Неважечко барање',
	'sslauth-invalidrequest' => 'Мора да поднесете важечко SSL-уверение за да страницава да биде од корист.',
	'clientssl-legend' => 'Заверка со SSL',
	'clientssl-text' => 'Со оваа страница се овозможуваат/оневозможуваат клиентски заверки со SSL-уверенија.',
	'sslauth-prefs-name' => 'Заверка со SSL',
	'sslauth-prefs-linktospecial' => 'Овозможи/Оневозможи клиентски уверенија',
);

/** Low German (Plattdüütsch)
 * @author Joachim Mos
 */
$messages['nds'] = array(
	'sslauth-email' => 'E-Mail-Adress',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'sslauth-desc' => 'Maakt het voor gebruikers SSL-certificaten te uploaden om die te gebruiken voor authenticatie',
	'sslauth-title-enable' => 'SSL Clientauthenticatie inschakelen',
	'sslauth-title-disable' => 'SSL Clientauthenticatie uitschakelen',
	'sslauth-enable' => 'Inschakelen',
	'sslauth-disable' => 'Uitschakelen',
	'sslauth-cn' => 'Algemene naam',
	'sslauth-email' => 'E-mailadres',
	'sslauth-serial' => 'Serienummer',
	'sslauth-response-enable' => 'SSL-verificatie is ingeschakeld. Als i verbindt met {{SITENAME}} via HTTPS met uw clientcertificaat, wordt u automatisch aangemeld.',
	'sslauth-response-disable' => 'SSL-verificatie is uitgeschakeld.',
	'sslauth-invalidrequest-title' => 'Ongeldige aanvraag',
	'sslauth-invalidrequest' => 'Er moet een geldig SSL clientcertificaat opgegeven worden voordat deze pagina nuttig is.',
	'clientssl-legend' => 'SSL-authenticatie',
	'clientssl-text' => 'Gebruik deze pagina om verificatie met SSL clientcertificaten in en uit te schakelen',
	'sslauth-prefs-name' => 'SSL-authenticatie',
	'sslauth-prefs-linktospecial' => 'Clientcertificaten in- of uitschakelen',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'sslauth-desc' => "A përmët a j'utent ëd carié dij sertificà SSl da dovré për l'autenticassion",
	'sslauth-title-enable' => "Abìlita l'Autenticassion Client SSL",
	'sslauth-title-disable' => "Disabìlita l'Autenticassion Client SSL",
	'sslauth-enable' => 'Abìlita',
	'sslauth-disable' => 'Disabìlita',
	'sslauth-cn' => 'Nòm comun',
	'sslauth-email' => 'Adrëssa ëd pòsta eletrònica',
	'sslauth-serial' => 'Nùmer ëd serie',
	'sslauth-response-enable' => "L'Autenticassion SSL a l'é stàita abilità da bin. Adess quand ch'as colega a {{SITENAME}} an HTTPS con sò sertificà client, a intrerà automaticament ant ël sistema.",
	'sslauth-response-disable' => "L'Autenticassion SSL a l'é stàita disabilità",
	'sslauth-invalidrequest-title' => 'Arcesta pa bon-a',
	'sslauth-invalidrequest' => 'Un sertificà client SSL bon a dev esse fornì për che costa pàgina a sia ùtil.',
	'clientssl-legend' => 'Autenticassion SSL',
	'clientssl-text' => "Dovré costa pàgina për abilité/disabilité l'autenticassion con ij sertificà client SSL.",
	'sslauth-prefs-name' => 'Autenticassion SSL',
	'sslauth-prefs-linktospecial' => 'Abìlité/Disabilité ij sertificà client',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'sslauth-enable' => 'چارنول',
	'sslauth-disable' => 'ناچارنول',
	'sslauth-email' => 'برېښليک پته',
);

/** Romanian (română)
 * @author Minisarm
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'sslauth-enable' => 'Activeză',
	'sslauth-disable' => 'Dezactivează',
	'sslauth-cn' => 'Nume comun',
	'sslauth-email' => 'Adresă de e-mail',
	'sslauth-serial' => 'Număr de serie',
	'sslauth-invalidrequest-title' => 'Cerere invalidă',
	'sslauth-prefs-name' => 'Autentificare SSL',
	'sslauth-prefs-linktospecial' => 'Activează/dezactivează certificatele de client',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'sslauth-desc' => "Permette a l'utinde de carecà le certificate SSL da essere ausate pe l'autendicazione",
	'sslauth-title-enable' => "Abbilite l'autendicazione SSL d'u client",
	'sslauth-title-disable' => "Disabbilite l'autendicazione SSL d'u client",
	'sslauth-enable' => 'Abbilite',
	'sslauth-disable' => 'Disabbilite',
	'sslauth-cn' => 'Nome comune',
	'sslauth-email' => 'Indirizze e-mail',
	'sslauth-serial' => 'Numere seriale',
	'sslauth-response-enable' => "L'autendicazione SSL ha state abbilitate. Mò addò 'ngada stè te puè collegà a {{SITENAME}} sus a HTTPS cu 'u certificate de client, tu automaticamende trase.",
	'sslauth-response-disable' => "L'autendicazione SSL ha state disabbilitate.",
	'sslauth-invalidrequest-title' => 'Richieste invalide',
	'sslauth-invalidrequest' => "'Nu certificate de client SSL valide adda essere date pe sta pàgene pe essere utile.",
	'clientssl-legend' => 'Autendicazione SSL',
	'clientssl-text' => "Ause sta pàgene pe abbilità/disabbilità l'autendicazione cu le certificate de client SSL.",
	'sslauth-prefs-name' => 'Autendicazione SSL',
	'sslauth-prefs-linktospecial' => "Abbilite/Disabbilite le certificate d'u client",
);

/** Russian (русский)
 * @author Okras
 */
$messages['ru'] = array(
	'sslauth-desc' => 'Позволяет пользователям загружать SSL-сертификаты для их использования при аутентификации',
	'sslauth-title-enable' => 'Включить SSL-аутентификацию клиента',
	'sslauth-title-disable' => 'Отключить SSL-аутентификацию клиента',
	'sslauth-enable' => 'Включить',
	'sslauth-disable' => 'Выключить',
	'sslauth-cn' => 'Общее имя',
	'sslauth-email' => 'Адрес электронной почты',
	'sslauth-serial' => 'Серийный номер',
	'sslauth-response-enable' => 'Проверка подлинности SSL успешно включена. Теперь при каждом подключении к {{SITENAME}} по протоколу HTTPS с сертификатом клиента, вы автоматически входить на сайт.',
	'sslauth-response-disable' => 'Проверка подлинности SSL успешно отключена.',
	'sslauth-invalidrequest-title' => 'Неверный запрос',
	'sslauth-invalidrequest' => 'Для использования на этой странице должен быть предоставлен действительный SSL-сертификат клиента.',
	'clientssl-legend' => 'SSL-аутентификация',
	'clientssl-text' => 'Используйте эту страницу, чтобы включить или отключить проверку подлинности с помощью клиентского SSL-сертификата.',
	'sslauth-prefs-name' => 'SSL-аутентификация',
	'sslauth-prefs-linktospecial' => 'Включить/отключить клиентские сертификаты',
);

/** Sinhala (සිංහල)
 * @author Singhalawap
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'sslauth-title-enable' => 'SSL සේවාදායක සත්‍යාපනය සක්‍රිය කරන්න',
	'sslauth-title-disable' => 'SSL සේවාදායක සත්‍යාපනය අක්‍රිය කරන්න',
	'sslauth-enable' => 'සක්‍රීයකරන්න',
	'sslauth-disable' => 'අක්‍රීය කරන්න',
	'sslauth-cn' => 'පොදු නම',
	'sslauth-email' => 'විද්‍යුත්-තැපැල් ලිපිනය',
	'sslauth-serial' => 'ශ්‍රේණිගත අංකය',
	'sslauth-response-disable' => 'SSL සත්‍යාපනය සාර්ථකව අක්‍රිය කරන ලදී.',
	'sslauth-invalidrequest-title' => 'වලංගු නොවන අයදුම',
	'clientssl-legend' => 'SSL සහතික කිරීම',
	'sslauth-prefs-name' => 'SSL සහතික කිරීම',
	'sslauth-prefs-linktospecial' => 'සේවාදායක සහතික සක්‍රිය/අක්‍රිය කරන්න',
);

/** Swedish (svenska)
 * @author Jopparn
 */
$messages['sv'] = array(
	'sslauth-enable' => 'Aktivera',
	'sslauth-disable' => 'Inaktivera',
	'sslauth-cn' => 'Common name',
	'sslauth-email' => 'E-postadress',
	'sslauth-serial' => 'Serienummer',
	'sslauth-response-enable' => 'SSL-autentisering har aktiverats. När du nu ansluter till {{SITENAME}} över HTTPS med ditt klientcertifikat kommer du automatiskt att vara inloggad.',
	'sslauth-response-disable' => 'SSL-autentisering har framgångsrikt inaktiverats.',
	'sslauth-invalidrequest-title' => 'Ogiltig begäran',
	'sslauth-invalidrequest' => 'Ett giltigt SSL-klientcertifikat måste tillhandahållas för att den här sidan ska vara användbar.',
	'clientssl-legend' => 'SSL-autentisering',
	'clientssl-text' => 'Använd den här sidan att aktivera/inaktivera autentisering med SSL-klientcertifikat.',
	'sslauth-prefs-name' => 'SSL-autentisering',
	'sslauth-prefs-linktospecial' => 'Aktivera/inaktivera klientcertifikat',
);

/** Tamil (தமிழ்)
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'sslauth-enable' => 'செயலாக்கு',
	'sslauth-cn' => 'பொதுப் பெயர்',
	'sslauth-email' => 'மின்னஞ்சல் முகவரி',
	'sslauth-serial' => 'தொடரிலக்கம்',
	'sslauth-invalidrequest-title' => 'செல்லுபடியாகாத வேண்டுகோள்',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'sslauth-email' => 'ఈ-మెయిల్ చిరునామా',
	'sslauth-serial' => 'క్రమ సంఖ్య',
);

/** Ukrainian (українська)
 * @author Steve.rusyn
 * @author SteveR
 * @author Ата
 */
$messages['uk'] = array(
	'sslauth-desc' => 'Дозволяє користувачам завантажувати SSL-сертифікати, які будуть використовуватися для автентифікації',
	'sslauth-title-enable' => 'Увімкнути SSL-автентифікацію користувачів',
	'sslauth-title-disable' => 'Вимкнути SSL-автентифікацію користувачів',
	'sslauth-enable' => 'Увімкнути',
	'sslauth-disable' => 'Вимкнути',
	'sslauth-cn' => 'Загальна назва',
	'sslauth-email' => 'Адреса електронної пошти',
	'sslauth-serial' => 'Серійний номер',
	'sslauth-response-enable' => "SSL-автентифікацію було успішно увімкнено. Тепер коли б Ви не з'єдувались із {{SITENAME}} через HTTPS зі своїм користувацьким сертифікатом, Ви будете авторматично входити в систему.",
	'sslauth-response-disable' => 'SSL-автентифікацію було успішно вимкнено.',
	'sslauth-invalidrequest-title' => 'Неприпустимий запит',
	'sslauth-invalidrequest' => 'Щоб ця сторінка працювала, необхідно надати дійсний SSL-сертифікат користувача.',
	'clientssl-legend' => 'SSL-автентифікація',
	'clientssl-text' => 'На цій сторінці можна увімкнути/вимкнути автентифікацію з допомогою SSL-сертифікату користувача.',
	'sslauth-prefs-name' => 'SSL-автентифікація',
	'sslauth-prefs-linktospecial' => 'Увімкнути/Вимкнути сертифікати користувача',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Shirayuki
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'sslauth-desc' => '允许用户上传SSL证书用作身份验证',
	'sslauth-title-enable' => '启用SSL客户端身份验证',
	'sslauth-title-disable' => '禁用SSL客户端身份验证',
	'sslauth-enable' => '启用',
	'sslauth-disable' => '禁用',
	'sslauth-cn' => '通用名',
	'sslauth-email' => '电邮地址',
	'sslauth-serial' => '序列号',
	'sslauth-response-enable' => '已成功启用SSL身份验证。现在每当您通过HTTPS用您的客户端证书连接到 {{SITENAME}}，您将自动登录。',
	'sslauth-response-disable' => '已成功禁用SSL身份验证。',
	'sslauth-invalidrequest-title' => '无效的请求',
	'sslauth-invalidrequest' => '要想此页有用，必须提供有效的SSL客户端证书。',
	'clientssl-legend' => 'SSL认证',
	'clientssl-text' => '使用此页来启用/禁用使用客户端SSL证书进行身份验证。',
	'sslauth-prefs-name' => 'SSL认证',
	'sslauth-prefs-linktospecial' => '启用或禁用客户端证书',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Justincheng12345
 * @author Shirayuki
 */
$messages['zh-hant'] = array(
	'sslauth-desc' => '容許抈戶上傳用作身份驗證的SSL憑證',
	'sslauth-title-enable' => '啟用SSL用戶端身份驗證',
	'sslauth-title-disable' => '禁用SSL用戶端身份驗證',
	'sslauth-enable' => '啟用',
	'sslauth-disable' => '禁用',
	'sslauth-cn' => '通用名稱',
	'sslauth-email' => '電郵地址',
	'sslauth-serial' => '序列號',
	'sslauth-response-enable' => '已成功啟用SSL身份驗証。當您通過HTTPS使用您的用戶端憑證連接到 {{SITENAME}}時，您將自動登入。',
	'sslauth-response-disable' => '已成功禁用SSL身份驗証。',
	'sslauth-invalidrequest-title' => '無效請求',
	'sslauth-invalidrequest' => '必需提供有效SSL用戶端憑證以使此頁生效。',
	'clientssl-legend' => 'SSL認證',
	'clientssl-text' => '使用此頁以啟用或禁用SSL用戶端身份驗證。',
	'sslauth-prefs-name' => 'SSL認證',
	'sslauth-prefs-linktospecial' => '啟用或禁用客戶端證書',
);
