<?php 

    class cardInfo {
        public $linkSource;
        public $imgSource;
        public $alt;
        public $title;
        public $projectName;
        public $projectType;
        public $height;
        public $width;

        public function __construct($props = [])
        {
            $this->linkSource = $props["source"] ?? '';
            $this->alt = $props["alt"] ?? '';
            $this->title = $props["title"] ?? '';
            $this->projectName = $props["projectName"] ?? '';
            $this->projectType = $props["projectType"] ?? '';
            $this->imgSource = $props["imageSource"] ?? '';
            $this->height = $props["height"] ?? '';
            $this->width = $props["width"] ?? '';
        }
    }

?>