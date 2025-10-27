<?php
// api/index.php - Fixed version
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    require __DIR__ . '/../vendor/autoload.php';
    
    // Check if cached config exists, if not create it
    $cachedConfig = __DIR__ . '/../bootstrap/cache/config.php';
    if (!file_exists($cachedConfig)) {
        // This will trigger config loading
        echo "Loading fresh configuration...<br>";
    }
    
    $app = require_once __DIR__ . '/../bootstrap/app.php';
    
    // Bind view instance manually if needed
    if (!$app->bound('view')) {
        $app->singleton('view', function ($app) {
            return new \Illuminate\View\Factory(
                $app['view.engine.resolver'],
                $app['view.finder'],
                $app['events']
            );
        });
    }
    
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    $response = $kernel->handle(
        $request = Illuminate\Http\Request::capture()
    );
    
    $response->send();
    $kernel->terminate($request, $response);
    
} catch (Exception $e) {
    http_response_code(500);
    echo "<h1>Application Error</h1>";
    echo "<p><strong>Message:</strong> " . $e->getMessage() . "</p>";
    echo "<p>Please check that all Laravel caches are generated.</p>";
}