<?php

    class Properties {

        private $color;
        private $border;
        private $padding;
        private $max_width;
        private $max_height;
        private $min_width;
        private $min_height;
        private $box_sizing;
        private $display;
        private $justify_content;
        private $align_items;
        private $margin;
        private $background_color;
        private $font_family;
        private $font_size;
        private $registro = [ 
            "total" => 15,
            "properties" => [
                "color",
                "border",
                "padding",
                "max_width",
                "max_height",
                "min_width",
                "min_height",
                "box_sizing",
                "display",
                "justify_content",
                "align_items",
                "margin",
                "background_color",
                "font_family",
                "font_size"
            ]
        ];

        public function color ($color = "purple") {
            $this->color = "color:$color;";
            return $this;
        }

        public function border ($border = "1px solid #000") {
            $this->border = "border:$border;";
            return $this;
        }

        public function padding ($padding = "10px") {
            $this->padding = "padding:$padding;";
            return $this;
        }

        public function max_width ($mw = "100%") {
            $this->max_width = "max-width:$mw;";
            return $this;
        }

        public function max_height ($mh = "100%") {
            $this->max_height = "max-height:$mh;";
            return $this;
        }

        public function min_width ($minw = "60%") {
            $this->min_width = "min-width:$minw;";
            return $this;
        }

        public function min_height ($minh = "300px") {
            $this->min_height = "min-height:$minh;";
            return $this;
        }

        public function box_sizing ($value = "border-box") {
            $this->box_sizing = "box-sizing:$value;";
            return $this;
        }

        public function display ($display = "flex") {
            $this->display = "display:$display;";
            return $this;
        }

        public function justify_content ($jc = "center") {
            $this->justify_content = "justify-content:$jc;";
            return $this;
        }

        public function align_items ($ai = "center") {
            $this->align_items = "align-items:$ai;";
            return $this;
        }

        public function margin ($margin = "40px auto") {
            $this->margin = "margin:$margin;";
            return $this;
        }

        public function background_color ($bc = "lightblue") {
            $this->background_color = "background-color:$bc;";
            return $this;
        }

        public function font_family ($ffam = "sans-serif") {
            $this->font_family = "font-family;$ffam;";
            return $this;
        }

        public function font_size ($fsize = "35px") {
            $this->font_size = "font-size:$fsize;";
            return $this;
        }

        public function tag ($name) {
            $registro = $this->registro['properties'];
            $properties = "<$name style='";
            foreach ($registro as $property) {
                if(!empty((string)$this->$property)) {
                    $properties .= (string)$this->$property;
                }
            }
            return $properties."'>";
        }

    }

?>