<?php
require_once "TwigBaseController.php"; // импортим TwigBaseController

class MusthaveController extends TwigBaseController {
    public $template = "object.twig";
    public $title = "Мастхэв";



public function getContext(): array{
$context = parent::getContext();
        $context['url_title']="musthave";
        
    // Определяем активность кнопок в зависимости от URL
    $context["is_image"] = $this->isImageActive();
    $context["is_info"] = $this->isInfoActive();;
    
        return $context;
}


// Логика для определения активности кнопки "Картинка"
private function isImageActive() : bool {
    $url = $_SERVER["REQUEST_URI"];
    return strpos($url, "/musthave/image") !== false;
}

// Логика для определения активности кнопки "Описание"
private function isInfoActive() : bool {
    $url = $_SERVER["REQUEST_URI"];
    return strpos($url, "/musthave/info") !== false;
}

}