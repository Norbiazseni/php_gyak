<?php

    require 'App/Traits/GreetingsTrait.php';
    require 'App/Traits/LoggerTrait.php';
    require 'App/Services/MyService.php';

    use App\Services\MyService;

    $service = new MyService();
    $service -> run();

?>