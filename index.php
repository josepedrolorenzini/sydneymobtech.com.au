<?php

use Illuminate\Http\Request;

try {
    
    // Start measuring time for the request
    define('LARAVEL_START', microtime(true));

    // Determine if the application is in maintenance mode...
    if (file_exists(__DIR__ . '/storage/framework/maintenance.php')) {
        require __DIR__ . '/storage/framework/maintenance.php';
    }

    // Register the Composer autoloader...
    require __DIR__ . '/vendor/autoload.php';
     
    // Bootstrap Laravel and handle the request...
    $app = require_once __DIR__ . '/bootstrap/app.php';
    
     // Process the request and send the response to the browser
    $response = $app->handle(Request::capture());

    // Send the response
    $response->send();

    // Gracefully terminate the script
    $app->terminate(Request::capture(), $response);
      
      
      
      
    // Process the request
    // $app->handle(Request::capture());
    
    // var_dump($app->handle(Request::capture()));
    // Gracefully terminate the script
    //exit(0);
    //echo "works" ;

} catch (Exception $e) {
    // Log the exception to a file or your logging system
    error_log("Error occurred: " . $e->getMessage());
    
    // Optionally, display a user-friendly message (if not in production)
    // echo "An error occurred, please try again later.";

    // Rethrow the exception (if you want it to be handled elsewhere or logged by Laravel)
    throw new Exception("An error occurred: " . $e->getMessage());
}
