<?php
defined('safe_access') or die('Restricted access!');

// Kint - a modern and powerful PHP debugging helper
// http://raveren.github.io/kint/
// usage: d( $variable );
require_once dirname(__FILE__).'/../helpers/kint/Kint.class.php';

// PHP library that generates fake data
require_once dirname(__FILE__).'/../helpers/faker/autoload.php';
$faker = Faker\Factory::create();

// Parse, validate, manipulate, and display dates in PHP w/ i18n support. Inspired by moment.js
require_once dirname(__FILE__).'/../helpers/moment/Moment.php';
require_once dirname(__FILE__).'/../helpers/moment/MomentLocale.php';
require_once dirname(__FILE__).'/../helpers/moment/MomentFromVo.php';
require_once dirname(__FILE__).'/../helpers/moment/MomentPeriodVo.php';

// variables
$app_version = 'v2.2.0';
$bower_url = 'bower_components';
$kendo_url = 'bower_components/kendo-ui/js';

$tags = array( 'advertising', 'ajax', 'business', 'company', 'creative', 'css', 'design', 'designer', 'developer', 'e-commerce', 'finance', 'graphic', 'home', 'internet', 'javascript', 'marketing', 'mysql', 'online', 'photoshop', 'service', 'software', 'webdesign', 'website' );
$letters = range('a', 'z');
$countries = array("AF" => "Afghanistan (‫افغانستان‬‎)", "AX" => "Åland Islands (Åland)", "AL" => "Albania (Shqipëri)", "DZ" => "Algeria (‫الجزائر‬‎)", "AS" => "American Samoa", "AD" => "Andorra", "AO" => "Angola", "AI" => "Anguilla", "AQ" => "Antarctica", "AG" => "Antigua and Barbuda", "AR" => "Argentina", "AM" => "Armenia (Հայաստան)", "AW" => "Aruba", "AC" => "Ascension Island", "AU" => "Australia", "AT" => "Austria (Österreich)", "AZ" => "Azerbai (Azərbaycan)", "BS" => "Bahamas", "BH" => "Bahrain (‫البحرين‬‎)", "BD" => "Bangladesh (বাংলাদেশ)", "BB" => "Barbados", "BY" => "Belarus (Беларусь)", "BE" => "Belgium (België)", "BZ" => "Belize", "BJ" => "Benin (Bénin)", "BM" => "Bermuda", "BT" => "Bhutan (འབྲུག)", "BO" => "Bolivia", "BA" => "Bosnia and Herzegovina (Босна и Херцеговина)", "BW" => "Botswana", "BV" => "Bouvet Island", "BR" => "Brazil (Brasil)", "IO" => "British Indian Ocean Territory", "VG" => "British Virgin Islands", "BN" => "Brunei", "BG" => "Bulgaria (България)", "BF" => "Burkina Faso", "BI" => "Burundi (Uburundi)", "KH" => "Cambodia (កម្ពុជា)", "CM" => "Cameroon (Cameroun)", "CA" => "Canada", "IC" => "Canary Islands (islas Canarias)", "CV" => "Cape Verde (Kabu Verdi)", "BQ" => "Caribbean Netherlands", "KY" => "Cayman Islands", "CF" => "Central African Republic (République centrafricaine)", "EA" => "Ceuta and Melilla (Ceuta y Melilla)", "TD" => "Chad (Tchad)", "CL" => "Chile", "CN" => "China (中国)", "CX" => "Christmas Island", "CP" => "Clipperton Island", "CC" => "Cocos (Keeling) Islands (Kepulauan Cocos (Keeling))", "CO" => "Colombia", "KM" => "Comoros (‫جزر القمر‬‎)", "CD" => "Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)", "CG" => "Congo (Republic) (Congo-Brazzaville)", "CK" => "Cook Islands", "CR" => "Costa Rica", "CI" => "Côte d’Ivoire", "HR" => "Croatia (Hrvatska)", "CU" => "Cuba", "CW" => "Curaçao", "CY" => "Cyprus (Κύπρος)", "CZ" => "Czech Republic (Česká republika)", "DK" => "Denmark (Danmark)", "DG" => "Diego Garcia", "DJ" => "Djibouti", "DM" => "Dominica", "DO" => "Dominican Republic (República Dominicana)", "EC" => "Ecuador", "EG" => "Egypt (‫مصر‬‎)", "SV" => "El Salvador", "GQ" => "Equatorial Guinea (Guinea Ecuatorial)", "ER" => "Eritrea", "EE" => "Estonia (Eesti)", "ET" => "Ethiopia", "FK" => "Falkland Islands (Islas Malvinas)", "FO" => "Faroe Islands (Føroyar)", "FJ" => "Fiji", "FI" => "Finland (Suomi)", "FR" => "France", "GF" => "French Guiana (Guyane française)", "PF" => "French Polynesia (Polynésie française)", "TF" => "French Southern Territories (Terres australes françaises)", "GA" => "Gabon", "GM" => "Gambia", "GE" => "Georgia (საქართველო)", "DE" => "Germany (Deutschland)", "GH" => "Ghana (Gaana)", "GI" => "Gibraltar", "GR" => "Greece (Ελλάδα)", "GL" => "Greenland (Kalaallit Nunaat)", "GD" => "Grenada", "GP" => "Guadeloupe", "GU" => "Guam", "GT" => "Guatemala", "GG" => "Guernsey", "GN" => "Guinea (Guinée)", "GW" => "Guinea-Bissau (Guiné Bissau)", "GY" => "Guyana", "HT" => "Haiti", "HM" => "Heard & McDonald Islands", "HN" => "Honduras", "HK" => "Hong Kong (香港)", "HU" => "Hungary (Magyarország)", "IS" => "Iceland (Ísland)", "IN" => "India (भारत)", "ID" => "Indonesia", "IR" => "Iran (‫ایران‬‎)", "IQ" => "Iraq (‫العراق‬‎)", "IE" => "Ireland", "IM" => "Isle of Man", "IL" => "Israel (‫ישראל‬‎)", "IT" => "Italy (Italia)", "JM" => "Jamaica", "JP" => "Japan (日本)", "JE" => "Jersey", "JO" => "Jordan (‫الأردن‬‎)", "KZ" => "Kazakhstan (Казахстан)", "KE" => "Kenya", "KI" => "Kiribati", "XK" => "Kosovo (Kosovë)", "KW" => "Kuwait (‫الكويت‬‎)", "KG" => "Kyrgyzstan (Кыргызстан)", "LA" => "Laos (ລາວ)", "LV" => "Latvia (Latvija)", "LB" => "Lebanon (‫لبنان‬‎)", "LS" => "Lesotho", "LR" => "Liberia", "LY" => "Libya (‫ليبيا‬‎)", "LI" => "Liechtenstein", "LT" => "Lithuania (Lietuva)", "LU" => "Luxembourg", "MO" => "Macau (澳門)", "MK" => "Macedonia (FYROM) (Македонија)", "MG" => "Madagascar (Madagasikara)", "MW" => "Malawi", "MY" => "Malaysia", "MV" => "Maldives", "ML" => "Mali", "MT" => "Malta", "MH" => "Marshall Islands", "MQ" => "Martinique", "MR" => "Mauritania (‫موريتانيا‬‎)", "MU" => "Mauritius (Moris)", "YT" => "Mayotte", "MX" => "Mexico (México)", "FM" => "Micronesia", "MD" => "Moldova (Republica Moldova)", "MC" => "Monaco", "MN" => "Mongolia (Монгол)", "ME" => "Montenegro (Crna Gora)", "MS" => "Montserrat", "MA" => "Morocco (‫المغرب‬‎)", "MZ" => "Mozambique (Moçambique)", "MM" => "Myanmar (Burma)", "NA" => "Namibia (Namibië)", "NR" => "Nauru", "NP" => "Nepal (नेपाल)", "NL" => "Netherlands (Nederland)", "NC" => "New Caledonia (Nouvelle-Calédonie)", "NZ" => "New Zealand", "NI" => "Nicaragua", "NE" => "Niger (Nijar)", "NG" => "Nigeria", "NU" => "Niue", "NF" => "Norfolk Island", "MP" => "Northern Mariana Islands", "KP" => "North Korea (조선 민주주의 인민 공화국)", "NO" => "Norway (Norge)", "OM" => "Oman (‫عُمان‬‎)", "PK" => "Pakistan (‫پاکستان‬‎)", "PW" => "Palau", "PS" => "Palestine (‫فلسطين‬‎)", "PA" => "Panama (Panamá)", "PG" => "Papua New Guinea", "PY" => "Paraguay", "PE" => "Peru (Perú)", "PH" => "Philippines", "PN" => "Pitcairn Islands", "PL" => "Poland (Polska)", "PT" => "Portugal", "PR" => "Puerto Rico", "QA" => "Qatar (‫قطر‬‎)", "RE" => "Réunion (La Réunion)", "RO" => "Romania (România)", "RU" => "Russia (Россия)", "RW" => "Rwanda", "BL" => "Saint Barthélemy (Saint-Barthélemy)", "SH" => "Saint Helena", "KN" => "Saint Kitts and Nevis", "LC" => "Saint Lucia", "MF" => "Saint Martin (Saint-Martin (partie française))", "PM" => "Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)", "WS" => "Samoa", "SM" => "San Marino", "ST" => "São Tomé and Príncipe (São Tomé e Príncipe)", "SA" => "Saudi Arabia (‫المملكة العربية السعودية‬‎)", "SN" => "Senegal (Sénégal)", "RS" => "Serbia (Србија)", "SC" => "Seychelles", "SL" => "Sierra Leone", "SG" => "Singapore", "SX" => "Sint Maarten", "SK" => "Slovakia (Slovensko)", "SI" => "Slovenia (Slovenija)", "SB" => "Solomon Islands", "SO" => "Somalia (Soomaaliya)", "ZA" => "South Africa", "GS" => "South Georgia & South Sandwich Islands", "KR" => "South Korea (대한민국)", "SS" => "South Sudan (‫جنوب السودان‬‎)", "ES" => "Spain (España)", "LK" => "Sri Lanka (ශ්‍රී ලංකාව)", "VC" => "St. Vincent & Grenadines", "SD" => "Sudan (‫السودان‬‎)", "SR" => "Suriname", "SJ" => "Svalbard and Jan Mayen (Svalbard og Jan Mayen)", "SZ" => "Swaziland", "SE" => "Sweden (Sverige)", "CH" => "Switzerland (Schweiz)", "SY" => "Syria (‫سوريا‬‎)", "TW" => "Taiwan (台灣)", "TJ" => "Tajikistan", "TZ" => "Tanzania", "TH" => "Thailand (ไทย)", "TL" => "Timor-Leste", "TG" => "Togo", "TK" => "Tokelau", "TO" => "Tonga", "TT" => "Trinidad and Tobago", "TA" => "Tristan da Cunha", "TN" => "Tunisia (‫تونس‬‎)", "TR" => "Turkey (Türkiye)", "TM" => "Turkmenistan", "TC" => "Turks and Caicos Islands", "TV" => "Tuvalu", "UM" => "U.S. Outlying Islands", "VI" => "U.S. Virgin Islands", "UG" => "Uganda", "UA" => "Ukraine (Україна)", "AE" => "United Arab Emirates (‫الإمارات العربية المتحدة‬‎)", "GB" => "United Kingdom", "US" => "United States", "UY" => "Uruguay", "UZ" => "Uzbekistan (Oʻzbekiston)", "VU" => "Vanuatu", "VA" => "Vatican City (Città del Vaticano)", "VE" => "Venezuela", "VN" => "Vietnam (Việt Nam)", "WF" => "Wallis and Futuna", "EH" => "Western Sahara (‫الصحراء الغربية‬‎)", "YE" => "Yemen (‫اليمن‬‎)", "ZM" => "Zambia", "ZW" => "Zimbabwe" );

