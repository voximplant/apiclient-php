<?php

namespace Voximplant\Resources\Params;

class SetChildAccountInfoParams
{
    /** @var intlist The child account ID list separated by semicolon (;). Use the 'all' value to select all child accounts */
    public $child_account_id;

    /** @var stringlist The child account name list separated by semicolon (;). Can be used instead of child_account_id */
    public $child_account_name;

    /** @var stringlist The child account email list separated by semicolon (;). Can be used instead of child_account_id */
    public $child_account_email;

    /** @var string The new child account email */
    public $new_child_account_email;

    /** @var string The new child account password. Must be at least 8 characters long and contain at least one uppercase and lowercase letter, one number, and one special character */
    public $new_child_account_password;

    /** @var boolean Voximplant notifications are required */
    public $account_notifications;

    /** @var boolean Set to true to receive the emails about the Voximplant plan changing */
    public $tariff_changing_notifications;

    /** @var boolean Set to true to receive the emails about the Voximplant news */
    public $news_notifications;

    /** @var boolean Set false to disable the child account */
    public $active;

    /** @var string The notification language code (2 symbols, ISO639-1). The following values are available: aa (Afar), ab (Abkhazian), af (Afrikaans), am (Amharic), ar (Arabic), as (Assamese), ay (Aymara), az (Azerbaijani), ba (Bashkir), be (Belarusian), bg (Bulgarian), bh (Bihari), bi (Bislama), bn (Bengali), bo (Tibetan), br (Breton), ca (Catalan), co (Corsican), cs (Czech), cy (Welch), da (Danish), de (German), dz (Bhutani), el (Greek), en (English), eo (Esperanto), es (Spanish), et (Estonian), eu (Basque), fa (Persian), fi (Finnish), fj (Fiji), fo (Faeroese), fr (French), fy (Frisian), ga (Irish), gd (Scots Gaelic), gl (Galician), gn (Guarani), gu (Gujarati), ha (Hausa), hi (Hindi), he (Hebrew), hr (Croatian), hu (Hungarian), hy (Armenian), ia (Interlingua), id (Indonesian), ie (Interlingue), ik (Inupiak), in (Indonesian), is (Icelandic), it (Italian), iu (Inuktitut), iw (Hebrew), ja (Japanese), ji (Yiddish), jw (Javanese), ka (Georgian), kk (Kazakh), kl (Greenlandic), km (Cambodian), kn (Kannada), ko (Korean), ks (Kashmiri), ku (Kurdish), ky (Kirghiz), la (Latin), ln (Lingala), lo (Laothian), lt (Lithuanian), lv (Latvian), mg (Malagasy), mi (Maori), mk (Macedonian), ml (Malayalam), mn (Mongolian), mo (Moldavian), mr (Marathi), ms (Malay), mt (Maltese), my (Burmese), na (Nauru), ne (Nepali), nl (Dutch), no (Norwegian), oc (Occitan), om (Oromo), or (Oriya), pa (Punjabi), pl (Polish), ps (Pashto), pt (Portuguese), qu (Quechua), rm (Rhaeto-Romance), rn (Kirundi), ro (Romanian), ru (Russian), rw (Kinyarwanda), sa (Sanskrit), sd (Sindhi), sg (Sangro), sh (Serbo-Croatian), si (Singhalese), sk (Slovak), sl (Slovenian), sm (Samoan), sn (Shona), so (Somali), sq (Albanian), sr (Serbian), ss (Siswati), st (Sesotho), su (Sudanese), sv (Swedish), sw (Swahili), ta (Tamil), te (Tegulu), tg (Tajik), th (Thai), ti (Tigrinya), tk (Turkmen), tl (Tagalog), tn (Setswana), to (Tonga), tr (Turkish), ts (Tsonga), tt (Tatar), tw (Twi), ug (Uigur), uk (Ukrainian), ur (Urdu), uz (Uzbek), vi (Vietnamese), vo (Volapuk), wo (Wolof), xh (Xhosa), yi (Yiddish), yo (Yoruba), za (Zhuang), zh (Chinese), zu (Zulu) */
    public $language_code;

    /** @var string The child account location (timezone). Examples: America/Los_Angeles, Etc/GMT-8, Etc/GMT+10 */
    public $location;

    /** @var decimal The min balance value to notify by email or SMS */
    public $min_balance_to_notify;

    /** @var boolean Set to true to allow the robokassa payments */
    public $support_robokassa;

    /** @var boolean Set to true to allow the bank card payments */
    public $support_bank_card;

    /** @var boolean Set to true to allow the bank invoices */
    public $support_invoice;

    /** @var boolean Set to true to allow use restricted directions */
    public $can_use_restricted;

    public function toArray()
    {
        return [
                'child_account_id' => $this->child_account_id,
                    'child_account_name' => $this->child_account_name,
                    'child_account_email' => $this->child_account_email,
                    'new_child_account_email' => $this->new_child_account_email,
                    'new_child_account_password' => $this->new_child_account_password,
                    'account_notifications' => $this->account_notifications !== null ? (filter_var($this->account_notifications, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'tariff_changing_notifications' => $this->tariff_changing_notifications !== null ? (filter_var($this->tariff_changing_notifications, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'news_notifications' => $this->news_notifications !== null ? (filter_var($this->news_notifications, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'active' => $this->active !== null ? (filter_var($this->active, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'language_code' => $this->language_code,
                    'location' => $this->location,
                    'min_balance_to_notify' => $this->min_balance_to_notify,
                    'support_robokassa' => $this->support_robokassa !== null ? (filter_var($this->support_robokassa, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'support_bank_card' => $this->support_bank_card !== null ? (filter_var($this->support_bank_card, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'support_invoice' => $this->support_invoice !== null ? (filter_var($this->support_invoice, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'can_use_restricted' => $this->can_use_restricted !== null ? (filter_var($this->can_use_restricted, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
