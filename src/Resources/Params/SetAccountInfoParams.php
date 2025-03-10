<?php

namespace Voximplant\Resources\Params;

class SetAccountInfoParams
{
    /** @var string The new account email */
    public $new_account_email;

    /** @var string The new account password. Must be at least 8 characters long and contain at least one uppercase and lowercase letter, one number, and one special character */
    public $new_account_password;

    /** @var string The notification language code (2 symbols, ISO639-1). The following values are available: aa (Afar), ab (Abkhazian), af (Afrikaans), am (Amharic), ar (Arabic), as (Assamese), ay (Aymara), az (Azerbaijani), ba (Bashkir), be (Belarusian), bg (Bulgarian), bh (Bihari), bi (Bislama), bn (Bengali), bo (Tibetan), br (Breton), ca (Catalan), co (Corsican), cs (Czech), cy (Welch), da (Danish), de (German), dz (Bhutani), el (Greek), en (English), eo (Esperanto), es (Spanish), et (Estonian), eu (Basque), fa (Persian), fi (Finnish), fj (Fiji), fo (Faeroese), fr (French), fy (Frisian), ga (Irish), gd (Scots Gaelic), gl (Galician), gn (Guarani), gu (Gujarati), ha (Hausa), hi (Hindi), he (Hebrew), hr (Croatian), hu (Hungarian), hy (Armenian), ia (Interlingua), id (Indonesian), ie (Interlingue), ik (Inupiak), in (Indonesian), is (Icelandic), it (Italian), iu (Inuktitut), iw (Hebrew), ja (Japanese), ji (Yiddish), jw (Javanese), ka (Georgian), kk (Kazakh), kl (Greenlandic), km (Cambodian), kn (Kannada), ko (Korean), ks (Kashmiri), ku (Kurdish), ky (Kirghiz), la (Latin), ln (Lingala), lo (Laothian), lt (Lithuanian), lv (Latvian), mg (Malagasy), mi (Maori), mk (Macedonian), ml (Malayalam), mn (Mongolian), mo (Moldavian), mr (Marathi), ms (Malay), mt (Maltese), my (Burmese), na (Nauru), ne (Nepali), nl (Dutch), no (Norwegian), oc (Occitan), om (Oromo), or (Oriya), pa (Punjabi), pl (Polish), ps (Pashto), pt (Portuguese), qu (Quechua), rm (Rhaeto-Romance), rn (Kirundi), ro (Romanian), ru (Russian), rw (Kinyarwanda), sa (Sanskrit), sd (Sindhi), sg (Sangro), sh (Serbo-Croatian), si (Singhalese), sk (Slovak), sl (Slovenian), sm (Samoan), sn (Shona), so (Somali), sq (Albanian), sr (Serbian), ss (Siswati), st (Sesotho), su (Sudanese), sv (Swedish), sw (Swahili), ta (Tamil), te (Tegulu), tg (Tajik), th (Thai), ti (Tigrinya), tk (Turkmen), tl (Tagalog), tn (Setswana), to (Tonga), tr (Turkish), ts (Tsonga), tt (Tatar), tw (Twi), ug (Uigur), uk (Ukrainian), ur (Urdu), uz (Uzbek), vi (Vietnamese), vo (Volapuk), wo (Wolof), xh (Xhosa), yi (Yiddish), yo (Yoruba), za (Zhuang), zh (Chinese), zu (Zulu) */
    public $language_code;

    /** @var string The account location (timezone). Examples: America/Los_Angeles, Etc/GMT-8, Etc/GMT+10 */
    public $location;

    /** @var string The first name */
    public $account_first_name;

    /** @var string The last name */
    public $account_last_name;

    /** @var string The mobile phone linked to the account */
    public $mobile_phone;

    /** @var decimal The min balance value to notify by email or SMS */
    public $min_balance_to_notify;

    /** @var boolean Whether Voximplant notifications are required */
    public $account_notifications;

    /** @var boolean Whether to receive the emails about the Voximplant plan changing */
    public $tariff_changing_notifications;

