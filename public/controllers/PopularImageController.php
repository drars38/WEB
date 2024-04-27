<?php
require_once "PopularController.php"; // импортим TwigBaseController

class PopularImageController extends PopularController {
    public $template = "object_image.twig";

    public function getContext() : array
    {
			$context = parent::getContext();
            $context['image_url'] = "/images/19279.jpg";
      return $context;
    }
}