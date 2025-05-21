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
            'store_outbound_sms' => 'boolean',
            'store_inbound_sms' => 'boolean',
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

    public function ChangeAccountPlan()
    {
        return array (
            'plan_type' => 'string',
            'plan_subscription_template_id' => 'number',
        );
    }

    public function GetAccountPlans()
    {
        return array (
            'plan_type' => 'stringlist',
            'plan_subscription_template_id' => 'intlist',
        );
    }

    public function GetAvailablePlans()
    {
        return array (
            'plan_type' => 'stringlist',
            'plan_subscription_template_id' => 'intlist',
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

    public function CreateCallList()
    {
        return array (
            'rule_id' => 'number',
            'priority' => 'number',
            'max_simultaneous' => 'number',
            'num_attempts' => 'number',
            'name' => 'string',
            'file_content' => 'file',
            'interval_seconds' => 'number',
            'encoding' => 'string',
            'delimiter' => 'string',
            'escape' => 'string',
            'reference_ip' => 'string',
            'server_location' => 'string',
        );
    }

    public function AppendToCallList()
    {
        return array (
            'list_id' => 'number',
            'list_name' => 'string',
            'file_content' => 'file',
            'encoding' => 'string',
            'escape' => 'string',
            'delimiter' => 'string',
        );
    }

    public function EditCallList()
    {
        return array (
            'list_id' => 'number',
            'interval_seconds' => 'number',
            'num_attempts' => 'number',
            'max_simultaneous' => 'number',
            'ip_address' => 'string',
            'name' => 'string',
            'priority' => 'number',
            'start_at' => 'string',
            'server_location' => 'string',
        );
    }

    public function DeleteCallList()
    {
        return array (
            'account_id' => 'number',
            'list_id' => 'number',
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

    public function EditCallListTask()
    {
        return array (
            'list_id' => 'number',
            'task_id' => 'number',
            'task_uuid' => 'string',
            'start_at' => 'timestamp',
            'attempts_left' => 'number',
            'custom_data' => 'string',
            'min_execution_time' => 'timestamp',
        );
    }

    public function CancelCallListTask()
    {
        return array (
            'account_id' => 'string',
            'list_id' => 'string',
            'tasks_ids' => 'string',
            'tasks_uuids' => 'string',
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
            'application_id' => 'number',
            'application_name' => 'string',
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
            'application_id' => 'number',
            'application_name' => 'string',
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
            'server_location' => 'string',
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
            'server_location' => 'string',
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
            'bind_key_id' => 'string',
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
            'bind_key_id' => 'string',
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
            'attached_key_id' => 'string',
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
            'remote_number_list' => 'object',
            'local_number' => 'stringlist',
            'call_session_history_custom_data' => 'string',
            'with_calls' => 'boolean',
            'with_records' => 'boolean',
            'with_other_resources' => 'boolean',
            'child_account_id' => 'intlist',
            'children_calls_only' => 'boolean',
            'desc_order' => 'boolean',
            'with_total_count' => 'boolean',
            'count' => 'number',
            'offset' => 'number',
        );
    }

    public function GetCallHistoryAsync()
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
            'desc_order' => 'boolean',
            'with_header' => 'boolean',
            'output' => 'string',
        );
    }

    public function GetBriefCallHistory()
    {
        return array (
            'from_date' => 'timestamp',
            'to_date' => 'timestamp',
            'timezone' => 'string',
            'call_session_history_id' => 'intlist',
            'application_id' => 'number',
            'application_name' => 'string',
            'rule_name' => 'string',
            'remote_number' => 'stringlist',
            'local_number' => 'stringlist',
            'call_session_history_custom_data' => 'string',
            'desc_order' => 'boolean',
            'with_header' => 'boolean',
            'output' => 'string',
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

    public function GetPhoneNumberReports()
    {
        return array (
            'report_id' => 'number',
            'report_type' => 'stringlist',
            'created_from' => 'timestamp',
            'created_to' => 'timestamp',
            'is_completed' => 'boolean',
            'desc_order' => 'boolean',
            'count' => 'number',
            'offset' => 'number',
        );
    }

    public function DownloadHistoryReport()
    {
        return array (
            'history_report_id' => 'number',
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
            'with_total_count' => 'boolean',
            'count' => 'number',
            'offset' => 'number',
            'is_uncommitted' => 'boolean',
        );
    }

    public function GetTransactionHistoryAsync()
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
            'is_uncommitted' => 'boolean',
            'with_header' => 'boolean',
            'output' => 'string',
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
            'desc_order' => 'boolean',
            'with_total_count' => 'boolean',
            'count' => 'number',
            'offset' => 'number',
        );
    }

    public function GetAuditLogAsync()
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
            'desc_order' => 'boolean',
            'with_header' => 'boolean',
            'output' => 'string',
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
            'description' => 'string',
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
            'description' => 'string',
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
            'phone_id' => 'intlist',
            'phone_number' => 'stringlist',
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

    public function IsAccountPhoneNumber()
    {
        return array (
            'phone_number' => 'string',
        );
    }

    public function GetPhoneNumbersAsync()
    {
        return array (
            'with_header' => 'boolean',
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
            'phone_number_mask' => 'string',
        );
    }

    public function GetPhoneNumberCategories()
    {
        return array (
            'country_code' => 'stringlist',
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
            'country_state' => 'string',
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

    public function AddOutboundTestPhoneNumber()
    {
        return array (
            'phone_number' => 'string',
        );
    }

    public function VerifyOutboundTestPhoneNumber()
    {
        return array (
        );
    }

    public function ActivateOutboundTestPhoneNumber()
    {
        return array (
            'verification_code' => 'string',
        );
    }

    public function DelOutboundTestPhoneNumber()
    {
        return array (
        );
    }

    public function GetOutboundTestPhoneNumbers()
    {
        return array (
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
            'with_operatorcount' => 'boolean',
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

    public function GetSmartQueueRealtimeMetrics()
    {
        return array (
            'application_id' => 'number',
            'application_name' => 'string',
            'user_id' => 'intlist',
            'user_name' => 'stringlist',
            'sq_queue_name' => 'stringlist',
            'from_date' => 'timestamp',
            'to_date' => 'timestamp',
            'timezone' => 'string',
            'interval' => 'string',
            'report_type' => 'stringlist',
            'group_by' => 'string',
            'max_waiting_sec' => 'number',
        );
    }

    public function GetSmartQueueDayHistory()
    {
        return array (
            'application_id' => 'number',
            'application_name' => 'string',
            'user_id' => 'intlist',
            'user_name' => 'stringlist',
            'sq_queue_id' => 'intlist',
            'sq_queue_name' => 'stringlist',
            'from_date' => 'timestamp',
            'to_date' => 'timestamp',
            'timezone' => 'string',
            'interval' => 'string',
            'report_type' => 'stringlist',
            'group_by' => 'string',
            'max_waiting_sec' => 'number',
        );
    }

    public function RequestSmartQueueHistory()
    {
        return array (
            'application_id' => 'number',
            'application_name' => 'string',
            'user_id' => 'intlist',
            'user_name' => 'stringlist',
            'sq_queue_id' => 'intlist',
            'sq_queue_name' => 'stringlist',
            'from_date' => 'timestamp',
            'to_date' => 'timestamp',
            'timezone' => 'string',
            'interval' => 'string',
            'report_type' => 'stringlist',
            'group_by' => 'string',
            'max_waiting_sec' => 'number',
        );
    }

    public function GetSQState()
    {
        return array (
            'application_id' => 'number',
            'application_name' => 'string',
            'sq_queue_id' => 'intlist',
            'sq_queue_name' => 'stringlist',
            'timezone' => 'string',
        );
    }

    public function SQ_SetAgentCustomStatusMapping()
    {
        return array (
            'sq_status_name' => 'string',
            'custom_status_name' => 'string',
            'application_id' => 'number',
        );
    }

    public function SQ_GetAgentCustomStatusMapping()
    {
        return array (
            'application_id' => 'number',
        );
    }

    public function SQ_DeleteAgentCustomStatusMapping()
    {
        return array (
            'sq_status_name' => 'string',
            'application_id' => 'number',
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
            'description' => 'string',
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
            'description' => 'string',
        );
    }

    public function CheckAuthorizedAccountIP()
    {
        return array (
            'authorized_ip' => 'string',
        );
    }

    public function LinkRegulationAddress()
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

    public function GetAccountPhoneNumberCountries()
    {
        return array (
            'application_id' => 'intlist',
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
            'cert_content' => 'file',
            'cert_file_name' => 'string',
            'cert_password' => 'string',
            'is_dev_mode' => 'boolean',
            'sender_id' => 'string',
            'server_key' => 'string',
            'service_account_file' => 'file',
            'huawei_client_id' => 'string',
            'huawei_client_secret' => 'string',
            'huawei_application_id' => 'string',
        );
    }

    public function SetPushCredential()
    {
        return array (
            'push_credential_id' => 'number',
            'cert_content' => 'file',
            'cert_password' => 'string',
            'is_dev_mode' => 'boolean',
            'sender_id' => 'string',
            'server_key' => 'string',
            'service_account_file' => 'file',
            'huawei_client_id' => 'string',
            'huawei_client_secret' => 'string',
            'huawei_application_id' => 'string',
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
            'store_body' => 'boolean',
        );
    }

    public function A2PSendSms()
    {
        return array (
            'src_number' => 'string',
            'dst_numbers' => 'stringlist',
            'text' => 'string',
            'store_body' => 'boolean',
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
            'key_name' => 'string',
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
            'key_name' => 'string',
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

    public function SetKeyValueItem()
    {
        return array (
            'key' => 'string',
            'value' => 'string',
            'application_id' => 'number',
            'application_name' => 'string',
            'ttl' => 'number',
            'expires_at' => 'number',
        );
    }

    public function DelKeyValueItem()
    {
        return array (
            'key' => 'string',
            'application_id' => 'number',
            'application_name' => 'string',
        );
    }

    public function GetKeyValueItem()
    {
        return array (
            'key' => 'string',
            'application_id' => 'number',
            'application_name' => 'string',
        );
    }

    public function GetKeyValueItems()
    {
        return array (
            'key' => 'string',
            'count' => 'number',
            'offset' => 'number',
            'application_id' => 'number',
            'application_name' => 'string',
        );
    }

    public function GetKeyValueKeys()
    {
        return array (
            'key' => 'string',
            'count' => 'number',
            'offset' => 'number',
            'application_id' => 'number',
            'application_name' => 'string',
        );
    }

    public function GetAccountInvoices()
    {
        return array (
            'status' => 'string',
            'count' => 'number',
            'offset' => 'number',
        );
    }

    public function DownloadInvoice()
    {
        return array (
            'invoice_id' => 'number',
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

    public function SQ_AddQueue()
    {
        return array (
            'application_id' => 'number',
            'application_name' => 'string',
            'sq_queue_name' => 'string',
            'call_agent_selection' => 'string',
            'im_agent_selection' => 'string',
            'call_task_selection' => 'string',
            'im_task_selection' => 'string',
            'fallback_agent_selection' => 'string',
            'description' => 'string',
            'call_max_waiting_time' => 'number',
            'im_max_waiting_time' => 'number',
            'call_max_queue_size' => 'number',
            'im_max_queue_size' => 'number',
            'priority' => 'number',
            'call_max_waiting_time_in_seconds' => 'number',
            'im_max_waiting_time_in_seconds' => 'number',
        );
    }

    public function SQ_SetQueueInfo()
    {
        return array (
            'application_id' => 'number',
            'application_name' => 'string',
            'sq_queue_id' => 'number',
            'sq_queue_name' => 'string',
            'new_sq_queue_name' => 'string',
            'call_agent_selection' => 'string',
            'im_agent_selection' => 'string',
            'call_task_selection' => 'string',
            'im_task_selection' => 'string',
            'fallback_agent_selection' => 'string',
            'description' => 'string',
            'call_max_waiting_time' => 'number',
            'im_max_waiting_time' => 'number',
            'call_max_queue_size' => 'number',
            'im_max_queue_size' => 'number',
            'priority' => 'number',
            'call_max_waiting_time_in_seconds' => 'number',
            'im_max_waiting_time_in_seconds' => 'number',
        );
    }

    public function SQ_DelQueue()
    {
        return array (
            'application_id' => 'number',
            'application_name' => 'string',
            'sq_queue_id' => 'intlist',
            'sq_queue_name' => 'stringlist',
        );
    }

    public function SQ_GetQueues()
    {
        return array (
            'application_id' => 'number',
            'application_name' => 'string',
            'sq_queue_id' => 'intlist',
            'sq_queue_name' => 'stringlist',
            'sq_queue_name_template' => 'string',
            'user_id' => 'number',
            'user_name' => 'string',
            'excluded_user_id' => 'number',
            'excluded_user_name' => 'string',
            'count' => 'number',
            'offset' => 'number',
            'with_agentcount' => 'boolean',
        );
    }

    public function SQ_AddSkill()
    {
        return array (
            'application_id' => 'number',
            'application_name' => 'string',
            'sq_skill_name' => 'string',
            'description' => 'string',
        );
    }

    public function SQ_DelSkill()
    {
        return array (
            'application_id' => 'number',
            'application_name' => 'string',
            'sq_skill_id' => 'intlist',
            'sq_skill_name' => 'stringlist',
        );
    }

    public function SQ_SetSkillInfo()
    {
        return array (
            'application_id' => 'number',
            'application_name' => 'string',
            'sq_skill_id' => 'number',
            'sq_skill_name' => 'string',
            'new_sq_skill_name' => 'string',
            'description' => 'string',
        );
    }

    public function SQ_BindSkill()
    {
        return array (
            'application_id' => 'number',
            'application_name' => 'string',
            'user_id' => 'intlist',
            'user_name' => 'stringlist',
            'sq_skills' => 'Object',
            'bind_mode' => 'string',
        );
    }

    public function SQ_UnbindSkill()
    {
        return array (
            'application_id' => 'number',
            'application_name' => 'string',
            'user_id' => 'intlist',
            'user_name' => 'stringlist',
            'sq_skill_id' => 'intlist',
            'sq_skill_name' => 'stringlist',
        );
    }

    public function SQ_GetSkills()
    {
        return array (
            'application_id' => 'number',
            'application_name' => 'string',
            'user_id' => 'intlist',
            'user_name' => 'stringlist',
            'sq_skill_id' => 'intlist',
            'sq_skill_name' => 'stringlist',
            'sq_skill_name_template' => 'string',
            'excluded_user_id' => 'number',
            'excluded_user_name' => 'string',
            'count' => 'number',
            'offset' => 'number',
        );
    }

    public function SQ_BindAgent()
    {
        return array (
            'application_id' => 'number',
            'application_name' => 'string',
            'sq_queue_id' => 'string',
            'sq_queue_name' => 'string',
            'user_id' => 'intlist',
            'user_name' => 'stringlist',
            'bind_mode' => 'string',
        );
    }

    public function SQ_UnbindAgent()
    {
        return array (
            'application_id' => 'number',
            'application_name' => 'string',
            'sq_queue_id' => 'intlist',
            'sq_queue_name' => 'stringlist',
            'user_id' => 'intlist',
            'user_name' => 'stringlist',
        );
    }

    public function SQ_GetAgents()
    {
        return array (
            'application_id' => 'number',
            'application_name' => 'string',
            'sq_queue_id' => 'intlist',
            'sq_queue_name' => 'stringlist',
            'excluded_sq_queue_id' => 'number',
            'excluded_sq_queue_name' => 'string',
            'sq_skills' => 'Object',
            'user_id' => 'intlist',
            'user_name' => 'stringlist',
            'user_name_template' => 'string',
            'sq_statuses' => 'Object',
            'with_sq_skills' => 'boolean',
            'with_sq_queues' => 'boolean',
            'with_sq_statuses' => 'boolean',
            'count' => 'number',
            'offset' => 'number',
            'handle_calls' => 'boolean',
        );
    }

    public function SQ_SetAgentInfo()
    {
        return array (
            'application_id' => 'number',
            'application_name' => 'string',
            'user_id' => 'intlist',
            'user_name' => 'stringlist',
            'max_simultaneous_conversations' => 'number',
            'handle_calls' => 'boolean',
        );
    }
}
