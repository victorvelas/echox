<?php namespace Velas\Echox 
{

    class Json extends ActionResult
    {
        
        public function __toString(): string
        {
            return json_encode($this->viewData);
        }

        public function getBaseHeaders() : array {
            return ['Content-Type: application/json; charset=utf-8'];
        }

        public function get(string $key) : mixed {
            return $this->viewData[$key] ?? null;
        }
    }

}