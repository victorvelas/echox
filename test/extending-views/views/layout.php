<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extending views</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/css/foundation-float.min.css" crossorigin="anonymous">
    <style>
        small {
            color: gray;
        }
    </style>
    <?= $this->renderSection('css'); ?>
</head>
<body>
    <div>
        <di>
            <h3 class="text-center">😄 Echox Php is the best template engine</h3>
        </di>
        <div class="text-center">
        <hr>
        <?= $this->renderSection('content'); ?>
        <hr>
        </div>
        <div class="text-center center">
            <small>© Copyright Victor Velas all rights reserved</small>
        </div>
    </div>
    <?= $this->renderSection('js'); ?>
</body>
</html>