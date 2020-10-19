<?php

namespace Voximplant\Resources\Types;

class RequestType
{
    public function GetAccountInfo()
    {
        return array (
            'return_live_balance' => 'boolean',
        );
    }

    public function SetAccountInfo()
    {
        return array (
            'new_account_email' => 'string',
            'new_account_password' => 'string',
            'language_code' => 'string',
            'location' => 'string',
            'account_first_name' => 'string',
            'account_last_name' => 'string',
            'mobile_phone' => 'string',
            'min_balance_to_notify' => 'decimal',
            'account_notifications' => 'boolean',
            'tariff_changing_notifications' => 'boolean',
            'news_notifications' => 'boolean',
            'send_js_error' => 'boolean',
            'billing_address_name' => 'string',
            'billing_address_country_code' => 'string',
            'billing_address_address' => 'string',
            'billing_address_zip' => 'string',
            'billing_address_phone' => 'string',
            'account_custom_data' => 'string',
            'callback_url' => 'string',
            'callback_salt' => 'string',
        );
    }

    public function SetChildAccountInfo()
    {
        return array (
            'child_account_id' => 'intlist',
            'child_account_name' => 'stringlist',
            'child_account_email' => 'stringlist',
            'new_child_account_email' => 'string',
            'new_child_account_password' => 'string',
            'account_notifications' => 'boolean',
            'tariff_changing_notifications' => 'boolean',
            'news_notifications' => 'boolean',
            'active' => 'boolean',
            'language_code' => 'string',
            'location' => 'string',
            'min_balance_to_notify' => 'decimal',
            'support_robokassa' => 'boolean',
            'support_bank_card' => 'boolean',
            'support_invoice' => 'boolean',
            'can_use_restricted' => 'boolean',
            'min_payment_amount' => 'number',
        );
    }

    public function GetCurrencyRate()
    {
        return array (
            'currency' => 'stringlist',
            'date' => 'date',
        );
    }

    public function GetResourcePrice()
    {
        return array (
            'resource_type' => 'stringlist',
            'price_group_id' => 'intlist',
            'price_group_name' => 'string',
            'resource_param' => 'stringlist',
        );
    }

    public function GetSubscriptionPrice()
    {
        return array (
            'subscription_template_id' => 'intlist',
            'subscription_template_type' => 'string',
            'subscription_template_name' => 'string',
            'count' => 'number',
            'offset' => 'number',
        );
    }

    public function GetChildrenAccounts()
    {
        return array (
            'child_account_id' => 'intlist',
            'child_account_name' => 'string',
            'child_account_email' => 'string',
            'active' => 'boolean',
            'frozen' => 'boolean',
            'ignore_invalid_accounts' => 'boolean',
            'brief_output' => 'boolean',
            'medium_output' => 'boolean',
            'count' => 'number',
            'offset' => 'number',
            'order_by' => 'string',
            'return_live_balance' => 'boolean',
        );
    }

    public function GetMoneyAmountToCharge()
    {
        return array (
            'currency' => 'string',
            'charge_date' => 'date',
        );
    }

    public function ChargeAccount()
    {
        return array (
            'phone_id' => 'intlist',
            'phone_number' => 'stringlist',
        );
    }

    public function AddApplication()
    {
        return array (
            'application_name' => 'string',
            'secure_record_storage' => 'boolean',
        );
    }

    public function DelApplication()
    {
        return array (
            'application_id' => 'intlist',
            'application_name' => 'stringlist',
        );
    }

    public function SetApplicationInfo()
    {
        return array (
            'application_id' => 'number',
            'required_application_name' => 'string',
            'application_name' => 'string',
            'secure_record_storage' => 'boolean',
        );
    }

    public function GetApplications()
    {
        return array (
            'application_id' => 'number',
            'application_name' => 'string',
            'user_id' => 'number',
            'excluded_user_id' => 'number',
            'showing_user_id' => 'number',
            'with_rules' => 'boolean',
            'with_scenarios' => 'boolean',
            'count' => 'number',
            'offset' => 'number',
        );
    }

    public function AddUser()
    {
        return array (
            'user_name' => 'string',
            'user_display_name' => 'string',
            'user_password' => 'string',
            'application_id' => 'number',
            'application_name' => 'string',
            'parent_accounting' => 'boolean',
            'mobile_phone' => 'string',
            'user_active' => 'boolean',
            'user_custom_data' => 'string',
        );
    }

    public function DelUser()
    {
        return array (
            'user_id' => 'intlist',
            'user_name' => 'stringlist',
            'application_id' => 'number',
            'application_name' => 'string',
        );
    }

