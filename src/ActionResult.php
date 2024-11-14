<?php namespace Velas\Echox 
{

    abstract class ActionResult
    {
        
        protected string $content;

        protected array $viewData = [];

        public abstract function __toString() : string;

        public abstract function getBaseHeaders() : array;

        public function data() : array
        {
            return $this->viewData;
        }

    }
    
}