$img_path = 'assets/img';

// check if files are generated to /desc folder
$dist_min = isset($_GET["generate"]) ? '.min' : '';

$common_styles = '
    <!-- uikit -->
    <link rel="stylesheet" href="'. $bower_url .'/uikit/css/uikit.almost-flat'.$dist_min.'.css" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="assets/icons/flags/flags'.$dist_min.'.css" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="assets/css/main'.$dist_min.'.css" media="all">
';

if(isset($_GET['page'])) {
    $sPage = $_GET['page'];
} else {
    $sPage = 'index';
}

// Dashboard -----------------------------------------------------------
if ($sPage == "index") {
    $includePage = 'index.php';
    $breacrumbs = '
    ';
    $css = '
        <!-- weather icons -->
        <link rel="stylesheet" href="'. $bower_url .'/weather-icons/css/weather-icons'.$dist_min.'.css" media="all">
        <!-- metrics graphics (charts) -->
        <link rel="stylesheet" href="'.$bower_url.'/metrics-graphics/dist/metricsgraphics.css">
        <!-- chartist -->
        <link rel="stylesheet" href="'.$bower_url.'/chartist/dist/chartist.min.css">
    ';
    $scripts = '
        <!-- d3 -->
        <script src="'.$bower_url.'/d3/d3'.$dist_min.'.js"></script>
        <!-- metrics graphics (charts) -->
        <script src="'.$bower_url.'/metrics-graphics/dist/metricsgraphics'.$dist_min.'.js"></script>
        <!-- chartist (charts) -->
        <script src="'.$bower_url.'/chartist/dist/chartist'.$dist_min.'.js"></script>
        <!-- maplace (google maps) -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="'.$bower_url.'/maplace.js/src/maplace-0.1.3.js"></script>
        <!-- peity (small charts) -->
        <script src="'.$bower_url.'/peity/jquery.peity'.$dist_min.'.js"></script>
        <!-- easy-pie-chart (circular statistics) -->
        <script src="'.$bower_url.'/jquery.easy-pie-chart/dist/jquery.easypiechart'.$dist_min.'.js"></script>
        <!-- countUp -->
        <script src="'.$bower_url.'/countUp.js/countUp'.$dist_min.'.js"></script>
        <!-- handlebars.js -->
        <script src="'.$bower_url.'/handlebars/handlebars'.$dist_min.'.js"></script>
        <script src="assets/js/custom/handlebars_helpers'.$dist_min.'.js"></script>
        <!-- CLNDR -->
        <script src="'.$bower_url.'/clndr/src/clndr.js"></script>
        <!-- fitvids -->
        <script src="'.$bower_url.'/fitvids/jquery.fitvids.js"></script>

        <!--  dashbord functions -->
        <script src="assets/js/pages/dashboard'.$dist_min.'.js"></script>
    ';
}

