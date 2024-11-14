# Echox PHP

Echox is a library that takes echo for html content to another level.


## Installation
Create a new PHP project (or go to the existing project's directory), open your favorite terminal of yesterday and today and run the next [Composer](http://getcomposer.org) command command

```
composer require velas/echox
```

## Usage

In order to keep the order in your project, Echox has been created to works with a folder shared in all your project, all views that will be rendered by the library must to be in this folder.
By default, echox will try to read all views located in `views` folder, if you want to read another directory you must to specify it using the next code:


```php
use Velas\Echox\Html;
Html::$baseFolder = './your-custom-view-directory/'; // './views/' by default'

```
You can use any directory to save your view files, however we recommend to use only one directory for the view layer, in order to keep your project files organized an clean

With the **renderHTML function**, you can keep clean code by separating the business logic and views into different files like this

```php

use function Velas\Echox\Functions\renderHTML;

include './vendor/autoload.php';

/**
 * Some logic
 */

echo renderHtml('presentation', [
    'user' => 'Velas - dev',
    'echoxIsCool' => true
]);
```

This code will write in buffer out the next code in views/presentation.php file
```php
<h1>Hellow World, welcome again <?= ($this->viewData['user'] ?? ''); ?></h1>
<hr>
<?php if ($this->viewData['echoxIsCool'] === true) { ?>
    <p>Now you can develop in php like a boss</p>
<?php } ?>
```

Dou you like it? see more about echox [here](https://www.youtube.com/watch?v=xvFZjo5PgG0)
