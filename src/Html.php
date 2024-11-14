<?php namespace Velas\Echox
{

    use Velas\Echox\Exceptions\HtmlException;

    class Html extends ActionResult
    {

        public static ?string $baseAssetsFolder = null;
        public static ?string $baseFolder = null;
        public ?string $currentSection = null;
        public array $sections = [];
        public ?Html $parent = null;
        public bool $hasParent = false;
        public string $parentFile;
        public array $yields = [];
    
        public function __construct(array $data) {
            Html::$baseFolder ??= './views/';
            $this->hasParent = false;
            $this->viewData = $data;
        }

        public function __toString() : string {
            return $this->content ?? '';
        }

        public function getBaseHeaders() : array {
            return ['text/html; charset=utf-8'];
        }

        public static function esc(string $text) : string {
            return htmlspecialchars($text, ENT_QUOTES, 'utf-8');
        } 

        public static function noEsc(string $text) : string {
            return html_entity_decode($text, ENT_QUOTES, 'UTF-8');
        }    
    
        public function extends(string $parentFile) : void {
            $this->parent = new Html($this->viewData);
            $this->hasParent = true;
            $this->parentFile = $parentFile;
            $this->parent->yields = [];
        }
        
        public function yield(string $key) : int|float|string|null {
            return $this->yields[$key] ?? null;
        }
    
        public function setYield(string $yield, int|float|string $content) {
            $this->parent->yields[$yield] = $content;
        }
    
        public function renderSection(string $sectionKey) : string {
            return $this->sections[$sectionKey] ?? '';
        }
    
        public function section(string $sectionKey) {
            ob_start();
            $this->parent->currentSection = $sectionKey;
        }
    
        public function endSection() {
            $this->parent->sections[$this->parent->currentSection] = ob_get_contents();
            ob_end_clean();
            $this->parent->currentSection = null;
        }
    
        public function setFile(string $file) : string {
            if (!is_file(Html::$baseFolder.$file.'.php')){
                throw new HtmlException('The view file "'.Html::$baseFolder.$file.'.php" does\'nt exists');
            }
            ob_start();
            include Html::$baseFolder.$file.'.php';
            $content = ob_get_contents();
            ob_end_clean();
            if ($this->parent instanceof Html) { $content = $this->parent->setFile($this->parentFile); }
            $this->content = $content;
            return $this->content;
        }

        public static function getMemoFile(string $fileName) : string
        {
            if (str_contains($fileName, '?')) {
                throw new HtmlException('Bad file name setled', 1);
            }
            $fileDirectory = (self::$baseAssetsFolder ?? null).'/'.$fileName;
            return $fileDirectory.'?'.filemtime($fileDirectory);
        }
    }
}