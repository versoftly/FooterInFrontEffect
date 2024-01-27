<?php

    class Html {

        private Head $head;
        private Body $body;

        public function __construct (Head $head,Body $body) {

            $this->head = $head;
            $this->body = $body;

        }

        public function build ($lang="en") {
            echo "<!DOCTYPE html><html lang='$lang'>".
            $this->head->getHeadContent().
            $this->body->getBodyContent().
            "</html>";
        }

    }

?>