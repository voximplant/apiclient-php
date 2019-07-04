<?php

namespace Voximplant\Resources\Params;

class SetChildAccountInfoParams
{
	/** @var intlist The child account ID list separated by the ';' symbol or the 'all' value. */
	public $child_account_id;

	/** @var stringlist The child account name list separated by the ';' symbol. Can be used instead of child_account_id. */
	public $child_account_name;

	/** @var stringlist The child account email list separated by the ';' symbol. Can be used instead of child_account_id. */
	public $child_account_email;

	/** @var string The new child account email. */
	public $new_child_account_email;

	/** @var string The new child account password. */
	public $new_child_account_password;

	/** @var boolean Are the VoxImplant notifications required? */
	public $account_notifications;

	/** @var boolean Set to true to receive the emails about the VoxImplant plan changing. */
	public $tariff_changing_notifications;

	/** @var boolean Set to true to receive the emails about the VoxImplant news. */
	public $news_notifications;

	/** @var boolean Set false to disable the child account. */
	public $active;

	/** @var string The notification language code (2 symbols, ISO639-1). The following values are available: aa (Afar), ab (Abkhazian), af (Afrikaans), am (Amharic), ar (Arabic), as (Assamese), ay (Aymara), az (Azerbaijani), ba (Bashkir), be (Belarusian), bg (Bulgarian), bh (Bihari), bi (Bislama), bn (Bengali), bo (Tibetan), br (Breton), ca (Catalan), co (Corsican), cs (Czech), cy (Welch), da (Danish), de (German), dz (Bhutani), el (Greek), en (English), eo (Esperanto), es (Spanish), et (Estonian), eu (Basque), fa (Persian), fi (Finnish), fj (Fiji), fo (Faeroese), fr (French), fy (Frisian), ga (Irish), gd (Scots Gaelic), gl (Galician), gn (Guarani), gu (Gujarati), ha (Hausa), hi (Hindi), he (Hebrew), hr (Croatian), hu (Hungarian), hy (Armenian), ia (Interlingua), id (Indonesian), ie (Interlingue), ik (Inupiak), in (Indonesian), is (Icelandic), it (Italian), iu (Inuktitut), iw (Hebrew), ja (Japanese), ji (Yiddish), jw (Javanese), ka (Georgian), kk (Kazakh), kl (Greenlandic), km (Cambodian), kn (Kannada), ko (Korean), ks (Kashmiri), ku (Kurdish), ky (Kirghiz), la (Latin), ln (Lingala), lo (Laothian), lt (Lithuanian), lv (Latvian), mg (Malagasy), mi (Maori), mk (Macedonian), ml (Malayalam), mn (Mongolian), mo (Moldavian), mr (Marathi), ms (Malay), mt (Maltese), my (Burmese), na (Nauru), ne (Nepali), nl (Dutch), no (Norwegian), oc (Occitan), om (Oromo), or (Oriya), pa (Punjabi), pl (Polish), ps (Pashto), pt (Portuguese), qu (Quechua), rm (Rhaeto-Romance), rn (Kirundi), ro (Romanian), ru (Russian), rw (Kinyarwanda), sa (Sanskrit), sd (Sindhi), sg (Sangro), sh (Serbo-Croatian), si (Singhalese), sk (Slovak), sl (Slovenian), sm (Samoan), sn (Shona), so (Somali), sq (Albanian), sr (Serbian), ss (Siswati), st (Sesotho), su (Sudanese), sv (Swedish), sw (Swahili), ta (Tamil), te (Tegulu), tg (Tajik), th (Thai), ti (Tigrinya), tk (Turkmen), tl (Tagalog), tn (Setswana), to (Tonga), tr (Turkish), ts (Tsonga), tt (Tatar), tw (Twi), ug (Uigur), uk (Ukrainian), ur (Urdu), uz (Uzbek), vi (Vietnamese), vo (Volapuk), wo (Wolof), xh (Xhosa), yi (Yiddish), yo (Yoruba), za (Zhuang), zh (Chinese), zu (Zulu) */
	public $language_code;

	/** @var string The child account location (timezone). Examples: America/Los_Angeles, GMT-8, GMT-08:00, GMT+10 */
	public $location;

	/** @var decimal The min balance value to notify by email or SMS. */
	public $min_balance_to_notify;

	/** @var boolean Set to true to allow the robokassa payments. */
	public $support_robokassa;

	/** @var boolean Set to true to allow the bank card payments. */
	public $support_bank_card;

	/** @var boolean Set to true to allow the bank invoices. */
	public $support_invoice;

	/** @var boolean Set to true to allow use restricted directions. */
	public $can_use_restricted;

	/** @var number The minimum payment amount. */
	public $min_payment_amount;
}
