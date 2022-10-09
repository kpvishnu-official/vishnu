<?php
include __DIR__ . '/client.php';

$client = new Prokerala\Api\Sample\ApiClient('YOUR_CLIENT_ID', 'YOUR_CLIENT_SECRET');

/**
 * $timestamp = new DateTime();
 * echo $timestamp->format('c'); // Returns ISO8601 in proper format
 * echo $timestamp->format(DateTime::ISO8601); // Works the same since const ISO8601 = "Y-m-d\TH:i:sO"
 */
$data = $client->get('v2/astrology/birth-details', [
    'ayanamsa' => 1,
    'coordinates' => '23.1765,75.7885',
    'datetime' => '2020-10-19T12:31:14+00:00'
]);

print_r($data);
?>