    public function SetUserInfo()
    {
        return array (
            'user_id' => 'number',
            'user_name' => 'string',
            'application_id' => 'number',
            'application_name' => 'string',
            'new_user_name' => 'string',
            'user_display_name' => 'string',
            'user_password' => 'string',
            'parent_accounting' => 'boolean',
            'user_active' => 'boolean',
            'user_custom_data' => 'string',
            'mobile_phone' => 'string',
        );
    }

    public function GetUsers()
    {
        return array (
            'application_id' => 'number',
            'application_name' => 'string',
            'skill_id' => 'number',
            'excluded_skill_id' => 'number',
            'acd_queue_id' => 'number',
            'excluded_acd_queue_id' => 'number',
            'user_id' => 'number',
            'user_name' => 'string',
            'user_active' => 'boolean',
            'user_display_name' => 'string',
            'with_skills' => 'boolean',
            'with_queues' => 'boolean',
            'acd_status' => 'stringlist',
            'showing_skill_id' => 'number',
            'count' => 'number',
            'offset' => 'number',
            'order_by' => 'string',
            'return_live_balance' => 'boolean',
        );
    }

    public function TransferMoneyToUser()
    {
        return array (
            'user_id' => 'intlist',
            'user_name' => 'stringlist',
            'amount' => 'decimal',
            'application_id' => 'number',
            'application_name' => 'string',
            'currency' => 'string',
            'strict_mode' => 'boolean',
            'user_transaction_description' => 'string',
            'account_transaction_description' => 'string',
        );
    }

    public function CreateManualCallList()
    {
        return array (
            'rule_id' => 'number',
            'priority' => 'number',
            'max_simultaneous' => 'number',
            'num_attempts' => 'number',
            'name' => 'string',
            'file_content' => 'string',
            'interval_seconds' => 'number',
            'encoding' => 'string',
            'delimiter' => 'string',
            'escape' => 'string',
            'reference_ip' => 'string',
        );
    }

    public function StartNextCallTask()
    {
        return array (
            'list_id' => 'intlist',
            'custom_params' => 'string',
        );
    }

    public function GetCallLists()
    {
        return array (
            'list_id' => 'intlist',
            'name' => 'string',
            'is_active' => 'boolean',
            'from_date' => 'timestamp',
            'to_date' => 'timestamp',
            'type_list' => 'string',
            'count' => 'number',
            'offset' => 'number',
            'application_id' => 'intlist',
        );
    }

    public function GetCallListDetails()
    {
        return array (
            'list_id' => 'number',
            'count' => 'number',
            'offset' => 'number',
            'output' => 'string',
            'encoding' => 'string',
            'delimiter' => 'string',
        );
    }

    public function StopCallListProcessing()
    {
        return array (
            'list_id' => 'number',
        );
    }

    public function RecoverCallList()
    {
        return array (
            'list_id' => 'number',
        );
    }

    public function AddScenario()
    {
        return array (
            'scenario_name' => 'string',
            'scenario_script' => 'string',
            'rule_id' => 'number',
            'rule_name' => 'string',
            'rewrite' => 'boolean',
        );
    }

    public function DelScenario()
    {
        return array (
            'scenario_id' => 'intlist',
            'scenario_name' => 'stringlist',
        );
    }

    public function BindScenario()
    {
        return array (
            'scenario_id' => 'intlist',
            'scenario_name' => 'stringlist',
            'rule_id' => 'number',
            'rule_name' => 'string',
            'application_id' => 'number',
            'application_name' => 'string',
            'bind' => 'boolean',
        );
    }

    public function GetScenarios()
    {
        return array (
            'scenario_id' => 'number',
            'scenario_name' => 'string',
            'with_script' => 'boolean',
            'count' => 'number',
            'offset' => 'number',
        );
    }

    public function SetScenarioInfo()
    {
        return array (
            'scenario_id' => 'number',
            'required_scenario_name' => 'string',
            'scenario_name' => 'string',
            'scenario_script' => 'string',
        );
    }

    public function ReorderScenarios()
    {
        return array (
            'rule_id' => 'number',
            'rule_name' => 'string',
            'scenario_id' => 'intlist',
        );
    }

    public function StartScenarios()
    {
        return array (
            'user_id' => 'number',
            'user_name' => 'string',
            'application_id' => 'number',
            'application_name' => 'string',
            'rule_id' => 'number',
            'script_custom_data' => 'string',
            'reference_ip' => 'string',
            'with_check_url' => 'boolean',
        );
    }