    /** @var boolean Whether to receive the emails about the Voximplant news */
    public $news_notifications;

    /** @var boolean Whether to receive the emails about a JS scenario error */
    public $send_js_error;

    /** @var string The company or businessman name */
    public $billing_address_name;

    /** @var string The billing address country code (2 symbols, ISO 3166-1 alpha-2). The following values are available: AF (Afghanistan), AL (Albania), DZ (Algeria), AS (American Samoa), AD (Andorra), AO (Angola), AI (Anguilla), AQ (Antarctica), AG (Antigua and Barbuda), AR (Argentina), AM (Armenia), AW (Aruba), AU (Australia), AT (Austria), AZ (Azerbaijan), BH (Bahrain), BD (Bangladesh), BB (Barbados), BY (Belarus), BE (Belgium), BZ (Belize), BJ (Benin), BM (Bermuda), BT (Bhutan), BO (Bolivia), BA (Bosnia and Herzegovina), BW (Botswana), BV (Bouvet Island), BR (Brazil), IO (British Indian Ocean Territory), BN (Brunei), BG (Bulgaria), BF (Burkina Faso), BI (Burundi), KH (Cambodia), CM (Cameroon), CA (Canada), CV (Cape Verde), KY (Cayman Islands), CF (Central African Republic), TD (Chad), CL (Chile), CN (China), CX (Christmas Island), CO (Colombia), KM (Comoros), CG (Congo), CK (Cook Islands), CR (Costa Rica), HR (Croatia), CU (Cuba), CY (Cyprus), CZ (Czech Republic), DK (Denmark), DJ (Djibouti), DM (Dominica), DO (Dominican Republic), EC (Ecuador), EG (Egypt), SV (El Salvador), GQ (Equatorial Guinea), ER (Eritrea), EE (Estonia), ET (Ethiopia), FO (Faroe Islands), FJ (Fiji Islands), FI (Finland), FR (France), GF (French Guiana), PF (French Polynesia), TF (French Southern and Antarctic Lands), GA (Gabon), GE (Georgia), DE (Germany), GH (Ghana), GI (Gibraltar), GR (Greece), GL (Greenland), GD (Grenada), GP (Guadeloupe), GU (Guam), GT (Guatemala), GG (Guernsey), GN (Guinea), GY (Guyana), HT (Haiti), HM (Heard Island and McDonald Islands), HN (Honduras), HU (Hungary), IS (Iceland), IN (India), ID (Indonesia), IR (Iran), IQ (Iraq), IE (Ireland), IL (Israel), IT (Italy), JM (Jamaica), JP (Japan), JE (Jersey), JO (Jordan), KZ (Kazakhstan), KE (Kenya), KI (Kiribati), KR (Korea), KW (Kuwait), KG (Kyrgyzstan), LA (Laos), LV (Latvia), LB (Lebanon), LS (Lesotho), LR (Liberia), LY (Libya), LI (Liechtenstein), LT (Lithuania), LU (Luxembourg), MG (Madagascar), MW (Malawi), MY (Malaysia), MV (Maldives), ML (Mali), MT (Malta), MH (Marshall Islands), MQ (Martinique), MR (Mauritania), MU (Mauritius), YT (Mayotte), MX (Mexico), FM (Micronesia), MD (Moldova), MC (Monaco), MN (Mongolia), ME (Montenegro), MS (Montserrat), MA (Morocco), MZ (Mozambique), MM (Myanmar), NA (Namibia), NR (Nauru), NP (Nepal), NL (Netherlands), AN (Netherlands Antilles), NC (New Caledonia), NZ (New Zealand), NI (Nicaragua), NE (Niger), NG (Nigeria), NU (Niue), NF (Norfolk Island), KP (North Korea), MP (Northern Mariana Islands), NO (Norway), OM (Oman), PK (Pakistan), PW (Palau), PS (Palestinian Authority), PA (Panama), PG (Papua New Guinea), PY (Paraguay), PE (Peru), PH (Philippines), PN (Pitcairn Islands), PL (Poland), PT (Portugal), PR (Puerto Rico), QA (Qatar), RE (Reunion), RO (Romania), RU (Russia), RW (Rwanda), WS (Samoa), SM (San Marino), SA (Saudi Arabia), SN (Senegal), RS (Serbia), SC (Seychelles), SL (Sierra Leone), SG (Singapore), SK (Slovakia), SI (Slovenia), SB (Solomon Islands), SO (Somalia), ZA (South Africa), GS (South Georgia and the South Sandwich Islands), ES (Spain), LK (Sri Lanka), SD (Sudan), SR (Suriname), SZ (Swaziland), SE (Sweden), CH (Switzerland), SY (Syria), ST (Sao Tome and Principe), TW (Taiwan), TJ (Tajikistan), TZ (Tanzania), TH (Thailand), TG (Togo), TK (Tokelau), TO (Tonga), TT (Trinidad and Tobago), TN (Tunisia), TR (Turkey), TM (Turkmenistan), TC (Turks and Caicos Islands), TV (Tuvalu), UG (Uganda), UA (Ukraine), AE (United Arab Emirates), GB (United Kingdom), US (United States), UY (Uruguay), UZ (Uzbekistan), VU (Vanuatu), VA (Vatican City), VE (Venezuela), VN (Vietnam), VI (Virgin Islands), WF (Wallis and Futuna), EH (Western Sahara), YE (Yemen), ZM (Zambia), ZW (Zimbabwe), AX (Aland Islands) */
    public $billing_address_country_code;

