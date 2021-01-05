<?php

return [

    /*
     * Relative path from the app directory to app controllers directory.
     */
    'controllers_dir'  => 'app/Controllers',

    /*
     * Relative path from the app directory to transformers directory.
     */
    'transformers_dir' => 'app/Services',

    /*
     * Relative path from the app directory to the app routes file.
     */
    'routes_file'      => 'app/routes/api.php',

    /*
     * Relative path from the app directory to the models directory. Typically it's either 'Models' or ''.
     */
    'models_base_dir'  => '',

    /*
     * Relative path from the base directory to the app controller stub.
     */
    'controller_stub'  => 'vendor/viyancs/laravel-api-generator/src/Generator/Stubs/controller.stub',

    /*
     * Relative path from the base directory to the route stub.
     */
    'route_stub'       => 'vendor/viyancs/laravel-api-generator/src/Generator/Stubs/route.stub',

    /*
     * Relative path from the base directory to the transformer stub.
     */
    'service_stub' => 'vendor/viyancs/laravel-api-generator/src/Generator/Stubs/service.stub',
];
