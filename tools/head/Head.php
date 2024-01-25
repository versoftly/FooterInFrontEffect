<?php

    class Head {

        private Content $headContent;

        public function __construct (Content $content) {
            $this->headContent = $content;
        }

        public function getHeadContent () {
            return $this->headContent->getContent();
        }

    }

?>