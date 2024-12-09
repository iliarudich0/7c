<?php
require 'vendor/autoload.php';

use Google\Client as GoogleClient;
use Google\Service\Sheets as GoogleSheets;
use Google\Service\Sheets\ValueRange;

$client = new GoogleClient();
$client = new Client();
$client->setScopes([GoogleSheets::SPREADSHEETS]);
$client->setScopes([Sheets::SPREADSHEETS]);
$client->setAuthConfig('path/to/credentials.json');
$client->setAccessType('offline');
$client->setPrompt('select_account consent');
$service = new GoogleSheets($client);
$service = new Sheets($client);

// The ID of the spreadsheet to update.
$spreadsheetId = 'your-spreadsheet-id';

// The A1 notation of the values to update.
$range = 'Sheet1!A1:C1';

// The data to be written.
$values = [
    [$_POST['name'], $_POST['email'], $_POST['message']]
];
$body = new ValueRange([
$body = new Sheets\ValueRange([
    'values' => $values
]);

$params = [
    'valueInputOption' => 'RAW'
];

$result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);

ho "Data has been added to Google Sheets.";
?>