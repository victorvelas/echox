<?php

use Velas\Echox\Html;

use function Velas\Echox\Functions\renderHTML;

include '../../vendor/autoload.php';
Html::$baseFolder = './views/';
echo (string) renderHTML('escaping-data');