    public function StartConference()
    {
        return array (
            'conference_name' => 'string',
            'rule_id' => 'number',
            'user_id' => 'number',
            'user_name' => 'string',
            'application_id' => 'number',
            'application_name' => 'string',
            'script_custom_data' => 'string',
            'reference_ip' => 'string',
        );
    }

    public function AddRule()
    {
        return array (
            'application_id' => 'number',
            'application_name' => 'string',
            'rule_name' => 'string',
            'rule_pattern' => 'string',
            'rule_pattern_exclude' => 'string',
            'video_conference' => 'boolean',
            'scenario_id' => 'intlist',
            'scenario_name' => 'stringlist',
        );
    }

    public function DelRule()
    {
        return array (
            'rule_id' => 'intlist',
            'rule_name' => 'stringlist',
            'application_id' => 'intlist',
            'application_name' => 'stringlist',
        );
    }

    public function SetRuleInfo()
    {
        return array (
            'rule_id' => 'number',
            'rule_name' => 'string',
            'rule_pattern' => 'string',
            'rule_pattern_exclude' => 'string',
            'video_conference' => 'boolean',
        );
    }

    public function GetRules()
    {
        return array (
            'application_id' => 'number',
            'application_name' => 'string',
            'rule_id' => 'number',
            'rule_name' => 'string',
            'video_conference' => 'boolean',
            'template' => 'string',
            'with_scenarios' => 'boolean',
            'count' => 'number',
            'offset' => 'number',
        );
    }

    public function ReorderRules()
    {
        return array (
            'rule_id' => 'intlist',
        );
    }

    public function GetCallHistory()
    {
        return array (
            'from_date' => 'timestamp',
            'to_date' => 'timestamp',
            'timezone' => 'string',
            'call_session_history_id' => 'intlist',
            'application_id' => 'number',
            'application_name' => 'string',
            'user_id' => 'intlist',
            'rule_name' => 'string',
            'remote_number' => 'stringlist',
            'local_number' => 'stringlist',
            'call_session_history_custom_data' => 'string',
            'with_calls' => 'boolean',
            'with_records' => 'boolean',
            'with_other_resources' => 'boolean',
            'child_account_id' => 'intlist',
            'children_calls_only' => 'boolean',
            'with_header' => 'boolean',
            'desc_order' => 'boolean',
            'with_total_count' => 'boolean',
            'count' => 'number',
            'offset' => 'number',
            'output' => 'string',
            'is_async' => 'boolean',
        );
    }

    public function GetHistoryReports()
    {
        return array (
            'history_report_id' => 'number',
            'history_type' => 'stringlist',
            'created_from' => 'timestamp',
            'created_to' => 'timestamp',
            'is_completed' => 'boolean',
            'desc_order' => 'boolean',
            'count' => 'number',
            'offset' => 'number',
            'application_id' => 'intlist',
        );
    }

    public function GetTransactionHistory()
    {
        return array (
            'from_date' => 'timestamp',
            'to_date' => 'timestamp',
            'timezone' => 'string',
            'transaction_id' => 'intlist',
            'payment_reference' => 'string',
            'transaction_type' => 'stringlist',
            'user_id' => 'intlist',
            'child_account_id' => 'intlist',
            'children_transactions_only' => 'boolean',
            'users_transactions_only' => 'boolean',
            'desc_order' => 'boolean',
            'count' => 'number',
            'offset' => 'number',
            'output' => 'string',
            'is_async' => 'boolean',
        );
    }

    public function DeleteRecord()
    {
        return array (
            'record_url' => 'string',
            'record_id' => 'number',
        );
    }

    public function GetACDHistory()
    {
        return array (
            'from_date' => 'timestamp',
            'to_date' => 'timestamp',
            'acd_session_history_id' => 'intlist',
            'acd_request_id' => 'stringlist',
            'acd_queue_id' => 'intlist',
            'user_id' => 'intlist',
            'operator_hangup' => 'boolean',
            'unserviced' => 'boolean',
            'min_waiting_time' => 'number',
            'rejected' => 'boolean',
            'with_events' => 'boolean',
            'with_header' => 'boolean',
            'desc_order' => 'boolean',
            'count' => 'number',
            'offset' => 'number',
            'output' => 'string',
        );
    }

    public function GetAuditLog()
    {
        return array (
            'from_date' => 'timestamp',
            'to_date' => 'timestamp',
            'timezone' => 'string',
            'audit_log_id' => 'intlist',
            'filtered_admin_user_id' => 'string',
            'filtered_ip' => 'stringlist',
            'filtered_cmd' => 'stringlist',
            'advanced_filters' => 'string',
            'with_header' => 'boolean',
            'desc_order' => 'boolean',
            'with_total_count' => 'boolean',
            'count' => 'number',
            'offset' => 'number',
            'output' => 'string',
            'is_async' => 'boolean',
        );
    }

