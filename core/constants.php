<?php
$s = DIRECTORY_SEPARATOR;
define('ROOT', dirname(__DIR__, 1) . $s);
define('CSS', "{$s}public{$s}css{$s}");
define('JS', "{$s}public{$s}js{$s}");
define('IMG', "{$s}public{$s}images{$s}");
define('ICONS', dirname(__DIR__, 1) . "{$s}public{$s}images{$s}icons{$s}");
define('INC', dirname(__DIR__, 1) . $s . "inc" . $s);
define('LAYOUT', dirname(__DIR__, 1) . $s . "layouts" . $s);
define('PAGE', dirname(__DIR__, 1) . $s . "pages" . $s);

$conf = [
    'company' => 'Балконная дверь',
    'city' => 'Вологда',

    'email' => 'Paha12@icloud.com',

    'phone' => '+79535156799',

    'tg_href' => "https://t.me/PavelSelyakov",
    'tg_token' => $_ENV['BALCONY_TOKEN'],
    'tg_username' => '@volbalkonBot',

    'work_from' => '9:00',
    'work_to' => '19:00'
];
$data = [
    'domain' => '/balcony',
    'address' => 'г. Вологда, ул. Октябрьская, 27',
    'email_href' => "mailto:{$conf['email']}",
    'phone_href' => "tel:{$conf['phone']}",

    'js' => '/public/src/balcony/js/',
    'css' => '/public/src/balcony/css/',
    'images' => '/public/src/balcony/images/',
    'slider' => '/public/src/balcony/images/slider/',

    'seo_keywords' => "Компания «{$conf['company']}», балконы и лоджии ремонт под ключ",
    'seo_description' => "Компания «{$conf['company']}» занимается оборудованием балконов и лоджий в Вологде! Компания предоставляет сервисные услуги по ремонту и обустройству балкново и лоджий в квартирах и частных домах под ключ: тел.{$conf['phone']}.",
    'seo_title' => "Балконы и лоджии цены под ключ в Вологде | «{$conf['company']}»",

];

define('CONF', $conf);
define('DATA', $data);