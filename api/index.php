<?php
require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

// Manual bootstrap tanpa config cache
try {
    $app->make('Illuminate\Foundation\Bootstrap\LoadConfiguration')->bootstrap($app);
    $app->make('Illuminate\Foundation\Bootstrap\RegisterFacades')->bootstrap($app);
    $app->make('Illuminate\Foundation\Bootstrap\RegisterProviders')->bootstrap($app);
    $app->make('Illuminate\Foundation\Bootstrap\BootProviders')->bootstrap($app);
    
    echo "Manual bootstrap successful!<br>";
    
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    $response = $kernel->handle(
        $request = Illuminate\Http\Request::capture()
    );
    
    $response->send();
    $kernel->terminate($request, $response);
    
} catch (Exception $e) {
    echo "<h1>Bootstrap Error:</h1>";
    echo "<p>" . $e->getMessage() . "</p>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
}