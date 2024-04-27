<?php
require_once "TwigBaseController.php"; // импортим TwigBaseController

class PopularController extends TwigBaseController {
    public $template = "object.twig";
    public $title = "Популярное";



public function getContext(): array{
$context = parent::getContext();
        $context['url_title']="popular";
        
    // Определяем активность кнопок в зависимости от URL
    $context["is_image"] = $this->isImageActive();
    $context["is_info"] = $this->isInfoActive();;
    
        return $context;
}


// Логика для определения активности кнопки "Картинка"
private function isImageActive() : bool {
    $url = $_SERVER["REQUEST_URI"];
    return strpos($url, "/popular/image") !== false;
}

// Логика для определения активности кнопки "Описание"
private function isInfoActive() : bool {
    $url = $_SERVER["REQUEST_URI"];
    return strpos($url, "/popular/info") !== false;
}

}