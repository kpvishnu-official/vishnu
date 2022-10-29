<?php

include __DIR__ . '/client.php';

$client = new Prokerala\Api\Sample\ApiClient('ed88f91f-accf-4215-ac57-0af56fe3f3bc', 'IAuePswWvP0BFERt7gLCko9w1uUHXRnNzpSJPjPM');

$data = $client->get('v2/astrology/panchang', [
    'ayanamsa' => 1,
    'coordinates' => '23.1765,75.7885',
    'datetime' => '2020-10-19T12:31:14+00:00'
]);

print_r($data);