    public function AddPstnBlackListItem()
    {
        return array (
            'pstn_blacklist_phone' => 'string',
        );
    }

    public function SetPstnBlackListItem()
    {
        return array (
            'pstn_blacklist_id' => 'number',
            'pstn_blacklist_phone' => 'string',
        );
    }

    public function DelPstnBlackListItem()
    {
        return array (
            'pstn_blacklist_id' => 'number',
        );
    }

    public function GetPstnBlackList()
    {
        return array (
            'pstn_blacklist_id' => 'number',
            'pstn_blacklist_phone' => 'string',
            'count' => 'number',
            'offset' => 'number',
        );
    }

    public function AddSipWhiteListItem()
    {
        return array (
            'sip_whitelist_network' => 'string',
        );
    }

    public function DelSipWhiteListItem()
    {
        return array (
            'sip_whitelist_id' => 'number',
        );
    }

    public function SetSipWhiteListItem()
    {
        return array (
            'sip_whitelist_id' => 'number',
            'sip_whitelist_network' => 'string',
        );
    }

    public function GetSipWhiteList()
    {
        return array (
            'sip_whitelist_id' => 'number',
            'count' => 'number',
            'offset' => 'number',
        );
    }

    public function CreateSipRegistration()
    {
        return array (
            'sip_username' => 'string',
            'proxy' => 'string',
            'auth_user' => 'string',
            'outbound_proxy' => 'string',
            'password' => 'string',
            'is_persistent' => 'boolean',
            'application_id' => 'number',
            'application_name' => 'string',
            'rule_id' => 'number',
            'rule_name' => 'string',
            'user_id' => 'number',
            'user_name' => 'string',
        );
    }

    public function UpdateSipRegistration()
    {
        return array (
            'sip_registration_id' => 'number',
            'sip_username' => 'string',
            'proxy' => 'string',
            'auth_user' => 'string',
            'outbound_proxy' => 'string',
            'password' => 'string',
            'application_id' => 'number',
            'application_name' => 'string',
            'rule_id' => 'number',
            'rule_name' => 'string',
            'user_id' => 'number',
            'user_name' => 'string',
        );
    }

    public function BindSipRegistration()
    {
        return array (
            'sip_registration_id' => 'number',
            'application_id' => 'number',
            'application_name' => 'string',
            'rule_id' => 'number',
            'rule_name' => 'string',
            'user_id' => 'number',
            'user_name' => 'string',
            'bind' => 'boolean',
        );
    }

    public function DeleteSipRegistration()
    {
        return array (
            'sip_registration_id' => 'number',
        );
    }

    public function GetSipRegistrations()
    {
        return array (
            'sip_registration_id' => 'number',
            'sip_username' => 'string',
            'deactivated' => 'boolean',
            'successful' => 'boolean',
            'is_persistent' => 'boolean',
            'application_id' => 'intlist',
            'application_name' => 'stringlist',
            'is_bound_to_application' => 'boolean',
            'rule_id' => 'intlist',
            'rule_name' => 'stringlist',
            'user_id' => 'intlist',
            'user_name' => 'stringlist',
            'proxy' => 'stringlist',
            'in_progress' => 'boolean',
            'status_code' => 'string',
            'count' => 'number',
            'offset' => 'number',
        );
    }

    public function AttachPhoneNumber()
    {
        return array (
            'phone_count' => 'number',
            'phone_number' => 'stringlist',
            'country_code' => 'string',
            'phone_category_name' => 'string',
            'country_state' => 'string',
            'phone_region_id' => 'number',
            'regulation_address_id' => 'number',
            'force_verification' => 'boolean',
        );
    }

    public function BindPhoneNumberToApplication()
    {
        return array (
            'phone_id' => 'intlist',
            'phone_number' => 'stringlist',
            'application_id' => 'number',
            'application_name' => 'string',
            'rule_id' => 'number',
            'rule_name' => 'string',
            'bind' => 'boolean',
        );
    }

    public function DeactivatePhoneNumber()
    {
        return array (
            'phone_id' => 'intlist',
            'phone_number' => 'stringlist',
        );
    }

    public function SetPhoneNumberInfo()
    {
        return array (
            'phone_id' => 'intlist',
            'phone_number' => 'stringlist',
            'incoming_sms_callback_url' => 'string',
            'auto_charge' => 'boolean',
        );
    }

