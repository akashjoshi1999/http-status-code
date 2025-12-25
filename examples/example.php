<?php

require __DIR__ . '/../vendor/autoload.php';

use HttpStatusCode\HttpStatus;

echo "Status code for OK: " . HttpStatus::OK . PHP_EOL;
echo "Phrase: " . HttpStatus::reasonPhrase(HttpStatus::OK) . PHP_EOL;
echo "Constant name for 404: " . HttpStatus::constantName(404) . PHP_EOL;

// Iterate all
foreach (HttpStatus::all() as $name => $code) {
    if ($code >= 500) break; // just show some
    echo sprintf("%s => %d\n", $name, $code);
}
