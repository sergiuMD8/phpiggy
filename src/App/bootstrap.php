<?php


declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;
use App\Config\Paths;
use Dotenv\Dotenv;

use function App\Config\{registryRoutes, registerMiddleware};

$dotenv = Dotenv::createImmutable(Paths::ROOT);
$dotenv->load();

$app = new App(Paths::SOURCE . "App/container-definitions.php");

registryRoutes($app);
registerMiddleware($app);

return $app;
