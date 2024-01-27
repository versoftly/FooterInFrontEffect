<?php

    class Body {

        private Content $bodyContent;

        public function __construct (Content $content) {
            $this->bodyContent = $content;
        }

        public function getBodyContent () {
            return $this->bodyContent->getContent();
        }

    }

?>