    public function GetPhoneNumbers()
    {
        return array (
            'phone_id' => 'number',
            'application_id' => 'number',
            'application_name' => 'string',
            'is_bound_to_application' => 'boolean',
            'phone_template' => 'string',
            'country_code' => 'stringlist',
            'phone_category_name' => 'string',
            'canceled' => 'boolean',
            'deactivated' => 'boolean',
            'auto_charge' => 'boolean',
            'from_phone_next_renewal' => 'date',
            'to_phone_next_renewal' => 'date',
            'from_phone_purchase_date' => 'timestamp',
            'to_phone_purchase_date' => 'timestamp',
            'child_account_id' => 'intlist',
            'children_phones_only' => 'boolean',
            'verification_name' => 'string',
            'verification_status' => 'stringlist',
            'from_unverified_hold_until' => 'date',
            'to_unverified_hold_until' => 'date',
            'can_be_used' => 'boolean',
            'order_by' => 'string',
            'sandbox' => 'string',
            'count' => 'number',
            'offset' => 'number',
            'sms_supported' => 'boolean',
            'phone_region_name' => 'stringlist',
            'rule_id' => 'intlist',
            'rule_name' => 'stringlist',
            'is_bound_to_rule' => 'boolean',
        );
    }

    public function GetNewPhoneNumbers()
    {
        return array (
            'country_code' => 'string',
            'phone_category_name' => 'string',
            'country_state' => 'string',
            'phone_region_id' => 'number',
            'count' => 'number',
            'offset' => 'number',
        );
    }

    public function GetPhoneNumberCategories()
    {
        return array (
            'country_code' => 'string',
            'sandbox' => 'string',
            'locale' => 'string',
        );
    }

    public function GetPhoneNumberCountryStates()
    {
        return array (
            'country_code' => 'string',
            'phone_category_name' => 'string',
            'country_state' => 'string',
        );
    }

    public function GetPhoneNumberRegions()
    {
        return array (
            'country_code' => 'string',
            'phone_category_name' => 'string',
            'country_state' => 'string',
            'omit_empty' => 'boolean',
            'phone_region_id' => 'number',
            'phone_region_name' => 'string',
            'phone_region_code' => 'string',
            'locale' => 'string',
        );
    }

    public function GetActualPhoneNumberRegion()
    {
        return array (
            'country_code' => 'string',
            'phone_category_name' => 'string',
            'phone_region_id' => 'number',
            'locale' => 'string',
        );
    }

    public function AddCallerID()
    {
        return array (
            'callerid_number' => 'string',
        );
    }

    public function ActivateCallerID()
    {
        return array (
            'callerid_id' => 'number',
            'callerid_number' => 'string',
            'verification_code' => 'string',
        );
    }

    public function DelCallerID()
    {
        return array (
            'callerid_id' => 'number',
            'callerid_number' => 'string',
        );
    }

    public function GetCallerIDs()
    {
        return array (
            'callerid_id' => 'number',
            'callerid_number' => 'string',
            'active' => 'boolean',
            'order_by' => 'string',
            'count' => 'number',
            'offset' => 'number',
        );
    }

    public function VerifyCallerID()
    {
        return array (
            'callerid_id' => 'number',
            'callerid_number' => 'string',
        );
    }

    public function AddQueue()
    {
        return array (
            'application_id' => 'number',
            'application_name' => 'string',
            'acd_queue_name' => 'string',
            'acd_queue_priority' => 'number',
            'auto_binding' => 'boolean',
            'service_probability' => 'number',
            'max_queue_size' => 'number',
            'max_waiting_time' => 'number',
            'average_service_time' => 'number',
        );
    }

    public function BindUserToQueue()
    {
        return array (
            'bind' => 'boolean',
            'application_id' => 'number',
            'application_name' => 'string',
            'user_id' => 'intlist',
            'user_name' => 'stringlist',
            'acd_queue_id' => 'intlist',
            'acd_queue_name' => 'stringlist',
        );
    }

    public function DelQueue()
    {
        return array (
            'acd_queue_id' => 'intlist',
            'acd_queue_name' => 'stringlist',
        );
    }

    public function SetQueueInfo()
    {
        return array (
            'acd_queue_id' => 'number',
            'acd_queue_name' => 'string',
            'new_acd_queue_name' => 'string',
            'acd_queue_priority' => 'number',
            'auto_binding' => 'boolean',
            'service_probability' => 'number',
            'max_queue_size' => 'number',
            'max_waiting_time' => 'number',
            'average_service_time' => 'number',
            'application_id' => 'number',
        );
    }

