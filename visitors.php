<?php

header('Access-Control-Allow-Origin: /');
date_default_timezone_set('AMERICA/Edmonton');

if(empty($_SERVER['CONTENT_TYPE'])) {
    $type = "application/x-www-form-urlencoded";
    $_SERVER['CONTENT_TYPE'] = $type;
}
$visitor = json_decode(file_get_contents("php://input"),true);

if(!empty($visitor['visitor'])){

    $visitor_browser= strip_tags(trim($visitor['visitor']['browser']));
    $visitor_languages=implode(" ", $visitor['visitor']['languages']);
    $visitor_screenWidth =strip_tags(trim($visitor['visitor']['screenWidth']));
    $visitor_city=strip_tags(trim($visitor['visitor']['city']));
    $visitor_continent=strip_tags(trim($visitor['visitor']['continent']));
    $visitor_country=strip_tags(trim($visitor['visitor']['country']));
    $visitor_ip=strip_tags(trim($visitor['visitor']['ip']));
    $visitor_province=strip_tags(trim($visitor['visitor']['province']));

    $dbConnection = new mysqli('serwer2423046.home.pl:3380', '38223950_portfolio', 'Malma2033!', '38223950_portfolio');

    if ($dbConnection -> connect_errno) {
        echo "Failed to connect to MySQL: " . $dbConnection -> connect_error;
        exit();
    }


    $stmt = $dbConnection -> prepare("INSERT INTO visitors ( browser, languages, screenWidth, city, country, continent, ip, province, date) VALUES (?, ?, ?, ?,?,?,?,?,?)");
    $stmt -> bind_param("ssissssss", $browser, $languages, $screenWidth, $city, $country, $continent, $ip, $province,$date);
    $browser= $visitor_browser;
    $languages=$visitor_languages;
    $screenWidth = $visitor_screenWidth;
    $city=$visitor_city;
    $country=$visitor_country;
    $continent=$visitor_continent;
    $ip=$visitor_ip;
    $province=$visitor_province;
    $date=date("y-m-d, h:i:a");

    $stmt -> execute();
    $stmt -> close();
    $dbConnection -> close();
    echo http_response_code(200);
}
