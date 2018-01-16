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

    // define a route using a template
    $f3->route('GET /jewelry/rings/toe-rings', function() {
            $template = new Template();
            echo $template->render('views/toe-rings.html');
        }
    );

    // define a route using parameters
    $f3->route('GET /hi/@first/@last', function($f3, $params) {
            $f3->set('first', $params['first']);
            $f3->set('last', $params['last']);
            $f3->set('message', 'Hi');

            $template = new Template();
            echo $template->render('views/hello.html');
        }
    );

    // define a route using parameters
    $f3->route('GET /language/@lang', function($f3, $params) {
            switch($params['lang']) {
                case 'swahili':
                    echo 'Jumbo!'; break;
                case 'spanish':
                    echo 'Hola!'; break;
                case 'russian':
                    echo 'Privet!'; break;
                case 'farsi':
                    echo'Salam!'; break;
                default:
                    echo 'Hello!'; break;
            }
        }
    );

    // run fat free
    $f3->run();

