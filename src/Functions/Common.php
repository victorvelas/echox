<?php namespace Velas\Echox\Functions
{

    use Velas\Echox\Html;

    if (!function_exists('renderHTML')) {
        function renderHTML(string $file, array $data = []) : Html
        {
            $html = new Html($data);
            $html->setFile($file);
            return $html;
        }
    }
}