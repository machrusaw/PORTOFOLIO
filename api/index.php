<?php
// api/index.php - Debug version
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>Debug Mode - Checking Laravel Setup</h1>";

try {
    // Step 1: Check vendor
    echo "<h2>Step 1: Checking vendor/autoload.php</h2>";
    if (!file_exists(__DIR__ . '/../vendor/autoload.php')) {
        throw new Exception('vendor/autoload.php NOT FOUND');
    }
    echo "✓ vendor/autoload.php exists<br>";
    
    require __DIR__ . '/../vendor/autoload.php';
    echo "✓ Autoloader loaded<br>";
    
    // Step 2: Check bootstrap
    echo "<h2>Step 2: Checking bootstrap/app.php</h2>";
    if (!file_exists(__DIR__ . '/../bootstrap/app.php')) {
        throw new Exception('bootstrap/app.php NOT FOUND');
    }
    echo "✓ bootstrap/app.php exists<br>";
    
    // Step 3: Load Laravel app
    echo "<h2>Step 3: Loading Laravel app</h2>";
    $app = require_once __DIR__ . '/../bootstrap/app.php';
    echo "✓ Laravel app loaded<br>";
    
    // Step 4: Make kernel
    echo "<h2>Step 4: Making Kernel</h2>";
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    echo "✓ Kernel created<br>";
    
    // Step 5: Handle request
    echo "<h2>Step 5: Handling request</h2>";
    $request = Illuminate\Http\Request::capture();
    $response = $kernel->handle($request);
    echo "✓ Request handled<br>";
    
    // Step 6: Send response
    echo "<h2>Step 6: Sending response</h2>";
    $response->send();
    echo "✓ Response sent<br>";
    
    $kernel->terminate($request, $response);
    
} catch (Exception $e) {
    echo "<h1 style='color: red'>ERROR CAUGHT:</h1>";
    echo "<p><strong>Message:</strong> " . $e->getMessage() . "</p>";
    echo "<p><strong>File:</strong> " . $e->getFile() . "</p>";
    echo "<p><strong>Line:</strong> " . $e->getLine() . "</p>";
    echo "<p><strong>Error Type:</strong> " . get_class($e) . "</p>";
    
    echo "<h2>Stack Trace:</h2>";
    echo "<pre>";
    echo $e->getTraceAsString();
    echo "</pre>";
}