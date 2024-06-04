<?php


declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;

use function App\Config\registryRoutes;

$app = new App();

registryRoutes($app);

return $app;