// Forms -----------------------------------------------------------
if(substr($sPage, 0, 5 ) === "forms") {
    $forms_sPage = explode("_", $sPage, 2);

    $includePage = 'forms_'. $forms_sPage[1] . '.php';
    if($forms_sPage[1] == 'advanced') {
    $css = '
    <!-- htmleditor (codeMirror) -->
    <link rel="stylesheet" href="'.$bower_url.'/codemirror/lib/codemirror.css">
    ';
    $scripts = '
    <!-- ionrangeslider -->
    <script src="'.$bower_url.'/ion.rangeslider/js/ion.rangeSlider'.$dist_min.'.js"></script>
    <!-- htmleditor (codeMirror) -->
    <script src="assets/js/uikit_htmleditor_custom'.$dist_min.'.js"></script>
    <!-- inputmask-->
    <script src="'.$bower_url.'/jquery.inputmask/dist/jquery.inputmask.bundle.js"></script>

    <!--  forms advanced functions -->
    <script src="assets/js/pages/forms_advanced'.$dist_min.'.js"></script>
    ';
    }
    if($forms_sPage[1] == 'file_upload') {
    $scripts = '
    <!--  forms_file_upload functions -->
    <script src="assets/js/pages/forms_file_upload'.$dist_min.'.js"></script>
    ';
    }
    if($forms_sPage[1] == 'validation') {
    $scripts = '
    <!-- parsley (validation) -->
    <script>
    // load parsley config (altair_admin_common.js)
    altair_forms.parsley_validation_config();
    </script>
    <script src="'.$bower_url.'/parsleyjs/dist/parsley'.$dist_min.'.js"></script>

    <!--  forms validation functions -->
    <script src="assets/js/pages/forms_validation'.$dist_min.'.js"></script>
    ';
    }
    if($forms_sPage[1] == 'wizard') {
    $scripts = '
    <!-- parsley (validation) -->
    <script>
    // load parsley config (altair_admin_common.js)
    altair_forms.parsley_validation_config();
    // load extra validators
    altair_forms.parsley_extra_validators();
    </script>
    <script src="'.$bower_url.'/parsleyjs/dist/parsley'.$dist_min.'.js"></script>
    <!-- jquery steps -->
    <script src="assets/js/custom/wizard_steps'.$dist_min.'.js"></script>

    <!--  forms wizard functions -->
    <script src="assets/js/pages/forms_wizard'.$dist_min.'.js"></script>
    ';
    }
    if($forms_sPage[1] == 'wysiwyg_ckeditor') {
    $scripts = '
    <!-- ckeditor -->
    <script src="'.$bower_url.'/ckeditor/ckeditor.js"></script>
    <script src="'.$bower_url.'/ckeditor/adapters/jquery.js"></script>

    <!--  wysiwyg editors functions -->
    <script src="assets/js/pages/forms_wysiwyg'.$dist_min.'.js"></script>
    ';
    }
    if($forms_sPage[1] == 'wysiwyg_tinymce') {
    $scripts = '
    <!-- tinymce -->
    <script src="'.$bower_url.'/tinymce/tinymce.min.js"></script>

    <!--  wysiwyg editors functions -->
    <script src="assets/js/pages/forms_wysiwyg'.$dist_min.'.js"></script>
    ';
    }
}