    public function GetQueues()
    {
        return array (
            'acd_queue_id' => 'number',
            'acd_queue_name' => 'string',
            'application_id' => 'number',
            'skill_id' => 'number',
            'excluded_skill_id' => 'number',
            'with_skills' => 'boolean',
            'showing_skill_id' => 'number',
            'count' => 'number',
            'offset' => 'number',
        );
    }

    public function GetACDState()
    {
        return array (
            'acd_queue_id' => 'intlist',
        );
    }

    public function GetACDOperatorStatistics()
    {
        return array (
            'from_date' => 'timestamp',
            'to_date' => 'timestamp',
            'acd_queue_id' => 'intlist',
            'user_id' => 'intlist',
            'abbreviation' => 'boolean',
            'report' => 'stringlist',
            'aggregation' => 'string',
            'group' => 'string',
        );
    }

    public function GetACDQueueStatistics()
    {
        return array (
            'from_date' => 'timestamp',
            'to_date' => 'timestamp',
            'abbreviation' => 'boolean',
            'acd_queue_id' => 'intlist',
            'report' => 'stringlist',
            'aggregation' => 'string',
        );
    }

    public function GetACDOperatorStatusStatistics()
    {
        return array (
            'from_date' => 'timestamp',
            'to_date' => 'timestamp',
            'acd_status' => 'stringlist',
            'user_id' => 'stringlist',
            'aggregation' => 'string',
            'group' => 'string',
        );
    }

    public function AddSkill()
    {
        return array (
            'skill_name' => 'string',
        );
    }

    public function DelSkill()
    {
        return array (
            'skill_id' => 'number',
            'skill_name' => 'string',
        );
    }

    public function SetSkillInfo()
    {
        return array (
            'skill_id' => 'number',
            'skill_name' => 'string',
            'new_skill_name' => 'string',
        );
    }

    public function GetSkills()
    {
        return array (
            'skill_id' => 'number',
            'skill_name' => 'string',
            'count' => 'number',
            'offset' => 'number',
        );
    }

    public function BindSkill()
    {
        return array (
            'skill_id' => 'intlist',
            'skill_name' => 'stringlist',
            'user_id' => 'intlist',
            'user_name' => 'stringlist',
            'acd_queue_id' => 'intlist',
            'acd_queue_name' => 'stringlist',
            'application_id' => 'number',
            'application_name' => 'string',
            'bind' => 'boolean',
        );
    }

    public function GetAccountDocuments()
    {
        return array (
            'with_details' => 'boolean',
            'verification_name' => 'string',
            'verification_status' => 'stringlist',
            'from_unverified_hold_until' => 'date',
            'to_unverified_hold_until' => 'date',
            'child_account_id' => 'intlist',
            'children_verifications_only' => 'boolean',
        );
    }

    public function AddAdminUser()
    {
        return array (
            'new_admin_user_name' => 'string',
            'admin_user_display_name' => 'string',
            'new_admin_user_password' => 'string',
            'admin_user_active' => 'boolean',
            'admin_role_id' => 'string',
            'admin_role_name' => 'stringlist',
        );
    }

    public function DelAdminUser()
    {
        return array (
            'required_admin_user_id' => 'intlist',
            'required_admin_user_name' => 'stringlist',
        );
    }

    public function SetAdminUserInfo()
    {
        return array (
            'required_admin_user_id' => 'number',
            'required_admin_user_name' => 'string',
            'new_admin_user_name' => 'string',
            'admin_user_display_name' => 'string',
            'new_admin_user_password' => 'string',
            'admin_user_active' => 'boolean',
        );
    }

    public function GetAdminUsers()
    {
        return array (
            'required_admin_user_id' => 'number',
            'required_admin_user_name' => 'string',
            'admin_user_display_name' => 'string',
            'admin_user_active' => 'boolean',
            'with_roles' => 'boolean',
            'with_access_entries' => 'boolean',
            'count' => 'number',
            'offset' => 'number',
        );
    }

    public function AddAdminRole()
    {
        return array (
            'admin_role_name' => 'string',
            'admin_role_active' => 'boolean',
            'like_admin_role_id' => 'intlist',
            'like_admin_role_name' => 'stringlist',
            'allowed_entries' => 'stringlist',
            'denied_entries' => 'stringlist',
        );
    }

    public function DelAdminRole()
    {
        return array (
            'admin_role_id' => 'intlist',
            'admin_role_name' => 'stringlist',
        );
    }

