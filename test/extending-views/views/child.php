<?php  $this->extends('layout'); ?>

<?php $this->section('css'); ?>
    <style>
        h1.hello-world {
            color: #8341db;
        }
    </style>
<?php $this->endSection(); ?>

<?php $this->section('content'); ?>
    <div>
        <h1 class="hello-world"><?= $this->viewData['wordsToSay']; ?></h1>
        <p>
            Echox php is cool 😎
        </p>
        <button onclick="sayHello()" class="submit button">Click to greet</button>
    </div>
<?php $this->endSection(); ?>

<?php $this->section('js'); ?>
    <script>
        const sayHello = function () {
            alert("Echox PHP says: \"Hello World\"");
        };
    </script>
<?php $this->endSection(); ?>