// Layout -----------------------------------------------------------
if(substr($sPage, 0, 6 ) === "layout") {
    $layout_sPage = explode("_", $sPage, 2);
    $includePage = 'layout_'. $layout_sPage[1] . '.php';
    if($layout_sPage[1] == 'header_full') {
    $body_class = 'header_full';
    }
}

// KendoUI -----------------------------------------------------------
if(substr($sPage, 0, 7 ) === "kendoui") {
    $kendoui_sPage = explode("_", $sPage, 2);

    $includePage = 'kendoui_'. $kendoui_sPage[1] . '.php';
    $css = '
    <!-- kendo UI -->
    <link rel="stylesheet" href="bower_components/kendo-ui/styles/kendo.common-material.min.css"/>
    <link rel="stylesheet" href="bower_components/kendo-ui/styles/kendo.material.min.css"/>
    ';
    $scripts = '
    <!-- kendo UI -->
    <script src="assets/js/kendoui_custom'.$dist_min.'.js"></script>

    <!--  kendoui functions -->
    <script src="assets/js/pages/kendoui'.$dist_min.'.js"></script>
    ';
}

// Components -----------------------------------------------------------
if(substr($sPage, 0, 10 ) === "components") {
    $components_sPage = explode("_", $sPage, 2);

    $includePage = 'components_'. $components_sPage[1] . '.php';

    if($components_sPage[1] == 'nestable') {
    $scripts = '

    <!--  nestable component functions -->
    <script src="assets/js/pages/components_nestable'.$dist_min.'.js"></script>
    ';
    }
    if($components_sPage[1] == 'notifications') {
    $scripts = '

    <!--  notifications functions -->
    <script src="assets/js/pages/components_notifications'.$dist_min.'.js"></script>
    ';
    }
    if($components_sPage[1] == 'preloaders') {
    $scripts = '

    <!--  preloaders functions -->
    <script src="assets/js/pages/components_preloaders'.$dist_min.'.js"></script>
    ';
    }
    if($components_sPage[1] == 'sortable') {
    $scripts = '
    <!-- dragula.js -->
    <script src="bower_components/dragula.js/dist/dragula'.$dist_min.'.js"></script>

    <!--  sortable functions -->
    <script src="assets/js/pages/components_sortable'.$dist_min.'.js"></script>
    ';
    }
}