    /** @var string The valid address that needs to be specified to pay for any services. You cannot delete it later, only change */
    public $billing_address_address;

    /** @var string The office ZIP */
    public $billing_address_zip;

    /** @var string The office phone number */
    public $billing_address_phone;

    /** @var string The custom data */
    public $account_custom_data;

    /** @var string If URL is specified, Voximplant cloud makes HTTP POST requests to it when something happens. For a full list of reasons see the type field of the [AccountCallback] structure. The HTTP request has a JSON-encoded body that conforms to the [AccountCallbacks] structure */
    public $callback_url;

    /** @var string If salt string is specified, each HTTP request made by the Voximplant cloud toward the callback_url has a salt field set to MD5 hash of account information and salt. That hash can be used be a developer to ensure that HTTP request is made by the Voximplant cloud */
    public $callback_salt;

    /** @var boolean Whether to store outgoing message texts. Default value is false */
    public $store_outbound_sms;

    /** @var boolean Whether to store incoming message texts. Default value is false */
    public $store_inbound_sms;

    public function toArray()
    {
        return [
                'new_account_email' => $this->new_account_email,
                    'new_account_password' => $this->new_account_password,
                    'language_code' => $this->language_code,
                    'location' => $this->location,
                    'account_first_name' => $this->account_first_name,
                    'account_last_name' => $this->account_last_name,
                    'mobile_phone' => $this->mobile_phone,
                    'min_balance_to_notify' => $this->min_balance_to_notify,
                    'account_notifications' => $this->account_notifications !== null ? (filter_var($this->account_notifications, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'tariff_changing_notifications' => $this->tariff_changing_notifications !== null ? (filter_var($this->tariff_changing_notifications, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'news_notifications' => $this->news_notifications !== null ? (filter_var($this->news_notifications, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'send_js_error' => $this->send_js_error !== null ? (filter_var($this->send_js_error, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'billing_address_name' => $this->billing_address_name,
                    'billing_address_country_code' => $this->billing_address_country_code,
                    'billing_address_address' => $this->billing_address_address,
                    'billing_address_zip' => $this->billing_address_zip,
                    'billing_address_phone' => $this->billing_address_phone,
                    'account_custom_data' => $this->account_custom_data,
                    'callback_url' => $this->callback_url,
                    'callback_salt' => $this->callback_salt,
                    'store_outbound_sms' => $this->store_outbound_sms !== null ? (filter_var($this->store_outbound_sms, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'store_inbound_sms' => $this->store_inbound_sms !== null ? (filter_var($this->store_inbound_sms, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