    public function SetAdminRoleInfo()
    {
        return array (
            'admin_role_id' => 'number',
            'admin_role_name' => 'string',
            'new_admin_role_name' => 'string',
            'admin_role_active' => 'boolean',
            'entry_modification_mode' => 'string',
            'allowed_entries' => 'stringlist',
            'denied_entries' => 'stringlist',
            'like_admin_role_id' => 'intlist',
            'like_admin_role_name' => 'stringlist',
        );
    }

    public function GetAdminRoles()
    {
        return array (
            'admin_role_id' => 'number',
            'admin_role_name' => 'string',
            'admin_role_active' => 'boolean',
            'with_entries' => 'boolean',
            'with_account_roles' => 'boolean',
            'with_parent_roles' => 'boolean',
            'with_system_roles' => 'boolean',
            'included_admin_user_id' => 'intlist',
            'excluded_admin_user_id' => 'intlist',
            'full_admin_users_matching' => 'string',
            'showing_admin_user_id' => 'number',
            'count' => 'number',
            'offset' => 'number',
        );
    }

    public function AttachAdminRole()
    {
        return array (
            'required_admin_user_id' => 'intlist',
            'required_admin_user_name' => 'stringlist',
            'admin_role_id' => 'intlist',
            'admin_role_name' => 'stringlist',
            'mode' => 'string',
        );
    }

    public function GetAvailableAdminRoleEntries()
    {
        return array (
        );
    }

    public function AddAuthorizedAccountIP()
    {
        return array (
            'authorized_ip' => 'string',
            'allowed' => 'boolean',
        );
    }

    public function DelAuthorizedAccountIP()
    {
        return array (
            'authorized_ip' => 'string',
            'contains_ip' => 'string',
            'allowed' => 'boolean',
        );
    }

    public function GetAuthorizedAccountIPs()
    {
        return array (
            'authorized_ip' => 'string',
            'allowed' => 'boolean',
            'contains_ip' => 'string',
            'count' => 'number',
            'offset' => 'number',
        );
    }

    public function CheckAuthorizedAccountIP()
    {
        return array (
            'authorized_ip' => 'string',
        );
    }

    public function LinkregulationAddress()
    {
        return array (
            'regulation_address_id' => 'number',
            'phone_id' => 'number',
            'phone_number' => 'string',
        );
    }

    public function GetZIPCodes()
    {
        return array (
            'country_code' => 'string',
            'phone_region_code' => 'string',
            'count' => 'number',
            'offset' => 'number',
        );
    }

    public function GetRegulationsAddress()
    {
        return array (
            'country_code' => 'string',
            'phone_category_name' => 'string',
            'phone_region_code' => 'string',
            'regulation_address_id' => 'number',
            'verification_id' => 'number',
            'verified' => 'boolean',
            'in_progress' => 'boolean',
            'with_region_code' => 'boolean',
        );
    }

    public function GetAvailableRegulations()
    {
        return array (
            'country_code' => 'string',
            'phone_category_name' => 'string',
            'phone_region_code' => 'string',
        );
    }

    public function GetCountries()
    {
        return array (
            'country_code' => 'string',
        );
    }

    public function GetRegions()
    {
        return array (
            'country_code' => 'string',
            'phone_category_name' => 'string',
            'city_name' => 'string',
            'count' => 'number',
            'offset' => 'number',
        );
    }

    public function AddPushCredential()
    {
        return array (
            'push_provider_name' => 'string',
            'push_provider_id' => 'number',
            'application_id' => 'number',
            'application_name' => 'string',
            'credential_bundle' => 'string',
            'cert_content' => 'string',
            'cert_file_name' => 'string',
            'cert_password' => 'string',
            'is_dev_mode' => 'boolean',
            'sender_id' => 'string',
            'server_key' => 'string',
            'service_account_file' => 'string',
        );
    }

    public function SetPushCredential()
    {
        return array (
            'push_credential_id' => 'number',
            'cert_content' => 'string',
            'cert_password' => 'string',
            'is_dev_mode' => 'boolean',
            'sender_id' => 'string',
            'server_key' => 'string',
        );
    }

    public function DelPushCredential()
    {
        return array (
            'push_credential_id' => 'number',
        );
    }

    public function GetPushCredential()
    {
        return array (
            'push_credential_id' => 'number',
            'push_provider_name' => 'string',
            'push_provider_id' => 'number',
            'application_name' => 'string',
            'application_id' => 'number',
            'with_cert' => 'boolean',
            'with_secret_info' => 'boolean',
        );
    }

    public function BindPushCredential()
    {
        return array (
            'push_credential_id' => 'intlist',
            'application_id' => 'intlist',
            'bind' => 'boolean',
        );
    }

