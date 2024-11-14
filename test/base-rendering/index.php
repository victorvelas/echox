<?php

use Velas\Echox\Html;
use function Velas\Echox\Functions\renderHTML;

include '../../vendor/autoload.php';

Html::$baseFolder = './views/';

$view = renderHTML('base-list', [
    'list' => [
        (object) [
            'name' => 'Tayler Edison',
            'favoriteFood' => 'Pineapple - Pizza',
            'age' => rand(18, 25),
            'country' => 'France',
        ],
        (object) [
            'name' => 'Loona Del Principe',
            'favoriteFood' => 'Sushi',
            'age' => rand(18, 25),
            'country' => 'Canadá',
        ],
        (object) [
            'name' => 'Leunam Ortega',
            'favoriteFood' => 'Ice cream',
            'age' => rand(18, 25),
            'country' => 'Chile',
        ],
        (object) [
            'name' => 'Camila Ortiz',
            'favoriteFood' => 'Spaguetti',
            'age' => rand(18, 25),
            'country' => 'Perú',
        ],
    ]
]);

echo ((string) $view);