<?php

require __DIR__ . "/vendor/autoload.php";

$logger = new \Monolog\Logger("log.log");
$logger->pushHandler(new \Monolog\Handler\StreamHandler(__DIR__.'/my_app.log'));

$letters = require __DIR__ . "/lib/letters.php";
$dict = explode("\n", file_get_contents(__DIR__ . "/lib/dic.txt"));

$target = "Hello world";

$out = "";
$targetPosition = 0;

for ($i = 0; strcasecmp($out, $target) !== 0; $i++) {

    $board = [];
    $bag = $letters;
    $payload = [];

    while (count($bag) > 0
        && count($payload) < 7
    ) {
        $payloadKeys = array_rand($bag, min(count($bag), 7 - count($payload)));

        if (!is_array($payloadKeys)) {
            $payloadKeys = [$payloadKeys];
        }

        foreach ($payloadKeys as $key) {
            $payload[] = $bag[$key];
            unset($bag[$key]);
        }

        $addedToOut = true;

        while ($addedToOut) {
            foreach ($payload as $key => $letter) {
                if (strcasecmp($letter, $target[$targetPosition]) === 0) {
                    $out .= $targetPosition === 0 ? $letter : strtolower($letter);
                    $targetPosition++;
                    unset($payload[$key]);

                    if ($out === $target) {
                        echo $out;
                        exit;
                    }
                } else {
                    $addedToOut = false;
                }
            }
        }

        foreach ($dict as $word) {
            if (count_chars($word, 1) == count_chars(implode("", $payload), 1)) {
                $board[] = $word;
                $payload = [];
            }
        }
    }

    $logger->info("Game", [
        'game' => $i,
        'board' => $board,
    ]);
}