    public function AddDialogflowKey()
    {
        return array (
            'application_id' => 'string',
            'application_name' => 'string',
            'json_credentials' => 'string',
            'description' => 'string',
        );
    }

    public function SetDialogflowKey()
    {
        return array (
            'dialogflow_key_id' => 'number',
            'description' => 'string',
        );
    }

    public function DelDialogflowKey()
    {
        return array (
            'dialogflow_key_id' => 'number',
        );
    }

    public function GetDialogflowKeys()
    {
        return array (
            'dialogflow_key_id' => 'number',
            'application_name' => 'string',
            'application_id' => 'number',
            'with_secret_info' => 'boolean',
        );
    }

    public function BindDialogflowKeys()
    {
        return array (
            'dialogflow_key_id' => 'number',
            'application_id' => 'intlist',
            'bind' => 'boolean',
        );
    }

    public function SendSmsMessage()
    {
        return array (
            'source' => 'string',
            'destination' => 'string',
            'sms_body' => 'string',
        );
    }

    public function A2PSendSms()
    {
        return array (
            'src_number' => 'string',
            'dst_numbers' => 'stringlist',
            'text' => 'string',
        );
    }

    public function ControlSms()
    {
        return array (
            'phone_number' => 'string',
            'command' => 'string',
        );
    }

    public function GetRecordStorages()
    {
        return array (
            'record_storage_id' => 'intlist',
            'record_storage_name' => 'stringlist',
            'with_private' => 'boolean',
        );
    }

    public function CreateKey()
    {
        return array (
            'description' => 'string',
            'role_id' => 'intlist',
            'role_name' => 'stringlist',
        );
    }

    public function GetKeys()
    {
        return array (
            'key_id' => 'string',
            'with_roles' => 'boolean',
            'offset' => 'number',
            'count' => 'number',
        );
    }

    public function UpdateKey()
    {
        return array (
            'key_id' => 'string',
            'description' => 'string',
        );
    }

    public function DeleteKey()
    {
        return array (
            'key_id' => 'string',
        );
    }

    public function SetKeyRoles()
    {
        return array (
            'key_id' => 'string',
            'role_id' => 'intlist',
            'role_name' => 'stringlist',
        );
    }

    public function GetKeyRoles()
    {
        return array (
            'key_id' => 'string',
            'with_expanded_roles' => 'boolean',
        );
    }

    public function RemoveKeyRoles()
    {
        return array (
            'key_id' => 'string',
            'role_id' => 'intlist',
            'role_name' => 'stringlist',
        );
    }

    public function AddSubUser()
    {
        return array (
            'new_subuser_name' => 'string',
            'new_subuser_password' => 'string',
            'role_id' => 'intlist',
            'role_name' => 'stringlist',
            'description' => 'string',
        );
    }

    public function GetSubUsers()
    {
        return array (
            'subuser_id' => 'number',
            'with_roles' => 'boolean',
            'offset' => 'number',
            'count' => 'number',
        );
    }

    public function SetSubUserInfo()
    {
        return array (
            'subuser_id' => 'number',
            'old_subuser_password' => 'string',
            'new_subuser_password' => 'string',
            'description' => 'string',
        );
    }

    public function DelSubUser()
    {
        return array (
            'subuser_id' => 'number',
        );
    }

    public function SetSubUserRoles()
    {
        return array (
            'subuser_id' => 'number',
            'role_id' => 'intlist',
            'role_name' => 'stringlist',
        );
    }

    public function GetSubUserRoles()
    {
        return array (
            'subuser_id' => 'number',
            'with_expanded_roles' => 'boolean',
        );
    }

    public function RemoveSubUserRoles()
    {
        return array (
            'subuser_id' => 'number',
            'role_id' => 'intlist',
            'role_name' => 'stringlist',
            'force' => 'boolean',
        );
    }

    public function GetRoles()
    {
        return array (
            'group_name' => 'string',
        );
    }

    public function GetRoleGroups()
    {
        return array (
        );
    }

    public function GetSmsHistory()
    {
        return array (
            'source_number' => 'string',
            'destination_number' => 'string',
            'direction' => 'string',
            'count' => 'number',
            'offset' => 'number',
            'from_date' => 'timestamp',
            'to_date' => 'timestamp',
            'output' => 'string',
        );
    }

    public function A2PGetSmsHistory()
    {
        return array (
            'source_number' => 'string',
            'destination_number' => 'string',
            'count' => 'number',
            'offset' => 'number',
            'from_date' => 'timestamp',
            'to_date' => 'timestamp',
            'output' => 'string',
            'delivery_status' => 'number',
        );
    }
}
