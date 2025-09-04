<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Request-Headers: content-type,x-requested-with");
header("Content-Type: application/json");
// $getBookInformation = file_get_contents('https://www.kitapyurdu.com/kitap/sema-terapi/140891.html');

require "../vendor/autoload.php";

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

$client = new HttpBrowser(HttpClient::create());

$crawler = $client->request('GET', "https://www.kitapyurdu.com/kitap/sema-terapi/140891.html");

$bookName = "";

$crawler->filter(".pr_header__heading")->each(function ($node) {
    global $bookName;

    $bookName = $node->filter('h1')->text();
    // print_r($bookName . "<br>");     // kitap ismi
});

$bookCategory = array();

$crawler->filter(".rel-cats__item > a > span")->each(function ($node) {
    global $bookCategory;

    array_push($bookCategory, $node->text());
});

$imgSource = "";

$crawler->filter(".book-front")->each(function ($node) {
    global $imgSource;

    $imgSource = $node->filter('a')->attr('href');
    // print_r($imgSource . "<br>");     // kitap ismi
});

$writerAndPublishingHouse = array();

$crawler->filter(".pr_producers__item")->each(function ($node) {
    global $writerAndPublishingHouse;

    array_push($writerAndPublishingHouse, $node->filter('a')->text());

    // print_r($writerAndPublishingHouse . PHP_EOL . "<br>"); // Yazarlar ve Yayın evi 
});

$bookPrice = "";

$crawler->filter(".price__item")->each(function ($node) {
    global $bookPrice;

    $bookPrice = $node->text();
});

$bookDescription = "";

$crawler->filter("#description_text")->each(function ($node) {
    global $bookDescription;

    $bookDescription = $node->filter('span')->text();
    // print_r($bookDescription . "<br>"); // Kitap Açıklaması
});

$detailsTitle = array();
$detailsContent = array();

$crawler->filter("tr")->each(function ($node) {
    $tds = $node->filter('td');
    // Kitap Detayları

    global $detailsTitle, $detailsContent;

    if ($tds->count() > 1) {
        array_push($detailsTitle, $tds->eq(0)->text());
        array_push($detailsContent, $tds->eq(1)->text());
    }
});


print_r(json_encode([
    "bookName" => $bookName,
    "bookCategory" => $bookCategory,
    "writerAndPublishingHouse" => $writerAndPublishingHouse,
    "imgSource" => $imgSource,
    "bookPrice" => $bookPrice,
    "bookDescription" => $bookDescription,
    "detailsTitle" => $detailsTitle,
    "detailsContent" => $detailsContent,
]));
