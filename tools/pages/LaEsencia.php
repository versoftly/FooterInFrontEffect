<?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    ini_set('log_errors',1);
    ini_set('error_log','/var/www/adaptowebs/php_error_log');
    error_reporting(E_ALL);
    http_response_code(404);
    require_once "./tools/html/Html.php";
    require_once "./tools/head/Head.php";
    require_once "./tools/body/Body.php";
    require_once "./tools/content/Content.php";
    $contentHead = new Content(
        //head css rules or add an external css file
        '
        <link rel="stylesheet" href="./tools/css/LaEsencia.css">
        <link rel="stylesheet" href="./tools/css/normalize.css">
        <title>adaptowebs</title>
        <meta name="description" content="Free Web tutorials, adaptowebs">
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP, adaptowebs">
        <meta name="author" content="Ramiro Garcia Gonzalez">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script defer>
            window.addEventListener("scroll", function () {
                var header = document.querySelector("header");
                var scrollPosition = window.scrollY;if (scrollPosition > 50) {
                    header.classList.add("bgColor");
                } else {
                    header.classList.remove("bgColor");
                }
            });
        </script>
    ');
    $head = new Head($contentHead);
    $contentBody = new Content('
        <main>
            <header>
                <h1>Hello !</h1>
                <h2>Hello !</h2>
            </header>
            <section>
                <h3 class="esencia" style="width:500px;height:500px;">Hello !</h3>
                <h4 class="esencia" style="width:500px;height:500px;">Hello !</h4>
            </section>
            <footer>
                <h5>Hello !</h5>
                <h6>Hello !</h6>
            </footer>
        </main>
    ');
    $body = new Body($contentBody);
    $page = new Html($head,$body);
    $page->build();

?>