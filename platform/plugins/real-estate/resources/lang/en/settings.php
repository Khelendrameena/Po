<?php

return [
    'title' => 'Accounts',
    'description' => 'Settings for members',
    'general_description' => 'Basic settings for Real Estate',
    'email' => [
        'title' => 'Real Estate',
        'description' => 'Real estate email configuration',
    ],
    'invoice_settings' => 'Invoice Settings',
    'invoice_settings_description' => 'Settings Invoice information for invoicing',
    'general' => [
        'name' => 'General',
        'description' => 'View and update general settings',
        'form' => [
            'square_unit' => 'Unit of square',
            'square_unit_none' => 'None',
            'square_unit_meter' => 'Square Meter(m²)',
            'square_unit_feet' => 'Square Feet(ft2)',
            'square_unit_yard' => 'Square Yard (yd2)',
            'display_views_count_in_detail_page' => 'Display views count in the detail page?',
            'enable_review_feature' => 'Enable review?',
            'reviews_per_page' => 'Number of reviews per page?',
            'hide_fields_at_consult_form' => 'Hide fields at consult form',
            'mandatory_fields_at_consult_form' => 'Mandatory fields at consult form',
            'enable_custom_fields' => 'Enable custom fields?',
            'enable_consult_form' => 'Enable consult form',
            'hide_projects_in_statuses' => 'Hide project if its status is:',
            'hide_properties_in_statuses' => 'Hide property if its status is:',
            'enabled_projects' => 'Enable projects?',
            'enabled_projects_helper' => 'If you disable this, all projects will be hidden. You may need to remove menu Projects in Appearance -> Menus -> Main menu.',
            'enabled_property_types' => 'Enabled property types',
            'auto_generate_unique_id' => 'Auto generate Unique ID when creating property/project',
            'unique_id_format' => 'Unique ID format',
            'unique_id_format_helper' => 'You can use %s (1 string character) or %d (1 digit) in the format to generate random string. Ex: PR-%s%s%s-HN-%d%d%d',
            'show_all_custom_fields_in_form_by_default' => 'Show all custom fields in form by default',
            'show_all_custom_fields_in_form_by_default_helper' => 'If you enable this, all custom fields will be shown in the form by default.',
            'fixed_maximum_price_for_filter' => 'Fixed maximum price for filter',
            'fixed_maximum_price_for_filter_helper' => 'If you enable this, the maximum price in the filter will be fixed at the value you set below instead of dynamic from your property/project price.',
            'maximum_price_for_filter' => 'Maximum price for filter',
            'maximum_price_for_filter_helper' => 'The maximum price for filter. Leave it empty to use dynamic price from your property/project price.',
        ],
    ],
    'currency' => [
        'name' => 'Currency',
        'description' => 'View and update currency settings',
        'form' => [
            'real_estate_convert_money_to_text_enabled' => 'Convert money to text if it is too big?',
            'enable_auto_detect_visitor_currency' => 'Enable auto-detect visitor currency?',
            'auto_detect_visitor_currency_description' => 'It detects visitor currency based on browser language. It will override default currency selection.',
            'add_space_between_price_and_currency' => 'Add a space between price and currency?',
            'thousands_separator' => 'Thousands separator',
            'decimal_separator' => 'Decimal separator',
            'separator_period' => 'Period (.)',
            'separator_comma' => 'Comma (,)',
            'separator_space' => 'Space ( )',
            'name' => 'Name',
            'symbol' => 'Symbol',
            'number_of_decimals' => 'Number of decimals',
            'exchange_rate' => 'Exchange rate',
            'is_prefix_symbol' => 'Position of symbol',
            'is_default' => 'Is default?',
            'remove' => 'Remove',
            'new_currency' => 'Add a new currency',
            'instruction' => 'Please check list currency code here: https://en.wikipedia.org/wiki/ISO_4217',
            'invalid_currency_name' => 'Invalid currency code, it must be in :currencies.',
        ],
    ],
    'account' => [
        'name' => 'Accounts',
        'description' => 'View and update account settings',
        'form' => [
            'real_estate_enabled_login' => 'Allow visitors to login?',
            'enable_recaptcha_in_register_page' => 'Enable reCAPTCHA in the registration page?',
            'enable_recaptcha_in_register_page_description' => 'Need to setup Captcha in Admin -> Settings -> General first.',
            'verify_account_email' => 'Verify account\'s email?',
            'verify_account_email_helper' => "When it's enabled, a verification link will be sent to account's email, customers need to click on this link to verify their email before they can log in. Need to config email in Admin -> Settings -> Email to send email verification.",
            'enable_credits_system' => 'Enable credits system (agents need to buy credits to post their properties)',
            'enable_post_approval' => 'Enable post approval?',
            'enable_post_approval_helper' => 'When it is enabled, properties which posted by an agent will need to be approved by an admin before they are published and display on your site.',
            'allow_customizing_post_url' => 'Allow customizing post URL?',
            'allow_customizing_post_url_helper' => 'When it is enabled, agents can customize their post URL when they create a new property.',
            'max_upload_filesize_placeholder' => 'Default: 10',
            'max_upload_filesize' => 'Max upload filesize (MB)',
            'max_property_images_upload_by_agent' => 'Max number of images for each property',
            'property_expired_after_days' => 'Property Expired Time (days)',
            'enable_wishlist' => 'Enable wishlist?',
            'hide_agency_phone' => "Hide agency's phone number?",
            'hide_agent_info_in_property_detail_page' => 'Hide agent info in the property detail page?',
            'disabled_public_profile' => 'Disable public profile?',
            'real_estate_enabled_register' => 'Allow visitors to register account?',
            'hide_agency_email' => "Hide agency's email address?",
            'make_account_phone_number_required' => 'Make account phone number required',
            'make_account_phone_number_required_helper' => 'When it is enabled, accounts must enter their phone number when registering. It is always required when accounts log in with a phone number.',
            'enable_account_verification' => 'Enable account verification',
            'enable_account_verification_help' => 'When enabled, new accounts must be approved by an admin before they can access the system.',
            'hide_username_in_registration_page' => 'Hide username in registration page',
            'hide_username_in_registration_page_helper' => 'When enabled, the username field will be removed in the registration page.',
            'default_avatar' => 'Default avatar',
            'default_avatar_helper' => 'Default avatar for member when they do not have an avatar. If you do not select any image, it will be generated using your logo or the first character of member name.',
        ],
    ],
    'invoice' => [
        'name' => 'Invoice',
        'description' => 'View and update invoice settings',
        'form' => [
            'company_name' => 'Company name',
            'company_address' => 'Company address',
            'company_email' => 'Company email',
            'company_phone' => 'Company phone',
            'company_logo' => 'Company logo',
            'using_custom_font_for_invoice' => 'Using custom font for invoice?',
            'invoice_font_family' => 'Invoice font family (Only work for Latin language)',
            'invoice_support_arabic_language' => 'Support Arabic language in invoice?',
            'enable_invoice_stamp' => 'Enable invoice stamp?',
            'invoice_code_prefix' => 'Invoice code prefix',
            'add_language_support' => 'Add language support',
            'only_latin_languages' => 'Only Latin languages',
        ],
        'confirm_reset' => 'Confirm reset invoice template?',
        'confirm_message' => 'Do you really want to reset this invoice template to default?',
        'continue' => 'Continue',
    ],
    'invoice_template' => [
        'name' => 'Invoice Template',
        'description' => 'View and update invoice template',
    ],
    'currencies' => 'Currencies',
];
