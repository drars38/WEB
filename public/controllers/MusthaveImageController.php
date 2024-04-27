<?php
require_once "MusthaveController.php"; // импортим TwigBaseController

class MusthaveImageController extends MusthaveController {
    public $template = "object_image.twig";

    public function getContext() : array
    {
			$context = parent::getContext();
            $context['image_url'] = "/images/21156.jpg";
      return $context;
    }
}