<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
include __DIR__ . '/client.php';

$date = new DateTimeImmutable($_GET['date-time']);
$client = new Prokerala\Api\Sample\ApiClient('ed88f91f-accf-4215-ac57-0af56fe3f3bc', 'IAuePswWvP0BFERt7gLCko9w1uUHXRnNzpSJPjPM');

/**
 * $timestamp = new DateTime();
 * echo $timestamp->format('c'); // Returns ISO8601 in proper format
 * echo $timestamp->format(DateTime::ISO8601); // Works the same since const ISO8601 = "Y-m-d\TH:i:sO"
 */
$dataObject = $client->get('v2/astrology/birth-details', [
    'ayanamsa' => 1,
    'coordinates' => '23.1765,75.7885',
    'datetime' => $date->format('Y-m-d\TH:i:sP')
]);

$data = $dataObject->data->nakshatra;
?>
<?php include 'header.php' ?>

<table>
    <thead>
        <tr>
            <th>Nakshatra</th>
        </tr>
    </thead>
    <tr>
        <th>Nakshatra</th>
        <td><?=$data->name?></td>
    </tr>
    <tr>
        <th>Pada</th>
        <td><?=$data->pada?></td>
    </tr>
    <tr>
        <th>Nakshatra Lord</th>
        <td><?=$data->lord->name?>(<?=$data->lord->vedic_name?>)</td>
    </tr>
</table>

<?php include 'footer.php' ?>
