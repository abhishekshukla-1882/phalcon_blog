<?php
<<<<<<< HEAD
=======
session_start();
//  echo "died";
// die();
>>>>>>> 1a09beea60cd09eb9c42fa664d3ffcfe7816e1df
// print_r(apache_get_modules());
// echo "<pre>"; print_r($_SERVER); die;
// $_SERVER["REQUEST_URI"] = str_replace("/phalt/","/",$_SERVER["REQUEST_URI"]);
// $_GET["_url"] = "/";
<<<<<<< HEAD
session_start();
=======
>>>>>>> 1a09beea60cd09eb9c42fa664d3ffcfe7816e1df
use Phalcon\Di\FactoryDefault;
use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Application;
use Phalcon\Url;
use Phalcon\Db\Adapter\Pdo\Mysql;
use Phalcon\Config;

$config = new Config([]);

// Define some absolute path constants to aid in locating resources
define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');

// Register an autoloader
$loader = new Loader();

$loader->registerDirs(
    [
        APP_PATH . "/controllers/",
        APP_PATH . "/models/",
    ]
);

$loader->register();

$container = new FactoryDefault();

$container->set(
    'view',
    function () {
        $view = new View();
        $view->setViewsDir(APP_PATH . '/views/');
<<<<<<< HEAD
=======
        // print_r($view);
>>>>>>> 1a09beea60cd09eb9c42fa664d3ffcfe7816e1df
        return $view;
    }
);

$container->set(
    'url',
    function () {
        $url = new Url();
        $url->setBaseUri('/');
<<<<<<< HEAD
=======
        // print_r($url);
>>>>>>> 1a09beea60cd09eb9c42fa664d3ffcfe7816e1df
        return $url;
    }
);

$application = new Application($container);



$container->set(
    'db',
    function () {
        return new Mysql(
            [
                'host'     => 'mysql-server',
                'username' => 'root',
                'password' => 'secret',
<<<<<<< HEAD
                'dbname'   => 'phal_blog',
=======
                'dbname'   => 'phalt',
>>>>>>> 1a09beea60cd09eb9c42fa664d3ffcfe7816e1df
                ]
            );
        }
);

// $container->set(
//     'mongo',
//     function () {
//         $mongo = new MongoClient();

//         return $mongo->selectDB('phalt');
//     },
//     true
// );

try {
    // Handle the request
    $response = $application->handle(
        $_SERVER["REQUEST_URI"]
    );
<<<<<<< HEAD

=======
    // print_r($_SERVER['REQUEST_URI']);
>>>>>>> 1a09beea60cd09eb9c42fa664d3ffcfe7816e1df
    $response->send();
} catch (\Exception $e) {
    echo 'Exception: ', $e->getMessage();
}
