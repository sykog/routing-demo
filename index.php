<?php
    // require autoload file
    require_once('vendor/autoload.php');

    // create instance of base class
    $f3 = Base::instance();

    // set debug level
    $f3->set('DEBUG', 3);

    // define a default route
    $f3->route('GET /', function() {
            echo "<h1>Routing Demo</h1>";
        }
    );

    // define a page a page1 route
    $f3->route('GET /page1', function() {
            echo '<h1>This is page 1</h1>';
        }
    );

    // define a page a page1 route
    $f3->route('GET /page1/subpage-a', function() {
            echo '<h1>This is page 1, subpage a</h1>';
        }
    );

    // define a page a page2 route
    $f3->route('GET /page2', function() {
            echo '<h1>Congraturations. This story is happy end.</h1>';
        }
    );

    // run fat free
    $f3->run();