// Components -----------------------------------------------------------
if(substr($sPage, 0, 9 ) === "ecommerce") {
    $ecommerce_sPage = explode("_", $sPage, 2);

    $includePage = 'ecommerce_'. $ecommerce_sPage[1] . '.php';

    if($ecommerce_sPage[1] == 'product_edit') {
    $scripts = '

    <!--  product edit functions -->
    <script src="assets/js/pages/ecommerce_product_edit'.$dist_min.'.js"></script>
    ';
    }
}

// Plugins -----------------------------------------------------------
if(substr($sPage, 0, 7 ) === "plugins") {
    $plugins_sPage = explode("_", $sPage, 2);

    $includePage = 'plugins_'. $plugins_sPage[1] . '.php';

    if($plugins_sPage[1] == 'charts') {
    $css = '
    <!-- metrics graphics (charts) -->
    <link rel="stylesheet" href="'.$bower_url.'/metrics-graphics/dist/metricsgraphics.css">
    <!-- c3.js (charts) -->
    <link rel="stylesheet" href="'.$bower_url.'/c3js-chart/c3'.$dist_min.'.css">
    <!-- chartist -->
    <link rel="stylesheet" href="'.$bower_url.'/chartist/dist/chartist.min.css">
    ';
    $scripts = '
    <!-- d3 -->
    <script src="'.$bower_url.'/d3/d3'.$dist_min.'.js"></script>
    <!-- metrics graphics (charts) -->
    <script src="'.$bower_url.'/metrics-graphics/dist/metricsgraphics'.$dist_min.'.js"></script>
    <!-- c3.js (charts) -->
    <script src="'.$bower_url.'/c3js-chart/c3'.$dist_min.'.js"></script>
    <!-- chartist -->
    <script src="'.$bower_url.'/chartist/dist/chartist'.$dist_min.'.js"></script>

    <!--  charts functions -->
    <script src="assets/js/pages/plugins_charts'.$dist_min.'.js"></script>
    ';
    }
    if($plugins_sPage[1] == 'datatables') {
    $scripts = '
    <!-- datatables -->
    <script src="'.$bower_url.'/datatables/media/js/jquery.dataTables'.$dist_min.'.js"></script>
    <!-- datatables colVis-->
    <script src="'.$bower_url.'/datatables-colvis/js/dataTables.colVis.js"></script>
    <!-- datatables tableTools-->
    <script src="'.$bower_url.'/datatables-tabletools/js/dataTables.tableTools.js"></script>
    <!-- datatables custom integration -->
    <script src="assets/js/custom/datatables_uikit'.$dist_min.'.js"></script>

    <!--  datatables functions -->
    <script src="assets/js/pages/plugins_datatables'.$dist_min.'.js"></script>
    ';
    }
    if($plugins_sPage[1] == 'calendar') {
    $css = '
    <!-- fullcalendar -->
    <link rel="stylesheet" href="'.$bower_url.'/fullcalendar/dist/fullcalendar'.$dist_min.'.css">
    ';
    $scripts = '
    <!-- fullcalendar -->
    <script src="'.$bower_url.'/fullcalendar/dist/fullcalendar'.$dist_min.'.js"></script>

    <!--  calendar functions -->
    <script src="assets/js/pages/plugins_fullcalendar'.$dist_min.'.js"></script>
    ';
    }
    if($plugins_sPage[1] == 'code_editor') {
    $body_class = 'header_double_height';
    $css = '
    <!-- codeMirror -->
    <link rel="stylesheet" href="'.$bower_url.'/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="assets/css/codemirror_themes.min.css">
    ';
    $scripts = '
    <!-- codeMirror -->
    <script src="'.$bower_url.'/codemirror/lib/codemirror.js"></script>
    <script src="assets/js/custom/codemirror_fullscreen'.$dist_min.'.js"></script>
    <script src="'.$bower_url.'/codemirror/addon/edit/matchtags.js"></script>
    <script src="'.$bower_url.'/codemirror/addon/edit/matchbrackets.js"></script>
    <script src="'.$bower_url.'/codemirror/addon/fold/xml-fold.js"></script>
    <script src="'.$bower_url.'/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script src="'.$bower_url.'/codemirror/mode/xml/xml.js"></script>
    <script src="'.$bower_url.'/codemirror/mode/php/php.js"></script>
    <script src="'.$bower_url.'/codemirror/mode/clike/clike.js"></script>
    <script src="'.$bower_url.'/codemirror/mode/javascript/javascript.js"></script>

    <!--  code editor functions -->
    <script src="assets/js/pages/plugins_code_editor'.$dist_min.'.js"></script>
    ';
    }
    if($plugins_sPage[1] == 'crud_table') {
    $scripts = '
    <!-- JQuery-UI -->
    <link rel="stylesheet" href="assets/skins/jquery-ui/material/jquery-ui'.$dist_min.'.css">
    <script src="bower_components/jquery-ui/jquery-ui'.$dist_min.'.js"></script>
    <!-- jTable -->
    <link rel="stylesheet" href="assets/skins/jtable/jtable'.$dist_min.'.css">
    <script src="bower_components/jtable/lib/jquery.jtable'.$dist_min.'.js"></script>

    <!--  diff functions -->
    <script src="assets/js/pages/plugins_crud_table'.$dist_min.'.js"></script>
    ';
    }
    if($plugins_sPage[1] == 'diff') {
    $scripts = '
    <!-- jsdiff -->
    <script src="bower_components/jsdiff/diff'.$dist_min.'.js"></script>

    <!--  diff functions -->
    <script src="assets/js/pages/plugins_diff'.$dist_min.'.js"></script>
    ';
    }
    if($plugins_sPage[1] == 'gantt_chart') {
    $scripts = '
    <!-- jquery ui -->
    <script src="'.$bower_url.'/jquery-ui/ui/minified/core.min.js"></script>
    <script src="'.$bower_url.'/jquery-ui/ui/minified/widget.min.js"></script>
    <script src="'.$bower_url.'/jquery-ui/ui/minified/mouse.min.js"></script>
    <script src="'.$bower_url.'/jquery-ui/ui/minified/resizable.min.js"></script>
    <script src="'.$bower_url.'/jquery-ui/ui/minified/draggable.min.js"></script>

    <!-- gantt_chart -->
    <script src="assets/js/custom/gantt_chart'.$dist_min.'.js"></script>

    <!--  gantt chart functions -->
    <script src="assets/js/pages/plugins_gantt_chart'.$dist_min.'.js"></script>
    ';
    }
    if($plugins_sPage[1] == 'google_maps') {
    $scripts = '
    <!-- maplace (google maps) -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="'.$bower_url.'/maplace.js/src/maplace-0.1.3.js"></script>

    <!--  google maps functions -->
    <script src="assets/js/pages/plugins_google_maps'.$dist_min.'.js"></script>
    ';
    }
    if($plugins_sPage[1] == 'tablesorter') {
    $scripts = '
    <!-- tablesorter -->
    <script src="'.$bower_url.'/tablesorter/dist/js/jquery.tablesorter'.$dist_min.'.js"></script>
    <script src="'.$bower_url.'/tablesorter/dist/js/jquery.tablesorter.widgets.min.js"></script>
    <script src="'.$bower_url.'/tablesorter/dist/js/widgets/widget-alignChar.min.js"></script>
    <script src="'.$bower_url.'/tablesorter/dist/js/extras/jquery.tablesorter.pager.min.js"></script>

    <!--  tablesorter functions -->
    <script src="assets/js/pages/plugins_tablesorter'.$dist_min.'.js"></script>
    ';
    }
    if($plugins_sPage[1] == 'vector_maps') {
    $scripts = '
    <!-- mapael (vector maps) -->
    <script src="'.$bower_url.'/raphael/raphael-min.js"></script>
    <script src="'.$bower_url.'/jquery-mapael/js/jquery.mapael.js"></script>
    <script src="'.$bower_url.'/jquery-mapael/js/maps/world_countries.js"></script>
    <script src="'.$bower_url.'/jquery-mapael/js/maps/usa_states.js"></script>

    <!--  vector maps functions -->
    <script src="assets/js/pages/plugins_vector_maps'.$dist_min.'.js"></script>
    ';
    }
}

