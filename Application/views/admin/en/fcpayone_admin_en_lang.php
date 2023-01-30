<?php
/**
 * PAYONE OXID Connector is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PAYONE OXID Connector is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with PAYONE OXID Connector.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link          http://www.payone.de
 * @copyright (C) Payone GmbH
 * @version       OXID eShop CE
 */


$sLangName = "English";
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = [

    'charset' => 'UTF-8',


    'fcpo_admin_title' => 'PAYONE',
    'fcpo_main_title' => 'PAYONE Configuration',
    'fcpo_main_log' => 'PAYONE Transactions',
    'FCPO_MERCHANT_ID' => 'PAYONE Merchant ID',
    'FCPO_PORTAL_ID' => 'PAYONE Portal ID',
    'FCPO_PORTAL_KEY' => 'PAYONE Portal Key',
    'FCPO_OPERATION_MODE' => 'PAYONE Operation mode',
    'FCPO_BONI_OPERATION_MODE' => 'Operation mode',
    'FCPO_SUBACCOUNT_ID' => 'PAYONE Sub-Account ID',
    'FCPO_BANKACCOUNTCHECK' => 'Check bank account',
    'FCPO_DEACTIVATED' => 'Inactive',
    'FCPO_ACTIVATED' => 'Active',
    'FCPO_ACTIVATEDWITHPOS' => 'Active, with check against POS-CRL<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Only paymment method for germany)',
    'FCPO_LIVE_MODE' => 'Live mode',
    'FCPO_TEST_MODE' => 'Test mode',
    'fcpo_order_title' => 'PAYONE',
    'FCPO_REFNR' => 'Reference number',
    'FCPO_TXID' => 'PAYONE-Transaction Number (txid)',
    'fcpo_action_appointed' => 'Order',
    'fcpo_action_capture' => 'Capture',
    'fcpo_action_paid' => 'Paid',
    'fcpo_action_underpaid' => 'Underpaid',
    'fcpo_action_overpaid' => '<span style="color: red;">Overpaid</span>',
    'fcpo_action_cancelation' => 'Cancellation',
    'fcpo_action_refund' => 'Refund',
    'fcpo_action_debit' => 'Demand/Credit',
    'fcpo_action_transfer' => 'Transfer',
    'fcpo_action_reminder' => 'State dunning',
    'fcpo_clearingtype_elv' => 'Direct Debit',
    'fcpo_clearingtype_cc' => 'Credit Card',
    'fcpo_clearingtype_vor' => 'Payadvance',
    'fcpo_clearingtype_rec' => 'Bill',
    'fcpo_clearingtype_cod' => 'Cash on delivery',
    'fcpo_clearingtype_sb' => 'Online-Transfer',
    'fcpo_clearingtype_wlt' => 'e-Wallet',
    'fcpo_clearingtype_fnc' => 'Financing',
    'fcpo_clearingtype_csh' => 'Barzahlen',
    'fcpo_clearingtype_fcpoklarna' => 'Klarna Invoice',
    'fcpo_clearingtype_fcpoklarna_invoice' => 'Klarna pay later',
    'fcpo_clearingtype_fcpoklarna_installments' => 'Klarna slice it',
    'fcpo_clearingtype_fcpoklarna_directdebit' => 'Klarna pay now',
    'fcpo_clearingtype_fcpopo_bill' => 'Paysafe Pay Later™ Invoice',
    'fcpo_clearingtype_fcpopo_debitnote' => 'Paysafe Pay Later™ Debit',
    'fcpo_clearingtype_fcpopo_installment' => 'Paysafe Pay Later™ Installment',
    'fcpo_clearingtype_fcporp_debitnote' => 'Ratepay Debit',
    'fcpo_clearingtype_fcporp_bill' => 'Ratepay Invoice',
    'FCPO_CAPTURE_APPROVED' => 'Booking was successfull',
    'FCPO_CAPTURE_ERROR' => 'Error occured during booking: ',
    'FCPO_DEBIT_APPROVED' => 'Credit was successfull',
    'FCPO_DEBIT_ERROR' => 'Error occured during credit: ',
    'FCPO_AMOUNT_IN' => 'Amount in',
    'FCPO_LIST_HEADER_TITLE' => 'Transaction account',
    'FCPO_LIST_HEADER_TXTIME' => 'Timestamp',
    'FCPO_LIST_HEADER_PROCESS' => 'Process',
    'FCPO_LIST_HEADER_DEMAND' => 'Demand',
    'FCPO_LIST_HEADER_ORDERNR' => 'Order Nr.',
    'FCPO_LIST_HEADER_TXID' => 'Transaction number',
    'FCPO_LIST_HEADER_CLEARINGTYPE' => 'Payment method',
    'FCPO_LIST_HEADER_EMAIL' => 'Customer e-mail',
    'FCPO_LIST_HEADER_PRICE' => 'Price amount',
    'FCPO_LIST_HEADER_TXACTION' => 'State',
    'FCPO_LIST_HEADER_FORWARD_STATE' => 'Forward State',
    'FCPO_LIST_HEADER_FORWARD_TRIES' => 'Forward Tries',
    'FCPO_EXECUTE' => 'Execute',
    'FCPO_CAPTURE' => 'Capture ',
    'FCPO_DEBIT' => 'Debit ',
    'FCPO_ARE_YOU_SURE' => 'Are you sure that you want to perform this action?',
    'FCPO_DE' => 'Germany',
    'FCPO_AT' => 'Austria',
    'FCPO_NL' => 'Netherlands',
    'FCPO_HEADER_BANKACCOUNT' => 'Bankaccount (optional)',
    'FCPO_BANKCOUNTRY' => 'Account country',
    'FCPO_BANKACCOUNT' => 'Account number',
    'FCPO_BANKCODE' => 'Bank code number',
    'FCPO_BANKACCOUNTHOLDER' => 'Account owner',
    'FCPO_SHOW' => 'show',
    'FCPO_HIDE' => 'hide',
    'FCPO_PAYMENTTYPE' => 'Payment type',
    'FCPO_CARDEXPIREDATE' => 'Expiredate',
    'FCPO_CARDTYPE' => 'Card type',
    'FCPO_CARDPAN' => 'Masked Card Number',
    'FCPO_BALANCE' => 'Balance',
    'FCPO_RECEIVABLE' => 'Payment',
    'FCPO_NO_TRANSACTION_STATUS_RECEIVED' => 'No transaction status received.',
    'FC_IS_PAYONE' => 'This is a PAYONE payment method',
    'FCPO_HELP_MERCHANTID' => 'You will find your PAYONE Merchant-ID on each invoice of PAYONE as well as on the right upper corner of the PAYONE Merchant Interface (PMI).',
    'FCPO_HELP_PORTALID' => 'Please enter PAYONE Portal-ID which is used to complete payments.<br>You will find your Portal-ID at <a href="http://www.payone.de" target="_blank">http://www.payone.de</a> > Merchant-Login at menu entry Configuration > Payment Portals<br><br>You will get all relevant configuration parameters [edit] under tab [API-Parameter]',
    'FCPO_HELP_PORTALKEY' => 'Please enter the Key that is used for secure transaction . This can be freely configured by you in PAYONE Portal interface.<br>You can find this configuration at <a href="http://www.payone.de" target="_blank">http://www.payone.de</a> > Merchant-Login at menu entry Configuration > Payment Portals > [editieren] > Reiter [Erweitert] > Key<br><br>You will get all relevant configuration parameters under tab [API-Parameter]',
    'FCPO_HELP_OPERATIONMODE' => 'Here you can configure if the payments are processed in test mode, or whether they are performed live. Please note that for using the test mode, usage of defined test data si required.',
    'FCPO_HELP_SUBACCOUNTID' => 'Please enter the ID of the Sub-Account, which will be processed through the payments and allocated. <br> The ID can be found at <a href = "http://www.payone.de" target = "_blank" > http://www.payone.de </ a>> Merchant Login in the menu Settings> Accounts <br> All relevant parameters for configuration, please visit <a href = "http://www.payone . de [edit] "target =" _blank "> http://www.payone.de </ a>> Merchant Login in the menu configuration> Payment portals>> tab [API parameters]',
    'FCPO_HELP_POSCHECK' => 'Here you can define whether a check should be carried out by the bank against the POS-lock file. Please note that is done the module "Protect" must have been commissioned and the trial only for the direct debit payment Germany.',
    'fcpo_admin_config' => 'PAYONE Configuration',
    'fcpo_admin_config_payment' => 'PAYONE Payment Settings',
    'fcpo_admin_protocol' => 'PAYONE Protocols / Logs',
    'FCPO_NO_TRANSACTION' => 'No transaction selected',
    'fcpo_admin_information' => 'PAYONE Information',
    'fcpo_admin_common' => 'General',
    'fcpo_admin_support' => 'Support',
    'fcpo_admin_api_logs' => 'API Logs',
    'FCPO_LIST_HEADER_TIMESTAMP' => 'Time',
    'FCPO_LIST_HEADER_REQUEST' => 'Request',
    'FCPO_LIST_HEADER_RESPONSE' => 'Response',
    'FCPO_NO_APILOG' => 'No log entry selected',
    'FCPO_ACTIVE_CREDITCARD_TYPES' => 'Active credit card brands',
    'FCPO_CREDITCARDBRANDS_INFOTEXT' => 'Here, the individual credit card brands, for the payment method to enable and configure credit card & Returns Please note that were the respective credit card brand in PAYONE charge must be <br> The setting for the payment by credit card you take with PAYONE -> Configuration -> payment before.',
    'FCPO_ACTIVE_ONLINE_UBERWEISUNG_TYPES' => 'Active online payment types',
    'FCPO_ONLINEUBERWEISUNG_INFOTEXT' => 'Here you can enable/disable the individual types of online money transfer and are able to configure the online payments as well as referral. <br> Please note that these payment methods have to be ordered individually before. <br> The settings for accepting online transfers in PAYONE  can be found at PAYONE -> Configuration -> payment types in the PAYONE merchant interface.',
    'FCPO_CHANNEL' => 'Channel',
    'FCPO_AUTHORIZATION_METHOD' => 'Authorize-Method',
    'FCPO_PREAUTHORIZATION' => 'Preauthorization',
    'FCPO_PREAUTHORIZATION_HELP' => 'When you select "Preauthorization" the payable amount will be reserved as part of the order [recommended by PAYONE]. The charge (capture) must be initiated in a second step in before delivering the goods.',
    'FCPO_AUTHORIZATION' => 'Authorize',
    'FCPO_AUTHORIZATION_HELP' => 'When choosing "authorization", the amount to be paid will be charged immediately during the order.',
    'dyn_fcpayone' => 'PAYONE',
    'FCPO_ONLY_PAYONE' => 'PAYONE Payment Methods only',
    'ORDER_LIST_YOUWANTTOSTORNO' => 'Do you really want to cancel this order?\n CAUTION: Eventually open PAYONE transactions should be completed before performing this action.',
    'FCPO_ORDER_LIST_YOUWANTTODELETE' => 'Do you really want to delete this order?\n \n CAUTION: Eventually open PAYONE transactions should be completed before deleting this order.',
    'fcpo_admin_config_bonicheck' => 'Protect',
    'FCPO_ADDRESSCHECKTYPE' => 'Addresscheck',
    'FCPO_NO_ADDRESSCHECK' => 'Do not perform addresscheck',
    'FCPO_BASIC_ADDRESSCHECK' => 'AddressCheck Basic',
    'FCPO_PERSON_ADDRESSCHECK' => 'AddressCheck Person',
    'FCPO_BONIVERSUM_BASIC_ADDRESSCHECK' => 'Boniversum Addresscheck Basic',
    'FCPO_BONIVERSUM_PERSON_ADDRESSCHECK' => 'Boniversum Addresscheck Person',
    'FCPO_HELP_NO_ADDRESSCHECK' => 'Deactivation of address check',
    'FCPO_HELP_BASIC_ADDRESSCHECK' => 'Check the address on existence and supplementing and correcting the address (Possible for addresses in Germany, Austria, Switzerland, Netherlands, Belgium, Luxembourg, France, Italy, Spain, Portugal, Denmark, Sweden, Finland, Norway, Poland, Slovakia, Czech Republic, Hungary, U.S., Canada)',
    'FCPO_HELP_PERSON_ADDRESSCHECK' => 'Check whether the person is known by the specified address, check the address on existence and supplementing and correcting the address (only Germany)',
    'FCPO_CONSUMERSCORETYPE' => 'Consumerscore check',
    'FCPO_NO_BONICHECK' => 'Do not perform consumer score check',
    'FCPO_HARD_BONICHECK' => 'Infoscore (Hard features)',
    'FCPO_ALL_BONICHECK' => 'Infoscore (All features)',
    'FCPO_ALL_SCORE_BONICHECK' => 'Infoscore (All features + Consumerscore)',
    'FCPO_BONIVERSUM_SCORE_BONICHECK' => 'Boniversum VERITA Score',
    'FCPO_HELP_NO_BONICHECK' => 'Deactivation of the credit assessment',
    'FCPO_HELP_HARD_BONICHECK' => 'Testing for so-called "hard" negative features (eg consumer insolvency proceedings, the arrest warrant affidavit, or enforcement of the tax affidavits). The credit check only supports the testing of buyers from Germany.',
    'FCPO_HELP_ALL_BONICHECK' => 'Testing for so-called "hard" negative features (eg consumer insolvency proceedings, arrest warrant for the affidavit or enforce submission of the affidavit), "medium" negative features (eg court order, enforcement order or enforcement) and "soft" negative features (such as collection agency dunning initiated Continuing the extrajudicial debt collection payment procedure for partial payment, setting the order for payment out of court debt collection because of hopelessness). The credit check only supports the testing of buyers from Deutschland.Testing for so-called "hard" negative features (eg consumer insolvency proceedings, the arrest warrant affidavit, or enforcement of the tax affidavits). The credit check only supports the testing of buyers from Germany.',
    'FCPO_HELP_ALL_SCORE_BONICHECK' => 'Testing for so-called "hard" negative features (eg consumer insolvency proceedings, arrest warrant for the affidavit or enforce submission of the affidavit), "medium" negative features (eg court order, enforcement order or enforcement) and "soft" negative features (such as collection agency dunning initiated Continuing the extrajudicial debt collection payment procedure for partial payment, setting the order for payment out of court debt collection because of hopelessness). The credit check only supports the testing of buyers from Germany. <br> Bonuses The core is a score value and allows a higher selectivity for these negative characteristics.',
    'FCPO_HELP_BONI_OPERATIONMODE' => 'Here you can set the credit check if the checks are processed in test mode, or if they have to be executed in live mode.',
    'FCPO_SEND_ARTICLELIST' => 'Send article list',
    'FCPO_HELP_SEND_ARTICLELIST' => 'When activated the proposed requests will be sent to the system of PAYONE including the individual prices of items shipped. <br> This option must be checked if they have activated the PAYONE invoicing.',
    'FCPO_CHECK_DEL_ADDRESS' => 'Check delivery address',
    'FCPO_HELP_CHECK_DEL_ADDRESS' => 'Additional delivery address check through PAYONE address validation.',
    'FCPO_CORRECT_ADDRESS' => 'Commit corrected addresses',
    'FCPO_HELP_CORRECT_ADDRESS' => 'Acquisition of each corrected address validation instead of the address which was entered your shop.',
    'FCPO_STATUS_WITH_USER_CORRECTION' => 'User will be sent back to user form, if:',
    'FCPO_ADDRESSCHECK_PPB' => 'Name and family name is known',
    'FCPO_ADDRESSCHECK_PHB' => 'Family name is known',
    'FCPO_ADDRESSCHECK_PAB' => 'Name and family name is not known',
    'FCPO_ADDRESSCHECK_PKI' => 'Ambiguity in name to address',
    'FCPO_ADDRESSCHECK_PNZ' => '(no longer) undeliverable',
    'FCPO_ADDRESSCHECK_PPV' => 'Person died',
    'FCPO_ADDRESSCHECK_PPF' => 'If postal address is incorrect, users will be sent back to the user form.',
    'FCPO_DURABILITY_BONICHECK' => 'Lifetime credit check in days',
    'FCPO_HELP_DURABILITY_BONICHECK' => 'Number of days after which a new credit check is performed. <br> Please note the provisions of the Data Protection Act and the terms and conditions regarding the storage and the life of the credit checks. It is recommended to configure a service life of 1 day.',
    'FCPO_MODULE_VERSION' => 'Module Version',
    'FCPO_STARTLIMIT_BONICHECK' => 'Credit check up from minimum value of goods',
    'FCPO_HELP_STARTLIMIT_BONICHECK' => 'Credit check is performed only if the value is higher than the configured value here. <br> If the credit check should always be carried out, leave it blank.',
    'FCPO_HELP_ASSIGNCOUNTRIES' => 'If no countries are assigned, the payment applies to all countries. <br> If countries are assigned, the payment applies only to these countries. <br> Billing country and destination country weill be tested.',
    'fcpo_receivable_appointed1' => 'Reservation',
    'fcpo_receivable_appointed2' => 'Demand (Authorazation)',
    'fcpo_receivable_capture' => 'Demand (Capture)',
    'fcpo_receivable_debit1' => 'Demand (Debit)',
    'fcpo_receivable_debit2' => 'Credit (Debit/Refund)',
    'fcpo_receivable_reminder' => 'Reminder delivery',
    'fcpo_receivable_cancelation' => 'Chargeback fee',
    'fcpo_payment_capture1' => 'Indent',
    'fcpo_payment_capture2' => 'Payout',
    'fcpo_payment_paid1' => 'Receipt of payment',
    'fcpo_payment_paid2' => 'Chargeback',
    'fcpo_payment_underpaid1' => 'Underpaid',
    'fcpo_payment_underpaid2' => 'Chargeback',
    'fcpo_payment_debit1' => 'Indent',
    'fcpo_payment_debit2' => 'Payout',
    'fcpo_payment_transfer' => 'Rebooking',
    'fcpo_payment' => 'Payment',
    'FCPO_MAIN_CONFIG_INFOTEXT' => 'You can configure individually for each payment type, whether it should be handled in test or live mode. You can set them at PAYONE -> Configuration -> Payment Methods. We recommend following the initial configuration in test mode and switch over to live mode if everything works as expected.',
    'FCPO_BONICHECK_CONFIG_INFOTEXT' => 'Please note that you can use the following options only if you have activated the Protect module of PAYONE. The use of credit checks and address verification takes variable costs per transaction by itself, which you can refer to your contract.',
    'FCPO_BONICHECK_CONFIG_INFOTEXT_SMALL' => 'Please adjust the settings for the credit check carefully. The credit check is performed by entering the personal data and affects the payment methods that your customers will be offered in the checkout process. The credit rating should be used only for payment methods that result in a payment default risk for you by itself (eg, open account or debit). configure this setting via the "credit index" in the configuration of the respective method of payment. should also indicate in your store in an appropriate way that you perform credit checks on the infoscore Consumer Data GmbH.',
    'FCPO_INFOTEXT_SET_OPERATIONMODE' => 'Will be set manually at PAYONE->Configuration->payment settings',
    'FCPO_DEFAULT_BONI' => 'Standard credit index',
    'FCPO_HELP_DEFAULT_BONI' => 'This credit index, the customer receives when registering <br> Purpose:. If the customer has not yet been tested and the test is done only at a certain value, this is the index of credit until the first real test will be considered <br. > <br> If this field is left blank the OXID standard is set (1000).',
    'FCPO_SETTLE_ACCOUNT' => 'Perform settlement',
    'FCPO_HELP_SETTLE_ACCOUNT' => 'Disable checkbox for partial "Perform settlement" . Be activated during the last partial delivery has this option to perform a balancing accounts. Please note that this function only for ELV, in advance, online payment and billing is available. Also this feature for credit card prior to activation of PAYONE is available.',
    'FCPO_PRESAVE_ORDER' => 'Save order before authorization',
    'FCPO_REDUCE_STOCK' => 'Reduce stock',
    'FCPO_HELP_REDUCE_STOCK' => 'This configuration only has effect when "Save order before authorization" is activated and the customer is redirected to an external paymentservice ( i.e. Sofort�berweisung, PayPal or creditcard with 3D Secure ). This configuration defines if the stock for the articles is reduced before or after the redirect to the external paymentservice.',
    'FCPO_REDUCE_STOCK_BEFORE' => 'before authorization',
    'FCPO_REDUCE_STOCK_AFTER' => 'after authorization',
    'FCPO_HELP_PRESAVE_ORDER' => 'The order is saved before the authorization als incomplete Order, so that there is a order-number which can be sent to PAYONE.',
    'FCPO_VOUCHER' => 'voucher',
    'FCPO_DISCOUNT' => 'discount',
    'FCPO_WRAPPING' => "Gift Wrapping",
    'FCPO_GIFTCARD' => "Greeting Card",
    'FCPO_SURCHARGE' => 'Surcharge',
    'FCPO_DEDUCTION' => 'Deduction',
    'FCPO_SHIPPINGCOST' => "Shipping cost",
    'FCPO_PRODUCT_CAPTURE' => "Capture",
    'FCPO_PRODUCT_AMOUNT' => "Amount",
    'FCPO_PRODUCT_PRICE' => "Unit price",
    'FCPO_PRODUCT_TITLE' => "Product",
    'FCPO_COMPLETE_ORDER' => "Complete order",
    'FCPO_CONSUMERSCORE_MOMENT' => "Moment of consumerscore",
    'FCPO_CONSUMERSCORE_BEFORE' => "Before paymenttype selection",
    'FCPO_CONSUMERSCORE_AFTER' => "After paymenttype selection",
    'FCPO_HELP_CONSUMERSCORE_MOMENT' => "You can define the moment of the consumerscore check here. The comsumerscore is only executed when the configured credit rating from the payment method is greater 0.<br><br>Options:<br><br><ul><li>Before payment method selection<br>The consumerscore is checked, when the needed adress- and nameinformation is available. This happens before the payment method selection. The consumerscore happens in the background, not visible to the customer.<br><br></li><li>After payment method selection<br>When choosing this option, a checkbox will be displayed on the payment-site for the customer to select if he agrees with a consumerscore being done.</li></ul>",
    'sFCPOApprovalText_default' => "I agree that a credit check is being done.",
    'sFCPODenialText_default' => "Unfortunately, due to the credit check, we can't offer you the selected payment method. Please choose another payment method.",
    'FCPO_APPROVALTEXT' => "Infotext consumerscore approval",
    'FCPO_DENIALTEXT' => "Infotext denial message",
    'FCPO_ORDERNOTCHECKED' => "The customer did not accept the<br>consumerscore check for this order!",
    'fcpo_admin_config_status_forwarding' => "Transactionsstatus - forwarding",
    'fcpo_admin_config_status_mapping' => "Transactionsstatus - mapping",
    'fcpo_admin_config_error_mapping' => "Errormessage - Mapping",
    'fcpo_admin_config_add' => "add",
    'fcpo_admin_config_delete' => "delete",
    'fcpo_admin_config_delete_confirm' => "Do you really want to delete this entry?",
    'fcpo_admin_config_paymenttype' => "payment-method",
    'fcpo_admin_config_status_payone' => "PAYONE status",
    'fcpo_admin_config_status_shop' => "shop - status",
    'fcpo_admin_config_status' => "status",
    'fcpo_admin_config_url' => "URL",
    'fcpo_admin_config_timeout' => "timeout",
    'fcpo_status_appointed' => "appointed",
    'fcpo_status_capture' => "capture",
    'fcpo_status_paid' => "paid",
    'fcpo_status_underpaid' => "underpaid",
    'fcpo_status_cancelation' => "cancelation",
    'fcpo_status_refund' => "refund",
    'fcpo_status_debit' => "debit",
    'fcpo_status_reminder' => "reminder",
    'fcpo_status_vauthorization' => "vauthorization",
    'fcpo_status_vsettlement' => "vsettlement",
    'fcpo_status_transfer' => "transfer",
    'fcpo_status_invoice' => "invoice",
    'FCPO_KLARNA_STORE_ID_ADMIN' => "Klarna StoreIDs",
    'FCPO_KLARNA_ADD_STORE_ID' => "add StoreID",
    'FCPO_KLARNA_DELETE_STORE_ID' => "delete",
    'FCPO_CONFIG_GROUP_CONN' => "Connection-configuration",
    'FCPO_CONFIG_GROUP_GENERAL' => "General",
    'FCPO_CONFIG_GROUP_DEBITNOTE' => "Debit",
    'FCPO_CONFIG_GROUP_CREDITCARD' => "Creditcard",
    'FCPO_CONFIG_GROUP_KLARNA' => "Klarna StoreIDs",
    'FCPO_CONFIG_GROUP_KLARNA_CAMPAIGNS' => "Klarna campaigns",
    'FCPO_CONFIG_GROUP_PAYOLUTION' => 'Payolution',
    'FCPO_CONFIG_GROUP_RATEPAY' => 'Ratepay',
    'FCPO_CONFIG_GROUP_AMAZONPAY' => 'AmazonPay',
    'FCPO_AMAZONPAY_SELLERID' => 'Amazon Seller-ID',
    'FCPO_AMAZONPAY_CLIENTID' => 'Amazon Client-ID',
    'FCPO_AMAZONPAY_GET_CONFIG' => 'Retrieve Amazon-Configuration from PAYONE',
    'FCPO_AMAZONPAY_ERROR_GETTING_CONFIG' => 'An error occurred retrieving configuration. Check API-Logs for further information.',
    'FCPO_AMAZONPAY_SUCCESS_GETTING_CONFIG' => 'AmazonPay-Configuration successfully retrieved',
    'FCPO_AMAZONPAY_BUTTON_TYPE' => 'Amazon Button Type',
    'FCPO_AMAZONPAY_BUTTON_TYPE_PwA' => 'Amazon Pay (Standard)',
    'FCPO_AMAZONPAY_BUTTON_TYPE_Pay' => 'Pay (smaller)',
    'FCPO_AMAZONPAY_BUTTON_TYPE_A' => 'Amazon Logo (small)',
    'FCPO_AMAZONPAY_BUTTON_COLOR' => 'Amazon Button Color',
    'FCPO_AMAZONPAY_BUTTON_COLOR_GOLD' => 'Gold (standard)',
    'FCPO_AMAZONPAY_BUTTON_TYPE_LIGHT_GRAY' => 'Light Grey',
    'FCPO_AMAZONPAY_BUTTON_TYPE_DARKGRAY' => 'Dark grey',
    'FCPO_AMAZONPAY_BUTTON_LANG' => 'Amazon Button Language',
    'FCPO_AMAZONPAY_BUTTON_LANG_NONE' => 'automatically',
    'FCPO_AMAZONPAY_BUTTON_LANG_ENGLISH_UK' => 'English (UK)',
    'FCPO_AMAZONPAY_BUTTON_LANG_GERMAN_GERMANY' => 'German (Germany)',
    'FCPO_AMAZONPAY_BUTTON_LANG_FRENCH_FRANCE' => 'French (France)',
    'FCPO_AMAZONPAY_BUTTON_LANG_ITALIAN_ITALY' => 'Italian (Italy)',
    'FCPO_AMAZONPAY_BUTTON_LANG_SPANISH_SPAIN' => 'Spanish (Spain)',
    'FCPO_AMAZONPAY_MODE' => 'Amazon-Mode',
    'FCPO_AMAZONPAY_MODE_ALWAYSSYNC' => 'Always synchronous',
    'FCPO_AMAZONPAY_MODE_FIRSTSYNCTHENSYNC' => 'Synchronous, asynchronous as fallback',
    'FCPO_AMAZONPAY_LOGINMODE' => 'Login method',
    'FCPO_AMAZONPAY_LOGINMODE_AUTO' => 'Automatically (SSL "Popup" and no "Redirect")',
    'FCPO_AMAZONPAY_LOGINMODE_POPUP' => 'Popup (requires SSL)',
    'FCPO_AMAZONPAY_LOGINMODE_REDIRECT' => 'Redirect',
    'FCPO_PROFILES_RATEPAY' => 'Ratepay Profile',
    'FCPO_RATEPAY_DELETE_PROFILE' => 'Delete profile',
    'FCPO_RATEPAY_ADD_PROFILE' => 'Add profile',
    'FCPO_PROFILES_RATEPAY_CURRENCY' => 'Currency',
    'FCPO_PROFILES_RATEPAY_PAYMENT' => 'Ratepay Payment method',
    'FCPO_RATEPAY_PROFILE_TOGGLE_DETAILS' => 'Toggle configuration details',
    'FCPO_RATEPAY_PROFILE_DETAILS_FOR_ID' => 'Profile configuration for ShopID',
    'FCPO_RATEPAY_GENERAL_SETTINGS' => 'Ratepay Settings',
    'FCPO_RATEPAY_B2BMODE' => 'Enable Ratepay B2B-Mode',
    'FCPO_HELP_RATEPAY_B2BMODE' => 'If B2B-Mode is enabled Vat-Id and company name will be requested, birthday for B2C customers',
    'FCPO_PAYOLUTION_B2BMODE' => 'Activate Payolution B2B-Mode',
    'FCPO_HELP_PAYOLUTION_B2BMODE' => 'If B2B-Mode is enabled Vat-Id and company name will be requested, birthday for B2C customers',
    'FCPO_PAYOLUTION_COMPANY' => 'Company name',
    'FCPO_HELP_PAYOLUTION_COMPANY' => 'Will be displayed at agreement statement',
    'FCPO_PAYOLUTION_MODE' => 'Enable Payolution test mode',
    'FCPO_PAYOLUTION_AUTH_USER' => 'Payolution User name',
    'FCPO_HELP_PAYOLUTION_AUTH_USER' => 'User name for Authentification',
    'FCPO_PAYOLUTION_AUTH_SECRET' => 'Payolution Password',
    'FCPO_HELP_PAYOLUTION_AUTH_SECRET' => 'Password for Authentification',
    'fcpo_admin_config_payone_error_message' => 'PAYONE error message',
    'fcpo_admin_config_status_language' => 'Language',
    'fcpo_admin_config_status_own_error_message' => 'Custom error message',
    'FCPO_KLARNA_CAMPAIGNS' => "Campaigns",
    'FCPO_KLARNA_CAMPAIGN_CODE' => "Campaign-Code",
    'FCPO_KLARNA_CAMPAIGN_TITLE' => "Title",
    'FCPO_KLARNA_ADD_CAMPAIGN' => "add campaign",
    'FCPO_CONFIG_DEBIT_BANKDATA' => "Input bank account data",
    'FCPO_CONFIG_DEBIT_MULTISELECT' => "Country control list (hold CTRL for multiselect)",
    'FCPO_CONFIG_DEBIT_GER' => "German bank accounts only",
    'FCPO_CONFIG_DEBIT_SHOW_OLD_FIELDS' => "display bank account number and code in addition",
    'FCPO_CONFIG_DEBIT_MANDATE' => "Mandate process",
    'FCPO_CONFIG_DEBIT_MANDATE_TEXT' => 'Requires chargeable "managemandate" request including bank account check. No POS blacklist check possible',
    'FCPO_CONFIG_DEBIT_MANDATE_ACTIVE' => "Activate mandate process",
    'FCPO_CONFIG_DEBIT_MANDATE_DOWNLOAD' => "Download Mandat as PDF",
    'FCPO_CONFIG_DEBIT_MANDATE_DOWNLOAD_TEXT' => 'Only available if PAYONE procuct<br>"SEPA-Mandate as PDF" is active.',
    'FCPO_CONFIG_DEBIT_MANDATE_DOWNLOAD_ACTIVE' => "Download Mandat as PDF",
    'fcpo_admin_config_error_iframe_mapping' => 'Custom error message for hosted iFrame',
    'fcpo_admin_config_payone_error_code' => 'Error code',
    'FCPO_SHOW_IBAN_FIELDS' => 'Display IBAN/BIC',
    'FCPO_SAVEBANKDATA' => 'Store bank account data',
    'FCPO_HELP_SAVEBANKDATA' => 'Data will be stored encrypted (OXID default) and will be available to select next time',
    'FCPO_PREAUTHORIZED_AMOUNT' => 'Preauthorized amount',
    'FCPO_CAPTURE_AMOUNT_GREATER_NULL' => 'Captured amount has to be greater than 0',
    'FCPO_HELP_ASSIGNCOUNTRIES_2' => 'If no country is assigned, this payment method will be available for all countries',
    'FCPO_HELP_ASSIGNCOUNTRIES_3' => 'If no country is assigned, this payment method will be available for all countries',
    'FCPO_ADDRESSCHECK_PUG' => 'If building is unknown, customer will get redirected back customer form',
    'FCPO_ADDRESSCHECK_PUZ' => 'If customer is moved,  customer will get redirected back customer form',
    'FCPO_ADDRESSCHECK_UKN' => 'If some data is unknown, customer will get redirected back customer form',
    'FCPO_ADDRESSCHECK_PNP' => 'If address does contain a wrong name, customer will get redirected back customer form',
    'FCPO_CONFIG_GROUP_PP_EXPRESS_LOGOS' => "PayPal",
    'FCPO_CONFIG_ADD_PP_EXPRESS_LOGO' => "Add another language",
    'FCPO_HELP_REFPREFIX' => "A unique referencenumber has to be transferred to PAYONE with every request. This is a consecutive number, normally starting at 1. When operating multiple shops ( e.g. live- and test-shop ) with the same PAYONE account-data there will be problems when the current referencenumber was already used. This can be avoided by using different prefixes on different shops.",
    'FCPO_REFPREFIX' => "Referencenumber prefix ( optional )",
    'FCPO_MANDATE_PDF' => "SEPA mandate-pdf",
    'FCPO_MANDATE_DOWNLOAD' => "download",
    'FCPO_EXPORT_CONFIG' => "Export configuration",
    'FCPO_ASSIGN_COUNTRIES' => "Assign countries",
    'FCPO_COUNTRIES' => "Countries",
    'FCPO_LANGUAGE' => "Languages",
    'FCPO_CURRENCY' => "Currencies",
    'FCPO_HELP_KLARNA_CAMPAIGNS' => "Klarna will only accept orders where the combination of country, language and currency match the campaign. You have to configure these combinations here.<br>The customer will only see campaigns matching his current combination.",
    'FCPO_PAYPAL_DELADDRESS' => 'Transmit the billing-address as delivery-address if delivery-address is missing.',
    'FCPO_HELP_PAYPAL_DELADDRESS' => 'This is used for the PayPal seller protection.',
    'FCPO_PAYPAL_LOGOS' => 'You can upload the PayPal Express logos here.',
    'FCPO_PAYPAL_LOGOS_ACTIVE' => 'active',
    'FCPO_PAYPAL_LOGOS_LANG' => 'language',
    'FCPO_PAYPAL_LOGOS_LOGO' => 'logo',
    'FCPO_PAYPAL_LOGOS_UPLOAD' => 'upload',
    'FCPO_PAYPAL_LOGOS_DEFAULT' => 'default',
    'FCPO_PAYPAL_LOGOS_NOT_EXISTING' => 'No logo existing!',
    'ORDER_OVERVIEW_FCPO_ELV_BLZ' => "Bank Code",
    'ORDER_OVERVIEW_FCPO_ELV_KTONR' => "Account No.",
    'ORDER_OVERVIEW_FCPO_ELV_IBAN' => "IBAN",
    'ORDER_OVERVIEW_FCPO_ELV_BIC' => "BIC",
    'FCPO_CC_CONFIG' => 'Input-configuration',
    'FCPO_CC_STANDARD_STYLE' => 'Standard-style',
    'FCPO_CC_ERRORS' => 'Error-output',
    'FCPO_CC_STANDARD_INPUT' => 'Input',
    'FCPO_CC_STANDARD_SELECTION' => 'Selection',
    'FCPO_CC_STANDARD_FIELDS' => 'Input-fields',
    'FCPO_CC_STANDARD_IFRAME' => 'Iframe',
    'FCPO_CC_ACTIVE' => 'Active',
    'FCPO_CC_LANGUAGE' => 'Language',
    'FCPO_CC_SELECT' => 'Selection',
    'FCPO_CC_ERRORLANG_DE' => 'German',
    'FCPO_CC_ERRORLANG_EN' => 'English',
    'FCPO_CC_CUSTOM_TEMPLATE' => 'Custom styling hosted-Iframe',
    'FCPO_CC_PREVIEW' => 'Preview',
    'FCPO_CREDITCARD' => 'Credit card:',
    'FCPO_NUMBER' => 'Number:',
    'FCPO_CARD_SECURITY_CODE' => 'CVV2 or CVC2 security code:',
    'FCPO_VALID_UNTIL' => 'Valid until:',
    'FCPO_FIRSTNAME' => 'Firstname:',
    'FCPO_LASTNAME' => 'Lastname:',
    'FCPO_PREVIEW_NOTICE' => 'You need to save before the changes are visible in the preview!',
    'FCPO_CC_TYPE' => "Request-type",
    'FCPO_HELP_CC_TYPE' => "hosted-Iframe: The input-fields are delivered in Iframes which are hosted by PAYONE ( PCI DSS 3.0 conform ).<br>AJAX - The creditcard-information is sent to PAYONE via AJAX",
    'FCPO_CC_HEADER_TYPE' => 'Type',
    'FCPO_CC_HEADER_DIGIT_COUNT' => 'Digit-<br>count',
    'FCPO_CC_HEADER_DIGIT_MAX' => 'Max-<br>digits',
    'FCPO_CC_HEADER_IFRAME' => 'Iframe',
    'FCPO_CC_HEADER_WIDTH' => 'Width',
    'FCPO_CC_HEADER_HEIGHT' => 'Height',
    'FCPO_CC_HEADER_STYLE' => 'Style',
    'FCPO_CC_HEADER_CSS' => 'CSS',
    'FCPO_CC_ROW_CC_Number' => 'Creditcardnumber',
    'FCPO_CC_ROW_CC_CVC' => 'CVC security code',
    'FCPO_CC_ROW_CC_Month' => 'Validity-month',
    'FCPO_CC_ROW_CC_Year' => 'Validity-year',
    'FCPO_CC_TYPE_NUMERIC' => 'Numeric',
    'FCPO_CC_TYPE_PASSWORD' => 'Password',
    'FCPO_CC_TYPE_TEXT' => 'Text',
    'FCPO_CC_IFRAME_STANDARD' => 'Standard',
    'FCPO_CC_IFRAME_CUSTOM' => 'Custom',
    'FCPO_CC_USE_CVC' => 'Use CVC as mandatory field',
    'FCPO_CONFIG_DEBIT_BIC_MANDATORY' => 'Entering BIC is mandatory',
    'FCPO_MALUSHANDLING' => 'Personstatus deduction handling',
    'FCPO_PERSONSTATUS' => 'Personstatus',
    'FCPO_MALUS' => 'Deduction',
    'FCPO_MALUS_PPB' => 'person can be confirmed for this address',
    'FCPO_MALUS_PHB' => 'surname known',
    'FCPO_MALUS_PAB' => 'first name & surname unknown',
    'FCPO_MALUS_PKI' => 'ambiguity in name and address',
    'FCPO_MALUS_PNZ' => 'cannot be delivered',
    'FCPO_MALUS_PPV' => 'person deceased',
    'FCPO_MALUS_PPF' => 'postal address details are incorrect',
    'FCPO_HELP_MALUS' => 'The configured deductions will be subtracted from the boni-score according to the return value of the addresscheck. The boni-score cant fall below 0.',
    'FCPO_CREDITRATING_BONIVERSUM_FALLBACK' => 'Boniversum rating on response unknown',
    'FCPO_CREDITRATING_BONIVERSUM_RED' => 'Red',
    'FCPO_CREDITRATING_BONIVERSUM_YELLOW' => 'Yellow',
    'FCPO_CREDITRATING_BONIVERSUM_GREEN' => 'Green',
    'FCPO_CONFIG_GROUP_SECINVOICE' => 'Secure Invoice (rec/POV)',
    'FCPO_SECINVOICE_PORTAL_ID' => 'PAYONE Portal ID (for payment Secure Invoice)',
    'FCPO_SECINVOICE_PORTAL_KEY' => 'PAYONE Portal Key (for payment Secure Invoice)',
    'FCPO_CONFIG_GROUP_PAYDIREKT' => 'Paydirekt',
    'FCPO_PAYDIREKT_BUTTONTYPE' => 'Design of Paydirekt-Express button',
    'FCPO_HELP_PAYDIREKT_BUTTONTYPE' => 'Choose design of Paydirekt-Express button.',
    'FCPO_PAYDIREKT_EXPRESS_BUTTON_NONE' => 'None',
    'FCPO_PAYDIREKT_EXPRESS_BUTTON_GREEN' => 'Green',
    'FCPO_PAYDIREKT_EXPRESS_BUTTON_GREEN2' => 'Green 2',
    'FCPO_PAYDIREKT_EXPRESS_BUTTON_WHITE' => 'White',
    'FCPO_PAYDIREKT_EXPRESS_BUTTON_WHITE2' => 'White 2',
    'FCPO_PAYDIREKT_SHIPPING_TERMS_URL' => 'Webaddress (URL) to page of your shipping terms',
    'FCPO_HELP_PAYDIREKT_SHIPPING_TERMS_URL' => 'Entering a webaddress is mandatory for usage of Paydirekt Express',
    'FCPO_PAYDIREKT_EXPRESS_DELIVERY_NONE' => 'No choice (OXID standard method will be used)',
    'FCPO_HELP_PAYDIREKT_DELIVERYSET' => 'Please choose the matching deliveryset for your PaydirektExpress orders',
    'FCPO_PAYDIREKT_DELIVERYSET' => 'Deliveryset to use for PaydirektExpress orders',
    'FCPO_GROUP_LOGGING' => 'Logging',
    'FCPO_TRANSACTIONREDIRECTLOGGING_NONE' => 'No logs (Default)',
    'FCPO_TRANSACTIONREDIRECTLOGGING_ALL' => 'Log everything',
    'FCPO_TRANSACTIONREDIRECTLOGGING' => 'Logging of transactionstatus redirects',
    'FCPO_HELP_TRANSACTIONREDIRECTLOGGING' => 'With this option activated, you can log activity of transactionstatus redirects. Content of this logging are landing in file <i>fcpo_message_forwarding.log</i> in your shops log folder. Please note, that this option should not be activated all the time due to it produces big log files',
    'FCPO_HASH_METHOD' => 'Hash Method',
    'FCPO_HELP_HASH_METHOD' => 'Here you can setup the hash method which will be used for communication with Payone-API. If possible, use sha2-384',
    'FCPO_BONI_ERROR_SET_TO_BONIVERSUM_PERSON' => '<b>Please note:</b><br>Adresschecktype has been set to "Boniversum Addresscheck Person" , due to your  Bonicheck has been set to "Boniversum VERITA Score".',
    'FCPO_BONI_ERROR_DEACTIVATED_REGULAR_ADDRESSCHECK' => '<b>Please note:</b><br>Regular Adresschecktyp has been deactivated due to your Bonicheck is set active. Addresschecktype is configured seperately within the Bonicheck-Configuration.',
    'FCPO_BONI_ERROR_DEACTIVATED_BONI_ADDRESSCHECK' => '<b>Please note:</b><br>Boni adresscheck has been deactivated due to bonicheck itself is inactive.',
    'FCPO_BONI_ERROR_NO_BONIADDRESSCHECK_SET' => '<b>Please note:</b><br>Adresschecktype has been set to "BASIC" due to your Bonicheck is set active, but no mandatory Adresschecktype has been set.',
    'FCPO_BONI_ERROR_SET_TO_BASIC' => '<b>Please note:</b><br>Adresschecktype has been set to "Basic" due to your combination of Boni- and Addresscheck is not allowed.',
    'FCPO_BONI_ERROR_SET_TO_PERSON' => '<b>Please note:</b><br>Adresschecktype has been set to "Person" due to your combination of Boni- and Addresscheck is not allowed.',
    'FCPO_ADDRESSCHECKTYPE_REGULAR_SET_INACTIVE' => '<b>Please note:</b><br>Regular Adresschecktype has been deactivated due to your Bonicheck is set active. Please configure Addresschecktype in Bonicheck-Section.',
    'FCPO_EMAIL_CLEARING_SUBJECT' => 'Ihre Überweisungsdaten zur Bestellnummer',
    'FCPO_EMAIL_CLEARING_BODY_WELCOME' => "Hallo %NAME% %SURNAME%,\nzur Begleichung der Rechnung verwenden Sie bitte folgende Daten zur Überweisung:\n\n",
    'FCPO_EMAIL_BANK' => 'Bank:',
    'FCPO_EMAIL_ROUTINGNUMBER' => 'Bank Code:',
    'FCPO_EMAIL_ACCOUNTNUMBER' => 'Account No.:',
    'FCPO_EMAIL_BIC' => 'BIC:',
    'FCPO_EMAIL_IBAN' => 'IBAN:',
    'FCPO_EMAIL_CLEARING_BODY_THANKYOU' => 'Thank you, your %SHOPNAME%-Team',
    'FCPO_EMAIL_USAGE' => 'Usage',
    'FCPO_TRANSACTIONREDIRECTMETHOD_DIRECT' => 'Direct redirect (Standard)',
    'FCPO_TRANSACTIONREDIRECTMETHOD_CRONJOB' => 'Delayed by Cronjob (Secure transaction)',
    'FCPO_HELP_TRANSACTIONREDIRECTMETHOD' => 'Choose the method how transaction redirects will be handled. There are two choices:<br><b>Direct redirect:</b><br>Using this method will directly redirect the transaction after receiving it. This mode offers a high redirection speed and a moderate transaction security.<br><b>Delayed by Cronjob:</b><br>Instead of directly redirecting the statusmessage, this method collects incoming messages and will redirect them aftery calling a cronjob. This mode offers a very high transaction security. The speed of redirecting statusmessages depends on the setup of your server. Please visit the <a href="">manual</a> for further information for setting this up efficiantly.',
    'FCPO_TRANSACTIONREDIRECTMETHOD' => 'Method of statusmessage redirecting',
    'FCPO_TRANSACTION_TIMEOUT' => 'Timeout in seconds',
    'FCPO_HELP_TRANSACTIONREDIRECT_TIMEOUT' => 'For offering direct redirects without any interruptions, there is a need for having a timout. Depending on the setup of your server it can be nessessary to have a higher value then 10s default.',
    'FCPO_FORWARD_REDIRECTS' => 'Transaction status redirects',
    'FCPO_FORWARD_REDIRECT_TARGETURL' => 'Target',
    'FCPO_FORWARD_REDIRECT_TRIES' => 'Tries',
    'FCPO_FORWARD_REDIRECT_LASTTRY' => 'Last tried',
    'FCPO_FORWARD_REDIRECT_FULFILLED' => 'Success',
    'FCPO_FORWARD_REDIRECT_FULFILLED_YES' => 'Yes',
    'FCPO_FORWARD_REDIRECT_FULFILLED_NO' => 'No',
    'FCPO_FORWARD_REDIRECT_DETAILS' => 'Details',
    'FCPO_FORWARD_REDIRECT_TRIGGER' => 'Trigger all missing/unfulfilled calls'];

/*
[{ oxmultilang ident="GENERAL_YOUWANTTODELETE" }]
*/
