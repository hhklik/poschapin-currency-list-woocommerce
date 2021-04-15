<?php 
/*
Plugin Name: currency list woocommerce
Plugin URI: https://github.com/hhklik/currency-list-woocommerce
Description: Currency list, for woocomerce
Version: 0.0.1
Author: Humberto Herrador
Author URI: https://github.com/hhklik
Text Domain: clw
Generated By: http://ensuredomains.com
*/

// If this file is called directly, abort. //
if ( ! defined( 'WPINC' ) ) {die;} // end if

// Let's Initialize Everything
if ( file_exists( plugin_dir_path( __FILE__ ) . 'core-init.php' ) ) {
require_once( plugin_dir_path( __FILE__ ) . 'core-init.php' );
}

function my_plugin_activate () {

  add_option ('Activated_Plugin', 'Plugin-Slug');

  $clw_currency = array (
  'USD' => 
  array (
    'symbol' => '$',
    'name' => 'US Dollar',
    'symbol_native' => '$',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'USD',
    'name_plural' => 'US dollars',
  ),
  'CAD' => 
  array (
    'symbol' => 'CA$',
    'name' => 'Canadian Dollar',
    'symbol_native' => '$',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'CAD',
    'name_plural' => 'Canadian dollars',
  ),
  'EUR' => 
  array (
    'symbol' => '€',
    'name' => 'Euro',
    'symbol_native' => '€',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'EUR',
    'name_plural' => 'euros',
  ),
  'AED' => 
  array (
    'symbol' => 'AED',
    'name' => 'United Arab Emirates Dirham',
    'symbol_native' => 'د.إ.‏',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'AED',
    'name_plural' => 'UAE dirhams',
  ),
  'AFN' => 
  array (
    'symbol' => 'Af',
    'name' => 'Afghan Afghani',
    'symbol_native' => '؋',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'AFN',
    'name_plural' => 'Afghan Afghanis',
  ),
  'ALL' => 
  array (
    'symbol' => 'ALL',
    'name' => 'Albanian Lek',
    'symbol_native' => 'Lek',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'ALL',
    'name_plural' => 'Albanian lekë',
  ),
  'AMD' => 
  array (
    'symbol' => 'AMD',
    'name' => 'Armenian Dram',
    'symbol_native' => 'դր.',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'AMD',
    'name_plural' => 'Armenian drams',
  ),
  'ARS' => 
  array (
    'symbol' => 'AR$',
    'name' => 'Argentine Peso',
    'symbol_native' => '$',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'ARS',
    'name_plural' => 'Argentine pesos',
  ),
  'AUD' => 
  array (
    'symbol' => 'AU$',
    'name' => 'Australian Dollar',
    'symbol_native' => '$',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'AUD',
    'name_plural' => 'Australian dollars',
  ),
  'AZN' => 
  array (
    'symbol' => 'man.',
    'name' => 'Azerbaijani Manat',
    'symbol_native' => 'ман.',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'AZN',
    'name_plural' => 'Azerbaijani manats',
  ),
  'BAM' => 
  array (
    'symbol' => 'KM',
    'name' => 'Bosnia-Herzegovina Convertible Mark',
    'symbol_native' => 'KM',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'BAM',
    'name_plural' => 'Bosnia-Herzegovina convertible marks',
  ),
  'BDT' => 
  array (
    'symbol' => 'Tk',
    'name' => 'Bangladeshi Taka',
    'symbol_native' => '৳',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'BDT',
    'name_plural' => 'Bangladeshi takas',
  ),
  'BGN' => 
  array (
    'symbol' => 'BGN',
    'name' => 'Bulgarian Lev',
    'symbol_native' => 'лв.',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'BGN',
    'name_plural' => 'Bulgarian leva',
  ),
  'BHD' => 
  array (
    'symbol' => 'BD',
    'name' => 'Bahraini Dinar',
    'symbol_native' => 'د.ب.‏',
    'decimal_digits' => 3,
    'rounding' => 0,
    'code' => 'BHD',
    'name_plural' => 'Bahraini dinars',
  ),
  'BIF' => 
  array (
    'symbol' => 'FBu',
    'name' => 'Burundian Franc',
    'symbol_native' => 'FBu',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'BIF',
    'name_plural' => 'Burundian francs',
  ),
  'BND' => 
  array (
    'symbol' => 'BN$',
    'name' => 'Brunei Dollar',
    'symbol_native' => '$',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'BND',
    'name_plural' => 'Brunei dollars',
  ),
  'BOB' => 
  array (
    'symbol' => 'Bs',
    'name' => 'Bolivian Boliviano',
    'symbol_native' => 'Bs',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'BOB',
    'name_plural' => 'Bolivian bolivianos',
  ),
  'BRL' => 
  array (
    'symbol' => 'R$',
    'name' => 'Brazilian Real',
    'symbol_native' => 'R$',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'BRL',
    'name_plural' => 'Brazilian reals',
  ),
  'BWP' => 
  array (
    'symbol' => 'BWP',
    'name' => 'Botswanan Pula',
    'symbol_native' => 'P',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'BWP',
    'name_plural' => 'Botswanan pulas',
  ),
  'BYN' => 
  array (
    'symbol' => 'Br',
    'name' => 'Belarusian Ruble',
    'symbol_native' => 'руб.',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'BYN',
    'name_plural' => 'Belarusian rubles',
  ),
  'BZD' => 
  array (
    'symbol' => 'BZ$',
    'name' => 'Belize Dollar',
    'symbol_native' => '$',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'BZD',
    'name_plural' => 'Belize dollars',
  ),
  'CDF' => 
  array (
    'symbol' => 'CDF',
    'name' => 'Congolese Franc',
    'symbol_native' => 'FrCD',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'CDF',
    'name_plural' => 'Congolese francs',
  ),
  'CHF' => 
  array (
    'symbol' => 'CHF',
    'name' => 'Swiss Franc',
    'symbol_native' => 'CHF',
    'decimal_digits' => 2,
    'rounding' => 0.05,
    'code' => 'CHF',
    'name_plural' => 'Swiss francs',
  ),
  'CLP' => 
  array (
    'symbol' => 'CL$',
    'name' => 'Chilean Peso',
    'symbol_native' => '$',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'CLP',
    'name_plural' => 'Chilean pesos',
  ),
  'CNY' => 
  array (
    'symbol' => 'CN¥',
    'name' => 'Chinese Yuan',
    'symbol_native' => 'CN¥',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'CNY',
    'name_plural' => 'Chinese yuan',
  ),
  'COP' => 
  array (
    'symbol' => 'CO$',
    'name' => 'Colombian Peso',
    'symbol_native' => '$',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'COP',
    'name_plural' => 'Colombian pesos',
  ),
  'CRC' => 
  array (
    'symbol' => '₡',
    'name' => 'Costa Rican Colón',
    'symbol_native' => '₡',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'CRC',
    'name_plural' => 'Costa Rican colóns',
  ),
  'CVE' => 
  array (
    'symbol' => 'CV$',
    'name' => 'Cape Verdean Escudo',
    'symbol_native' => 'CV$',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'CVE',
    'name_plural' => 'Cape Verdean escudos',
  ),
  'CZK' => 
  array (
    'symbol' => 'Kč',
    'name' => 'Czech Republic Koruna',
    'symbol_native' => 'Kč',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'CZK',
    'name_plural' => 'Czech Republic korunas',
  ),
  'DJF' => 
  array (
    'symbol' => 'Fdj',
    'name' => 'Djiboutian Franc',
    'symbol_native' => 'Fdj',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'DJF',
    'name_plural' => 'Djiboutian francs',
  ),
  'DKK' => 
  array (
    'symbol' => 'Dkr',
    'name' => 'Danish Krone',
    'symbol_native' => 'kr',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'DKK',
    'name_plural' => 'Danish kroner',
  ),
  'DOP' => 
  array (
    'symbol' => 'RD$',
    'name' => 'Dominican Peso',
    'symbol_native' => 'RD$',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'DOP',
    'name_plural' => 'Dominican pesos',
  ),
  'DZD' => 
  array (
    'symbol' => 'DA',
    'name' => 'Algerian Dinar',
    'symbol_native' => 'د.ج.‏',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'DZD',
    'name_plural' => 'Algerian dinars',
  ),
  'EEK' => 
  array (
    'symbol' => 'Ekr',
    'name' => 'Estonian Kroon',
    'symbol_native' => 'kr',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'EEK',
    'name_plural' => 'Estonian kroons',
  ),
  'EGP' => 
  array (
    'symbol' => 'EGP',
    'name' => 'Egyptian Pound',
    'symbol_native' => 'ج.م.‏',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'EGP',
    'name_plural' => 'Egyptian pounds',
  ),
  'ERN' => 
  array (
    'symbol' => 'Nfk',
    'name' => 'Eritrean Nakfa',
    'symbol_native' => 'Nfk',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'ERN',
    'name_plural' => 'Eritrean nakfas',
  ),
  'ETB' => 
  array (
    'symbol' => 'Br',
    'name' => 'Ethiopian Birr',
    'symbol_native' => 'Br',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'ETB',
    'name_plural' => 'Ethiopian birrs',
  ),
  'GBP' => 
  array (
    'symbol' => '£',
    'name' => 'British Pound Sterling',
    'symbol_native' => '£',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'GBP',
    'name_plural' => 'British pounds sterling',
  ),
  'GEL' => 
  array (
    'symbol' => 'GEL',
    'name' => 'Georgian Lari',
    'symbol_native' => 'GEL',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'GEL',
    'name_plural' => 'Georgian laris',
  ),
  'GHS' => 
  array (
    'symbol' => 'GH₵',
    'name' => 'Ghanaian Cedi',
    'symbol_native' => 'GH₵',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'GHS',
    'name_plural' => 'Ghanaian cedis',
  ),
  'GNF' => 
  array (
    'symbol' => 'FG',
    'name' => 'Guinean Franc',
    'symbol_native' => 'FG',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'GNF',
    'name_plural' => 'Guinean francs',
  ),
  'GTQ' => 
  array (
    'symbol' => 'GTQ',
    'name' => 'Guatemalan Quetzal',
    'symbol_native' => 'Q',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'GTQ',
    'name_plural' => 'Guatemalan quetzals',
  ),
  'HKD' => 
  array (
    'symbol' => 'HK$',
    'name' => 'Hong Kong Dollar',
    'symbol_native' => '$',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'HKD',
    'name_plural' => 'Hong Kong dollars',
  ),
  'HNL' => 
  array (
    'symbol' => 'HNL',
    'name' => 'Honduran Lempira',
    'symbol_native' => 'L',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'HNL',
    'name_plural' => 'Honduran lempiras',
  ),
  'HRK' => 
  array (
    'symbol' => 'kn',
    'name' => 'Croatian Kuna',
    'symbol_native' => 'kn',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'HRK',
    'name_plural' => 'Croatian kunas',
  ),
  'HUF' => 
  array (
    'symbol' => 'Ft',
    'name' => 'Hungarian Forint',
    'symbol_native' => 'Ft',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'HUF',
    'name_plural' => 'Hungarian forints',
  ),
  'IDR' => 
  array (
    'symbol' => 'Rp',
    'name' => 'Indonesian Rupiah',
    'symbol_native' => 'Rp',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'IDR',
    'name_plural' => 'Indonesian rupiahs',
  ),
  'ILS' => 
  array (
    'symbol' => '₪',
    'name' => 'Israeli New Sheqel',
    'symbol_native' => '₪',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'ILS',
    'name_plural' => 'Israeli new sheqels',
  ),
  'INR' => 
  array (
    'symbol' => 'Rs',
    'name' => 'Indian Rupee',
    'symbol_native' => 'টকা',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'INR',
    'name_plural' => 'Indian rupees',
  ),
  'IQD' => 
  array (
    'symbol' => 'IQD',
    'name' => 'Iraqi Dinar',
    'symbol_native' => 'د.ع.‏',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'IQD',
    'name_plural' => 'Iraqi dinars',
  ),
  'IRR' => 
  array (
    'symbol' => 'IRR',
    'name' => 'Iranian Rial',
    'symbol_native' => '﷼',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'IRR',
    'name_plural' => 'Iranian rials',
  ),
  'ISK' => 
  array (
    'symbol' => 'Ikr',
    'name' => 'Icelandic Króna',
    'symbol_native' => 'kr',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'ISK',
    'name_plural' => 'Icelandic krónur',
  ),
  'JMD' => 
  array (
    'symbol' => 'J$',
    'name' => 'Jamaican Dollar',
    'symbol_native' => '$',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'JMD',
    'name_plural' => 'Jamaican dollars',
  ),
  'JOD' => 
  array (
    'symbol' => 'JD',
    'name' => 'Jordanian Dinar',
    'symbol_native' => 'د.أ.‏',
    'decimal_digits' => 3,
    'rounding' => 0,
    'code' => 'JOD',
    'name_plural' => 'Jordanian dinars',
  ),
  'JPY' => 
  array (
    'symbol' => '¥',
    'name' => 'Japanese Yen',
    'symbol_native' => '￥',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'JPY',
    'name_plural' => 'Japanese yen',
  ),
  'KES' => 
  array (
    'symbol' => 'Ksh',
    'name' => 'Kenyan Shilling',
    'symbol_native' => 'Ksh',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'KES',
    'name_plural' => 'Kenyan shillings',
  ),
  'KHR' => 
  array (
    'symbol' => 'KHR',
    'name' => 'Cambodian Riel',
    'symbol_native' => '៛',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'KHR',
    'name_plural' => 'Cambodian riels',
  ),
  'KMF' => 
  array (
    'symbol' => 'CF',
    'name' => 'Comorian Franc',
    'symbol_native' => 'FC',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'KMF',
    'name_plural' => 'Comorian francs',
  ),
  'KRW' => 
  array (
    'symbol' => '₩',
    'name' => 'South Korean Won',
    'symbol_native' => '₩',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'KRW',
    'name_plural' => 'South Korean won',
  ),
  'KWD' => 
  array (
    'symbol' => 'KD',
    'name' => 'Kuwaiti Dinar',
    'symbol_native' => 'د.ك.‏',
    'decimal_digits' => 3,
    'rounding' => 0,
    'code' => 'KWD',
    'name_plural' => 'Kuwaiti dinars',
  ),
  'KZT' => 
  array (
    'symbol' => 'KZT',
    'name' => 'Kazakhstani Tenge',
    'symbol_native' => 'тңг.',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'KZT',
    'name_plural' => 'Kazakhstani tenges',
  ),
  'LBP' => 
  array (
    'symbol' => 'LB£',
    'name' => 'Lebanese Pound',
    'symbol_native' => 'ل.ل.‏',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'LBP',
    'name_plural' => 'Lebanese pounds',
  ),
  'LKR' => 
  array (
    'symbol' => 'SLRs',
    'name' => 'Sri Lankan Rupee',
    'symbol_native' => 'SL Re',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'LKR',
    'name_plural' => 'Sri Lankan rupees',
  ),
  'LTL' => 
  array (
    'symbol' => 'Lt',
    'name' => 'Lithuanian Litas',
    'symbol_native' => 'Lt',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'LTL',
    'name_plural' => 'Lithuanian litai',
  ),
  'LVL' => 
  array (
    'symbol' => 'Ls',
    'name' => 'Latvian Lats',
    'symbol_native' => 'Ls',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'LVL',
    'name_plural' => 'Latvian lati',
  ),
  'LYD' => 
  array (
    'symbol' => 'LD',
    'name' => 'Libyan Dinar',
    'symbol_native' => 'د.ل.‏',
    'decimal_digits' => 3,
    'rounding' => 0,
    'code' => 'LYD',
    'name_plural' => 'Libyan dinars',
  ),
  'MAD' => 
  array (
    'symbol' => 'MAD',
    'name' => 'Moroccan Dirham',
    'symbol_native' => 'د.م.‏',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'MAD',
    'name_plural' => 'Moroccan dirhams',
  ),
  'MDL' => 
  array (
    'symbol' => 'MDL',
    'name' => 'Moldovan Leu',
    'symbol_native' => 'MDL',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'MDL',
    'name_plural' => 'Moldovan lei',
  ),
  'MGA' => 
  array (
    'symbol' => 'MGA',
    'name' => 'Malagasy Ariary',
    'symbol_native' => 'MGA',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'MGA',
    'name_plural' => 'Malagasy Ariaries',
  ),
  'MKD' => 
  array (
    'symbol' => 'MKD',
    'name' => 'Macedonian Denar',
    'symbol_native' => 'MKD',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'MKD',
    'name_plural' => 'Macedonian denari',
  ),
  'MMK' => 
  array (
    'symbol' => 'MMK',
    'name' => 'Myanma Kyat',
    'symbol_native' => 'K',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'MMK',
    'name_plural' => 'Myanma kyats',
  ),
  'MOP' => 
  array (
    'symbol' => 'MOP$',
    'name' => 'Macanese Pataca',
    'symbol_native' => 'MOP$',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'MOP',
    'name_plural' => 'Macanese patacas',
  ),
  'MUR' => 
  array (
    'symbol' => 'MURs',
    'name' => 'Mauritian Rupee',
    'symbol_native' => 'MURs',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'MUR',
    'name_plural' => 'Mauritian rupees',
  ),
  'MXN' => 
  array (
    'symbol' => 'MX$',
    'name' => 'Mexican Peso',
    'symbol_native' => '$',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'MXN',
    'name_plural' => 'Mexican pesos',
  ),
  'MYR' => 
  array (
    'symbol' => 'RM',
    'name' => 'Malaysian Ringgit',
    'symbol_native' => 'RM',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'MYR',
    'name_plural' => 'Malaysian ringgits',
  ),
  'MZN' => 
  array (
    'symbol' => 'MTn',
    'name' => 'Mozambican Metical',
    'symbol_native' => 'MTn',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'MZN',
    'name_plural' => 'Mozambican meticals',
  ),
  'NAD' => 
  array (
    'symbol' => 'N$',
    'name' => 'Namibian Dollar',
    'symbol_native' => 'N$',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'NAD',
    'name_plural' => 'Namibian dollars',
  ),
  'NGN' => 
  array (
    'symbol' => '₦',
    'name' => 'Nigerian Naira',
    'symbol_native' => '₦',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'NGN',
    'name_plural' => 'Nigerian nairas',
  ),
  'NIO' => 
  array (
    'symbol' => 'C$',
    'name' => 'Nicaraguan Córdoba',
    'symbol_native' => 'C$',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'NIO',
    'name_plural' => 'Nicaraguan córdobas',
  ),
  'NOK' => 
  array (
    'symbol' => 'Nkr',
    'name' => 'Norwegian Krone',
    'symbol_native' => 'kr',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'NOK',
    'name_plural' => 'Norwegian kroner',
  ),
  'NPR' => 
  array (
    'symbol' => 'NPRs',
    'name' => 'Nepalese Rupee',
    'symbol_native' => 'नेरू',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'NPR',
    'name_plural' => 'Nepalese rupees',
  ),
  'NZD' => 
  array (
    'symbol' => 'NZ$',
    'name' => 'New Zealand Dollar',
    'symbol_native' => '$',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'NZD',
    'name_plural' => 'New Zealand dollars',
  ),
  'OMR' => 
  array (
    'symbol' => 'OMR',
    'name' => 'Omani Rial',
    'symbol_native' => 'ر.ع.‏',
    'decimal_digits' => 3,
    'rounding' => 0,
    'code' => 'OMR',
    'name_plural' => 'Omani rials',
  ),
  'PAB' => 
  array (
    'symbol' => 'B/.',
    'name' => 'Panamanian Balboa',
    'symbol_native' => 'B/.',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'PAB',
    'name_plural' => 'Panamanian balboas',
  ),
  'PEN' => 
  array (
    'symbol' => 'S/.',
    'name' => 'Peruvian Nuevo Sol',
    'symbol_native' => 'S/.',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'PEN',
    'name_plural' => 'Peruvian nuevos soles',
  ),
  'PHP' => 
  array (
    'symbol' => '₱',
    'name' => 'Philippine Peso',
    'symbol_native' => '₱',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'PHP',
    'name_plural' => 'Philippine pesos',
  ),
  'PKR' => 
  array (
    'symbol' => 'PKRs',
    'name' => 'Pakistani Rupee',
    'symbol_native' => '₨',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'PKR',
    'name_plural' => 'Pakistani rupees',
  ),
  'PLN' => 
  array (
    'symbol' => 'zł',
    'name' => 'Polish Zloty',
    'symbol_native' => 'zł',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'PLN',
    'name_plural' => 'Polish zlotys',
  ),
  'PYG' => 
  array (
    'symbol' => '₲',
    'name' => 'Paraguayan Guarani',
    'symbol_native' => '₲',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'PYG',
    'name_plural' => 'Paraguayan guaranis',
  ),
  'QAR' => 
  array (
    'symbol' => 'QR',
    'name' => 'Qatari Rial',
    'symbol_native' => 'ر.ق.‏',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'QAR',
    'name_plural' => 'Qatari rials',
  ),
  'RON' => 
  array (
    'symbol' => 'RON',
    'name' => 'Romanian Leu',
    'symbol_native' => 'RON',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'RON',
    'name_plural' => 'Romanian lei',
  ),
  'RSD' => 
  array (
    'symbol' => 'din.',
    'name' => 'Serbian Dinar',
    'symbol_native' => 'дин.',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'RSD',
    'name_plural' => 'Serbian dinars',
  ),
  'RUB' => 
  array (
    'symbol' => 'RUB',
    'name' => 'Russian Ruble',
    'symbol_native' => '₽.',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'RUB',
    'name_plural' => 'Russian rubles',
  ),
  'RWF' => 
  array (
    'symbol' => 'RWF',
    'name' => 'Rwandan Franc',
    'symbol_native' => 'FR',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'RWF',
    'name_plural' => 'Rwandan francs',
  ),
  'SAR' => 
  array (
    'symbol' => 'SR',
    'name' => 'Saudi Riyal',
    'symbol_native' => 'ر.س.‏',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'SAR',
    'name_plural' => 'Saudi riyals',
  ),
  'SDG' => 
  array (
    'symbol' => 'SDG',
    'name' => 'Sudanese Pound',
    'symbol_native' => 'SDG',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'SDG',
    'name_plural' => 'Sudanese pounds',
  ),
  'SEK' => 
  array (
    'symbol' => 'Skr',
    'name' => 'Swedish Krona',
    'symbol_native' => 'kr',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'SEK',
    'name_plural' => 'Swedish kronor',
  ),
  'SGD' => 
  array (
    'symbol' => 'S$',
    'name' => 'Singapore Dollar',
    'symbol_native' => '$',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'SGD',
    'name_plural' => 'Singapore dollars',
  ),
  'SOS' => 
  array (
    'symbol' => 'Ssh',
    'name' => 'Somali Shilling',
    'symbol_native' => 'Ssh',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'SOS',
    'name_plural' => 'Somali shillings',
  ),
  'SYP' => 
  array (
    'symbol' => 'SY£',
    'name' => 'Syrian Pound',
    'symbol_native' => 'ل.س.‏',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'SYP',
    'name_plural' => 'Syrian pounds',
  ),
  'THB' => 
  array (
    'symbol' => '฿',
    'name' => 'Thai Baht',
    'symbol_native' => '฿',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'THB',
    'name_plural' => 'Thai baht',
  ),
  'TND' => 
  array (
    'symbol' => 'DT',
    'name' => 'Tunisian Dinar',
    'symbol_native' => 'د.ت.‏',
    'decimal_digits' => 3,
    'rounding' => 0,
    'code' => 'TND',
    'name_plural' => 'Tunisian dinars',
  ),
  'TOP' => 
  array (
    'symbol' => 'T$',
    'name' => 'Tongan Paʻanga',
    'symbol_native' => 'T$',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'TOP',
    'name_plural' => 'Tongan paʻanga',
  ),
  'TRY' => 
  array (
    'symbol' => 'TL',
    'name' => 'Turkish Lira',
    'symbol_native' => 'TL',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'TRY',
    'name_plural' => 'Turkish Lira',
  ),
  'TTD' => 
  array (
    'symbol' => 'TT$',
    'name' => 'Trinidad and Tobago Dollar',
    'symbol_native' => '$',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'TTD',
    'name_plural' => 'Trinidad and Tobago dollars',
  ),
  'TWD' => 
  array (
    'symbol' => 'NT$',
    'name' => 'New Taiwan Dollar',
    'symbol_native' => 'NT$',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'TWD',
    'name_plural' => 'New Taiwan dollars',
  ),
  'TZS' => 
  array (
    'symbol' => 'TSh',
    'name' => 'Tanzanian Shilling',
    'symbol_native' => 'TSh',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'TZS',
    'name_plural' => 'Tanzanian shillings',
  ),
  'UAH' => 
  array (
    'symbol' => '₴',
    'name' => 'Ukrainian Hryvnia',
    'symbol_native' => '₴',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'UAH',
    'name_plural' => 'Ukrainian hryvnias',
  ),
  'UGX' => 
  array (
    'symbol' => 'USh',
    'name' => 'Ugandan Shilling',
    'symbol_native' => 'USh',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'UGX',
    'name_plural' => 'Ugandan shillings',
  ),
  'UYU' => 
  array (
    'symbol' => '$U',
    'name' => 'Uruguayan Peso',
    'symbol_native' => '$',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'UYU',
    'name_plural' => 'Uruguayan pesos',
  ),
  'UZS' => 
  array (
    'symbol' => 'UZS',
    'name' => 'Uzbekistan Som',
    'symbol_native' => 'UZS',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'UZS',
    'name_plural' => 'Uzbekistan som',
  ),
  'VEF' => 
  array (
    'symbol' => 'Bs.F.',
    'name' => 'Venezuelan Bolívar',
    'symbol_native' => 'Bs.F.',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'VEF',
    'name_plural' => 'Venezuelan bolívars',
  ),
  'VND' => 
  array (
    'symbol' => '₫',
    'name' => 'Vietnamese Dong',
    'symbol_native' => '₫',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'VND',
    'name_plural' => 'Vietnamese dong',
  ),
  'XAF' => 
  array (
    'symbol' => 'FCFA',
    'name' => 'CFA Franc BEAC',
    'symbol_native' => 'FCFA',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'XAF',
    'name_plural' => 'CFA francs BEAC',
  ),
  'XOF' => 
  array (
    'symbol' => 'CFA',
    'name' => 'CFA Franc BCEAO',
    'symbol_native' => 'CFA',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'XOF',
    'name_plural' => 'CFA francs BCEAO',
  ),
  'YER' => 
  array (
    'symbol' => 'YR',
    'name' => 'Yemeni Rial',
    'symbol_native' => 'ر.ي.‏',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'YER',
    'name_plural' => 'Yemeni rials',
  ),
  'ZAR' => 
  array (
    'symbol' => 'R',
    'name' => 'South African Rand',
    'symbol_native' => 'R',
    'decimal_digits' => 2,
    'rounding' => 0,
    'code' => 'ZAR',
    'name_plural' => 'South African rand',
  ),
  'ZMK' => 
  array (
    'symbol' => 'ZK',
    'name' => 'Zambian Kwacha',
    'symbol_native' => 'ZK',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'ZMK',
    'name_plural' => 'Zambian kwachas',
  ),
  'ZWL' => 
  array (
    'symbol' => 'ZWL$',
    'name' => 'Zimbabwean Dollar',
    'symbol_native' => 'ZWL$',
    'decimal_digits' => 0,
    'rounding' => 0,
    'code' => 'ZWL',
    'name_plural' => 'Zimbabwean Dollar',
  ),
);



  update_option ('clw_currency', serialize($clw_currency));
  
}
register_activation_hook (__FILE__, 'my_plugin_activate');


function get_currency_clw_for_woocommerce(){
	$data = unserialize(get_option('clw_currency'));
	foreach ($data as $key => $value) {
	?>
	 	<option value="<?php echo $key?>">[<?php echo $key?>] - <?php echo $value['name']?></option>	
	<?php
	}
}