// Pages -----------------------------------------------------------
if(substr($sPage, 0, 4 ) === "page") {
    $pages_sPage = explode("_", $sPage, 2);
    $includePage = 'page_'. $pages_sPage[1] . '.php';

    if ($pages_sPage[1] == "mailbox") {
    $scripts = '

    <!--  mailbox functions -->
    <script src="assets/js/pages/page_mailbox'.$dist_min.'.js"></script>
    ';
    }

    if ($pages_sPage[1] == "notes") {
    $body_class = 'header_double_height';
    $scripts = '

    <!--  notes functions -->
    <script src="assets/js/pages/page_notes'.$dist_min.'.js"></script>
    ';
    }

    if ($pages_sPage[1] == "snippets") {
    $css = '
    <!-- htmleditor (codeMirror) -->
    <link rel="stylesheet" href="'.$bower_url.'/codemirror/lib/codemirror.css">
    ';
    $scripts = '
    <!-- htmleditor (codeMirror) -->
    <script src="assets/js/uikit_htmleditor_custom'.$dist_min.'.js"></script>

    <!--  snippets functions -->
    <script src="assets/js/pages/page_snippets'.$dist_min.'.js"></script>
    ';
    }

    if($pages_sPage[1] == 'contact_list') {
    $scripts = '

    <!--  contact list functions -->
    <script src="assets/js/pages/page_contact_list'.$dist_min.'.js"></script>
    ';
    }
    if($pages_sPage[1] == 'help') {
    $body_class = 'header_double_height';
    $scripts = '

    <!--  help/faq functions -->
    <script src="assets/js/pages/page_help'.$dist_min.'.js"></script>
    ';
    }
    if($pages_sPage[1] == 'invoices') {
    $body_class = 'header_double_height';
    $scripts = '
    <!-- handlebars.js -->
    <script src="'.$bower_url.'/handlebars/handlebars'.$dist_min.'.js"></script>
    <script src="assets/js/custom/handlebars_helpers'.$dist_min.'.js"></script>

    <!--  invoices functions -->
    <script src="assets/js/pages/page_invoices'.$dist_min.'.js"></script>
    ';
    }
    if($pages_sPage[1] == 'settings') {
    $scripts = '
    <!--  settings functions -->
    <script src="assets/js/pages/page_settings'.$dist_min.'.js"></script>
    ';
    }
    if($pages_sPage[1] == 'user_edit') {
    $scripts = '
    <!-- file input -->
    <script src="assets/js/custom/uikit_fileinput'.$dist_min.'.js"></script>

    <!--  user edit functions -->
    <script src="assets/js/pages/page_user_edit'.$dist_min.'.js"></script>
    ';
    }
    if($pages_sPage[1] == 'todo') {
    $body_class = 'header_double_height';
    $scripts = '
    <!--  todo functions -->
    <script src="assets/js/pages/page_todo'.$dist_min.'.js"></script>
    ';
    }
    if ($pages_sPage[1] == "scrum_board") {
    $body_class = 'uk-height-1-1';
    $scripts = '
    <!-- dragula.js -->
    <script src="bower_components/dragula.js/dist/dragula'.$dist_min.'.js"></script>

    <!--  scrum board functions -->
    <script src="assets/js/pages/page_scrum_board'.$dist_min.'.js"></script>
    ';
    }
    if ($pages_sPage[1] == "chat") {
    $body_class = 'header_double_height';
    $scripts = '

    <!--  chat functions -->
    <script src="assets/js/pages/page_chat'.$dist_min.'.js"></script>
    ';
    }
    if($pages_sPage[1] == 'issues_list') {
    $scripts = '
    <!-- tablesorter -->
    <script src="'.$bower_url.'/tablesorter/dist/js/jquery.tablesorter'.$dist_min.'.js"></script>
    <script src="'.$bower_url.'/tablesorter/dist/js/jquery.tablesorter.widgets.min.js"></script>
    <script src="'.$bower_url.'/tablesorter/dist/js/widgets/widget-alignChar.min.js"></script>
    <script src="'.$bower_url.'/tablesorter/dist/js/extras/jquery.tablesorter.pager.min.js"></script>

    <!--  issues list functions -->
    <script src="assets/js/pages/pages_issues'.$dist_min.'.js"></script>
    ';
    }
}

// Error Pages
if(substr($sPage, 0, 5 ) === "error") {
    $pages_sPage = explode("_", $sPage, 2);
    $includePage = 'page_'. $pages_sPage[1] . '.php';
}