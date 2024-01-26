<?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    ini_set('log_errors',1);
    ini_set('error_log','/var/www/adaptowebs/php_error_log');
    error_reporting(E_ALL);
    http_response_code(404);
    require_once "./tools/css/Properties.php";
    require_once "./tools/html/Html.php";
    require_once "./tools/head/Head.php";
    require_once "./tools/body/Body.php";
    require_once "./tools/content/Content.php";
    $properties = new Properties;
    $div = $properties->tag('div');
    $contentHead = new Content(
        //head css rules or add an external css file
        '
        <style>
            div,section {
                width: 60%;
            }
            div {
                flex-direction: column;
            }
            ul {
                list-style:none;
            }
        </style>
        <link rel="stylesheet" href="./tools/css/base.css">
        <link rel="stylesheet" href="./tools/css/bgimg.css">
        <!-- <link rel="stylesheet" href="./tools/css/boton.css"> -->
        <link rel="stylesheet" href="./tools/css/contenedor.css">
        <!-- <link rel="stylesheet" href="./tools/css/error.css"> -->
        <!-- <link rel="stylesheet" href="./tools/css/form.css"> -->
        <link rel="stylesheet" href="./tools/css/main.css">
        <link rel="stylesheet" href="./tools/css/queries.css">
        <link rel="stylesheet" href="./tools/css/stickyHeaderAndFooterLayout.css">
        <link rel="stylesheet" href="./tools/css/normalize.css">
        <title>adaptowebs</title>
        <script defer src="./tools/css/stickyHeaderandfooterLayout.js"></script>
        <meta name="description" content="Free Web tutorials, adaptowebs">
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP, adaptowebs">
        <meta name="author" content="Ramiro Garcia Gonzalez">
        <meta name="viewport" content="width=device-width, initial-scale=1" />

    ');
    $head = new Head($contentHead);
    $contentBody = new Content('
        <main class="bgimg" tabindex="0" rol="main">
            <header tabindex="0" rol="header">
            </header>
            <section class="contenedor mgbnone" tabindex="0" rol="section">
                <p tabindex="0" rol="pharagraph">Use this template to create 
                awesome pieces of code.</p>
                <h1  rol="title">How to create the FooterInFront effect ?</h1>
                <p tabindex="0" rol="pharagraph">
                    use the class bgimg on a main html tag<br>
                    inside of the main tag put a header,<br>
                    a section & a footer html tags
                </p>
                <p tabindex="0" rol="pharagraph">
                    use the class contenedor on the section html tag<br>
                    Leave the header empty
                </p>
                <h2  rol="title">choose your favorite web browser.</h2>
                <p>
                    I recommend to use google chrome here you have 
                    a few reasons why : <a href="https://www.youtube.com/watch?v=fQ-uQs-USfI&t=396s">
                    adaptowebs test</a>
                </p>
                <p>
                    as you notice the footer go bigger
                    lets add this p tag and see if it 
                    gets bigger.
                </p>
                <p>it does and the visible space 
                is almost gone lets see if this will be
                the last p tag that we will be able to add
                before we can\'t see the content</p>

                <p>
                 AS YOU CAN SEE AS SOON AS YOU GET TO THE LIMIT
                 THE LAYOUT BEHEAVOR CHANGE AND IT JUST GET BIGGER
                 ALLOWING US TO HAVE A COMPLETLY SMOOTHER TRANSITION
                 IN THE EFFECT FIF
                </p>

                <p>
                 lets create fake content 
                 and get to the limit fake content 
                 and get to the limit
                 fake content 
                 and get to the limit
                 fake content 
                 and get to the limit
                </p>

                <p>
                 lets create fake content 
                 and get to the limit fake content 
                 and get to the limit
                 fake content 
                 and get to the limit
                 fake content 
                 and get to the limit
                </p>
                <p>
                 lets create fake content 
                 and get to the limit fake content 
                 and get to the limit
                 fake content 
                 and get to the limit
                 fake content 
                 and get to the limit
                </p>

                <p>
                 lets create fake content 
                 and get to the limit fake content 
                 and get to the limit
                 fake content 
                 and get to the limit
                 fake content 
                 and get to the limit
                </p>

                <p>
                 lets create fake content 
                 and get to the limit fake content 
                 and get to the limit
                 fake content 
                 and get to the limit
                 fake content 
                 and get to the limit
                </p>
            </section>
            <footer  rol="footer">
                <h3>&copy; Ramiro G Glez. 2024 '.$div.'Adaptowebs</div> -
                Shaping the Future, One Web at a Time</h3>
                <h4><a href="https://github.com/versoftly/FooterInFrontEffect">
                VersoftlyEffect - BETA -</a></h4>
            </footer>
        </main>
    ');
    $body = new Body($contentBody);
    $page = new Html($head,$body);
    $page->build();

?>