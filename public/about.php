<?php

declare(strict_types=1);

$aboutApp = include __DIR__ . '/../src/App/bootstrap.php';

echo $aboutApp->run() . " This is with the about page";
