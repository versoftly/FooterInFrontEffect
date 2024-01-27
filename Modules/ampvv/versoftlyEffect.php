<?php

    /*  PROPIEDADES CSS DISPONIBLES :
        color;border;padding;max_width;max_height;min_width;min_height;
        box_sizing;display;justify_content;
        align_items;margin;background_color;font_family;font_size;
    */

    require_once "./ampvv/Properties.php";
    require_once "./ampvv/Html.php";
    require_once "./ampvv/Body.php";
    require_once "./ampvv/Head.php";
    require_once "./ampvv/Content.php";

    $html_css = new Properties;
    $title = $html_css -> tag ("title");
    $heading = $html_css -> tag ("h1");

    $content = new Content (
        $title."Template</title>"
    );
    $head = new Head ($content);

    $content = new Content (
        $heading."AdaptoWebs Template</h1>"
    );
    $body = new Body ($content);

    $estructura = new Html ($head,$body);

    $estructura -> build ();

?>