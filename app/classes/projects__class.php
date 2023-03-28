<?php 

    class Projects {
        public $linkSource;
        public $imgSource;
        public $alt;
        public $title;
        public $projectName;
        public $projectType;
        public $height;
        public $width;
        public $introHeadingContent;
        public $introParagraphContent;
        public $buttonOneLink;
        public $buttonTwoLink;
        public $buttonOneTitle;
        public $buttonTwoTitle;
        public $buttonOneContent;
        public $buttonTwoContent;
        public $briefExplanation;
        public $longExplanation;
        public $projectSectionHeading1;
        public $projectParagraph1;
        public $projectSectionHeading2;

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
            $this->introHeadingContent = $props["introHeadingContent"] ?? '';
            $this->introParagraphContent = $props["introParagraphContent"] ?? '';
            $this->introHeadingContent = $props["introHeadingContent"] ?? '';
            $this->buttonOneLink = $props["buttonOneLink"] ?? '';
            $this->buttonTwoLink = $props["buttonTwoLink"] ?? '';
            $this->buttonOneTitle = $props["buttonOneTitle"] ?? '';
            $this->buttonTwoTitle = $props["buttonTwoTitle"] ?? '';
            $this->buttonOneContent = $props["buttonOneContent"] ?? '';
            $this->buttonTwoContent = $props["buttonTwoContent"] ?? '';
            $this->briefExplanation = $props["briefExplanation"] ?? '';
            $this->longExplanation = $props["longExplanation"] ?? '';
            $this->projectSectionHeading1 = $props["projectSectionHeading1"] ?? '';
            $this->projectParagraph1 = $props['projectParagraph1'] ?? '';
            $this->projectParagraph1 = $props['projectParagraph1'] ?? '';
            $this->projectSectionHeading2 = $props['projectSectionHeading2'] ?? '';
            
        }
    }

?>